@extends('Admin.layouts.master-admin')

@section('title', 'Dashboard')

@section('content')

    <!-- ────────── CATEGORIES ────────── -->
    <div class="page-hdr">
        <div class="page-hdr-row">
            <div>
                <div class="page-hdr-title"><em>Categories</em> Management</div>
                <div class="page-hdr-sub">Manage your product categories</div>
            </div>
            <button class="btn-sm btn-solid">
                <i class="fa-solid fa-plus" style="margin-right:6px"></i>Add Category</button>
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
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td><img src="{{ $category->image }}" alt="{{ $category->name }}" style="width:50px;height:50px;object-fit:cover;border-radius:4px"></td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td><span class="badge-status green">Active</span></td>
                            <td>
                                <button class="btn-sm btn-ghost"><i class="fa-solid fa-pen"></i></button>
                                <form method="POST" action="{{ route('admin.category.destroy', $category->id) }}" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('script')
        {{-- <script>
            $(document).ready(function() {
                $('.btn-danger').click(function(e) {
                    e.preventDefault();
                    if (confirm('Are you sure you want to delete this category?')) {
                        $(this).closest('form').submit();
                    }
                });
            });
        </script> --}}
    @endpush


@endsection
