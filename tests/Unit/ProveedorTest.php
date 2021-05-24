<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

// servicio que sirve de interfaz para interactuar con los records de proveedores
use App\Services\ProveedorService;

class ProveedorTest extends TestCase
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
        $result = ProveedorService::createOne("Eduardo González", "Tesla");

        $this->assertTrue($result);
    }

    public function testDeleteOneRemovesRecord()
    {
        $id = 3;
        ProveedorService::deleteOne($id);

        $result = ProveedorService::search($id, "id");
        $this->assertEmpty($result);
    }
}
