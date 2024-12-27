@extends('page_layout')

@section('analytics')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">
            <h2>Welcome back,</h2>
            <p class="mb-md-0">Your analytics dashboard</p>
          </div>
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
            <p class="text-primary mb-0 hover-cursor">Analytics</p>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end flex-wrap">
          <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
            <i class="mdi mdi-download text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-clock-outline text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-plus text-muted"></i>
          </button>
          {{-- <button class="btn btn-primary mt-2 mt-xl-0">Download report</button> --}}
        </div>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body dashboard-tabs p-0">

          <div class="tab-content py-0 px-0 border-left-0 border-bottom-0 border-right-0">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
              <div class="d-flex flex-wrap justify-content-xl-between">
                <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                  <div class="icon-box-secondary me-3">
                    <i class="mdi mdi-calendar-heart"></i>
                  </div>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Company Services</small>
                    <div class="dropdown">
                      <a class="btn btn-secondary  p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h5 class="mb-0 d-inline-block">{{@$services->count()}} Services</h5>
                      </a>

                    </div>
                  </div>
                </div>
                <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                  <div class="icon-box-secondary me-3">
                    <i class="mdi mdi-currency-usd"></i>
                  </div>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Blog posts</small>
                    <h5 class="me-2 mb-0">{{@$blogs->count()}} posts</h5>
                  </div>
                </div>
                <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                  <div class="icon-box-secondary me-3">
                    <i class="mdi mdi-eye"></i>
                  </div>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Company Projects</small>
                    <h5 class="me-2 mb-0">{{@$projects->count()}} Projects</h5>
                  </div>
                </div>
                <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                  <div class="icon-box-secondary me-3">
                    <i class="mdi mdi-download"></i>
                  </div>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Listed Products</small>
                    <h5 class="me-2 mb-0">{{@$products->count()}} Products</h5>
                  </div>
                </div>
                <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-left justify-content-md-center px-4 px-md-0 mx-1 mx-md-0 p-3 item">
                  <div class="icon-box-secondary me-3">
                    <i class="mdi mdi-flag"></i>
                  </div>
                  <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Active Career Positions</small>
                    <h5 class="me-2 mb-0">{{@$careers->count()}} Posts</h5>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content_place')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Blog Posts</h1>
        <!-- Button to trigger create modal -->
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
                    <td>{{ $blog->published_at }}</td>
                    <td>
                        @if($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="100" class="img-fluid">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <button
                            class="btn btn-primary btn-sm"
                            onclick="openEditModal({{ $blog->id }}, '{{ $blog->title }}', '{{ addslashes($blog->excerpt) }}', '{{ $blog->published_at }}', '{{ $blog->status }}', '{{ $blog->image ? asset('storage/' . $blog->image) : '' }}', '{{ addslashes($blog->content) }}')"
                            data-bs-toggle="modal"
                            data-bs-target="#editBlogModal">
                            Edit
                        </button>

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
                <form id="createBlogForm" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
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
                        <input type="hidden" name="content" id="content" required>
                        <div id="createEditor"></div>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Blog</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal to Edit Blog -->
<div class="modal fade" id="editBlogModal" tabindex="-1" aria-labelledby="editBlogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBlogModalLabel">Edit Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editBlogForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Title</label>
                        <input type="text" name="title" id="editTitle" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editExcerpt" class="form-label">Excerpt</label>
                        <textarea name="excerpt" id="editExcerpt" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="editPublishedAt" class="form-label">Published At</label>
                        <input type="date" name="published_at" id="editPublishedAt" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editStatus" class="form-label">Status</label>
                        <select name="status" id="editStatus" class="form-select">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="editImage" class="form-label">Image</label>
                        <input type="file" name="image" id="editImage" class="form-control">
                        <img id="currentImage" src="" alt="Current Image" class="mt-2 img-fluid" width="100">
                    </div>

                    <div class="mb-3">
                        <label for="editContent" class="form-label">Content</label>
                        <input type="hidden" name="content" id="editContent">
                        <div id="editEditor"></div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Blog</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">

<script>
    const createEditor = new Quill('#createEditor', { theme: 'snow' });
    const editEditor = new Quill('#editEditor', { theme: 'snow' });

    // Handle form submission for the create modal
    document.querySelector('#createBlogForm').addEventListener('submit', function() {
        const content = createEditor.root.innerHTML;
        document.querySelector('#content').value = content;
    });

    // Handle form submission for the edit modal
    document.querySelector('#editBlogForm').addEventListener('submit', function() {
        const content = editEditor.root.innerHTML;
        document.querySelector('#editContent').value = content;
    });

    // Open the edit modal and populate fields
    function openEditModal(id, title, excerpt, publishedAt, status, imageUrl, content) {
        const form = document.querySelector('#editBlogForm');
        form.action = `/blogs/${id}`;
        document.querySelector('#editTitle').value = title;
        document.querySelector('#editExcerpt').value = excerpt;
        document.querySelector('#editPublishedAt').value = publishedAt;
        document.querySelector('#editStatus').value = status;
        editEditor.root.innerHTML = content;

        const currentImage = document.querySelector('#currentImage');
        if (imageUrl) {
            currentImage.src = imageUrl;
            currentImage.style.display = 'block';
        } else {
            currentImage.style.display = 'none';
        }
    }
</script>
@endsection
