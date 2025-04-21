<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A test for user registration.
     */
    public function testUserCanRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Enterprise Application Development')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->pause(1000)
                    ->type('name', 'John Doe')
                    ->type('email', 'john@example.com')
                    ->type('password', 'password123')
                    ->type('password_confirmation', 'password123')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}
