<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    /** @test */
    public function check_if_can_show_some_product()
    {
        $response = $this->get('/produto/1');
        $response->assertSuccessful();
    }
}
