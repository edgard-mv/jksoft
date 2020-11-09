<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Trabajador;
use App\Proveedor;

use Carbon\Carbon;
use DB;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function getAll() {
        $pedidos = Pedido::with('trabajador')->get();
        return view('Pedido.pedidos',compact('pedidos'));
    }

    //Pedido::withTrashed()->where('id', 15)->restore(); prueba de restore

    public function delete($id) {

        Pedido::destroy($id);

        return redirect()->route('pedidos.todos');    
    }

    public function create(Request $request) {

        $operariosDisponibles = Trabajador::all();
        $proveedoresDisponibles = Proveedor::all();
        $fecha = Carbon::now();

        return view(
            'Pedido.crear',
            compact(
                'operariosDisponibles',
                'proveedoresDisponibles',
                'fecha'
            )
        );
        }


        public function update(Request $request) {

            $operariosDisponibles = Trabajador::all();
            $proveedoresDisponibles = Proveedor::all();
            $fecha = Carbon::now();
    
            return view(
                'Pedido.crear',
                compact(
                    'operariosDisponibles',
                    'proveedoresDisponibles',
                    'fecha'
                )
            );
            }
    


        public function details(Request $request,$id) {
                $pedido = Pedido::all()->find($id);
    
    
                return view('Pedido.detalles', compact('pedido'));
                }
        

}
