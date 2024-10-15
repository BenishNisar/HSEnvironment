@extends('Layout.Dashboard')

@section('AdminContent')

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Create Role</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.admin.role.store') }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="role_name" class="form-label">Role Name</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                        <input type="text" name="role_name" id="role_name" class="form-control" required placeholder="Enter role name">
                    </div>
                    @error('role_name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 200px;">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
