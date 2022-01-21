<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Services\BookService;
use Illuminate\Http\JsonResponse;

class BooksController extends Controller
{
    public function search(string $search, Request $request): JsonResponse
    {
        return Response::json((new BookService())->searchAndFilter($search, $request));
    }
}
