<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use App\User;

class TrabajadorTest extends DuskTestCase
{
    use DatabaseMigrations;
    
    protected function setUp():void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    public function testLoginAsAdmin()
    {
        $user = User::first();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->click('@loginButton')
                    ->assertPathIs('/estadistica/productos');
        });
    }
}
