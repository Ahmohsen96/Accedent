<?php

namespace App\Repositories;

use App\Models\AccidentReport;

class AccidentReportRepository implements AccidentReportRepositoryInterface
{
    public function all()
    {
        return AccidentReport::all();
    }

    public function find($id)
    {
        return AccidentReport::findOrFail($id);
    }

    public function create(array $data)
    {
        return AccidentReport::create($data);
    }

    public function update($id, array $data)
    {
        $report = AccidentReport::findOrFail($id);
        $report->update($data);
        return $report;
    }

    public function delete($id)
    {
        $report = AccidentReport::findOrFail($id);
        return $report->delete();
    }
}
