<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Ubicación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 border-b border-gray-200">
                    <form method="POST" action="{{ route('locations.store') }}">
                        @csrf
                        
                        <!-- Nombre -->
                        <div>
                            <x-input-label for="name" value="Nombre del Destino / Ciudad" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Estado -->
                        <div class="mt-4">
                            <x-input-label for="state" value="Estado" />
                            <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required />
                            <x-input-error :messages="$errors->get('state')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('locations.index') }}">
                                Cancelar
                            </a>
                            <x-primary-button class="ms-4">
                                Guardar Ubicación
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
