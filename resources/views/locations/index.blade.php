<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Ubicaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex justify-end">
                <a href="{{ route('locations.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Nueva Ubicación</a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                <th class="px-4 py-3">ID</th>
                                <th class="px-4 py-3">Nombre</th>
                                <th class="px-4 py-3">Estado</th>
                                <th class="px-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            @foreach($locations as $location)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm">{{ $location->id }}</td>
                                <td class="px-4 py-3 text-sm font-medium">{{ $location->name }}</td>
                                <td class="px-4 py-3 text-sm">{{ $location->state }}</td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ route('locations.edit', $location) }}" class="text-blue-600 hover:text-blue-900 mr-2">Editar</a>
                                    <form action="{{ route('locations.destroy', $location) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @if($locations->isEmpty())
                            <tr>
                                <td colspan="4" class="px-4 py-3 text-sm text-center text-gray-400">No hay ubicaciones registradas.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
