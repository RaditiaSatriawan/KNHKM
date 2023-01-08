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
        if(!Schema::hasTable('company')){
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('companyname');
            $table->string('companyrank');
            $table->string('companyserve');
            $table->string('companydeco');
            $table->longText('desc');
            $table->bigInteger('user_id')->unsigned();
            
            $table->timestamps();
        });
        Schema::table('company', function($table) {
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
        Schema::dropIfExists('company');
    }
};
