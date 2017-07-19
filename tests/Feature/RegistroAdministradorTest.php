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

class RegistroAdministradorTest extends BrowserKitTestCase
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
        public function testRegistroAdministrador()
    {   
        $user = new \App\User();
        $this->visit('inicio');
        $this->type('jamesyepes@gmail.com', 'email');
        $this->type('12345678', 'password');
        $this->press('login');
        $this->assertTrue(Auth::check());
        $this->seePageIs(route('home'));
        
        $this->visit('admin_reg_cliente/create');        
        $this->type('Leiber', 'name');        
        $this->type('Riascos', 'apellidos');       
        $this->type('juanriascos@hotmail.com', 'email');
        $this->type('3056782934', 'telefono');
        $this->type('AmigoDelGuapo', 'usuario');
        $this->type('123456', 'password');
        $this->type('123456', 'password_confirmation');
        $this->press('send');
        //$this->seeInDatabase('users', ['email' => 'juanriascos@hotmail.com']);
        //$this->seePageIs(route('home'));
    }
}