<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('roll_number')->unique();
            $table->string('name',50);
            $table->string('password');
            $table->string('email',150)->unique();
            $table->string('fname',50);
            $table->bigInteger('contact')->nullable();
            $table->date('dob');
            $table->string('add',50);
            $table->string('course',50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(table: 'students');
    }
};
