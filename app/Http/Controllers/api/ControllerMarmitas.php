<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\marmitas;

class ControllerMarmitas extends Controller
{
    public function index(){
        $marmitas = marmitas::all();
        response()->json($marmitas);
    }
}
