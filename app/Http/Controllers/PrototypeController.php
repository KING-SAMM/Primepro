<?php
namespace App\Http\Controllers;

use App\Models\Prototype;

class PrototypeController extends Controller
{
    // Get/Show all prototypes
    public function index()
    {
        return view('prototypes.index', [
            'prototypes' => Prototype::all()
        ]);
    }

    // Get/Show single prototype
    public function show(Prototype $prototype)
    {
        return view('prototypes.show', [
            'prototype' => $prototype
        ]);
    }
}