<?php

use App\Lodge;
use Illuminate\Database\Seeder;

class LodgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Lóže skřítků', 'short_name' => 'LS'],
            ['id' => 2, 'name' => 'Malá lóže', 'short_name' => 'ML'],
            ['id' => 3, 'name' => 'Velká lóže', 'short_name' => 'VL']
        ];
        Lodge::insert($data);
    }
}
