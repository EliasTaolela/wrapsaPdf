@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Departments</h1>
    <a href="{{ route('departments.create') }}" class="btn btn-primary">Add New Department</a>

    @if($departments->isEmpty())
        <p>No departments found.</p>
    @else
        <ul class="list-group mt-4">
            @foreach($departments as $department)
                <li class="list-group-item">
                    <a href="{{ route('departments.show', $department->id) }}">{{ $department->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
