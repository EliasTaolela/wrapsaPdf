@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Welcome to WrapsaPdf</h1>
    <p class="lead">This application allows you to generate PDF templates for different departments of the company.</p>
    
    <div class="card mt-4">
        <div class="card-body">
            <form action="{{ route('departments.action') }}" method="GET">
                @csrf
                <div class="form-group">
                    <label for="departmentAction">What would you like to do?</label>
                    <select class="form-control" id="departmentAction" name="action" onchange="this.form.submit()">
                        <option value="">Select an option</option>
                        <option value="add">Add a New Department</option>
                        <option value="list">List Saved Departments</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

