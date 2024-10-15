@extends("Layout.Dashboard")
<style>
    /* Ensure the table is responsive and the cell content wraps */
    .table {
        table-layout: auto; /* Allows the table to auto-adjust */
    }

    .table td {
        overflow: hidden; /* Hide overflow */
        white-space: nowrap; /* Prevent wrapping */
        text-overflow: ellipsis; /* Add ellipsis (...) for overflowed text */
        max-width: 200px; /* Set a maximum width for the cell */
    }

    .table td a {
        display: inline-block; /* Ensures the link behaves properly */
        overflow: hidden; /* Hide overflow */
        white-space: nowrap; /* Prevent wrapping */
        text-overflow: ellipsis; /* Add ellipsis (...) for overflowed text */
        max-width: 100%; /* Ensures the link respects the cell's width */
        color: #007bff; /* Bootstrap link color */
        text-decoration: none; /* Remove underline */
    }

    .table td a:hover {
        text-decoration: underline; /* Underline on hover */
    }
</style>

@section("AdminContent")

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h1>Investigation Records</h1>
                    <a class="btn btn-primary mb-3" href="{{ asset('dashboard/admin/investigations/add') }}">Create New </a>

                    @if($investigations->count() > 0)
                        <table class="table table-striped table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Incident ID</th>
                                    <th>Investigation</th>
                                    <th>Date</th>
                                    <th>Report</th>
                                    <th>Attachments</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($investigations as $investigation)
                                    <tr>
                                        <td>{{ $investigation->id }}</td>
                                        <td>{{ $investigation->incident->incident_id ?? 'N/A' }}</td>
                                        <td>{{ $investigation->investigation_lead_name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($investigation->investigation_date)->format('d M Y') }}</td>

                                        <td>
                                            @if (file_exists(storage_path('app/' . $investigation->investigation_report)))
                                                <iframe src="{{ route('dashboard.admin.investigations.viewReport', $investigation->id) }}" width="100%" height="300px" frameborder="0"></iframe>
                                            @else
                                                <span class="text-danger">Report not found</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if (isset($investigation->attachments) && !empty($investigation->attachments))
                                                @php
                                                    $attachments = json_decode($investigation->attachments, true);
                                                @endphp
                                                @foreach($attachments as $attachment)
                                                    <a href="{{ route('dashboard.admin.investigations.viewAttachment', [$investigation->id, basename($attachment)]) }}" target="_blank" class="text-primary">
                                                        {{ basename($attachment) }}
                                                    </a><br>
                                                @endforeach
                                            @else
                                                <span class="text-danger">No attachments</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="" class="btn text-primary  btn-sm me-1"><i class="fas fa-edit"></i></a>
                                            <a href="{{ url('dashboard/admin/investigations/delete/' . $investigation->id) }}" class="btn text-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No investigation records found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DataTables Initialization Script -->
<script>
    $(document).ready(function() {
        $('.datatable').DataTable({
            paging: true,
            searching: true,
            ordering: true,
            lengthMenu: [5, 10, 25, 50, 100],
            pageLength: 10,
            responsive: true // Enable responsive design
        });
    });
</script>
@endsection
