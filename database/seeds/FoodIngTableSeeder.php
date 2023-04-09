<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class FoodIngTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_ings')->insert([
            'ingredient_name' => 'баклажани',
            'ingredient_count' => '500',
            'ingredient_kind' => 'гр.',
            'recipe_id' => '1',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'помідори',
            'ingredient_count' => '500',
            'ingredient_kind' => 'гр.',
            'recipe_id' => '1',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'сир твердий',
            'ingredient_count' => '200',
            'ingredient_kind' => 'гр.',
            'recipe_id' => '1',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'яйця',
            'ingredient_count' => '2',
            'ingredient_kind' => 'шт.',
            'recipe_id' => '1',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'борошно',
            'ingredient_count' => '1',
            'ingredient_kind' => 'ст.',
            'recipe_id' => '1',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'соняшникова олія',
            'ingredient_count' => null,
            'ingredient_kind' => null,
            'recipe_id' => '1',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'сіль',
            'ingredient_count' => null,
            'ingredient_kind' => null,
            'recipe_id' => '1',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'перець',
            'ingredient_count' => null,
            'ingredient_kind' => null,
            'recipe_id' => '1',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'закваска з житнього борошна',
            'ingredient_count' => '4',
            'ingredient_kind' => 'ст. л.',
            'recipe_id' => '2',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'вода',
            'ingredient_count' => '200',
            'ingredient_kind' => 'мл',
            'recipe_id' => '2',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'житнє борошно',
            'ingredient_count' => '150',
            'ingredient_kind' => 'гр.',
            'recipe_id' => '2',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'пшеничне борошно',
            'ingredient_count' => '220-250',
            'ingredient_kind' => 'гр.',
            'recipe_id' => '2',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'рослинна олія',
            'ingredient_count' => '2',
            'ingredient_kind' => 'ст. л.',
            'recipe_id' => '2',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'цукор',
            'ingredient_count' => '2',
            'ingredient_kind' => 'ст. л.',
            'recipe_id' => '2',
        ]);
        DB::table('food_ings')->insert([
            'ingredient_name' => 'сіль',
            'ingredient_count' => '2',
            'ingredient_kind' => 'ст. л.',
            'recipe_id' => '2',
        ]);
    }
}
