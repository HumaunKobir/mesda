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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('distric');
            $table->string('city');
            $table->string('phone');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('bload_group');
            $table->string('academic_one');
            $table->string('institution_one');
            $table->string('passing_year_one');
            $table->string('academic_two')->nullable();
            $table->string('institution_two')->nullable();
            $table->string('passing_year_two')->nullable();
            $table->string('academic_three')->nullable();
            $table->string('institution_three')->nullable();
            $table->string('passing_year_three')->nullable();
            $table->string('academic_four')->nullable();
            $table->string('institution_four')->nullable();
            $table->string('passing_year_four')->nullable();
            $table->string('prof_dsignation')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('user_image');
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->tinyInteger('status');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
