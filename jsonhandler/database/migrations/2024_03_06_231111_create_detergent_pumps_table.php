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
        Schema::create('detergent_pumps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->constrained('devices');
            $table->string('name');
            $table->boolean('active');
            $table->string('trigger');
            $table->integer('dosage');
            $table->float('xp');
            $table->float('xt');
            $table->integer('total');
            $table->integer('remaining');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detergent_pumps');
    }
};
