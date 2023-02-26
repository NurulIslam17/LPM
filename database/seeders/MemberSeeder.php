<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=10;$i++)
        {
            $c_id = rand(1,10);
            $c_phone = rand(1,100);
            DB::table('members')->insert([
                'company_id'=>$c_id,
                'name'=>Str::random(4),
                'phone'=>$c_phone,
                'email'=>Str::random(4).'@gmail.com',
            ]);
        }
    }
}
