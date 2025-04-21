<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotes extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'john@example.com')
                    ->type('password', 'password123')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->clickLink('Edit')
                    ->assertPathIs('/edit-note-page/2')
                    ->type('title', 'ler ler')
                    ->type('description', 'ler update')
                    ->press('UPDATE');
        });
    }
}
