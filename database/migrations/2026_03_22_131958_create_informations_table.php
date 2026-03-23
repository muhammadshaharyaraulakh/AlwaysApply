<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            
            // The foreign key linking to the user. This is the ONLY field (besides ID/timestamps) that shouldn't be nullable.
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Media & Documents (storing file paths)
            $table->string('cover_photo')->nullable();
            $table->string('avatar_photo')->nullable();
            $table->string('resume')->nullable(); // For the CV pdf

            // General Information
            $table->string('professional_headline')->nullable();
            $table->string('availability_status')->nullable(); // e.g., "Available", "Looking for Internship", "Not Looking"
            $table->string('location')->nullable();
            $table->text('about_me')->nullable(); // Bio

            // Social Media Links
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('instagram')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informations');
    }
};