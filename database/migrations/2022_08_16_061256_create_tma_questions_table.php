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
        Schema::create('tma_questions', function (Blueprint $table) {
            $table->id();
            $table->string('ref_id');
            $table->string('ref_role');
            $table->string('ref_email');
            $table->string('course');
            $table->string('semester');
            $table->string('doctype')->nullable();
            $table->string('tmatype')->nullable();
            $table->string('tma_document');
            $table->string('document_ext');
            $table->longText('document_text');
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
        Schema::dropIfExists('tma_questions');
    }
};
