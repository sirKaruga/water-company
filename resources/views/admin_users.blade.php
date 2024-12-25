@extends('page_layout')

@section('content_place')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Users</h1>
        <!-- Button to trigger modal -->
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createUserModal">
            Add User
        </button>
    </div>

    <!-- Table displaying users -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm edit-user-btn" data-id="{{ $user->id }}">Edit</a>

                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal for creating a new user -->
<div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Create user form -->
                <form id="createUserForm" action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add User</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for editing a user -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Edit user form -->
                <form id="editUserForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="user_id" id="editUserId">

                    <div class="mb-3">
                        <label for="editName" class="form-label">Name</label>
                        <input type="text" name="name" id="editName" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" name="email" id="editEmail" class="form-control" required>
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
    $(document).on('click', '.edit-user-btn', function() {
        const userId = $(this).data('id');

        // Fetch user data via AJAX
        $.ajax({
            url: `/users/${userId}/edit`,
            type: 'GET',
            success: function(response) {
                // Populate the form with the fetched data
                $('#editUserId').val(response.id);
                $('#editName').val(response.name);
                $('#editEmail').val(response.email);
                $('#editUserForm').attr('action', `/users/${response.id}`); // Set form action

                // Show the modal
                $('#editUserModal').modal('show');
            },
            error: function() {
                alert('Error fetching user details.');
            }
        });
    });

    // Handle form submission for creating and editing users
    $('#createUserForm, #editUserForm').on('submit', function(e) {
        e.preventDefault();

        const form = $(this);
        const formData = form.serialize();

        $.ajax({
            url: form.attr('action'),
            type: form.find('[name="_method"]').val() || 'POST',
            data: formData,
            success: function(response) {
                $('.modal').modal('hide'); // Close modal
                location.reload(); // Reload page to show changes
            },
            error: function(xhr) {
                alert('Error saving data.');
                console.error(xhr.responseText);
            }
        });
    });
</script>
@endsection
