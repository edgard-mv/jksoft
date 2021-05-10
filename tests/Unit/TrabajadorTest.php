<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

// servicio que sirve de interfaz para interactuar con los records de trabajadores
use App\Services\TrabajadorService;

use ArgumentCountError;
use Illuminate\Database\QueryException;
use TypeError;

class TrabajadorTest extends TestCase
{
    // recrea la base de datos para cada test
    use DatabaseMigrations;

    // modifica la configuración de pruebas para realizar el llenado de tablas
    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    // // getAll debe retornar todos los registros
    // public function testGetAllCollectionNotEmpty()
    // {
    //     $result = TrabajadorService::getAll();
    //     $this->assertNotEmpty($result);
    // }

    // // El registro con id = 1 debe ser retornado
    // public function testGetOneNotNull()
    // {
    //     $result = TrabajadorService::getOne(1);
    //     $this->assertNotNull($result);
    // }

    // // Una excepción debe ser arrojada cuando el valor de pago por hora es demasiado alto
    // public function testCreateOneOutOfRangeHourlyPayThrowsException()
    // {
    //     $this->expectException(QueryException::class);

    //     TrabajadorService::createOne(
    //         "Edgard Morales",
    //         "1234556",
    //         14,
    //         234234324,
    //         4,
    //         90
    //     );
    // }

    // // Una excepción debe ser arrojada cuando el id no es proveído
    // public function testUpdateOneNoIdThrowsException()
    // {
    //     $this->expectException(TypeError::class);

    //     TrabajadorService::updateOne(
    //         null,
    //         null,
    //         null,
    //         17,
    //         200,
    //         40,
    //         50
    //     );
    // }

    // // El registro con nombre similar a "Carlos" debe ser devuelto
    // public function testSearchCollectionNotEmpty()
    // {
    //     $result = TrabajadorService::search("Carlos");
    //     $this->assertNotEmpty($result);
    // }

    // // result debería estar vacía, ya que no hay un registro con nombre similar a "Edgard" entre los datos de prueba
    // public function testSearchCollectionIsEmpty()
    // {
    //     $result = TrabajadorService::search("Edgard");
    //     $this->assertEmpty($result);
    // }

    // // deleteOne debería arrojar una excepción si no se le pasa el id del trabajador a remover
    // public function testDeleteOne()
    // {
    //     $this->expectException(ArgumentCountError::class);
    //     TrabajadorService::deleteOne();
    // }
}
