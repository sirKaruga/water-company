<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

       // Display a listing of careers
       public function index()
       {
        $user = Auth::user();
           $careers = Career::all();
           return view('admin_careers', compact('user','careers'));
       }

       // Store a newly created career in storage
       public function store(Request $request)
       {
           $request->validate([
               'title' => 'required|string|max:255',
               'description' => 'required|string',
               'requirements' => 'required|string',
               'location' => 'required|string|max:255',
               'type' => 'required|string|max:50',
               'salary' => 'nullable|numeric',
               'posted_at' => 'required|date',
               'deadline' => 'required|date|after_or_equal:posted_at',
           ]);

           Career::create($request->all());

           return response()->json(['message' => 'Career created successfully.'], 201);
       }

       // Show the form for editing the specified career
       public function edit($id)
       {
           $career = Career::findOrFail($id);
           return response()->json($career);
       }

       // Update the specified career in storage
       public function update(Request $request, $id)
       {
           $request->validate([
               'title' => 'required|string|max:255',
               'description' => 'required|string',
               'requirements' => 'required|string',
               'location' => 'required|string|max:255',
               'type' => 'required|string|max:50',
               'salary' => 'nullable|numeric',
               'posted_at' => 'required|date',
               'deadline' => 'required|date|after_or_equal:posted_at',
           ]);

           $career = Career::findOrFail($id);
           $career->update($request->all());

           return response()->json(['message' => 'Career updated successfully.']);
       }

       // Remove the specified career from storage
       public function destroy($id)
       {
           $career = Career::findOrFail($id);
           $career->delete();

           return response()->json(['message' => 'Career deleted successfully.']);
       }
}
