<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name' => 'баклажани',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'помідори',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'сир твердий',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'яйця',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'борошно',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'соняшникова олія',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'сіль',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'перець',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'закваска з житнього борошна',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'вода',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'житнє борошно',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'пшеничне борошно',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'рослинна олія',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'цукор',
        ]);
    }
}
