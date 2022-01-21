<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BooksTest extends TestCase
{
    use RefreshDatabase;

    public function testCanSearchBooksByTitle()
    {
        $response = $this->json('GET', '/api/books/search/war');
        $response->assertOk();
        $response->assertJsonStructure();
        $response->assertSee('Star Wars');
    }

    public function testCanFilterSearchByAuthor()
    {
        $response = $this->json('GET', '/api/books/search/war?author=1');
        $response->assertOk();
        $response->assertJsonStructure();
        $response->assertSee('Star Wars');
        $response->assertDontSee('World War II');
    }

    public function testCanFilterSearchByCategory()
    {
        $response = $this->json('GET', '/api/books/search/war?book_type=1');
        $response->assertOk();
        $response->assertJsonStructure();
        $response->assertSee('World War II');
        $response->assertDontSee('Star Wars');
    }

    public function testCanFilterSearchByCategoryAndAuthor()
    {
        $response = $this->json('GET', '/api/books/search/war?book_type=2&author=2');
        $response->assertOk();
        $response->assertJsonStructure();
        $response->assertSee('Warszafka');
        $response->assertDontSee('Star Wars');
        $response->assertDontSee('World War II');
    }
}
