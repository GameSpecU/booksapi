<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->foreignId('author_id')->constrained();
            $table->foreignId('book_type_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
