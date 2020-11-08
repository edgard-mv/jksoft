<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Trabajador;

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
        $fecha = Carbon::now();

        return view(
            'Pedido.crear',
            compact(
                'operariosDisponibles',
                'fecha'
            )
        );
        }

}
