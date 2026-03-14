<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = \App\Models\Location::orderBy('name')->get();
        return view('locations.index', compact('locations'));
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'state' => 'required|string|max:255',
        ]);

        \App\Models\Location::create($validated);

        return redirect()->route('locations.index')->with('success', 'Ubicación creada con éxito.');
    }

    public function show(\App\Models\Location $location)
    {
        return view('locations.show', compact('location'));
    }

    public function edit(\App\Models\Location $location)
    {
        return view('locations.edit', compact('location'));
    }

    public function update(Request $request, \App\Models\Location $location)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'state' => 'required|string|max:255',
        ]);

        $location->update($validated);

        return redirect()->route('locations.index')->with('success', 'Ubicación actualizada con éxito.');
    }

    public function destroy(\App\Models\Location $location)
    {
        $location->delete();

        return redirect()->route('locations.index')->with('success', 'Ubicación eliminada con éxito.');
    }
}
