<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_authorized_user_can_add_prescription(){
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/prescription/create');
        $response->assertStatus(200);

    }

    public function test_unauthorized_user_cant_add_prescription() {
        $response = $this->get('/prescription/create');
        $response->assertStatus(302);
    }

    public function test_unauth_cant_see_add_prescription_button(){
        $response = $this->get('/');
        $response->assertDontSee('Wystaw recepte');
    }
    public function test_auth_can_see_add_vaccination_button(){
        $response = $this->get('/');
        $response->assertDontSee('Wprowadź termin');
    }
}
