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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('ref_id');
            $table->string('ref_role');
            $table->string('ref_email');
            $table->string('bonus')->nullable();
            $table->string('class_per_week')->nullable();
            $table->string('hrs_per_week')->nullable();
            $table->string('days')->nullable();
            $table->string('pref_charges')->nullable();
            $table->string('pay_allowed')->nullable();
            $table->string('duration')->nullable();
            $table->string('price')->nullable();
            $table->string('bname')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('acc_name')->nullable();
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
        Schema::dropIfExists('classes');
    }
};
