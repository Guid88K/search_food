<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_recommendations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('recipe_id');
            $table->text('description');
            $table->string('assessments');
            $table->text('respond');
            $table->boolean('is_accept');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_recommendations');
    }
};
