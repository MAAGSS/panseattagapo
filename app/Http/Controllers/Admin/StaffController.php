<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        // Store the new staff
        return redirect()->route('staff.index')->with('success', 'Staff added successfully.');
    }

    public function edit($staff)
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
