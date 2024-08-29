<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\DepartmentField;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    public function handleAction(Request $request)
    {
        $action = $request->get('action');

        if ($action === 'add') {
            return redirect()->route('departments.create');
        } elseif ($action === 'list') {
            return redirect()->route('departments.index');
        }

        return redirect()->back()->with('error', 'Please select a valid option.');
    }

    // Show the form for adding a new department
    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        Department::create($request->only('name', 'description'));
    
        return redirect()->route('departments.index')->with('success', 'Department added successfully.');
    }
    
    // Show the specific department's template
    

    public function show($id)
    {
        $department = Department::findOrFail($id);
        return view('departments.show', compact('department'));
    }

    public function generatePDF(Request $request, $id)
    {
        $department = Department::findOrFail($id);

        // Save department-specific input fields
        foreach ($request->all() as $key => $value) {
            DepartmentField::create([
                'department_id' => $id,
                'field_name' => $key,
                'field_value' => $value,
            ]);
        }

        // Generate PDF
        $pdf = PDF::loadView('pdfs.' . strtolower($department->name), $request->all());

        return $pdf->download($department->name . '-template.pdf');
    }
}
