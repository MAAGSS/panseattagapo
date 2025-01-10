<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class StaffController extends Controller
{
    public function index()
    {
        // Show the list of staff
        return view('admin.staff.index');
    }

    public function create()
    {
        // Show the form to create staff
        return view('admin.staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'staff', // Default role
        ]);

        // Return a JSON response with a success message
        return response()->json(['message' => 'User  registered successfully!'], 201);
    }


    public function edit($user)
    {
        // Show the edit form
        return view('admin.staff.edit', compact('staff'));
    }

    public function update(Request $request, $staff)
    {
        // Update the staff
        return redirect()->route('staff.index')->with('success', 'Staff updated successfully.');
    }

    public function destroy($staff)
    {
        // Delete the staff
        return redirect()->route('staff.index')->with('success', 'Staff deleted successfully.');
    }
}

