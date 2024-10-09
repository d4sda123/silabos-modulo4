@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="text-xl font-semibold mb-4">
            Confirmar Eliminación de Rol
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-medium">¿Estás seguro de que deseas eliminar este rol?</h2>
            <p class="text-gray-600 mb-4">Este cambio no se puede deshacer, pero puedes restaurarlo más tarde.</p>

            <div class="mb-4">
                <strong>Rol:</strong> {{ $role->name }}
            </div>

            <div class="flex space-x-4">
                <!-- Botón para confirmar eliminación -->
                <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700">
                        Confirmar Eliminación
                    </button>
                </form>

                <!-- Botón para cancelar -->
                <a href="{{ route('roles.index') }}" class="bg-gray-300 text-gray-700 py-2 px-4 rounded hover:bg-gray-400">
                    Cancelar
                </a>
            </div>
        </div>
    </div>
@endsection
