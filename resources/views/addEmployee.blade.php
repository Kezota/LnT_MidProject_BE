@extends('layouts.master')
@section('title', "Add Employee | PT ChipiChapa")

@section('content')
    <section class="container container-fluid">
        <h1>Add Employee</h1>
        <form action="{{ route('addEmployee') }}" method="POST">
            @csrf
            <div class="form-group mt-3">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                @if($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="form-group mt-3">
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" class="form-control" value="{{ old('age') }}">
                @if($errors->has('age'))
                    <div class="text-danger">{{ $errors->first('age') }}</div>
                @endif
            </div>
            <div class="form-group mt-3">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                @if($errors->has('address'))
                    <div class="text-danger">{{ $errors->first('address') }}</div>
                @endif
            </div>
            <div class="form-group mt-3">
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
                @if($errors->has('phone'))
                    <div class="text-danger">{{ $errors->first('phone') }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add Employee</button>
        </form>
    </section>
@endsection
