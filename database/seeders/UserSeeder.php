<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\SUpport\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'name' => 'admin@x.com',
            'usertype' => 1,
            'phone' => '08541849819',
            'address' => 'Jalan dashdiuas djsahdis',
            'password' => Hash::make('admin123'),
        ]);

        DB::table('users')->insert([
            'name' => 'user1',
            'name' => 'user1@x.com',
            'usertype' => 0,
            'phone' => '08165465651',
            'address' => 'Jalan fjh;ofh jskdla',
            'password' => Hash::make('user1234'),
        ]);
    }
}
