<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->unsignedBigInteger('user');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('support_ticket_id');
            $table->timestamps();
            // $table->foreign('user')->references('id')->on('users')->onDelete('CASCADE');
            // $table->foreign('support_ticket_id')->references('id')->on('support_ticket')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
