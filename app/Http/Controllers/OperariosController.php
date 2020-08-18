<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trabajador;
use App\Salario;
use DB;

class OperariosController extends Controller
{

    public function getAll() {
        //$trabajadores = DB::select('CALL spOperarios_GetAll()');
        $trabajadores = Trabajador::with('salarios')->paginate(15);


        return view('operarios.operario', compact('trabajadores'));

    }

    public function create(Request $request) {
        if ($request->isMethod('put')) {
            if ($request->input('nombret') and $request->input('telefonot')) {
                //datos del operario
                $operario = new Trabajador;
                $operario->nombre = $request->input('nombret');
                $operario->telefono = $request->input('telefonot');
                $operario->edad = $request->input('edad');
                $operario->save();

                $id_operario=$operario->id;

                //datos del salario
                $salario = new Salario;
                $salario->trabajador_id=$id_operario;
                $salario->pago_por_hora=$request->input('pago_horas');
                $salario->horas=$request->input('horas_l');
                $salario->extra=$request->input('extra');
                $salario->dias='0';
                $salario->save();

            }
            return redirect()->route('operarios.todos');
        }

        return view('operarios.nuevo_op');
    }

    //editar datos del trabajador
    public function update(Request $request, $id) {
        $operador = Trabajador::find($id);

        $salario=Salario::where([
            ['trabajador_id', '=', $id],
        ])->first();

        if ($request->isMethod('patch')) {

            //validacion del cambio de datos de los trabajadores
            if ($request->input('nombret')) {
                $operador->nombre = $request->input('nombret');
            }
            if ($request->input('telefonot')) {
                $operador->telefono = $request->input('telefonot');
            }
            if ($request->input('edad')) {
                $operador->edad = $request->input('edad');
            }
            $operador->save();

            //validaciones de datos del salario 
            if ($request->input('horas_l')) {
                $salario->horas = $request->input('horas_l');
            }
            if ($request->input('pago_horas')) {
                $salario->pago_por_hora= $request->input('pago_horas');
            }
            if ($request->input('extra')) {
                $salario->extra= $request->input('extra');
            }
            $salario->save();



            return redirect()->route('operarios.todos');
        }

        return view('operarios.editar_o', compact('operador','salario'));
    }

    public function search(Request $request) {
        
        if ($request->isMethod('get') and $request->input('valor')){
           
            $nombre = $request->input('valor');

            $trabajadores = Trabajador::where('nombre', 'like', '%'. $nombre .'%')->with('salarios')->paginate(15);


            return view('operarios.operario', compact('trabajadores'));

        }
    
          return redirect()->route('operarios.todos');
    }

    public function delete($id) {
       
        Trabajador::destroy($id);


        return redirect()->route('operarios.todos');    
    }

}//fin de funciones del controlador 
