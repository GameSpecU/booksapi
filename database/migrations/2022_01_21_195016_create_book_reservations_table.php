<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('book_reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_email');
            $table->foreignId('book_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_reservations');
    }
}
