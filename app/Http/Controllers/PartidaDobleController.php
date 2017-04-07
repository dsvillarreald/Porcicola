<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidaDobleController extends Controller
{
    public function index(Request $request)
    {
         return view('contabilidad_manual.create');
    }

}
