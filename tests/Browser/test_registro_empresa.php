<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class test_registro_empresa extends DuskTestCase
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
                     ->type('empresa','mcdonald')
                     ->type('nit','80023654')
                    ->select('tipo',2)
                     ->type('representante','franco')
                     ->type('documento','72656278')
                     ->type('correo','mcdonald@hotmail.com')
                     ->type('telefono','3209876543')  
                     ->type('usuario','mcdonald')                   
                    ->type('pass','12345678')
                     ->type('pass_confirmation','12345678')
                    ->press('Crear Cuenta')
                    ->assertSee('Empresa Registrado');
        });
    }

}
