<?php

use App\FunctionModel;
use Illuminate\Database\Seeder;

class FunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Náčelník kmene', 'is_in_contact' => true, 'description' => 'Hlavní vedoucí - zaštiťuje kmen na venek.'],
            ['id' => 2, 'name' => 'Ohnivec kmene', 'is_in_contact' => true, 'description' => 'Stará se o obřady a duchovno kmene'],
            ['id' => 3, 'name' => 'Strážce wampumu kmene', 'is_in_contact' => true, 'description' => 'Hospodář kmene - stará se o fungování kmene z finančního hlediska.'],
            ['id' => 4, 'name' => 'Předseda rady orlích per', 'is_in_contact' => true, 'description' => 'Dohlíží na kvalitu plněných orlích per.'],
            ['id' => 5, 'name' => 'Písmák kmene', 'is_in_contact' => true, 'description' => 'Spravuje kmenové písemnosti.'],
            ['id' => 6, 'name' => 'Owačira rodu', 'is_in_contact' => false, 'description' => 'Vedoucí rodu.'],
            ['id' => 7, 'name' => 'Psí bojovník', 'is_in_contact' => false, 'description' => 'Dohlíží na dodržování tradicí a na táboře se stará o pořádek.'],
            ['id' => 8, 'name' => 'Webmaster', 'is_in_contact' => true, 'description' => 'Správce webu'],
            ['id' => 9, 'name' => 'Strážce kopí', 'is_in_contact' => false, 'description' => 'Člen kmene s nejvyšší hodností'],
            ['id' => 10, 'name' => 'Vyvolávač', 'is_in_contact' => false, 'description' => ''],
        ];
        FunctionModel::insert($data);
    }
}
