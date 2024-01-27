<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('kind_of_recipe');
            $table->string('recipe_name');
            $table->text('recipe_description')->nullable();;
            $table->string('recipe_image');
            $table->boolean('is_published')->default(false);
            $table->string('ing_for_filter');
            $table->string('calories');
            $table->string('improve');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
