<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'ordername' => 'sample',
            'kai' => 'ソワレ',
            'address' => 'fj1160ic@aa.jp.fujitsu.com',
            'name' => 'Judy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
