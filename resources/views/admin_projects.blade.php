@extends('page_layout')

@section('content_place')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Projects</h1>
        <!-- Button to trigger create modal -->
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createProjectModal">
            Create New Project
        </button>
    </div>

    <!-- Display a table of projects -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Completed Date</th>
                <th>Client Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" width="100" class="img-fluid">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $project->title }}</td>
                    <td>{{ Str::limit(strip_tags($project->description), 50) }}</td>
                    <td>{{ $project->completed_date }}</td>
                    <td>{{ $project->client_name }}</td>
                    <td>
                        <button
                            class="btn btn-primary btn-sm"
                            onclick="openEditModal({{ $project->id }}, '{{ $project->title }}', '{{ addslashes($project->description) }}', '{{ $project->completed_date }}', '{{ $project->client_name }}', '{{ $project->image ? asset('storage/' . $project->image) : '' }}')"
                            data-bs-toggle="modal"
                            data-bs-target="#editProjectModal"
                        >
                            Edit
                        </button>

                        <!-- Delete button (with confirmation) -->
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal to Create New Project -->
<div class="modal fade" id="createProjectModal" tabindex="-1" aria-labelledby="createProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createProjectModalLabel">Create New Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Create project form -->
                <form id="createProjectForm" action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="hidden" name="description" id="description" required>
                        <div id="createEditor"></div>
                    </div>

                    <div class="mb-3">
                        <label for="completed_date" class="form-label">Completed Date</label>
                        <input type="date" name="completed_date" id="completed_date" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="client_name" class="form-label">Client Name</label>
                        <input type="text" name="client_name" id="client_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Create Project</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal to Edit Project -->
<div class="modal fade" id="editProjectModal" tabindex="-1" aria-labelledby="editProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProjectModalLabel">Edit Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Edit project form -->
                <form id="editProjectForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editProjectId">
                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Title</label>
                        <input type="text" name="title" id="editTitle" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editDescription" class="form-label">Description</label>
                        <input type="hidden" name="description" id="editDescription" required>
                        <div id="editEditor"></div>
                    </div>

                    <div class="mb-3">
                        <label for="editCompletedDate" class="form-label">Completed Date</label>
                        <input type="date" name="completed_date" id="editCompletedDate" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editClientName" class="form-label">Client Name</label>
                        <input type="text" name="client_name" id="editClientName" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editImage" class="form-label">Image</label>
                        <input type="file" name="image" id="editImage" class="form-control">
                        <img id="currentImage" src="" alt="Current Image" class="mt-2 img-fluid" width="100">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Project</button>
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

    document.querySelector('#createProjectForm').addEventListener('submit', function (e) {
        const description = createEditor.root.innerHTML;
        document.querySelector('#description').value = description;
    });

    document.querySelector('#editProjectForm').addEventListener('submit', function () {
        const description = editEditor.root.innerHTML;
        document.querySelector('#editDescription').value = description;
    });

    function openEditModal(id, title, description, completedDate, clientName, imageUrl) {
        document.querySelector('#editProjectForm').action = `/projects/${id}`;
        document.querySelector('#editProjectId').value = id;
        document.querySelector('#editTitle').value = title;
        editEditor.root.innerHTML = description;
        document.querySelector('#editCompletedDate').value = completedDate;
        document.querySelector('#editClientName').value = clientName;
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
