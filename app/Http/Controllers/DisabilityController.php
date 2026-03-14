<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisabilityController extends Controller
{
    public function index()
    {
        $disabilities = \App\Models\Disability::orderBy('name')->get();
        return view('disabilities.index', compact('disabilities'));
    }

    public function create()
    {
        return view('disabilities.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        \App\Models\Disability::create($validated);

        return redirect()->route('disabilities.index')->with('success', 'Discapacidad creada con éxito.');
    }

    public function show(\App\Models\Disability $disability)
    {
        return view('disabilities.show', compact('disability'));
    }

    public function edit(\App\Models\Disability $disability)
    {
        return view('disabilities.edit', compact('disability'));
    }

    public function update(Request $request, \App\Models\Disability $disability)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $disability->update($validated);

        return redirect()->route('disabilities.index')->with('success', 'Discapacidad actualizada con éxito.');
    }

    public function destroy(\App\Models\Disability $disability)
    {
        $disability->delete();

        return redirect()->route('disabilities.index')->with('success', 'Discapacidad eliminada con éxito.');
    }
}
