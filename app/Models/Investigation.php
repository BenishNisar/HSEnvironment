<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    use HasFactory;
    protected $fillable = [
        'incident_id', 'investigation_lead_name', 'investigation_lead_department',
        'investigation_team_members', 'investigation_date', 'findings_description',
        'contributing_factors', 'root_cause', 'recommendations', 'investigation_report', 'attachments'
    ];

    public function incident()
    {
        return $this->belongsTo(Incident::class);
    }
}
