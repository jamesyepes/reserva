<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class test_reg_cliente extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
             $browser->visit('/registro')
                    ->radio('opcion','checkcliente')
                    ->type('nombre','fransico')
                     ->type('apellidos','moreno')
                    ->type('emails','frank@hotmail.com')
                    ->type('usu','franco')                     
                    ->type('passw','12345678')
                    ->type('passw_confirmation','12345678')
                     ->press('Crear Cliente')
                    ->assertSee('Cliente Registrado');

        });
    }
}
