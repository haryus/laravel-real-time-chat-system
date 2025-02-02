<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //database/migrations/<creation_date_>create_messages_table.php
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //insert the lines below
            $table->integer('user_id')->unsigned();
            $table->text('message');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
