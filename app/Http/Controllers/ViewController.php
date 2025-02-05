<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewHomepage() {
        return view('home');
    }

    public function viewEmployee() {
        $employees = Employee::all();
        return view('viewEmployee', compact('employees'));
    }

    public function viewAddEmployee() {
        return view('addEmployee');
    }

    public function viewEditEmployee($id) {
        $employee = Employee::findOrFail($id);
        return view('editEmployee', compact('employee'));
    }
}
