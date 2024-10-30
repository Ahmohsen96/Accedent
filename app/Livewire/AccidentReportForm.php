<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AccidentReport; // Make sure to create this model and migration
use Illuminate\Support\Facades\Validator;

class AccidentReportForm extends Component
{
    public $accident_date, $accident_time, $region, $location, $injured_employee_name, $department;
    public $description, $loss, $immediate_causes, $underlying_causes, $root_causes, $recommendations;

    protected $rules = [
        'accident_date' => 'required|date',
        'accident_time' => 'required',
        'region' => 'required|string',
        'location' => 'required|string',
        'injured_employee_name' => 'required|string',
        'department' => 'required|string',
        'description' => 'required|string',
        'loss' => 'nullable|string',
        'immediate_causes' => 'nullable|string',
        'underlying_causes' => 'nullable|string',
        'root_causes' => 'nullable|string',
        'recommendations' => 'nullable|string',
    ];

    public function submit()
    {
        $this->validate();

        AccidentReport::create($this->validate());

        session()->flash('message', 'Accident report submitted successfully.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.accident-report-form');
    }
}
