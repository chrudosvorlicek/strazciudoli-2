<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Lože skřítků', 'comment' => 'vhodné pro LS'],
            ['id' => 2, 'name' => 'Malá lože', 'comment' => 'vhodné pro ML'],
            ['id' => 3, 'name' => 'Velká lože', 'comment' => 'vhodné pro VL'],
            ['id' => 4, 'name' => 'Táboření', 'comment' => 'vícedenní táboření'],
            ['id' => 5, 'name' => 'Puťák', 'comment' => 'vícedenní putování'],
            ['id' => 6, 'name' => 'Výlet', 'comment' => 'jednodenní výlet']
        ];
        Tag::insert($data);
    }
}
