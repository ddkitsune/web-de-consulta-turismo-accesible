<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Discapacidades') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex justify-end">
                <a href="{{ route('disabilities.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Nueva Discapacidad</a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                <th class="px-4 py-3">ID</th>
                                <th class="px-4 py-3">Nombre</th>
                                <th class="px-4 py-3">Ícono</th>
                                <th class="px-4 py-3">Descripción</th>
                                <th class="px-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            @foreach($disabilities as $disability)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm">{{ $disability->id }}</td>
                                <td class="px-4 py-3 text-sm font-medium">{{ $disability->name }}</td>
                                <td class="px-4 py-3 text-sm"><i class="{{ $disability->icon }}"></i> {{ $disability->icon }}</td>
                                <td class="px-4 py-3 text-sm">{{ Str::limit($disability->description, 50) }}</td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ route('disabilities.edit', $disability) }}" class="text-blue-600 hover:text-blue-900 mr-2">Editar</a>
                                    <form action="{{ route('disabilities.destroy', $disability) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @if($disabilities->isEmpty())
                            <tr>
                                <td colspan="5" class="px-4 py-3 text-sm text-center text-gray-400">No hay discapacidades registradas.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
