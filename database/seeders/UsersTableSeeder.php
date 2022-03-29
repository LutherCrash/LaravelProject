<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
use Str;

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
            'name' => 'Jorge Varon',
            'email' => 'jamartinez420@misena.edu.co',
            'password' => Hash::make('password'),
        ]);
    }
}
