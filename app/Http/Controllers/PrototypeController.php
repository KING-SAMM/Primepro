<?php
namespace App\Http\Controllers;

use App\Models\Prototype;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PrototypeController extends Controller
{
    // Get/Show all prototypes
    public function index()
    {
        return view('prototypes.index', [
            'prototypes' => Prototype::latest()->filter(request(['tag', 'search']))->paginate(10)
        ]);
    }

    // Get/Show single prototype
    public function show(Prototype $prototype)
    {
        return view('prototypes.show', [
            'prototype' => $prototype
        ]);
    }

    // Show create prototype form
    public function create()
    {
        return view('prototypes.create');
    }

    // Store prototype form data
    public function store(Request $request)
    {
        // Validate form input data 
        $formFields = $request->validate([
            'title' => 'required',
            // 'image' => 'required',
            'company' => ['required', Rule::unique('prototypes', 'company')],
            'location' => 'required',
            'email' => ['required', 'email'],
            // 'logo' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        // Check to see if image was uploaded
        if($request->hasFile('image'))
        {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        // Check to see if logo was uploaded
        if($request->hasFile('logo'))
        {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Create the data in the database 
        Prototype::create($formFields);

        // Redirect to home page with flash message
        return redirect('/')->with('message', 'Prototype created successfully');
    }
}