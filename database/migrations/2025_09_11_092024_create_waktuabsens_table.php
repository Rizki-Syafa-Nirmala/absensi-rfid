<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('waktuabsens', function (Blueprint $table) {
            $table->id();
            // waktu masuk
            $table->time('jam_masuk');      // contoh: 07:00
            $table->time('batas_masuk');    // contoh: 07:30

            // waktu pulang
            $table->time('jam_pulang');     // contoh: 15:00
            $table->time('batas_pulang');
            $table->string('hari');
            $table->boolean('manual')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waktuabsens');
    }
};
