<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use App\User;

class ProveedorTest extends DuskTestCase
{
    use DatabaseMigrations;

    protected function setUp():void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    public function testDeleteRecord()
    {
        $user = User::first();

        $this->browse(function ($browser) use ($user) {
            $browser->loginAs($user)
                    ->visit('/proveedores')
                    ->click('@id:3')
                    ->pause(300)
                    ->press('@confirmDeletion3')
                    ->assertNotPresent('@id:3');
        });
    }
}
