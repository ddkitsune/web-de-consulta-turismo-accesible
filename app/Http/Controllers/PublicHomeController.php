<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicHomeController extends Controller
{
    public function index(Request $request)
    {
        $query = \App\Models\TourismRoute::with(['location', 'disabilities'])
            ->where('status', 'available');

        // Búsqueda por texto (título o descripción)
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('title', 'ilike', '%' . $search . '%')
                  ->orWhere('description', 'ilike', '%' . $search . '%');
            });
        }

        // Filtro por ubicación
        if ($request->filled('location_id')) {
            $query->where('location_id', $request->input('location_id'));
        }

        // Filtro por discapacidad
        if ($request->filled('disability_id')) {
            $disabilityId = $request->input('disability_id');
            $query->whereHas('disabilities', function($q) use ($disabilityId) {
                $q->where('disabilities.id', $disabilityId);
            });
        }

        $destinations = $query->latest()->get();

        // Obtener datos para los selectores del formulario de filtro
        $locations = \App\Models\Location::orderBy('name')->get();
        $disabilities = \App\Models\Disability::orderBy('name')->get();
            
        return view('turismo-accesible.index', compact('destinations', 'locations', 'disabilities'));
    }
}
