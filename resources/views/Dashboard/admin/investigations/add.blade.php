@extends("Layout.Dashboard")

@section("AdminContent")

<div class="container mt-4">
    <h1>Create Investigation</h1>

    <form action="{{ route('dashboard.admin.investigations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="incident_id" class="form-label">Incident ID</label>
            <select name="incident_id" id="incident_id" class="form-select" required>
                @foreach($incidents as $incident)
                    <option value="{{ $incident->id }}">{{ $incident->incident_id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="investigation_lead_name" class="form-label">Investigation Lead Name</label>
            <input type="text" class="form-control" name="investigation_lead_name" required>
        </div>

        <div class="mb-3">
            <label for="investigation_lead_department" class="form-label">Department</label>
            <input type="text" class="form-control" name="investigation_lead_department" required>
        </div>

        <div class="mb-3">
            <label for="investigation_team_members" class="form-label">Investigation Team Members</label>
            <textarea class="form-control" name="investigation_team_members"></textarea>
        </div>

        <div class="mb-3">
            <label for="investigation_date" class="form-label">Investigation Date</label>
            <input type="date" class="form-control" name="investigation_date" required>
        </div>

        <div class="mb-3">
            <label for="findings_description" class="form-label">Findings Description</label>
            <textarea class="form-control" name="findings_description" required></textarea>
        </div>

        <div class="mb-3">
            <label for="contributing_factors" class="form-label">Contributing Factors (JSON format)</label>
            <textarea class="form-control" name="contributing_factors" required></textarea>
            <small class="form-text text-muted">Example: {"human": "factor", "environmental": "factor", "mechanical": "factor"}</small>
        </div>

        <div class="mb-3">
            <label for="root_cause" class="form-label">Root Cause</label>
            <textarea class="form-control" name="root_cause" required></textarea>
        </div>

        <div class="mb-3">
            <label for="recommendations" class="form-label">Recommendations</label>
            <textarea class="form-control" name="recommendations" required></textarea>
        </div>

        <div class="mb-3">
            <label for="investigation_report" class="form-label">Investigation Report (Upload)</label>
            <input type="file" class="form-control" name="investigation_report" required>
        </div>

        <div class="mb-3">
            <label for="attachments" class="form-label">Attachments</label>
            <input type="file" class="form-control" name="attachments[]" multiple>
        </div>

        <button type="submit" class="btn btn-primary">Submit Investigation</button>
    </form>
</div>

@endsection
