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

    /** @test */
    public function check_register_user_is_working()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/register')
                ->type('name', 'UserTest3')
                ->type('email', 'usertest3@email.com')
                ->type('phone', '98 5555-8888')
                ->type('password', '12345678')
                ->type('password_confirmation', '12345678')
                ->press('Cadastrar')
                ->assertPathIs('/dashboard');
        });
    }

    /** @test */
    public function check_login_user_function_is_working()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/login')
                ->type('email', 'user@email.com')
                ->type('password', '12345678')
                ->press('Entrar')
                ->assertPathIs('/dashboard');
        });
    }
}
