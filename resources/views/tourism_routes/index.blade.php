<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catálogo de Rutas Turísticas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex justify-end">
                <a href="{{ route('tourism-routes.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Nueva Ruta</a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                <th class="px-4 py-3">Imagen</th>
                                <th class="px-4 py-3">Título</th>
                                <th class="px-4 py-3">Ubicación</th>
                                <th class="px-4 py-3">Estatus</th>
                                <th class="px-4 py-3">Discapacidades Soportadas</th>
                                <th class="px-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            @foreach($routes as $route)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3">
                                    @if($route->image)
                                    <img src="{{ Storage::url($route->image) }}" class="w-16 h-16 object-cover rounded">
                                    @else
                                    <span class="text-xs text-gray-400">Sin imagen</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm font-medium">{{ $route->title }}</td>
                                <td class="px-4 py-3 text-sm">{{ $route->location->name }} ({{ $route->location->state }})</td>
                                <td class="px-4 py-3 text-sm">
                                    @if($route->status == 'available')
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Disponible</span>
                                    @else
                                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full">No disponible</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    @foreach($route->disabilities as $disability)
                                    <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-xs font-semibold text-gray-700 mr-1 mb-1" title="{{ $disability->name }}">
                                        <i class="{{ $disability->icon }}"></i>
                                    </span>
                                    @endforeach
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ route('tourism-routes.edit', $route) }}" class="text-blue-600 hover:text-blue-900 mr-2">Editar</a>
                                    <form action="{{ route('tourism-routes.destroy', $route) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @if($routes->isEmpty())
                            <tr>
                                <td colspan="6" class="px-4 py-3 text-sm text-center text-gray-400">No hay rutas registradas.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
