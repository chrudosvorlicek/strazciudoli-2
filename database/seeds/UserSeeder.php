<?php

use Illuminate\Database\Seeder;

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
            'first_name' => 'Dev',
            'last_name' => 'Admin',
            'nick' => 'nick',
            'email_verified_at' => now(),
            'email' => 'admin@strazciudoli.cz',
            'password' => Hash::make('password'),
            'lodge_id' => 3,
            'password_type' => 'bcrypt'
        ]);
    }
}
