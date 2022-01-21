<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorsTest extends TestCase
{
    use RefreshDatabase;

    public function testCanSearchForAuthors()
    {
        $response = $this->json('GET', '/api/authors/search/John');
        $response->assertOk();
        $response->assertJsonStructure();
        $response->assertSee('John Doe');
    }
}
