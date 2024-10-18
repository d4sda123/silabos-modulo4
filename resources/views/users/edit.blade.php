@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold">Editar Usuario</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block">Nombre:</label>
                <input type="text" name="name" class="border rounded w-full" value="{{ old('name', $user->name) }}">
            </div>

            <div class="mb-4">
                <label for="email" class="block">Correo:</label>
                <input type="email" name="email" class="border rounded w-full" value="{{ old('email', $user->email) }}">
            </div>

            <div class="mb-4">
                <label for="role" class="block">Rol:</label>
                <select name="role_id" id="role_id" class="border rounded w-full">
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                            {{ $role->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
        </form>
    </div>
@endsection
