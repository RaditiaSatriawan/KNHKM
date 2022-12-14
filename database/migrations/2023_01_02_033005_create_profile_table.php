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
        if(!Schema::hasTable('profile')){
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('displayname');
            $table->string('displayemail');
            $table->string('displayphone');
            $table->string('displaycompany');
            $table->string('displaycompanypostition');
            $table->string('displaylocation');
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('profile', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('profile');
    }
};
