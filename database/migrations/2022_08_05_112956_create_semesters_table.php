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
        Schema::create('semesters', function (Blueprint $table) {
            $table->id();
            $table->string('ref_id')->nullable();
            $table->string('ref_role')->nullable();
            $table->string('ref_email')->nullable();
            $table->string("programme");
            $table->string("level");
            $table->mediumText("courses");
            $table->string("semester_no");
            $table->string("semester_fees")->default(0);
            $table->string("exam_fees")->default(0);
            $table->string("semester_status")->default(1);
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
        Schema::dropIfExists('semesters');
    }
};
