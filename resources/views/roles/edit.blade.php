@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="text-xl font-semibold mb-4">
            Editar Rol: {{ $role->name }}
        </div>

        <!-- Form to edit the role -->
        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Role Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Rol</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name', $role->name) }}">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-center space-x-8">
                <!-- Submit Button -->
                <div class="mt-4">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">
                        Actualizar Rol
                    </button>
                </div>
                <!-- Back to roles index -->
                <div class="mt-4">
                    <a href="{{ route('roles.index') }}" class="text-blue-500 hover:underline">Regresar a la Lista de Roles</a>
                </div>
            </div>
        </form>        
    </div>
@endsection
