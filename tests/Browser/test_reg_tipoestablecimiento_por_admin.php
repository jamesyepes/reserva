<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class test_reg_tipoestablecimiento_por_admin extends DuskTestCase
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
                    ->type('email','jamesyepes@gmail.com')
                    ->type('password','12345678')
                    ->press('login')
                    ->assertPathIs('/home')
                    ->assertSee('Bienvenido a su session de administrador')                   
                    ->clickLink('Tipo Establecimiento')
                    ->clickLink('Registrar tipo establecimiento')
                    ->type('tipoempresa','cine')
                    ->press('#regtipoempresa');
        });
    }
}
