<?php

use App\Clan;
use Illuminate\Database\Seeder;

class ClanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Hokapi Witko', 'description' => 'Smíšený klan dospělých'],
            ['name' => 'Mayašleča Kuža', 'description' => 'Klan dospělých a dospívajících kluků.'],
            ['name' => 'Potící se medvědi', 'description' => 'Smíšený klan dospělých zaměřený na činnost v rámci LLM.'],
            ['name' => 'Bílý Bizon', 'description' => null],
            ['name' => 'Černý Mustang', 'description' => 'Klan dospělých holek'],
            ['name' => 'Lesní skřítkové 6-9 let', 'description' => null],
            ['name' => 'Polární lišky 10-15 let', 'description' => null],
            ['name' => 'Rychlý tomahawk', 'description' => null],
            ['name' => 'Ohnivé vlčice', 'description' => null]
        ];
        Clan::insert($data);
    }
}
