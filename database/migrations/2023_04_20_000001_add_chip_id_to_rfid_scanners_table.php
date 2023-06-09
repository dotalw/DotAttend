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
        Schema::table('rfid_scanners', function (Blueprint $table) {
            $table->unsignedInteger('esp_id')->after('location')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rfid_scanners', function (Blueprint $table) {
            $table->dropColumn('esp_id');
        });
    }
};
