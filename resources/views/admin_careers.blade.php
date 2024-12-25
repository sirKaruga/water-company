@extends('page_layout')

@section('content_place')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Careers</h1>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createCareerModal">
            Add Career
        </button>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Location</th>
                <th>Type</th>
                <th>Posted At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($careers as $career)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $career->title }}</td>
                    <td>{{ $career->location }}</td>
                    <td>{{ $career->type }}</td>
                    <td>{{ $career->posted_at }}</td>
                    <td>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm edit-career-btn" data-id="{{ $career->id }}">Edit</a>
                        <form action="{{ route('careers.destroy', $career->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this career?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal for creating a new career -->
<div class="modal fade" id="createCareerModal" tabindex="-1" aria-labelledby="createCareerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createCareerModalLabel">Add New Career</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createCareerForm" action="{{ route('careers.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>



                    <div class="mb-3">
                        <label for="requirements" class="form-label">Requirements</label>
                        <textarea name="requirements" id="requirements" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" id="location" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" name="type" id="type" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="text" name="salary" id="salary" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="posted_at" class="form-label">Posted At</label>
                        <input type="date" name="posted_at" id="posted_at" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" id="deadline" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="hidden" name="description" id="description_">
                        <div id="editor"></div>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Career</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for editing a career -->
<div class="modal fade" id="editCareerModal" tabindex="-1" aria-labelledby="editCareerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCareerModalLabel">Edit Career</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editCareerForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="career_id" id="editCareerId">

                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Title</label>
                        <input type="text" name="title" id="editTitle" class="form-control" required>
                    </div>



                    <div class="mb-3">
                        <label for="editRequirements" class="form-label">Requirements</label>
                        <textarea name="requirements" id="editRequirements" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="editLocation" class="form-label">Location</label>
                        <input type="text" name="location" id="editLocation" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editType" class="form-label">Type</label>
                        <input type="text" name="type" id="editType" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editSalary" class="form-label">Salary</label>
                        <input type="text" name="salary" id="editSalary" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editPostedAt" class="form-label">Posted At</label>
                        <input type="date" name="posted_at" id="editPostedAt" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editDeadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" id="editDeadline" class="form-control">
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
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
    const quill = new Quill('#editor', { theme: 'snow' });
    const editQuill = new Quill('#editEditor', { theme: 'snow' });

    document.querySelector('#createCareerForm').addEventListener('submit', function() {
        document.querySelector('#description_').value = quill.root.innerHTML;
    });

    $(document).on('click', '.edit-career-btn', function() {
        const careerId = $(this).data('id');

        $.ajax({
            url: `/careers/${careerId}/edit`,
            type: 'GET',
            success: function(response) {
                $('#editCareerId').val(response.id);
                $('#editTitle').val(response.title);
                editQuill.root.innerHTML = response.description;
                $('#editRequirements').val(response.requirements);
                $('#editLocation').val(response.location);
                $('#editType').val(response.type);
                $('#editSalary').val(response.salary);
                $('#editPostedAt').val(response.posted_at);
                $('#editDeadline').val(response.deadline);
                $('#editCareerForm').attr('action', `/careers/${response.id}`);
                $('#editCareerModal').modal('show');
            },
            error: function() {
                alert('Error fetching career details.');
            }
        });
    });

    $('#editCareerForm').on('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.set('description', editQuill.root.innerHTML);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function() {
                $('#editCareerModal').modal('hide');
                location.reload();
            },
            error: function(xhr) {
                alert('Error saving changes.');
                console.error(xhr.responseText);
            }
        });
    });
</script>
@endsection
