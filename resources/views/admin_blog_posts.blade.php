@extends('page_layout')

@section('content_place')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Blog Posts</h1>
        <!-- Button to trigger modal -->
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createBlogModal">
            Create New Blog
        </button>
    </div>

    <!-- Display a table of blogs -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Excerpt</th>
                <th>Author</th>
                <th>Category</th>
                <th>Status</th>
                <th>Published At</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ Str::limit($blog->excerpt, 50) }}</td>
                    <td>{{ $blog->author->name ?? 'N/A' }}</td>
                    <td>{{ $blog->category->name ?? 'N/A' }}</td>
                    <td>
                        <span class="badge
                            {{ $blog->status == 'published' ? 'badge-success' : ($blog->status == 'draft' ? 'badge-warning' : 'badge-secondary') }}">
                            {{ ucfirst($blog->status) }}
                        </span>
                    </td>

                    <td>{{ $blog->published_at  }}</td>
                    <td>
                        @if($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="100" class="img-fluid">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>

                        <!-- Delete button (with confirmation) -->
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal to Create New Blog -->
<div class="modal fade" id="createBlogModal" tabindex="-1" aria-labelledby="createBlogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createBlogModalLabel">Create New Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Create blog form -->
                <form id="createBlogForm" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" required>
                    </div>



                    <div class="mb-3">
                        <label for="excerpt" class="form-label">Excerpt</label>
                        <textarea name="excerpt" id="excerpt" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="published_at" class="form-label">Published At</label>
                        <input type="date" name="published_at" id="published_at" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>

                        {{-- <textarea name="content" id="content" class="form-control" rows="10" required></textarea> --}}
                        <!-- Hidden input to store the Quill editor content -->
                        <input type="hidden" name="content" id="content" required>
                        <!-- Create the editor container -->
                        <div id="editor"></div>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Blog</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')
<script>
// Handle form submission via AJAX
$('#createBlogForm').on('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            // Close the modal and reset the form
            $('#createBlogModal').modal('hide');
            $('#createBlogForm')[0].reset();

            // Optionally, update the blog list here via AJAX or reload the page
            location.reload(); // Reload the page to show the new blog
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', xhr.responseText); // Log the server's error response
            alert('Error occurred while creating the blog.');
        }

    });
});
</script>

 {{-- my additional scripts --}}
 <!-- Include the Quill library -->
 <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
 <!-- Initialize Quill editor -->
 <script>
 const quill = new Quill('#editor', {
     theme: 'snow'
 });

  // Before submitting the form, update the hidden input with the editor content
  document.querySelector('#createBlogForm').addEventListener('submit', function() {
    const content = quill.root.innerHTML; // Get editor content
    document.querySelector('#content').value = content; // Update hidden input
});

 </script>


@endsection
