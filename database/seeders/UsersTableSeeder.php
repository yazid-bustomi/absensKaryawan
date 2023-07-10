<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('11'),
            'alamat' => 'Winongan',
            'phone' => '088',
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'user1',
            'username' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('11'),
            'alamat' => 'Bangil111',
            'phone' => '111',
            'role' => 'karyawan',
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'username' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('11'),
            'alamat' => 'Bangil222',
            'phone' => '222',
            'role' => 'karyawan',
        ]);
    }
}
