<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('dobr_name');
            $table->integer('contanct_nbr');
            $table->string('user_address');
            $table->string('user_gender');
            $table->string('vaccination_area');
            $table->string('vaccine_name');
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
        Schema::dropIfExists('patients');
    }
}
