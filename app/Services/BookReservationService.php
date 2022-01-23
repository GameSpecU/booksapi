<?php

namespace App\Services;

use App\Models\BookReservation;
use App\Http\Requests\BookReservations\StoreBookReservationRequest;

class BookReservationService
{
    public function store(StoreBookReservationRequest $request): BookReservation
    {
        return BookReservation::create($request->safe(['customer_email', 'book_id']));
    }

    public function destroy(BookReservation $bookReservation): ?bool
    {
        return $bookReservation->delete();
    }
}
