<?php

namespace App\Http\Controllers;


use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        $services = Service::all();
        return view('admin_services', compact('user','services'));
    }

     // Show the form for creating a new service
     public function create()
     {
         return view('services.create');
     }

     // Store a newly created service in storage
     public function store(Request $request)
     {
         // Validate incoming data
         $validated = $request->validate([
             'name' => 'required|string|max:255',
             'description' => 'nullable|string',
             'image' => 'nullable|image|max:2048',
         ]);

         // Handle image upload
         $imagePath = null;
         if ($request->hasFile('image')) {
             $imagePath = $request->file('image')->store('services', 'public');
         }

         // Create the service
         $service = Service::create([
             'name' => $validated['name'],
             'description' => $validated['description'],
             'image' => $imagePath,
         ]);

         return redirect()->route('services.index')->with('success', 'Service created successfully.');
     }


     // Display the specified service
     public function show(Service $service)
     {
         return view('services.show', compact('service'));
     }

     // Show the form for editing the specified service
     public function edit($id)
    {
        $service = Service::findOrFail($id);
        return response()->json($service);
    }


     // Update the specified service in storage
     public function update(Request $request, Service $service)
     {
         $validated = $request->validate([
             'name' => 'required|string|max:255',
             'description' => 'required|string',
             'image' => 'nullable|image|max:2048', // Optional image upload
         ]);

         if ($request->hasFile('image')) {
             // Delete the old image
             if ($service->image) {
                 Storage::disk('public')->delete($service->image);
             }

             $validated['image'] = $request->file('image')->store('services', 'public');
         }

         $service->update($validated);

         return redirect()->route('services.index')->with('success', 'Service updated successfully.');
     }

     // Remove the specified service from storage
     public function destroy(Service $service)
     {
         if ($service->image) {
             Storage::disk('public')->delete($service->image);
         }

         $service->delete();

         return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
     }

}
