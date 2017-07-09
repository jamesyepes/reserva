<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class paginaTituloReservaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
         $response= $this->call('GET','/inicio');
         $this->assertEquals($response->filter('title:contains("Reserva tu Plan")'));
         //$this->assertTrue(strpos($response->getContent(),"Reserva tu Plan")!== false);
     //$this->assertEquals(strpos($response->getContent(),"Reserva tu Plan"));

    }
}
