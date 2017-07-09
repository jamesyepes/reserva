<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/inicio')
                    ->assertTitle('Reserva tu Plan')
                    ->assertSeeLink('Login');

                 
        });
    }

     public function testLogin_Usuario()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/inicio')
                    ->type('email','david@hotmail.com')
                    ->type('password','12345678')
                    ->press('login')
                    ->assertPathIs('/home');

                 
        });
    }
}
