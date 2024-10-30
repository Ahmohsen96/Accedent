<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'accident_date', 'accident_time', 'region', 'location', 'injured_employee_name', 'department',
        'description', 'loss', 'immediate_causes', 'underlying_causes', 'root_causes',
        'recommendations', 'reported_by', 'acknowledgement_name', 'acknowledgement_signature', 'acknowledgement_date'
    ];
}
