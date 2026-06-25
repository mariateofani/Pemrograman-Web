<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('hasil_panens', function (Blueprint $table) {
            $table->string('komoditas')->nullable();
            $table->date('tanggal_panen')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('hasil_panens', function (Blueprint $table) {
            $table->dropColumn(['komoditas','tanggal_panen']);
        });
    }
};