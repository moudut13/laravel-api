<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::TABLE('permissions')->insert([
            'name' => 'Dashboard',
            'slug' => 'dashboard',
        ]);
        DB::TABLE('permissions')->insert([
            'name' => 'Admin',
            'slug' => 'user',
        ]);
        DB::TABLE('permissions')->insert([
            'name' => 'Role',
            'slug' => 'role',
        ]);
    }
}
