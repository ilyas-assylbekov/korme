<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SpecialistApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_can_create_specialist(): void
    {
        $payload = [
            'username' => 'ilyasylbekov',
            'email' => 'ilyasylbekov@korme.kz',
            'specialty' => 'Director',
            'bio' => 'big goons'
        ];

        $response = $this->postJson('/api/v1/specialists', $payload);
        // dump($response->getContent());

        $response
            ->assertStatus(201)
            ->assertJsonPath('username', 'ilyasylbekov')
            ->assertJsonStructure(['id', 'username', 'specialty', 'created_at']);
    }
}
