<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    /** @test */
    public function check_if_all_categories_are_listed()
    {
        $response = $this->get('/categorias');
        $response->assertSuccessful();
    }

    /** @test */
    public function check_if_create_categories_redirect_to_login_without_authentication()
    {
        $response = $this->get('/categorias/novo');
        $response->assertRedirect('/login');
    }

    /** @test */
    public function check_if_show_products_by_categories_works()
    {
        $response = $this->get('/categoria/1/produtos');
        $response->assertSuccessful();
    }
}
