@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="text-xl font-semibold mb-4">
            Roles Management
        </div>

        <table class="min-w-full bg-white border">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-100 border-b">ID</th>
                    <th class="py-2 px-4 bg-gray-100 border-b">Role Name</th>
                    <th class="py-2 px-4 bg-gray-100 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $role->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $role->name }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('roles.edit', $role->id) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('roles.create') }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">
            Create New Role
        </a>
    </div>
@endsection
