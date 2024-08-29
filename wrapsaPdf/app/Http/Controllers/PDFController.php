<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Department;

class PDFController extends Controller
{
    public function generatePDF($department)
    {
        // Find the department by name or ID
        $department = Department::where('name', $department)->firstOrFail();

        // Fetch department-specific data (you can modify this to suit your needs)
        $fields = $department->fields;

        // Load the appropriate view for the department
        $pdf = PDF::loadView('pdfs.' . strtolower($department->name), compact('fields'));

        // Option 1: Stream the PDF in the browser
        return $pdf->stream($department->name . '-report.pdf');

        // Option 2: Download the PDF as a file
        // return $pdf->download($department->name . '-report.pdf');
    }
}
