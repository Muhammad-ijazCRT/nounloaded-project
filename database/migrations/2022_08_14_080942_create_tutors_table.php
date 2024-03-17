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
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('ref_id')->nullable();
            $table->string('ref_role')->nullable();
            $table->string('ref_email')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('email_token');
            $table->mediumText('bio')->nullable();
            $table->mediumText('about_me')->nullable();
            $table->string('email_status')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role')->default('tutor');
            $table->string('status')->default(1);
            $table->string('contact');
            $table->string('password');
            $table->string('gender')->nullable();
            $table->string('teaching_experience')->nullable();
            $table->mediumText('te_det')->nullable();
            $table->string('teaching_method')->nullable();
            $table->string('degree')->nullable();
            $table->string('institution')->nullable();
            $table->string('application')->nullable();
            $table->string('bonus_class')->nullable();
            $table->string('class_type')->nullable();
            $table->string('quotes')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('personal_url')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('speciality')->nullable();
            $table->string('tutor_faculty');
            $table->longText('tutor_semesters')->nullable();
            $table->longText('tutor_courses')->nullable();
            $table->string('pay_status')->default('unpaid');
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
        Schema::dropIfExists('tutors');
    }
};
