@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold text-green mb-4">Edit Staff</h1>

    <form action="{{ route('staff.update', $staff->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-green mb-2">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $staff->name) }}" required class="w-full border border-green rounded-lg px-4 py-2">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-green mb-2">Email Address</label>
            <input type="email" id="email" name="email" value="{{ old('email', $staff->email) }}" required class="w-full border border-green rounded-lg px-4 py-2">
        </div>
        <div class="mb-4">
            <label for="position" class="block text-green mb-2">Position</label>
            <input type="text" id="position" name="position" value="{{ old('position', $staff->position) }}" required class="w-full border border-green rounded-lg px-4 py-2">
        </div>
        <button type="submit" class="bg-yellow text-green py-2 px-4 rounded-lg">Update Staff</button>
    </form>
@endsection
