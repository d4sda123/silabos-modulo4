@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold">Lista de Usuarios</h1>

        <table class="min-w-full bg-white border mt-4">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-100 border-b">ID</th>
                    <th class="py-2 px-4 bg-gray-100 border-b">Nombre</th>
                    <th class="py-2 px-4 bg-gray-100 border-b">Correo</th>
                    <th class="py-2 px-4 bg-gray-100 border-b">Rol</th>
                    <th class="py-2 px-4 bg-gray-100 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->role ? $user->role->name : 'Sin rol asignado' }}</td> <!-- Mostrar el nombre del rol -->
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500">Editar</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
