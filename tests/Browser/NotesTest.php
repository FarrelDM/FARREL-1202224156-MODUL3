<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**A Dusk test example.@group Notes*/
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('email', 'john@example.com')
            ->type('password', 'password123')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->clickLink('Notes')
            ->clickLink('Create Note')
            ->type('title', 'farrel bokir')
            ->type('description', 'kocak bgt')
            ->press('CREATE')
            ->assertPathIs('/notes');
        });
    }
}