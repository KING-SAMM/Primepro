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

    // Show the create prototype form
    public function create()
    {
        return view('prototypes.create');
    }

    // Store prototype form data
    public function store(Request $request)
    {
        // Validate form input data (note that nullable 'logo' is excluded) 
        // 'image' (not nullable) is also excluded
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('prototypes', 'company')],
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        // Now, check to see if image was uploaded
        if($request->hasFile('image'))
        {
            // If true, create a form field for the image file and store in
            // public/images
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        // Also check to see if logo was uploaded
        if($request->hasFile('logo'))
        {
            // If true, create a form field for the logo file and store in
            // public/logos
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Set the currently logged in user to user_id field 
        // in prototype table in the database
        $formFields['user_id'] = auth()->id();

        // Create all the form data in the database 
        Prototype::create($formFields);

        // Redirect to home page with flash message
        return redirect('/')->with('message', 'Prototype created successfully');
    }

    // Show Edit form 
    public function edit(Prototype $prototype)
    {
        return view('prototypes.edit', [
            'prototype' => $prototype]);
    }
    // To update, pass the $prototype object as additional parameter
    public function update(Request $request, Prototype $prototype)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required', // Remove unique rule for company here
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        // Check for image upload as before
        if($request->hasFile('image'))
        {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        // Check for logo upload as before
        if($request->hasFile('logo'))
        {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Create data with the current prototype object instead of static method
        $prototype->update($formFields);

        // Redirect back to current page with flash message
        return back()->with('message', 'Prototype updated successfully');
    }

    // Delete prototype data
    public function destroy(Prototype $prototype)
    {
        $prototype->delete();

        // Redirect back to home page with flash message
        return redirect('/')->with('message', 'Prototype deleted successfully');
    }

    // Manage Prototypes
    public function manage()
    {
        return view('prototypes.manage', ['prototypes' => auth()->user()->prototypes()->get()]);
    }
}