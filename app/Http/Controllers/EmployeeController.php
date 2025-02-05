<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function addEmployee(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:18|max:70',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Employee::create($data);

        return redirect()->route('viewEmployee');
    }

   public function editEmployee(Request $request, $id) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|integer|min:18|max:70',
        'address' => 'required|string|max:255',
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
