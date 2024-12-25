<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     // Display a listing of users
     public function index()
     {
         $users = User::all();
         return view('admin_users', compact('users'));
     }

     // Store a newly created user in storage
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|unique:users,email',
         ]);

         User::create($request->only('name', 'email'));

         return response()->json(['message' => 'User created successfully.'], 201);
     }

     // Show the form for editing the specified user
     public function edit($id)
     {
         $user = User::findOrFail($id);
         return response()->json($user);
     }

     // Update the specified user in storage
     public function update(Request $request, $id)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|unique:users,email,' . $id,
         ]);

         $user = User::findOrFail($id);
         $user->update($request->only('name', 'email'));

         return response()->json(['message' => 'User updated successfully.']);
     }

     // Remove the specified user from storage
     public function destroy($id)
     {
         $user = User::findOrFail($id);
         $user->delete();

         return response()->json(['message' => 'User deleted successfully.']);
     }
}
