<?php

namespace App\Http\Controllers;

use App\Models\Investigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InvestigationController extends Controller
{
    public function index()
    {


        $investigations = Investigation::with('incident')->get();

        return view("Dashboard.admin.investigations.index", compact('investigations'));
    }

    public function add()
    {
        $incidents = DB::table('incidents')->get();
        return view("Dashboard.admin.investigations.add",compact('incidents'));
    }

    public function store(Request $request)
    {
        // Validation rules for the investigation data
        $validatedData = $request->validate([
            'incident_id' => 'required|exists:incidents,id',
            'investigation_lead_name' => 'required|string|max:255',
            'investigation_lead_department' => 'required|string|max:255',
            'investigation_team_members' => 'nullable|string',
            'investigation_date' => 'required|date',
            'findings_description' => 'required|string',
            'contributing_factors' => 'required|string',
            'root_cause' => 'required|string',
            'recommendations' => 'required|string',
            'investigation_report' => 'required|file|mimes:pdf,doc,docx',
            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx,mp4',
        ]);

        // Handle file upload for investigation report
        if ($request->hasFile('investigation_report')) {
            $validatedData['investigation_report'] = $request->file('investigation_report')->store('investigation_reports');
        }

        // Handle multiple attachments
        if ($request->hasFile('attachments')) {
            $attachments = [];
            foreach ($request->file('attachments') as $attachment) {
                $attachments[] = $attachment->store('attachments');
            }
            $validatedData['attachments'] = json_encode($attachments);
        }

        // Create new investigation record in the database
        Investigation::create($validatedData);

        // Redirect back to the investigations index page after successful creation
        return redirect()->route('dashboard.admin.investigations.index')->with('success', 'Investigation created successfully.');
    }



    public function viewReport($id)
{
    // Retrieve the investigation based on the ID
    $investigation = Investigation::find($id);

    if (!$investigation || !$investigation->investigation_report) {
        return abort(404, 'Report not found');
    }

    // Generate the file path
    $filePath = storage_path('app/' . $investigation->investigation_report);

    if (!file_exists($filePath)) {
        return abort(404, 'Report not found');
    }

    // Return the file for download or view
    return response()->file($filePath);
}

public function viewAttachment($id, $filename)
{
    $attachmentPath = storage_path('app/attachments/' . $filename); // Adjust path as necessary

    if (!file_exists($attachmentPath)) {
        return abort(404, 'Attachment not found');
    }

    return response()->download($attachmentPath); // or response()->file($attachmentPath)
}

public function show($id)
{
    $investigation = Investigation::with('incident')->findOrFail($id);
    return view("Dashboard.admin.investigations.show", compact('investigation'));
}
public function edit($id)
{
    // Fetch the investigation by its ID
    $investigation = DB::select('select * from investigations where id=?', [$id]);

    // Check if the investigation was found
    if (empty($investigation)) {
        return redirect()->route('dashboard.admin.investigations.index')->with('error', 'Investigation not found.');
    }

    // Retrieve the first investigation result
    $investigation = $investigation[0];

    // Fetch incidents for the dropdown
    $incidents = DB::table('incidents')->get();

    // Pass the investigation and incidents to the view
    return view('Dashboard.admin.investigations.edit', compact('investigation', 'incidents'));
}


public function update(Request $request, $id)
{
    // Find the investigation by its ID
    $investigation = Investigation::findOrFail($id);

    // Validation rules for the investigation data
    $validatedData = $request->validate([
        'incident_id' => 'required|exists:incidents,id',
        'investigation_lead_name' => 'required|string|max:255',
        'investigation_lead_department' => 'required|string|max:255',
        'investigation_team_members' => 'nullable|string',
        'investigation_date' => 'required|date',
        'findings_description' => 'required|string',
        'contributing_factors' => 'required|string',
        'root_cause' => 'required|string',
        'recommendations' => 'required|string',
        'investigation_report' => 'nullable|file|mimes:pdf,doc,docx',
        'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx,mp4',
    ]);

    // Update investigation report if a new file is uploaded
    if ($request->hasFile('investigation_report')) {
        // Delete the old file if it exists
        if ($investigation->investigation_report) {
            Storage::delete($investigation->investigation_report);
        }
        $validatedData['investigation_report'] = $request->file('investigation_report')->store('investigation_reports');
    } else {
        // Keep the old file if no new file is uploaded
        $validatedData['investigation_report'] = $investigation->investigation_report;
    }

    // Handle multiple attachments if uploaded
    if ($request->hasFile('attachments')) {
        // Delete old attachments if they exist
        if ($investigation->attachments) {
            $oldAttachments = json_decode($investigation->attachments);
            foreach ($oldAttachments as $oldAttachment) {
                Storage::delete($oldAttachment);
            }
        }

        $attachments = [];
        foreach ($request->file('attachments') as $attachment) {
            $attachments[] = $attachment->store('attachments');
        }
        $validatedData['attachments'] = json_encode($attachments);
    } else {
        // Keep the old attachments if no new files are uploaded
        $validatedData['attachments'] = $investigation->attachments;
    }

    // Update the investigation record in the database
    $investigation->update($validatedData);

    // Redirect back to the investigations index page after successful update
    return redirect()->route('dashboard.admin.investigations.index')->with('success', 'Investigation updated successfully.');
}



public function delete($id) {
    // Find the investigation by its ID
    $investigation = Investigation::find($id);

    if ($investigation) {
        // Delete the investigation
        $investigation->delete();
        return redirect()->route('dashboard.admin.investigations.index')->with('success', 'Investigation deleted successfully.');
    }

    return redirect()->route('dashboard.admin.investigations.index')->with('error', 'Investigation not found.');
}


}
