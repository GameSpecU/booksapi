<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AuthorsController extends Controller
{
    public function search(string $search): JsonResponse
    {
        $authors = Author::search($search)->get();
        return \Response::json($authors->toArray());
    }
}
