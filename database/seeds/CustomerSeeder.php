<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            ['nama'=>'customer 1', 'email'=> 'customer1@gmail.com', 'alamat' => 'Jakarta', 'telepon' => '02187211262'],
            ['nama'=>'customer 2', 'email'=> 'customer2@gmail.com', 'alamat' => 'Solo', 'telepon' => '02176213222']
        ];
        DB::table('customers')->insert($customers);
    }
}
