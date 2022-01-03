<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('members')){
            Schema::create('members', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('contact_number');
                $table->date('dob');
                $table->string('occupation');
                $table->string('aggrement');
                $table->string('member_photo');
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
        Schema::dropIfExists('members');
    }
}
