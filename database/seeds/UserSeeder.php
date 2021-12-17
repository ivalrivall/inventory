<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name'=>'admin', 'email'=> 'admin@gmail.com', 'password' => bcrypt('test1234'), 'role' => 'admin'],
            ['name'=>'staff', 'email'=> 'staff@gmail.com', 'password' => bcrypt('test1234'), 'role' => 'staff']
        ];
        DB::table('users')->insert($users);
    }
}
