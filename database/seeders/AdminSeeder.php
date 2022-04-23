<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::TABLE('admins')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
            'role_id' => '1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
