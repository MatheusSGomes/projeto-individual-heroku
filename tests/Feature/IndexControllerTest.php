<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexControllerTest extends TestCase
{
    /** @test */
    public function check_if_index_page_is_working()
    {
        $response = $this->get('/');
        $response->assertSuccessful();
    }

    public function check_if_search_products_is_working()
    {
        $response = $this->get('/encontrar?search=produto');
        $response->assertSuccessful();
    }
}
