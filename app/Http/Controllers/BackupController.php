<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class BackupController extends Controller
{
    function index(){
        if (Gate::denies('access-backup')) {
            return redirect(url()->previous());
        }

        return view('backup');
    }

    function save(){
        if (Gate::denies('access-backup')) {
            return redirect(url()->previous());
        }

        $resultado ="jksoftbd_laravel".\Carbon\Carbon::now()->toDateString() . '.sql';

        return response()->download(public_path($resultado));

    }


}
