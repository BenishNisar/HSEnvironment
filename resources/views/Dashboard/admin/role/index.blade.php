@extends("Layout.Dashboard")


<style>


    table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 18px;
        font-family: 'Arial', sans-serif;
        min-width: 400px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    table th, table td {
        padding: 12px 15px;
        text-align: left;
    }

    table thead th {
        background-color: #009879;
        color: white;
        text-transform: uppercase;
        letter-spacing: 0.03em;
    }

    table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    table tbody tr:hover {
        background-color: #f1f1f1;
    }

    table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

</style>

@section("AdminContent")

<section class="section" style="border: 2px solid rgb(0, 238, 208)">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">
                        <h1>Role</h1>
                        <a style="background-color: rgb(0, 238, 208);" class="btn btn-primary" href="{{ asset('dashboard/admin/role/add') }}">Create New </a>
                    </div>
                    <!-- Add table-responsive wrapper to prevent table overflow -->


    <table class="table table-bordered table-striped table-bordered datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Role Name</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

             @foreach ($Roles as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->role_name }}</td>
                    <td>

                        <a href="{{ url('/dashboard/admin/role/edit') }}/{{ $item->id }}" class="btn text-primary btn-sm me-1" ><i class="fas fa-edit"></i></a>
                        <a href="{{url('/dashboard/admin/role/delete')  }}/{{$item->id }}" class="btn text-warning btn-sm"><i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> <!-- End of table-responsive -->
</div>
</div>
</div>
</div>
</section>

@endsection
