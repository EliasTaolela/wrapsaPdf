@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Saved Departments</h2>

    <ul class="list-group mt-4">
        @foreach($departments as $department)
            <li class="list-group-item">
                <a href="{{ route('departments.show', $department->id) }}">{{ $department->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
