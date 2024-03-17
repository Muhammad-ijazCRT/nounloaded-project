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
        Schema::create('students_enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('ref_id');
            $table->string('ref_role');
            $table->string('ref_email');
            $table->string('student');
            $table->string('course');
            $table->string('semester');
            $table->longText('student_comment')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('students_enrollemnt');
    }
};
