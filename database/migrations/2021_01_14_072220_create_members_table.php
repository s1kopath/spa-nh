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
            $table->string('member_name');
            $table->string('member_email')->nullable();
            $table->string('member_phone')->nullable();
            $table->string('member_designation');
            $table->json('member_category');
            $table->text('member_biography')->nullable();
            $table->string('member_image')->nullable();
            $table->integer('member_ordering')->nullable();
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
        Schema::dropIfExists('members');
    }
}
