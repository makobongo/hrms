<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Employee::class, 10)->create()->each(function ($employee) {
            $employee->employeedetail()->save(factory(App\EmployeeDetail::class)->make());
        });
    }
}