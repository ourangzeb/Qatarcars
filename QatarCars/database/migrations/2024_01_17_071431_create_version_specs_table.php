<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('version_specs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('generation_id')->constrained();
            $table->boolean('published');
            $table->boolean('active');
            $table->boolean('imported');
            $table->integer('car_version_id');
            $table->integer('start_year');
            $table->integer('end_year')->nullable();
            $table->decimal('capacity', 10, 2);
            $table->string('transmission_type');
            $table->string('fuel_type');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('version_specs');
    }
};
