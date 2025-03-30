<?php

namespace Tests\Feature;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployeeControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_add_an_employee()
    {
        // Arrange
        $data = [
            'name' => 'John Doe',
            'age' => 25,
            'address' => 'Jakarta, Indonesia',
            'phone' => '081234567890',
        ];

        // Act
        $response = $this->post(route('addEmployee'), $data);

        // Assert
        $response->assertRedirect(route('viewEmployee'));
        $this->assertDatabaseHas('employees', $data);
    }

    /** @test */
    public function it_can_edit_an_employee()
    {
        // Arrange
        $employee = Employee::factory()->create([
            'name' => 'Old Name',
            'age' => 28,
        ]);

        $updatedData = [
            'name' => 'New Name',
            'age' => 30,
            'address' => 'Jakarta, Indonesia',
            'phone' => '081234567890',
        ];

        // Act
        $response = $this->put(route('editEmployee', $employee->id), $updatedData);

        // Assert
        $response->assertRedirect(route('viewEmployee'));
        $this->assertDatabaseHas('employees', ['id' => $employee->id, 'name' => 'New Name']);
    }

    /** @test */
    public function it_can_delete_an_employee()
    {
        // Arrange
        $employee = Employee::factory()->create();

        // Act
        $response = $this->delete(route('deleteEmployee', $employee->id));

        // Assert
        $response->assertRedirect(route('viewEmployee'));
        $this->assertDatabaseMissing('employees', ['id' => $employee->id]);
    }
}
