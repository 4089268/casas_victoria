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
        Schema::create('houses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title', 200);
            $table->longText('description');
            $table->integer('bedrooms')->unsigned()->default(0);
            $table->integer('bathrooms')->unsigned()->default(0);
            $table->integer('garages')->unsigned()->default(0);
            $table->string('surface', 100)->nullable();
            $table->string('dimensions', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
