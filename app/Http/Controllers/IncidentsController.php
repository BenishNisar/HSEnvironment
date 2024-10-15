<?php

namespace App\Http\Controllers;
use App\Models\Incident;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IncidentsController extends Controller
{
    function index(){
        $incidents=DB::select("select * from incidents");
        return view("Dashboard.admin.incidents.index",compact('incidents'));
    }
    function add(){
        return view("Dashboard.admin.incidents.add");
    }
 function store(Request $request){

$request->validate([
    'incident_datetime' => 'required|date',
            'incident_type' => 'required|string',
            'incident_description' => 'required|string',
            'location' => 'required|string',
            'department' => 'required|string',
            'reported_by' => 'required|integer',
            'severity_level' => 'required|string',
            'immediate_actions_taken' => 'nullable|string',
            'attachments.*' => 'nullable|file|max:2048',  // Max file size: 2MB per file
]);
   // Handle file uploads
   $attachments = [];
   if ($request->hasFile('attachments')) {
       foreach ($request->file('attachments') as $file) {
           $path = $file->store('investigation_attachments', 'public'); // Store the file
           $attachments[] = $path; // Save path to the attachments array
       }
   }

     // Store the incident data
     Incident::create([
        'id' => null, // Optional: set this to null if using auto-increment
        'incident_id' => uniqid('INC-'), // Auto-generate unique incident ID
        'incident_datetime' => $request->input('incident_datetime'),
        'incident_type' => $request->input('incident_type'),
        'incident_description' => $request->input('incident_description'),
        'location' => $request->input('location'),
        'department' => $request->input('department'),
        'reported_by' => $request->input('reported_by'),
        'witnesses' => $request->input('witnesses'),
        'severity_level' => $request->input('severity_level'),
        'immediate_actions_taken' => $request->input('immediate_actions_taken'),
        'attachments' => json_encode($attachments),  // Store attachments as JSON
    ]);
    return redirect()->route('dashboard.admin.incidents.index')->with('success', 'Incident reported successfully.');


    }




    function delete($id) {
        DB::delete('delete from incidents where id=?', [$id]);
        return redirect()->route('dashboard.admin.incidents.index')->with('success', 'Incident deleted successfully.');
    }


}
