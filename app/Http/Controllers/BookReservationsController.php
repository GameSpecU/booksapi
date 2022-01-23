<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\BookReservation;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\BookReservationService;
use App\Http\Requests\BookReservations\StoreBookReservationRequest;

class BookReservationsController extends Controller
{
    public function index()
    {
        //
    }

    public function store(StoreBookReservationRequest $request): JsonResponse
    {
        $model = ((new BookReservationService())->store($request));
        return \Response::json(['id' => $model->id], 201);
    }

    public function show(BookReservation $bookReservation)
    {
        //
    }

    public function update(Request $request, BookReservation $bookReservation)
    {
        //
    }

    public function destroy(BookReservation $bookReservation): Response
    {
        $model = ((new BookReservationService())->destroy($bookReservation));
        return \Response::noContent();
    }
}
