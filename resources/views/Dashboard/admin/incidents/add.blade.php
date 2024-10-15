@extends("Layout.Dashboard")
@section("AdminContent")
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 2.5rem;
        margin-bottom: 30px;
        color: #333;
        text-align: center;
    }

    label {
        font-weight: 600;
        color: #555;
    }

    .form-control, .form-select {
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 10px;
        font-size: 1rem;
    }

    .form-control:focus, .form-select:focus {
        border-color: #007bff;
        box-shadow: none;
    }

    .mb-3 {
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 1.1rem;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .form-label {
        margin-bottom: 5px;
        font-size: 1.1rem;
    }

    .form-control, .form-select, textarea {
        transition: border-color 0.3s;
    }

    input[type="file"] {
        border: none;
    }

    .form-control::placeholder, textarea::placeholder {
        color: #999;
    }

    textarea {
        resize: none;
        height: 150px;
    }
</style>


<div class="container">
    <h1>Report an Incident</h1>
    <form action="{{ route('dashboard.admin.incidents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="incident_datetime" class="form-label">Incident Date/Time</label>
            <input type="datetime-local" name="incident_datetime" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="incident_type" class="form-label">Incident Type</label>
            <select name="incident_type" class="form-select" required>
                <option value="Near Miss">Near Miss</option>
                <option value="Injury">Injury</option>
                <option value="Damage">Damage</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="incident_description" class="form-label">Incident Description</label>
            <textarea name="incident_description" class="form-control" placeholder="Describe the incident in detail" required></textarea>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" class="form-control" placeholder="Incident location" required>
        </div>
        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <input type="text" name="department" class="form-control" placeholder="Enter the department name" required>
        </div>
        <div class="mb-3">
            <label for="reported_by" class="form-label">Reported By (Employee ID)</label>
            <input type="number" name="reported_by" class="form-control" placeholder="Enter employee ID" required>
        </div>
        <div class="mb-3">
            <label for="witnesses" class="form-label">Witnesses</label>
            <textarea name="witnesses" class="form-control" placeholder="List any witnesses"></textarea>
        </div>
        <div class="mb-3">
            <label for="severity_level" class="form-label">Severity Level</label>
            <select name="severity_level" class="form-select" required>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="immediate_actions_taken" class="form-label">Immediate Actions Taken</label>
            <textarea name="immediate_actions_taken" class="form-control" placeholder="Actions taken immediately after the incident"></textarea>
        </div>
        <div class="mb-3">
            <label for="attachments" class="form-label">Attachments</label>
            <input type="file" name="attachments[]" class="form-control" multiple>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary btn-sm" style="width: auto;">Submit Incident</button>
            <a href="{{ route('dashboard.admin.incidents.index') }}" class="btn btn-link text-dark" style="text-decoration: none;">Back to List</a>
        </div>

    </form>
</div>
@endsection
