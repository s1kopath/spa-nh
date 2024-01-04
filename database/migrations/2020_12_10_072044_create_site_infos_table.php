<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_title',191);
            $table->string('site_logo',191);
            $table->text('tagline')->nullable();
            $table->text('address')->nullable();
            $table->string('location_lat')->nullable();
            $table->string('location_lon')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->text('twitter')->nullable();
            $table->text('youtube')->nullable();
            $table->text('linkedin')->nullable();
            //$table->string('pinterest');
            //$table->string('tumblr');
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
        Schema::dropIfExists('site_infos');
    }
}
