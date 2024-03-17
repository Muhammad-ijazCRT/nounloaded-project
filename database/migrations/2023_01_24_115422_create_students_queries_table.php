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
        Schema::create('students_queries', function (Blueprint $table) {
            $table->id();
            $table->string('ref_id');
            $table->string('ref_role');
            $table->string('ref_email');
            $table->string('query_type');
            $table->string('query_file');
            $table->string('file_ext');
            $table->mediumText('desc');
            $table->longText('replies')->nullable();
            $table->string('status')->default("0");
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
        Schema::dropIfExists('students_queries');
    }
};
