<?php

namespace Tests\Unit;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployeeModelTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_an_employee()
    {
        // Arrange
        $data = [
            'name' => 'Alice Johnson',
            'age' => 30,
            'address' => 'Bandung, Indonesia',
            'phone' => '081234567890',
        ];

        // Act
        $employee = Employee::create($data);

        // Assert
        $this->assertDatabaseHas('employees', $data);
        $this->assertEquals('Alice Johnson', $employee->name);
    }
}
