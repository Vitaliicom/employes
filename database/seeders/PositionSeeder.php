<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'name' => 'Директор',
            'amountForHour' => '30',
            'monthlyRate' => '2000',
        ]);
        DB::table('positions')->insert([
            'name' => 'Зам. директора',
            'amountForHour' => '25',
            'monthlyRate' => '1500',
        ]);
        DB::table('positions')->insert([
            'name' => 'Бухгалтер',
            'amountForHour' => '22',
            'monthlyRate' => '1200',
        ]);
        DB::table('positions')->insert([
            'name' => 'Экономист',
            'amountForHour' => '15',
            'monthlyRate' => '1000',
        ]);
        DB::table('positions')->insert([
            'name' => 'Секретарь',
            'amountForHour' => '8',
            'monthlyRate' => '800',
        ]);
    }
}
