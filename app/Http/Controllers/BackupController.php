<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Http\Response;

class BackupController extends Controller
{
    function index(){

        return view('backup');
    }

    function save(){

        $resultado ="jksoftbd_laravel".Carbon::now()->toDateString() . '.sql';

        return Response()->download(public_path($resultado));
    }


}
