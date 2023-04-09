<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'user_id' => '1',
            'kind_of_recipe' => 'second_dish',
            'recipe_name' => 'Баклажани від мами',
            'recipe_description' => '',
            'recipe_image' => 'main.jpg',
            'ing_for_filter' => 'баклажани,борошно,перець,помідори,сир твердий,соняшникова олія,сіль,яйця',
        ]);
        DB::table('recipes')->insert([
            'user_id' => '1',
            'kind_of_recipe' => 'baking',
            'recipe_name' => 'Бездріжджовий хліб на заквасці з житнього борошна	',
            'recipe_description' => '',
            'recipe_image' => 'file_6448bf2e0037f.jpg',
            'ing_for_filter' => 'вода,житнє борошно,закваска з житнього борошна,пшеничне борошно,рослинна олія,сіль,цукор',
        ]);
    }
}
