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
    Schema::create('alljobs', function (Blueprint $table) {
    $table->id();
    $table->string('title');

    $table->enum('status', ['Actively Hiring','Closed'])->default('Actively Hiring');

    $table->string('summary');

    $table->json('responsibilities');
    $table->json('qualifications');
    $table->json('preferred_skills');

    $table->string('education');

    $table->integer('minimum_salary');
    $table->integer('maximum_salary');

    $table->enum('salary_type', ['Monthly','Yearly'])->default('Monthly');

    $table->enum('job_type', ['Full Time','Part Time','Internship'])->default('Full Time');

    $table->enum('work_placement', ['On Site','Remote','Hybrid'])->default('On Site');

    $table->enum('seniority_level', ['Entry Level','Mid Level','Senior Level'])->default('Mid Level');

    $table->date('application_deadline');

    $table->foreignId('company_id')
          ->constrained('companies')
          ->onDelete('cascade');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alljobs');
    }
};
