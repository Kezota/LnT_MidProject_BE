<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function addEmployee(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|min:5|max:20',
            'age' => 'required|integer|min:20',
            'address' => 'required|string|min:10|max:40',
            'phone' => 'required|string|max:15',
        ]);

        Employee::create($data);

        return redirect()->route('viewEmployee');
    }

   public function editEmployee(Request $request, $id) {
    $data = $request->validate([
        'name' => 'required|string|min:5|max:20',
        'age' => 'required|integer|min:20',
        'address' => 'required|string|min:10|max:40',
        'phone' => 'required|string|max:15',
    ]);

    $employee = Employee::findOrFail($id);
    $employee->update($data);

    return redirect()->route('viewEmployee');
}

    public function deleteEmployee($id) {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('viewEmployee');
    }
}
