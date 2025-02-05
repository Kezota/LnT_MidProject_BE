@extends('layouts.master')
@section('title', "Edit Employee | PT ChipiChapa")

@section('content')
    <section class="container container-fluid">
        <h1>Edit Employee</h1>
        <form action="{{ route('editEmployee', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mt-3">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $employee->name) }}">
                @if($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="form-group mt-3">
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" class="form-control" value="{{ old('age', $employee->age) }}">
                @if($errors->has('age'))
                    <div class="text-danger">{{ $errors->first('age') }}</div>
                @endif
            </div>
            <div class="form-group mt-3">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $employee->address) }}">
                @if($errors->has('address'))
                    <div class="text-danger">{{ $errors->first('address') }}</div>
                @endif
            </div>
            <div class="form-group mt-3">
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $employee->phone) }}">
                @if($errors->has('phone'))
                    <div class="text-danger">{{ $errors->first('phone') }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Employee</button>
        </form>
    </section>
@endsection
