<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $projects = Project::all();
        return view('admin_projects', compact('projects','user'));
    }

    /**
     * Store a newly created project in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'completed_date' => 'nullable|date',
            'client_name' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($validatedData);

        return response()->json(['message' => 'Project created successfully.']);
    }

    /**
     * Update the specified project in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'completed_date' => 'nullable|date',
            'client_name' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $validatedData['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($validatedData);

        return response()->json(['message' => 'Project updated successfully.']);
    }

    /**
     * Remove the specified project from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return response()->json(['message' => 'Project deleted successfully.']);
    }
}
