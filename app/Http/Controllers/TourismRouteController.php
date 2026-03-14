<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourismRouteController extends Controller
{
    public function index()
    {
        $routes = \App\Models\TourismRoute::with(['location', 'disabilities'])->latest()->get();
        return view('tourism_routes.index', compact('routes'));
    }

    public function create()
    {
        $locations = \App\Models\Location::orderBy('name')->get();
        $disabilities = \App\Models\Disability::orderBy('name')->get();
        return view('tourism_routes.create', compact('locations', 'disabilities'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'location_id' => 'required|exists:locations,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:available,unavailable',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'image_file' => 'nullable|image|max:2048',
            'disabilities' => 'nullable|array',
            'disabilities.*' => 'exists:disabilities,id',
        ]);

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('routes_images', 'public');
            $validated['image'] = $path;
        }

        $route = \App\Models\TourismRoute::create($validated);
        
        if (!empty($validated['disabilities'])) {
            $route->disabilities()->sync($validated['disabilities']);
        }

        return redirect()->route('tourism-routes.index')->with('success', 'Ruta creada con éxito.');
    }

    public function show(\App\Models\TourismRoute $tourism_route)
    {
        $tourism_route->load(['location', 'disabilities']);
        return view('tourism_routes.show', compact('tourism_route'));
    }

    public function edit(\App\Models\TourismRoute $tourism_route)
    {
        $locations = \App\Models\Location::orderBy('name')->get();
        $disabilities = \App\Models\Disability::orderBy('name')->get();
        return view('tourism_routes.edit', compact('tourism_route', 'locations', 'disabilities'));
    }

    public function update(Request $request, \App\Models\TourismRoute $tourism_route)
    {
        $validated = $request->validate([
            'location_id' => 'required|exists:locations,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:available,unavailable',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'image_file' => 'nullable|image|max:2048',
            'disabilities' => 'nullable|array',
            'disabilities.*' => 'exists:disabilities,id',
        ]);

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('routes_images', 'public');
            $validated['image'] = $path;
        }

        $tourism_route->update($validated);
        
        if (isset($validated['disabilities'])) {
            $tourism_route->disabilities()->sync($validated['disabilities']);
        } else {
             $tourism_route->disabilities()->sync([]);
        }

        return redirect()->route('tourism-routes.index')->with('success', 'Ruta actualizada con éxito.');
    }

    public function destroy(\App\Models\TourismRoute $tourism_route)
    {
        $tourism_route->delete();

        return redirect()->route('tourism-routes.index')->with('success', 'Ruta eliminada con éxito.');
    }
}
