<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('volunteers')){
            Schema::create('volunteers', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('address');
                $table->string('contact_number');
                $table->string('email');
                $table->string('occupation');
                $table->string('volunteer_photo');
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
        Schema::dropIfExists('volunteers');
    }
}
