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
        Schema::create('versions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('model_id')->constrained();
            $table->string('name');
            $table->string('name_ur');
            $table->string('url_slug');
            $table->boolean('imported');
            $table->boolean('published');
            $table->boolean('popular');
            $table->boolean('active');
            $table->integer('position');
            $table->decimal('capacity', 10, 2);
            $table->string('transmission_type');
            $table->string('fuel_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versions');
    }
};
