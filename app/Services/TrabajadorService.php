<?php

namespace App\Services;

use App\Trabajador;
use App\Salario;

class TrabajadorService {
    public static function getAll() {
        return Trabajador::with('salarios')->get();
    }

    public static function getOne($id) {
        return Trabajador::with('salarios')->get()->find($id);
    }

    public static function createOne(
        $name, 
        $phone, 
        $age, 
        $hourlyPay, 
        $hours, 
        $extra
    ) {
        $trabajador = new Trabajador;
        $trabajador->nombre = $name;
        $trabajador->telefono = $phone;
        $trabajador->edad = $age;
        $trabajador->save();

        //datos del salario
        $salario = new Salario;
        $salario->trabajador_id = $trabajador->id;
        $salario->pago_por_hora = $hourlyPay;
        $salario->horas = $hours;
        $salario->extra = $extra;
        $salario->dias = '0';
        $salario->save();
        return true;
    }

    public static function updateOne(
        int $id,
        ?string $name,
        ?string $phone,
        ?int $age,
        ?int $hourlyPay,
        ?int $hours,
        ?int $extra
    ) {
        $trabajador = Trabajador::with('salarios')->get()->find($id);

        if ($name) {
            $trabajador->nombre = $name;
        }
        if ($phone) {
            $trabajador->telefono = $phone;
        }
        if ($age) {
            $trabajador->edad = $age;
        }

        if ($hourlyPay) {
            $trabajador->salarios[0]->pago_por_hora = $hourlyPay;
        }
        if ($hours) {
            $trabajador->salarios[0]->horas = $hours;
        }
        if ($extra) {
            $trabajador->salarios[0]->extra = $extra;
        }

        $trabajador->push();
    }

    public static function search($value) {
        return Trabajador::where(
            'nombre',
            'like',
            '%'. $value .'%'
        )->with('salarios')->get();
    }

    public static function deleteOne($id) {
        Trabajador::destroy($id);
    }
}
