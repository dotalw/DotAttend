<?php

use App\Models\Absence;
use App\Models\ClassSchedule;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(ClassSchedule::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Enrollment::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Absence::class)->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
