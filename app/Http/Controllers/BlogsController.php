<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        $blogs = Blog::all();
        return view('admin_blog_posts',compact('blogs','user'));
    }

     // Create a new blog post
     public function store(Request $request)
     {
        $user = Auth::user();
         $validated = $request->validate([
             'title' => 'required|string|max:255',
             'slug' => 'required|string|max:255|unique:blogs',
             'content' => 'required|string',
             'excerpt' => 'nullable|string',
             'published_at' => 'nullable|date',
             'status' => 'required|in:published,draft,archived',
             'image' => 'nullable|image|mimes:jpg,jpeg,png,bmp,gif,svg',
         ]);

         // Handle file upload
         if ($request->hasFile('image')) {
             $imagePath = $request->file('image')->store('blogs', 'public');
         } else {
             $imagePath = null;
         }

         Blog::create([
             'title' => $validated['title'],
             'slug' => $validated['slug'],
             'content' => $validated['content'],
             'excerpt' => $validated['excerpt'],
             'published_at' => $validated['published_at'],
             'status' => $validated['status'],
             'image' => $imagePath,
             // Optionally, set default author and category
             'author_id' => @$user->id, // Assuming the current user is the author
             'category_id' => 1, // Or set a default category
         ]);

         return response()->json(['message' => 'Blog created successfully']);
     }

     // Show a specific blog post by ID
     public function show($id)
     {
         $blog = Blog::findOrFail($id); // Fetch the blog post or fail if not found
         return response()->json($blog);
     }

     // Update an existing blog post
     public function update(Request $request, $id)
     {
         // Validate incoming request
         $validated = $request->validate([
             'title' => 'nullable|string|max:255',
             'slug' => 'nullable|string|unique:blogs,slug,' . $id,
             'content' => 'nullable|string',
             'excerpt' => 'nullable|string',
             'author_id' => 'nullable|exists:users,id',
             'category_id' => 'nullable|exists:categories,id',
             'tags' => 'nullable|string',
             'published_at' => 'nullable|date',
             'status' => 'nullable|in:draft,published,archived',
             'image' => 'nullable|image|max:1024', // Validate image
         ]);

         // Find the blog post by ID
         $blog = Blog::findOrFail($id);

         // Handle image upload (if any)
         $imagePath = $blog->image; // Default to current image
         if ($request->hasFile('image')) {
             // Delete the old image if it exists
             if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                 Storage::disk('public')->delete($imagePath);
             }

             // Store the new image and get the path
             $imagePath = $request->file('image')->store('images', 'public');
         }

         // Update the blog post with the validated data
         $blog->update([
             'title' => $validated['title'] ?? $blog->title,
             'slug' => $validated['slug'] ?? $blog->slug,
             'content' => $validated['content'] ?? $blog->content,
             'excerpt' => $validated['excerpt'] ?? $blog->excerpt,
             'author_id' => $validated['author_id'] ?? $blog->author_id,
             'category_id' => $validated['category_id'] ?? $blog->category_id,
             'tags' => $validated['tags'] ?? $blog->tags,
             'published_at' => $validated['published_at'] ?? $blog->published_at,
             'status' => $validated['status'] ?? $blog->status,
             'image' => $imagePath, // Store image path
         ]);

         return response()->json($blog); // Return the updated blog post
     }

     // Delete a blog post
     public function destroy($id)
     {
         $blog = Blog::findOrFail($id);

         // Delete the image if it exists
         if ($blog->image && Storage::disk('public')->exists($blog->image)) {
             Storage::disk('public')->delete($blog->image);
         }

         $blog->delete(); // Soft delete

         return response()->json(null, 204); // Return no content status
     }




}
