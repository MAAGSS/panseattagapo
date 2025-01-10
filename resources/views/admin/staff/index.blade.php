@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-green">Staff List</h1>
        <a href="{{ route('staff.create') }}" class="bg-yellow text-green py-2 px-4 rounded-lg">Add New Staff</a>
    </div>

    @if(session('success'))
        <div class="bg-green text-white p-4 mb-4 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border border-green">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Position</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($staff as $member)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $member->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $member->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $member->position }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('staff.edit', $member->id) }}" class="text-yellow hover:text-orange">Edit</a>
                        <form action="{{ route('staff.destroy', $member->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
