<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\User;

class TrabajadorTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }


    public function testExample()
    {
        $user = User::first();

        $response = $this->actingAs($user)->get('/operarios');

        $response->assertStatus(200);
    }
}
