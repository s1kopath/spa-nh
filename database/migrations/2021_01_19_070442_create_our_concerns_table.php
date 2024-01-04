<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurConcernsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_concerns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('concern_title');
            $table->text('concern_url')->nullable();
            $table->string('concern_image')->nullable();
            $table->tinyInteger('status')->comment('1 = Active, 2 = Inactive');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('our_concerns');
    }
}
