<?php
namespace App\Http\Controllers;

use App\Models\Prototype;

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
    public function create(Prototype $prototype)
    {
        return view('prototypes.create');
    }
}