<?php

namespace Tests\Feature;

use Tests\BrowserKitTestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;

//use Laravel\BrowserKitTesting\TestCase as BaseTestCase;

//use DB;
//use App;

class RegistroUsuarioTest extends BrowserKitTestCase
{
//    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    /*
    public $baseUrl = 'http://localhost:8000'; 
    public function testExample()
    {
        $this->visit('inicio');
    }
    */
    
    public function testRegistroUsuario()
    {
        $this->visit('/registro');
        //$this->check('checkcliente');        
        $this->type('David', 'nombre'); 
        $this->type('Valoi', 'apellidos');       
        $this->type('compuclickbtura@hotmail.com', 'email');
        $this->type('3205555125', 'telefono');
        $this->type('ElGuapo', 'usuario');
        $this->type('12345678', 'password');
        $this->press('CrearCuenta');
        $this->seeInDatabase('users', ['email' => 'compuclickbtura@hotmail.com']);
        $this->seePageIs(route('registro'));
    }
}