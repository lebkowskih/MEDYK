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
}
