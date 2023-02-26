<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('companies')->insert([
                'name' => 'Company' . $i,
                'address' => Str::random(10) . '@gmail.com',
                'code' => Str::random(10),
            ]);
        }
    }
}
