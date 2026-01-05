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
        Schema::create('bicycles', function (Blueprint $table) {
            $table->id();
                $table->string('name', 80);
                $table->float('wheel_size');
                $table->integer('gears');
                $table->enum('sex',['férfi','női','unisex']);
                $table->enum('type',['MTB','városi','országúti','cross']);
                $table->string('size', 10)->nullable();
                $table->string('color', 20)->nullable();
                $table->foreignId('manufacturer_id')
                ->constrained('manufacturers')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
                $table->timestamps();
                $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bicycles');
    }
};
