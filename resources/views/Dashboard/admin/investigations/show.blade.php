@extends("Layout.Dashboard")



@section("AdminContent")

<div class="container mt-4">
    <h1>Investigation Details</h1>

    <!-- Add other investigation details here -->

    <h3>Investigation Report</h3>
    <a href="{{ asset('storage/' . $investigation->investigation_report) }}" target="_blank">View Report</a>
    <a href="{{ Storage::url($investigation->investigation_report) }}" target="_blank">View Report</a>

    <h3>Attachments</h3>
    <ul>
        @foreach (json_decode($investigation->attachments) as $attachment)
            <li>
                <a href="{{ route('dashboard.admin.investigations.viewAttachment', [$investigation->id, basename($attachment)]) }}" target="_blank">View Attachment</a>
            </li>
        @endforeach
    </ul>
</div>

@endsection
