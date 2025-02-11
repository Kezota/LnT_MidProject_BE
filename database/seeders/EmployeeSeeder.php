<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'name' => 'John Doe',
                'age' => 30,
                'address' => '123 Main St, Anytown',
                'phone' => '081234567890'
            ],
            [
                'name' => 'Jane Smith',
                'age' => 25,
                'address' => '456 Elm St, Othertown',
                'phone' => '082345678901'
            ],
            [
                'name' => 'Alice Johnson',
                'age' => 28,
                'address' => '789 Oak St, Anycity',
                'phone' => '083456789012'
            ],
            [
                'name' => 'Bob Brown',
                'age' => 35,
                'address' => '101 Pine St, Somecity',
                'phone' => '084567890123'
            ],
            [
                'name' => 'Charlie Davis',
                'age' => 22,
                'address' => '202 Maple St, Anothercity',
                'phone' => '085678901234'
            ],
            [
                'name' => 'Diana Evans',
                'age' => 29,
                'address' => '303 Birch St, Yetanothercity',
                'phone' => '086789012345'
            ],
            [
                'name' => 'Ethan Harris',
                'age' => 32,
                'address' => '404 Cedar St, Lastcity',
                'phone' => '087890123456'
            ],
            [
                'name' => 'Fiona Clark',
                'age' => 27,
                'address' => '505 Walnut St, Nextcity',
                'phone' => '088901234567'
            ],
            [
                'name' => 'George Lewis',
                'age' => 31,
                'address' => '606 Spruce St, Finalcity',
                'phone' => '089012345678'
            ],
            [
                'name' => 'Hannah Walker',
                'age' => 26,
                'address' => '707 Fir St, Endcity',
                'phone' => '081123456789'
            ]
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
