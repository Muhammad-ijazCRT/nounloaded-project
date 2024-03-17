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
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->string("ref_id");
            $table->string("ref_email");
            $table->string("ref_role");
            $table->string("tma_fee");
            $table->string("pp_fee");
            $table->string("tutor_fee");
            $table->string("cs_fee");
            $table->string("npet_fee");
            $table->string("agent_fee");
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
        Schema::dropIfExists('fees');
    }
};
