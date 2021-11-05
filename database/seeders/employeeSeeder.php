<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee')->insert([
            'emp_fname' => Str::random(5),
            'emp_lname' => Str::random(5),
            'emp_email' => Str::random(5).'@gmail.com',
            'emp_gender' => Str::random(5),
            'emp_joining_date' => Str::random(5),
            'emp_phone' => Str::random(5),
            'emp_username' => Str::random(5),
            'emp_password' => Str::random(5),
            'emp_role' => Str::random(5),
        ]);
    }
}
