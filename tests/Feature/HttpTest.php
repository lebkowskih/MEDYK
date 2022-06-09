<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HttpTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response(){
        $response = $this->get('/');
        $response->assertStatus(200);
    }
 
    public function test_the_prescription_route_is_redirecting_to_login_site(){
        $response = $this->get('/prescription');
        $response->assertRedirect('/login');
    }
    
    public function test_the_home_route_is_returning_appropriate_view(){
        $response = $this->get('/');
        $response->assertViewIs('home');
        
    }
}
