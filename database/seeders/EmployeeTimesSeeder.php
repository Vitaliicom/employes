<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class EmployeeTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for ($i=1; $i < 100; $i++) {
	        DB::table('employee_times')->insert([	            
	            'employee_id' => rand(1,20),
	            'dt' =>date('Y-m-d H:i:s',rand(strtotime('-22 days'),strtotime('+7 days')) ),
	            'time' => rand(3,8),
	        ]);
	    }
    }
}
