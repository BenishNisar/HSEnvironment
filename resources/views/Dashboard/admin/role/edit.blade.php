@extends('Layout.Dashboard')
@section('AdminContent')

<form action="{{ route('dashboard.admin.role.update', $role->id) }}" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="role_name" value="{{ $role->role_name }}"> <!-- Add quotes around value -->

    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
