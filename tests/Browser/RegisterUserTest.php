<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterUserTest extends DuskTestCase
{
    /** @test */
    public function find_home_page_of_website()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Classificados');
        });
    }
}
