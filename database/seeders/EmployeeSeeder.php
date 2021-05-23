<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i < 21; $i++) 
        DB::table('employees')->insert([
            'fio' => 'Имя Фамилия - '.$i,
            'department_id' => rand(1,3),
            'dob' =>date('Y-m-d H:i:s',rand(strtotime('-39 years'),strtotime('-19 years')) ),
            'position_id' => rand(1,5),
            'type_id' => rand(1,2),
            
        ]);
    }
}
