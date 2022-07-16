<?php

namespace App\Http\Controllers;

use App\Models\Prototype;
use Illuminate\Http\Request;

class PrototypeController extends Controller
{
    // Get/Show all prototypes
    public function index()
    {
        return view('prototypes', [
            'heading' => 'Prototypes Listings',
            'prototypes' => Prototype::all()
        ]);
    }

    // Get/Show single prototype
    public function show(Prototype $prototype)
    {
        return view('prototype', [
            'prototype' => $prototype
        ]);
    }
}
