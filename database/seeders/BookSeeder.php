<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookType;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create(['title' => 'Star Wars', 'author_id' => 1, 'book_type_id' => 3,]);
        Book::create(['title' => 'World War II', 'author_id' => 2, 'book_type_id' => 1,]);
        Book::create(['title' => 'Warszafka', 'author_id' => 2, 'book_type_id' => 2,]);
    }
}
