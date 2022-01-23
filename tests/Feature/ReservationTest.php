<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\BookReservation;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReservationTest extends TestCase
{
    use RefreshDatabase;

    public function testCanMakeAnReservation()
    {

        $data     = ['customer_email' => 'john@doe.com', 'book_id' => 1];
        $response = $this->json('POST', '/api/reservations', $data);
        $response->assertCreated();
        $this->assertDatabaseHas(BookReservation::class, $data);
        $id = $response->json('id');
        $this->assertModelExists(BookReservation::find($id));
    }

    public function testCanCancelReservation()
    {
        $data     = ['customer_email' => 'mark@zukerberg.com', 'book_id' => 1];
        $modelId = $this->json('POST', '/api/reservations', $data)->json('id');
        $response = $this->json('DELETE', '/api/reservations/' . $modelId);
        $response->assertNoContent();
        $this->assertSoftDeleted(BookReservation::withTrashed()->find($modelId));
    }
}
