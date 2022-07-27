<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexControllerTest extends TestCase
{
    /** @test */
    public function check_if_index_works()
    {
        $response = $this->get('/');

        // $response->assertStatus(200);
        $response->assertSuccessful();
        
    }
}
