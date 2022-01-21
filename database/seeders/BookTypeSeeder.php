<?php

namespace Database\Seeders;

use App\Models\BookType;
use Illuminate\Database\Seeder;

class BookTypeSeeder extends Seeder
{
    public function run()
    {
        BookType::create(['type' => 'Drama']);
        BookType::create(['type' => 'Biography']);
        BookType::create(['type' => 'Novel']);
    }
}
