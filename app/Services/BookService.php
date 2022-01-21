<?php

namespace App\Services;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class BookService
{
    public function searchAndFilter(string $search, Request $request): Collection
    {
        $books = Book::search($search);
        if ($request->has('author')) {
            $books = $books->where('author_id', $request->get('author'));
        }
        if ($request->has('book_type')) {
            $books = $books->where('book_type_id', $request->get('book_type'));
        }
        return $books->get();
    }

}
