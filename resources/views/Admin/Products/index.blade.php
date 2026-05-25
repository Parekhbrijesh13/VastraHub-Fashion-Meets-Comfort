@extends('Admin.layouts.master-admin')

@section('title', 'Product Management')

@section('content')

    <!-- ────────── Products ────────── -->
    <div class="page-hdr">
        <div class="page-hdr-row">
            <div>
                <div class="page-hdr-title"><em>Products</em> Management</div>
                <div class="page-hdr-sub">Manage your products</div>
            </div>
            <button type="button" class="btn-sm btn-solid" data-bs-toggle="modal" data-bs-target="#CreateProductModal">
                <i class="fa-solid fa-plus" style="margin-right:6px"></i>
                Add Product
            </button>
        </div>
    </div>
    <div class="card">
        <div style="display:flex;gap:12px;margin-bottom:20px;flex-wrap:wrap">
            <div style="flex:1;min-width:200px" class="topbar-search"><i class="fa-solid fa-magnifying-glass"></i><input
                    type="text" placeholder="Search products…"
                    style="background:none;border:none;outline:none;color:var(--text);font-family:var(--font-body);font-size:0.82rem;width:100%" />
            </div>
        </div>
        <div style="overflow-x:auto">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>sku</th>
                        <th>price</th>
                        <th>stock</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                    style="width:50px;height:50px;object-fit:cover;border-radius:4px"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->sku }}</td>
                            <td>₹{{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->stock }}</td>
                            <td><span class="badge-status {{ $product->status == 'active' ? 'green' : 'red' }}">{{ ucfirst($product->status) }}</span></td>
                            <td>
                                <button class="btn-sm btn-ghost" data-bs-toggle="modal"
                                    data-bs-target="#CreateProductEditModal" data-id="{{ $product->id }}"
                                    data-name="{{ $product->name }}" data-sku="{{ $product->sku }}"
                                    data-price="{{ $product->price }}" data-stock="{{ $product->stock }}"
                                    data-description="{{ $product->description }}" data-status="{{ $product->status }}"
                                    data-category="{{ $product->category_id }}">
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <form method="POST" action="" style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="button" class="deleteBtn btn-sm btn-danger"
                                        data-id="{{ $product->id }}">

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


    <!-- CREATE PRODUCT MODAL -->
    <div class="modal fade" id="CreateProductModal" tabindex="-1" aria-labelledby="CreateProductModalLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content custom-modal">

                <!-- HEADER -->
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateProductModalLabel">
                        Create Product
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- FORM -->
                <form id="productform" enctype="multipart/form-data">

                    <div class="modal-body">

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter product name">
                            <small class="text-danger error-text name_error"></small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger error-text category_id_error"></small>
                        </div>

                        <!-- SKU -->
                        <div class="mb-3">
                            <label class="form-label">SKU</label>
                            <input type="text" name="sku" id="edit_sku" class="form-control" placeholder="Enter SKU">
                            <small class="text-danger error-text sku_error"></small>
                        </div>

                        <!-- PRICE -->
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" id="edit_price" class="form-control" placeholder="Enter price" step="0.01">
                            <small class="text-danger error-text price_error"></small>
                        </div>

                        <!-- STOCK -->
                        <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control" placeholder="Enter stock">
                            <small class="text-danger error-text stock_error"></small>
                        </div>

                        <!-- IMAGE -->
                        <div class="mb-3">
                            <label class="form-label">Product Image</label>
                            <input type="file" name="image" class="form-control">
                            <small class="text-danger error-text image_error"></small>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="mb-3">
                            <label class="form-label">Product Description</label>
                            <textarea name="description" class="form-control" rows="4"></textarea>
                            <small class="text-danger error-text description_error"></small>
                        </div>

                        <!-- STATUS -->
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
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
                            Save Product
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- CREATE PRODUCT Edit MODAL -->
    <div class="modal fade" id="CreateProductEditModal" tabindex="-1" aria-labelledby="CreateProductEditModalLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content custom-modal">

                <!-- HEADER -->
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateProductEditModalLabel">
                        Edit Product
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- FORM -->
                <form id="producteditform" enctype="multipart/form-data">

                    <input type="hidden" name="id" id="edit_id">

                    <div class="modal-body">

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="name" id="edit_name" class="form-control"
                                placeholder="Enter product name">
                            <small class="text-danger error-text name_error"></small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category_id" id="edit_category" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger error-text category_id_error"></small>
                        </div>

                        <!-- SKU -->
                        <div class="mb-3">
                            <label class="form-label">SKU</label>
                            <input type="text" name="sku" class="form-control" placeholder="Enter SKU">
                            <small class="text-danger error-text sku_error"></small>
                        </div>

                        <!-- PRICE -->
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Enter price" step="0.01">
                            <small class="text-danger error-text price_error"></small>
                        </div>


                        <!-- STOCK -->
                        <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" name="stock" id="edit_stock" class="form-control"
                                placeholder="Enter stock">
                            <small class="text-danger error-text stock_error"></small>
                        </div>

                        <!-- IMAGE -->
                        <div class="mb-3">
                            <label class="form-label">Product Image</label>
                            <input type="file" name="image" class="form-control">
                            <small class="text-danger error-text image_error"></small>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="mb-3">
                            <label class="form-label">Product Description</label>
                            <textarea name="description" id="edit_description" class="form-control" rows="4"></textarea>
                            <small class="text-danger error-text description_error"></small>
                        </div>

                        <!-- STATUS -->
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" id="edit_status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
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
                            Update Product
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var editModal = document.getElementById('CreateProductEditModal');

            editModal.addEventListener('show.bs.modal', function(event) {

                var button = event.relatedTarget;

                document.getElementById('edit_id').value = button.getAttribute('data-id');
                document.getElementById('edit_name').value = button.getAttribute('data-name');
                document.getElementById('edit_sku').value = button.getAttribute('data-sku');
                document.getElementById('edit_price').value = button.getAttribute('data-price');
                document.getElementById('edit_stock').value = button.getAttribute('data-stock');
                document.getElementById('edit_description').value = button.getAttribute('data-description');
                document.getElementById('edit_status').value = button.getAttribute('data-status');
                // set category if provided
                var cat = button.getAttribute('data-category');
                if (cat) {
                    var sel = document.getElementById('edit_category');
                    sel.value = cat;
                }

            });

        });
    </script>

    <!-- AJAX -->
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"
        integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $(document).on('submit', '#productform', function(e) {

                e.preventDefault();

                let formData = new FormData(this);

                // ✅ Append CSRF token explicitly
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

                $.ajax({
                    url: '/api/admin/products',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(response) {
                        alert('Product Added Successfully');
                        $('#productform')[0].reset();
                        $('.error-text').text('');
                        $('#CreateProductModal').modal('hide');
                    },

                    error: function(response) {
                        $('.error-text').text('');

                        if (response.status == 422) {
                            var json = null;
                            try {
                                json = response.responseJSON || JSON.parse(response.responseText || null);
                            } catch (e) {
                                console.log('Failed to parse JSON response:', e, response.responseText);
                            }

                            var errors = json && json.errors ? json.errors : null;

                            if (errors) {
                                console.log('Validation errors:', errors);
                                $.each(errors, function(key, value) {
                                    $('.' + key + '_error').text(value[0]);
                                });
                                alert('Validation failed: ' + JSON.stringify(errors));
                            } else {
                                console.log('422 response without errors object:', response);
                                alert('Validation failed but no details were returned. See console for response.');
                            }
                        } else {
                            console.log('AJAX error:', response);
                            alert('Something went wrong. See console for details.');
                        }
                    }
                });
            });

            //For Edit Modal

            $(document).on('submit', '#producteditform', function(e) {

                e.preventDefault();

                let formData = new FormData(this);

                console.log("ID:", formData.get('id'));

                formData.append('_method', 'PUT');

                $.ajax({
                    url: '/api/admin/products/' + formData.get('id'),
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(response) {
                        console.log(response);

                        alert('Updated Successfully');

                        $('#producteditform')[0].reset();
                        $('.error-text').text('');
                        $('#CreateProductEditModal').modal('hide');
                    },

                    error: function(response) {
                        console.log('Edit error response:', response);

                        $('.error-text').text('');

                        if (response.status == 422) {
                            var json = null;
                            try {
                                json = response.responseJSON || JSON.parse(response.responseText || null);
                            } catch (e) {
                                console.log('Failed to parse JSON response (edit):', e, response.responseText);
                            }

                            var errors = json && json.errors ? json.errors : null;

                            if (errors) {
                                console.log('Validation errors (edit):', errors);
                                $.each(errors, function(key, value) {
                                    $('.' + key + '_error').text(value[0]);
                                });
                                alert('Validation failed: ' + JSON.stringify(errors));
                            } else {
                                console.log('422 response without errors object (edit):', response);
                                alert('Validation failed but no details were returned. See console for response.');
                            }
                        } else {
                            console.log('Edit AJAX error:', response);
                            alert('Server Error. See console for details.');
                        }
                    }
                });
            });

            // For Delete

            $('.deleteBtn').click(function() {

                let id = $(this).data('id');

                if (confirm('Are you sure you want to delete this product?')) {

                    $.ajax({
                        url: '/api/admin/products/' + id,
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
