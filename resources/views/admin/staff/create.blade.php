@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold text-green mb-4">Add New Staff</h1>

    <form action="{{ route('staff.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-green mb-2">Name</label>
            <input type="text" id="name" name="name" required class="w-full border border-green rounded-lg px-4 py-2">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-green mb-2">Email Address</label>
            <input type="email" id="email" name="email" required class="w-full border border-green rounded-lg px-4 py-2">
        </div>
        <div class="mb-4">
            <label for="position" class="block text-green mb-2">Position</label>
            <input type="text" id="position" name="position" required class="w-full border border-green rounded-lg px-4 py-2">
        </div>
        <button type="submit" class="bg-yellow text-green py-2 px-4 rounded-lg">Add Staff</button>
    </form>
@endsection
