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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('ref_id')->nullable();
            $table->string('ref_role')->nullable();
            $table->string('ref_email')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('email_status')->default(0);
            $table->string('email_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role')->default('student');
            $table->string('status')->default(1);
            $table->string('contact');
            $table->string('password');
            $table->string("password_token")->nullable();
            $table->string('subscription')->nullable();
            $table->longText('student_courses')->nullable();
            $table->longText('tma_courses')->nullable();
            $table->longText('pp_courses')->nullable();
            $table->string('tutor_request')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('students');
    }
};
