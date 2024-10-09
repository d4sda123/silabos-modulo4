@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="text-xl font-semibold mb-4">
            Mantener Roles
        </div>

        <table class="min-w-full bg-white border">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-100 border-b">ID</th>
                    <th class="py-2 px-4 bg-gray-100 border-b">Rol</th>
                    <th class="py-2 px-4 bg-gray-100 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td class="flex justify-center py-2 px-4 ">{{ $role->id }}</td>
                        <td class="py-2 px-4 ">{{ $role->name }}</td>
                        <td class="flex justify-around py-2 px-4 ">
                            <a href="{{ route('roles.edit', $role->id) }}" class="text-blue-500">Edit</a>
                            @if($role->trashed())
                                <form action="{{ route('roles.restore', $role->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-green-500">Restore</button>
                                </form>
                            @else
                                <a href="{{ route('roles.confirmDelete', $role->id) }}" class="text-red-500 ml-2">Delete</a>
                            @endif
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('roles.create') }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">
            Crear Nuevo Rol
        </a>
    </div>
@endsection
