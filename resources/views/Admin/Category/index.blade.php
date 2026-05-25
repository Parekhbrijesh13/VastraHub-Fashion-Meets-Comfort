@extends('Admin.layouts.master-admin')

@section('title', 'Category Management')

@section('content')

    <!-- ────────── CATEGORIES ────────── -->
    <div class="page-hdr">
        <div class="page-hdr-row">
            <div>
                <div class="page-hdr-title"><em>Categories</em> Management</div>
                <div class="page-hdr-sub">Manage your product categories</div>
            </div>
            <button type="button" class="btn-sm btn-solid" data-bs-toggle="modal" data-bs-target="#CreateCategoryModal">
                <i class="fa-solid fa-plus" style="margin-right:6px"></i>
                Add Category
            </button>
        </div>
    </div>
    <div class="card">
        <div style="display:flex;gap:12px;margin-bottom:20px;flex-wrap:wrap">
            <div style="flex:1;min-width:200px" class="topbar-search"><i class="fa-solid fa-magnifying-glass"></i><input
                    type="text" placeholder="Search categories…"
                    style="background:none;border:none;outline:none;color:var(--text);font-family:var(--font-body);font-size:0.82rem;width:100%" />
            </div>
        </div>
        <div style="overflow-x:auto">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Category Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td><img src="{{ Storage::url($category->image) }}" alt="{{ $category->name }}"
                                    style="width:50px;height:50px;object-fit:cover;border-radius:4px"></td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td><span class="badge-status green">Active</span></td>
                            <td>
                                <button class="btn-sm btn-ghost" data-bs-toggle="modal"
                                    data-bs-target="#CreateCategoryEditModal" data-id="{{ $category->id }}"
                                    data-name="{{ $category->name }}" data-slug="{{ $category->slug }}"
                                    data-description="{{ $category->description }}" data-status="{{ $category->status }}">
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <form method="POST" action="" style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="button" class="deleteBtn btn-sm btn-danger"
                                        data-id="{{ $category->id }}">

                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- CREATE CATEGORY MODAL -->
    <div class="modal fade" id="CreateCategoryModal" tabindex="-1" aria-labelledby="CreateCategoryModalLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content custom-modal">

                <!-- HEADER -->
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateCategoryModalLabel">
                        Create Category
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- FORM -->
                <form id="categoryform" enctype="multipart/form-data">

                    <div class="modal-body">

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter category name">
                            <small class="text-danger error-text name_error"></small>
                        </div>

                        <!-- SLUG -->
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="Enter slug">
                            <small class="text-danger error-text slug_error"></small>
                        </div>

                        <!-- IMAGE -->
                        <div class="mb-3">
                            <label class="form-label">Category Image</label>
                            <input type="file" name="image" class="form-control">
                            <small class="text-danger error-text image_error"></small>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="mb-3">
                            <label class="form-label">Category Description</label>
                            <textarea name="description" class="form-control" rows="4"></textarea>
                            <small class="text-danger error-text description_error"></small>
                        </div>

                        <!-- STATUS -->
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <small class="text-danger error-text status_error"></small>
                        </div>

                    </div>

                    <!-- FOOTER -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save Category
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- CREATE CATEGORY Edit MODAL -->
    <div class="modal fade" id="CreateCategoryEditModal" tabindex="-1" aria-labelledby="CreateCategoryEditModalLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content custom-modal">

                <!-- HEADER -->
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateCategoryEditModalLabel">
                        Edit Category
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- FORM -->
                <form id="categoryeditform" enctype="multipart/form-data">

                    <input type="hidden" name="id" id="edit_id">

                    <div class="modal-body">

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" name="name" id="edit_name" class="form-control"
                                placeholder="Enter category name">
                            <small class="text-danger error-text name_error"></small>
                        </div>

                        <!-- SLUG -->
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" id="edit_slug" class="form-control"
                                placeholder="Enter slug">
                            <small class="text-danger error-text slug_error"></small>
                        </div>

                        <!-- IMAGE -->
                        <div class="mb-3">
                            <label class="form-label">Category Image</label>
                            <input type="file" name="image" class="form-control">
                            <small class="text-danger error-text image_error"></small>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="mb-3">
                            <label class="form-label">Category Description</label>
                            <textarea name="description" id="edit_description" class="form-control" rows="4"></textarea>
                            <small class="text-danger error-text description_error"></small>
                        </div>

                        <!-- STATUS -->
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" id="edit_status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <small class="text-danger error-text status_error"></small>
                        </div>

                    </div>

                    <!-- FOOTER -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Update Category
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var editModal = document.getElementById('CreateCategoryEditModal');

            editModal.addEventListener('show.bs.modal', function(event) {

                var button = event.relatedTarget;

                document.getElementById('edit_id').value = button.getAttribute('data-id');
                document.getElementById('edit_name').value = button.getAttribute('data-name');
                document.getElementById('edit_slug').value = button.getAttribute('data-slug');
                document.getElementById('edit_description').value = button.getAttribute('data-description');
                document.getElementById('edit_status').value = button.getAttribute('data-status');

            });

        });
    </script>

    <!-- AJAX -->
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"
        integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $(document).on('submit', '#categoryform', function(e) {

                e.preventDefault();

                let formData = new FormData(this);

                // ✅ Append CSRF token explicitly
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

                $.ajax({
                    url: '/api/admin/categories',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(response) {
                        alert('Category Added Successfully');
                        $('#categoryform')[0].reset();
                        $('.error-text').text('');
                        $('#CreateCategoryModal').modal('hide');
                    },

                    error: function(response) {
                        $('.error-text').text('');

                        if (response.status == 422) {
                            let errors = response.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('.' + key + '_error').text(value[0]);
                            });
                        } else {
                            alert('Something went wrong');
                            console.log(response);
                        }
                    }
                });
            });

            //For Edit Modal

            $(document).on('submit', '#categoryeditform', function(e) {

                e.preventDefault();

                let formData = new FormData(this);

                console.log("ID:", formData.get('id'));

                formData.append('_method', 'PUT');

                $.ajax({
                    url: '/api/admin/categories/' + formData.get('id'),
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(response) {
                        console.log(response);

                        alert('Updated Successfully');

                        $('#categoryeditform')[0].reset();
                        $('.error-text').text('');
                        $('#CreateCategoryEditModal').modal('hide');
                    },

                    error: function(response) {
                        console.log(response.responseText);

                        $('.error-text').text('');

                        if (response.status == 422) {
                            let errors = response.responseJSON.errors;

                            $.each(errors, function(key, value) {
                                $('.' + key + '_error').text(value[0]);
                            });
                        } else {
                            alert('Server Error');
                        }
                    }
                });
            });

            // For Delete

            $('.deleteBtn').click(function() {

                let id = $(this).data('id');

                if (confirm('Are you sure you want to delete this category?')) {

                    $.ajax({
                        url: '/api/admin/categories/' + id,
                        type: 'DELETE',

                        data: {
                            _token: '{{ csrf_token() }}'
                        },

                        success: function(response) {

                            alert(response.message);

                            $('#row-' + id).remove();
                        },

                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>

@endsection
