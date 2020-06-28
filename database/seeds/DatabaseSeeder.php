<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LodgeSeeder::class,
            ClanSeeder::class,
            TagSeeder::class,
            FunctionSeeder::class,
            UserSeeder::class,
            EventSeeder::class,
        ]);
    }
}
