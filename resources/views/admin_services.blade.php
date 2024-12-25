@extends('page_layout')

@section('content_place')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Services</h1>
        <!-- Button to trigger modal -->
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createServiceModal">
            Add Service
        </button>
    </div>

    <!-- Table displaying services -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{!! Str::limit($service->description, 500) !!}</td>

                    <td>
                        @if ($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" width="100" class="img-fluid">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm edit-service-btn" data-id="{{ $service->id }}">Edit</a>

                        {{-- <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal for creating a new service -->
<div class="modal fade" id="createServiceModal" tabindex="-1" aria-labelledby="createServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createServiceModalLabel">Add New Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Create service form -->
                <form id="createServiceForm" action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        {{-- <textarea name="description" id="description" class="form-control" rows="3" required></textarea> --}}
                        <input type="hidden" name="description" id="description_">
                        <div id="editor"></div>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Service</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Edit Service Modal -->
<div class="modal fade" id="editServiceModal" tabindex="-1" aria-labelledby="editServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editServiceModalLabel">Edit Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Edit service form -->
                <form id="editServiceForm" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="service_id" id="editServiceId">
                    <div class="mb-3">
                        <label for="editName" class="form-label">Name</label>
                        <input type="text" name="name" id="editName" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editImage" class="form-label">Image</label>
                        <input type="file" name="image" id="editImage" class="form-control">
                        <img id="currentImage" src="" alt="Current Image" class="img-fluid mt-2" width="100">
                    </div>

                    <div class="mb-3">
                        <label for="editDescription" class="form-label">Description</label>
                        <input type="hidden" name="description" id="editDescription">
                        <div id="editEditor"></div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Optionally, handle AJAX form submission for creating a service
    $('#createServiceForm').on('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#createServiceModal').modal('hide'); // Close modal
                $('#createServiceForm')[0].reset(); // Reset the form
                location.reload(); // Reload page to show new record
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', xhr.responseText); // Log server's error response
                alert('Error occurred while creating the service.');
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
 <!-- Initialize Quill editor -->
 <script>
 const quill = new Quill('#editor', {
     theme: 'snow'
 });

  // Before submitting the form, update the hidden input with the editor content
  document.querySelector('#createServiceForm').addEventListener('submit', function() {
    const content = quill.root.innerHTML; // Get editor content
    console.log(content);
    document.querySelector('#description_').value = content; // Update hidden input
});

 </script>


<script>
    // Initialize a separate Quill editor for the edit form
    const editQuill = new Quill('#editEditor', {
        theme: 'snow'
    });

    $(document).on('click', '.edit-service-btn', function() {
        const serviceId = $(this).data('id');

        // Fetch service data via AJAX
        $.ajax({
            url: `/services/${serviceId}/edit`, // Adjust the route to fetch service data
            type: 'GET',
            success: function(response) {
                // Populate the form with the fetched data
                $('#editServiceId').val(response.id);
                $('#editName').val(response.name);
                editQuill.root.innerHTML = response.description; // Set editor content
                $('#currentImage').attr('src', response.image ? `/storage/${response.image}` : '').toggle(!!response.image);
                $('#editServiceForm').attr('action', `/services/${response.id}`); // Set form action

                // Show the modal
                $('#editServiceModal').modal('show');
            },
            error: function() {
                alert('Error fetching service details.');
            }
        });
    });

    // Handle form submission
    $('#editServiceForm').on('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.set('description', editQuill.root.innerHTML); // Add editor content

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#editServiceModal').modal('hide'); // Close the modal
                location.reload(); // Reload to reflect changes
            },
            error: function(xhr) {
                alert('Error saving changes.');
                console.error(xhr.responseText);
            }
        });
    });
</script>

@endsection
