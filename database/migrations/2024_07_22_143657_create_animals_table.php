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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('scientific_name', 60);
            $table->string('common_name', 40);
            $table->string('name', 40);
            $table->date('birthday');
            $table->string('taxonomic_group', 60);
            $table->string('class', 50);
            $table->string('family', 50);
            $table->string('species', 50);
            $table->string('habitat', 50);
            $table->boolean('protected');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
