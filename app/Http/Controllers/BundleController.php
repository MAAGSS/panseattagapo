<?php

namespace App\Http\Controllers;

use App\Models\Bundle;
use Illuminate\Http\Request;

class BundleController extends Controller
{
    public function index()
    {
        $bundles = Bundle::all(); // Fetch all bundles
        return view('dashboard', compact('bundles')); // Pass bundles to the view
    }

    public function create()
    {
        return view('bundles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image type and size
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('bundles', 'public'); // Store image in 'bundles' folder within 'public' disk
        } else {
            $imagePath = null; // Default if no image is uploaded
        }

        // Create new bundle
        Bundle::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return response()->json(['message' => 'Bundle saved successfully!']);
    }
    

    public function show(Bundle $bundle)
    {
        return view('bundles.show', compact('bundle'));
    }

    public function edit(Bundle $bundle)
    {
        return view('bundles.edit', compact('bundle'));
    }

    public function update(Request $request, Bundle $bundle)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($bundle->image) {
                Storage::disk('public')->delete($bundle->image);
            }
            $validated['image'] = $request->file('image')->store('bundles', 'public');
        }

        $bundle->update($validated);

        return redirect()->route('bundles.index')->with('success', 'Bundle updated successfully.');
    }

    public function destroy(Bundle $bundle)
    {
        if ($bundle->image) {
            Storage::disk('public')->delete($bundle->image);
        }

        $bundle->delete();

        return redirect()->route('bundles.index')->with('success', 'Bundle deleted successfully.');
    }
}

