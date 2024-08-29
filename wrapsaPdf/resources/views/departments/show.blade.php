@extends('layouts.app')

@section('content')
    <h1>{{ $department->name }} Form</h1>

    <form action="{{ url('/departments/' . $department->id . '/generate-pdf') }}" method="POST">
        @csrf
        <!-- Example Fields - dynamically generate fields based on the department -->
        <div>
            <label for="field1">Field 1</label>
            <input type="text" name="field1" id="field1">
        </div>

        <div>
            <label for="field2">Field 2</label>
            <input type="text" name="field2" id="field2">
        </div>

        <button type="submit">Generate PDF</button>
    </form>
@endsection
