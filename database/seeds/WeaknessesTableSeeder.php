<?php

use Illuminate\Database\Seeder;
use App\Models\Frs\Weakness;
class WeaknessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Weakness::truncate();
        Weakness::create(['category_id'=>'1','name'=>'Menus abilidade fasilitasaun','description'=>'']);
        Weakness::create(['category_id'=>'1','name'=>'Menus konesementu konaba program (Implementasaun la tuir matadalan)','description'=>'']);
        Weakness::create(['category_id'=>'1','name'=>'Menus konesementu tekniku (engineiru)','description'=>'']);
        Weakness::create(['category_id'=>'1','name'=>'Menus konesementu tekniku (finansas)','description'=>'']);
        Weakness::create(['category_id'=>'1','name'=>'Menus konesementu tekniku (social)','description'=>'']);
        Weakness::create(['category_id'=>'2','name'=>'Fraku entre ekipa Municipiu/AP','description'=>'']);
        Weakness::create(['category_id'=>'2','name'=>'Fraku entre ekipa servisu (eng, social, fin)','description'=>'']);
        Weakness::create(['category_id'=>'2','name'=>'Fraku ho EJS','description'=>'']);
        Weakness::create(['category_id'=>'2','name'=>'Fraku ho komunidade','description'=>'']);
        Weakness::create(['category_id'=>'2','name'=>'Fraku ho lideransa lokal (Xefe Suco, Aldeia)','description'=>'']);
        Weakness::create(['category_id'=>'2','name'=>'Fraku ho seitor relevante','description'=>'']);
        Weakness::create(['category_id'=>'4','name'=>'Menus husi ekipa  Municipiu','description'=>'']);
        Weakness::create(['category_id'=>'4','name'=>'Menus husi ekipa AP','description'=>'']);
        Weakness::create(['category_id'=>'4','name'=>'Menus husi ekipa Municipiual & AP','description'=>'']);
    }
}
