@extends("Layout.Dashboard")
@section("AdminContent")

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

<section class="section" style="border: 2px solid rgb(0, 238, 208)">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">
                        <h1>Incidents</h1>
                        <a style="background-color: rgb(0, 238, 208);" class="btn btn-primary" href="{{ asset('dashboard/admin/incidents/add') }}">Create New Incident</a>
                    </div>
                    <!-- Add table-responsive wrapper to prevent table overflow -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>Incident ID</th>
                                    <th>Incident Date/Time</th>
                                    <th>Incident Type</th>
                                    <th>Location</th>
                                    <th>Department</th>
                                    <th>Attachments</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($incidents as $incident)
                                <tr>
                                    <td>{{ $incident->incident_id }}</td>
                                    <td>{{ \Carbon\Carbon::parse($incident->incident_datetime)->format('d M Y, h:i A') }}</td>
                                    <td>{{ $incident->incident_type }}</td>
                                    <td>{{ $incident->location }}</td>
                                    <td>{{ $incident->department }}</td>
                                    <td>
                                        @if(isset($incident->attachments) && !empty($incident->attachments))
                                            @php
                                                // Decode the JSON string into an array
                                                $attachments = json_decode($incident->attachments, true);
                                            @endphp

                                            @if(is_array($attachments) && count($attachments) > 0)
                                                @foreach($attachments as $attachment)
                                                    <a href="{{ asset('storage/' . $attachment) }}" target="_blank" class="text-primary">
                                                        {{ basename($attachment) }}
                                                    </a><br>
                                                    <small class="text-muted">(PDF file)</small>
                                                @endforeach
                                            @else
                                                <span class="text-danger">No attachments</span>
                                            @endif
                                        @else
                                            <span class="text-danger">No attachments</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="" class="btn text-primary btn-sm me-1" class="btn btn-warning" ><i class="fas fa-edit"></i></a>
                                        <a href="{{ url('dashboard/admin/incidents/delete') }}/{{ $incident->id }}" class="btn text-warning btn-sm"><i class="fas fa-trash"></i></a>
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
