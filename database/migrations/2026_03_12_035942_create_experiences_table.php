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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->enum('jobType', ['Full Time', 'Part Time', 'Internship', 'contract', 'Freelance']);
            $table->string('location');
            $table->string('start_month');
            $table->string('start_year');
            $table->string('end_month')->nullable(); // <-- MUST BE NULLABLE
            $table->string('end_year')->nullable();  // <-- MUST BE NULLABLE
            $table->string('description');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
