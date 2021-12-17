<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [
            ['nama'=>'Supplier 1', 'email'=> 'supplier1@gmail.com', 'alamat' => 'Jakarta', 'telepon' => '02154219232'],
            ['nama'=>'Supplier 2', 'email'=> 'supplier2@gmail.com', 'alamat' => 'Solo', 'telepon' => '0217672122']
        ];
        DB::table('suppliers')->insert($suppliers);
    }
}
