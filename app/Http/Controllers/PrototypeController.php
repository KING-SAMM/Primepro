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
            'prototypes' => Prototype::latest()->filter(request(['tag', 'search']))->get()
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
            'website' => 'required',
            'tags' => 'required',
            // 'logo' => 'required',
            'description' => 'required'
        ]);

        // Create the data in the database 
        Prototype::create($formFields);

        return redirect('/')->with('message', 'Prototype created successfully');
    }
}