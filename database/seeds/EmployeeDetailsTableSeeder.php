<?php

use Illuminate\Database\Seeder;

class EmployeeDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\EmployeeDetail::class, 10)->create();
    }
}
