<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manageStaff()
    {
        $staffUsers = User::where('role', 'staff')->get();
        return view('admin.manage-staff', compact('staffUsers'));
    }

    public function deleteStaff($id)
    {
        $staff = User::findOrFail($id);
        if ($staff->role === 'staff') {
            $staff->delete();
            return redirect()->back()->with('success', 'Staff account deleted successfully.');
        }

        return redirect()->back()->with('error', 'You cannot delete this account.');
    }
}
