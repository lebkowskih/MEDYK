<?php

namespace Tests\Feature;

use App\Models\Prescription;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class PrescriptionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

   public function test_prescription_has_medicine(){

    $user = User::factory()->create();

    $prescription = Prescription::factory()->create();
    $this->assertNotEmpty($prescription->medicine);
   }
}
