<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        Author::create(['first_name' => 'John', 'last_name' => 'Doe',]);
        Author::create(['first_name' => 'Billy', 'last_name' => 'James',]);
    }
}
