@extends('page_layout')

@section('content_place')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Products</h1>
        <!-- Button to trigger create modal -->
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createProductModal">
            Create New Product
        </button>
    </div>

    <!-- Display a table of products -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="100" class="img-fluid">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $product->title }}</td>
                    <td>{{ Str::limit(strip_tags($product->description), 50) }}</td>
                    <td>{{ $product->category ?? 'N/A' }}</td>
                    <td>
                        <button
                            class="btn btn-primary btn-sm"
                            onclick="openEditModal({{ $product->id }}, '{{ $product->title }}', '{{ addslashes($product->description) }}', '{{ $product->category }}', '{{ $product->image ? asset('storage/' . $product->image) : '' }}')"
                            data-bs-toggle="modal"
                            data-bs-target="#editProductModal"
                        >
                            Edit
                        </button>

                        <!-- Delete button (with confirmation) -->
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal to Create New Product -->
<div class="modal fade" id="createProductModal" tabindex="-1" aria-labelledby="createProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createProductModalLabel">Create New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Create product form -->
                <form id="createProductForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="category" class="form-label">Category</label>
                        <input type="text" name="category" id="category" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Create Product</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal to Edit Product -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Edit product form -->
                <form id="editProductForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editProductId">
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
                        <label for="editCategory" class="form-label">Category</label>
                        <input type="text" name="category" id="editCategory" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editImage" class="form-label">Image</label>
                        <input type="file" name="image" id="editImage" class="form-control">
                        <img id="currentImage" src="" alt="Current Image" class="mt-2 img-fluid" width="100">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
// Handle form submission via AJAX
$('#createProductForm').on('submit', function(e) {
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
            $('#createProductModal').modal('hide');
            $('#createProductForm')[0].reset();

            // Optionally, update the product list here via AJAX or reload the page
            location.reload(); // Reload the page to show the new product
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', xhr.responseText); // Log the server's error response
            alert('Error occurred while creating the product.');
        }
    });
});
</script>
<!-- Include Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">

<script>
    // Initialize Quill editors
    const createEditor = new Quill('#createEditor', { theme: 'snow' });
    const editEditor = new Quill('#editEditor', { theme: 'snow' });

    // On form submission, update the hidden inputs
    document.querySelector('#createProductForm').addEventListener('submit', function (e) {
    const description = createEditor.root.innerHTML; // Get Quill editor content
    console.log(description);
    document.querySelector('#description').value = description; // Populate hidden input
});


    document.querySelector('#editProductForm').addEventListener('submit', function () {
        const description = editEditor.root.innerHTML;
        document.querySelector('#editDescription').value = description;
    });

    // Open edit modal and populate fields
    function openEditModal(id, title, description, category, imageUrl) {
        document.querySelector('#editProductForm').action = `/products/${id}`;
        document.querySelector('#editProductId').value = id;
        document.querySelector('#editTitle').value = title;
        editEditor.root.innerHTML = description;
        document.querySelector('#editCategory').value = category;
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
