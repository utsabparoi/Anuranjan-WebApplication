<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('donate_infos')){
            Schema::create('donate_infos', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('contact_number');
                $table->date('dob');
                $table->string('occupation');
                $table->string('membership');
                $table->string('aggrement');
                $table->string('donate_amount');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donate_infos');
    }
}
