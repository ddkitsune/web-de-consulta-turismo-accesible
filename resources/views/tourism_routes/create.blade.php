<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Ruta Turística') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 border-b border-gray-200">
                    <form method="POST" action="{{ route('tourism-routes.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Título -->
                            <div>
                                <x-input-label for="title" value="Título de la Ruta" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>

                            <!-- Ubicación -->
                            <div>
                                <x-input-label for="location_id" value="Ubicación" />
                                <select id="location_id" name="location_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" required>
                                    <option value="">Seleccione una ubicación</option>
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}" {{ old('location_id') == $location->id ? 'selected' : '' }}>
                                            {{ $location->name }} ({{ $location->state }})
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('location_id')" class="mt-2" />
                            </div>

                            <!-- Estatus -->
                            <div>
                                <x-input-label for="status" value="Estatus" />
                                <select id="status" name="status" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" required>
                                    <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Disponible</option>
                                    <option value="unavailable" {{ old('status') == 'unavailable' ? 'selected' : '' }}>No disponible</option>
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />
                            </div>

                            <!-- Imagen -->
                            <div>
                                <x-input-label for="image_file" value="Imagen Principal de la Ruta" />
                                <input type="file" id="image_file" name="image_file" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" accept="image/*">
                                <x-input-error :messages="$errors->get('image_file')" class="mt-2" />
                            </div>

                            <!-- Latitud -->
                            <div>
                                <x-input-label for="latitude" value="Latitud (Opcional - Para Mapas)" />
                                <x-text-input id="latitude" class="block mt-1 w-full" type="number" step="any" name="latitude" :value="old('latitude')" />
                                <x-input-error :messages="$errors->get('latitude')" class="mt-2" />
                            </div>

                            <!-- Longitud -->
                            <div>
                                <x-input-label for="longitude" value="Longitud (Opcional - Para Mapas)" />
                                <x-text-input id="longitude" class="block mt-1 w-full" type="number" step="any" name="longitude" :value="old('longitude')" />
                                <x-input-error :messages="$errors->get('longitude')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Descripción -->
                        <div class="mt-6">
                            <x-input-label for="description" value="Descripción Detallada (Incluye texto que será leído por el Asistente de Voz)" />
                            <textarea id="description" name="description" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" rows="4" required>{{ old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Discapacidades -->
                        <div class="mt-6">
                            <x-input-label value="Discapacidades Soportadas en esta Ruta" />
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-2">
                                @foreach($disabilities as $disability)
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="disabilities[]" value="{{ $disability->id }}" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ is_array(old('disabilities')) && in_array($disability->id, old('disabilities')) ? 'checked' : '' }}>
                                        <span class="ml-2 text-gray-700"><i class="{{ $disability->icon }} mr-1 text-gray-500"></i> {{ $disability->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                            <x-input-error :messages="$errors->get('disabilities')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('tourism-routes.index') }}">
                                Cancelar
                            </a>
                            <x-primary-button class="ms-4 bg-indigo-600 hover:bg-indigo-700">
                                Guardar Ruta
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
