<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;
use App\Services\TrabajadorService;

class OperariosController extends Controller
{

    public function getAll() {
        if (Gate::denies('access-employee')) {
            return redirect(url()->previous());
        }

        $trabajadores = TrabajadorService::getAll();

        return view('operarios.operario', compact('trabajadores'));

    }

    public function create(Request $request) {
        if (Gate::denies('access-employee')) {
            return redirect(url()->previous());
        }

        if ($request->isMethod('put')) {
            if ($request->input('nombret') and $request->input('telefonot')) {
                TrabajadorService::createOne(
                    $request->input('nombret'),
                    $request->input('telefonot'),
                    $request->input('edad'),
                    $request->input('pago_horas'),
                    $request->input('horas_l'),
                    $request->input('extra')
                );
            }

            return redirect()->route('operarios.todos');
        }

        return view('operarios.nuevo_op');
    }

    //editar datos del trabajador
    public function update(Request $request, $id) {
        if (Gate::denies('access-employee')) {
            return redirect(url()->previous());
        }

        if ($request->isMethod('patch')) {
            TrabajadorService::updateOne(
                $id,
                $request->input('nombret'),
                $request->input('telefonot'),
                $request->input('edad'),
                $request->input('pago_horas'),
                $request->input('horas_l'),
                $request->input('extra'),
            );

            return redirect()->route('operarios.todos');
        }

        $operador = TrabajadorService::getOne($id);
        $salario = $operador->salarios[0];

        return view('operarios.editar_o', compact('operador','salario'));
    }

    public function search(Request $request) {
        if (Gate::denies('access-employee')) {
            return redirect(url()->previous());
        }

        if ($request->isMethod('get') and $request->input('valor')){
            $trabajadores = TrabajadorService::search($request->input('valor'));

            return view('operarios.operario', compact('trabajadores'));
        }

        return redirect()->route('operarios.todos');
    }

    public function delete($id) {
        if (Gate::denies('access-employee')) {
            return redirect(url()->previous());
        }

        TrabajadorService::deleteOne($id);

        return redirect()->route('operarios.todos');    
    }

}
