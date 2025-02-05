@extends('layouts.master')
@section('title', "View Employees | PT ChipiChapa")

@section('content')
    <section class="container container-fluid">
        <h1>Employees List</h1>
        @if($employees->isEmpty())
            <p>There are no employees yet, please add some first.</p>
            <a href="{{ route('viewAddEmployee') }}" class="btn btn-success">Add Employee</a>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->age }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>
                                <a href="{{ route('viewEditEmployee', $employee->id) }}" class="btn btn-primary btn-sm">
                                    Edit
                                </a>
                                <form action="{{ route('deleteEmployee', $employee->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
@endsection
