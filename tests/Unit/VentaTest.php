<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

// servicio que sirve de interfaz para interactuar con los records de ventas
use App\Services\VentaService;

class VentaTest extends TestCase
{
    // recrea la base de datos para cada test
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    public function testCreateOneSavesRecord()
    {
        $order = array(
            2 => array(
                'quantity' => 4,
                'precio' => 20,
                'subtotal' => 80
            ),
            33 => array(
                'quantity' => 5,
                'precio' => 10,
                'subtotal' => 50
            ),
            23 => array(
                'quantity' => 2,
                'precio' => 30,
                'subtotal' => 60
            )
        );
        $total = 190;
        
        $result = VentaService::createOne($order, $total);

        $this->assertTrue($result);
    }
}
