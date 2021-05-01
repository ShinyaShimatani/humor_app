<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('mimic');
            $table->integer('maso');
            $table->integer('pathos');
            $table->integer('updown');
            $table->integer('black_joking');
            $table->integer('volume');
            $table->integer('energy');
            $table->integer('insane');
            $table->string('sns_Twitter');
            $table->string('sns_Youtube');
            $table->string('others');
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
        Schema::dropIfExists('members');
    }
}
