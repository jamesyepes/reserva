<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Auth;

class test_login_admin extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/inicio')
                     ->press('#loginButton')
                    ->type('email','frank@hotmail.com')
                    ->type('password','12345678')
                    ->press('login')
                    ->assertPathIs('/home')
                    ->assertSee('Datos del Ususario');
        });
    }

 
}
