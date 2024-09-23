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
        Schema::create('health_reports', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name', 100); // VARCHAR(100)
            $table->integer('age'); // INT
            $table->date('checkup_date'); // DATE
            $table->string('status', 50); // VARCHAR(50)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_reports');
    }
};