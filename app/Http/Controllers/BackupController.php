<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    function index(){

        return view('backup');
    }

    function save(){

        $resultado ="jksoftbd_laravel".\Carbon\Carbon::now()->toDateString() . '.sql';

        return response()->download(public_path($resultado));

    }


}
