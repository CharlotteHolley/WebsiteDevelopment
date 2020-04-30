<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookingTest extends TestCase
{
   
    use RefreshDatabase;
   
   
    /** @test */
    public function a_user_can_create_a_booking()
    {
       
        $this->withoutExceptionHandling();
       
        $this->actingAs(factory('App\User')->create());
       
        $this->post('rooms', [
       
           'name' =>'Avaya Lab'
       
        ]);
       
       
        $this->assertDatabaseHas('rooms', ['name' => 'Avaya Lab']);
    }
    
    /** @test */
    public function guests_may_not_create_booking()
    {
       
        $this->withoutExceptionHandling();
       
         $this->post('rooms');
    }
}