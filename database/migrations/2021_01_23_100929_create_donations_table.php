<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doner_name')->nullable();
            $table->string('doner_email')->nullable();
            $table->string('doner_phone')->nullable();
            $table->string('doner_organization')->nullable();
            $table->text('doner_message')->nullable();
            $table->string('donation_amount')->nullable();
            $table->string('receiver_bkash_no')->nullable();
            $table->string('sender_bkash_no')->nullable();
            $table->string('payment_method')->nullable();
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
        Schema::dropIfExists('donations');
    }
}
