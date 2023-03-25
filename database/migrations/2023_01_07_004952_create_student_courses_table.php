<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->primary(['student_id', 'course_id']);
            $table->foreignId('student_id')->constrained()->onDelete('cascade');;
            $table->foreignId('course_id')->constrained()->onDelete('cascade');;
            // Add columns to existing migrations: php artisan migrate:refresh
            $table->float('Quiz1')->default(0);
            $table->float('Quiz2')->default(0);
            $table->float('Quiz3')->default(0);
            $table->float('Quiz4')->default(0);
            $table->float('finalExam')->default(0);
            $table->float('GPA')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_courses');
    }
};
