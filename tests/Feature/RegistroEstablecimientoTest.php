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

class RegistroEstablecimientoTest extends BrowserKitTestCase
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
        public function testRegistroEstablecimiento()
    {
        $this->visit('/registro');
       // $this->check('checkempresa'); 
        $this->type('Sabor Pacifico', 'empresa');      
        $this->type('Lilia Cuero', 'representante'); 
        $this->type('1000234659', 'documento');       
        $this->type('liliacuero@hotmail.com', 'email');
        $this->type('3124567890', 'telefono');
        $this->type('saborpacifico.com', 'website');
        $this->type('SaborPacifico', 'usuario');
        $this->type('12345678', 'password');
        $this->type('12345678', 'password2');
        $this->press('CrearEmpresa');
        $this->seeInDatabase('users', ['email' => 'liliacuero@hotmail.com']);
        $this->seePageIs(route('registro'));
    }
}