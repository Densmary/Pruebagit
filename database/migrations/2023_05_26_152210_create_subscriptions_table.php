<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('duration');
            $table->float('price');
            $table->string('type');

            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->
            on('users')->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('id_pays')->unsigned();
            $table->foreign('id_pays')->references('id')->
            on('pays')->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('id_activities')->unsigned();
            $table->foreign('id_activities')->references('id')->
            on('activities')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('subscriptions');
    }
}
