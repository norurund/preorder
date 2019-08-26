<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'ordername' => 'Tom',
            'kai' => 'ソワレ',
            'tiketsum' => '2',
            'tiketadl' => '1',
            'tiketcld' => '1',
            'address' => 'fj1160ic@aa.jp.fujitsu.com',
            'name' => 'Judy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
