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
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->mediumText('address')->nullable();
            $table->mediumText('contact')->nullable();
            $table->text('profileurl')->nullable()->default('images/userphotos/default.jpg');
            $table->mediumText('facebook')->nullable();
            $table->mediumText('twitter')->nullable();
            $table->mediumText('linkedin')->nullable();
            $table->mediumText('googleplus')->nullable();
            $table->mediumText('altemail')->nullable();
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
