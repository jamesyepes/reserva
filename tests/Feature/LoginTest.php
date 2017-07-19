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

class LoginTest extends BrowserKitTestCase
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
    
    public function testPruebaLogin(){
        $user = new \App\User();
        $this->visit('inicio');
        $this->type('jamesyepes@gmail.com', 'email');
        $this->type('12345678', 'password');
        $this->press('login');
        $this->assertTrue(Auth::check());
        $this->seePageIs(route('home'));
    }

   /* public function testPruebaLogout(){
        $user = new \App\User();
        $this->visit('inicio');
        $this->type('jamesyepes@gmail.com', 'email');
        $this->type('12345678', 'password');
        $this->press('login');
        $this->assertTrue(Auth::check());
        $this->seePageIs(route('home'));
        $this->press('logout');
    
    }*/
}