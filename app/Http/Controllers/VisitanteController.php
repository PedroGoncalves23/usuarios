<?php

namespace App\Http\Controllers;
use App\Models\Visitante;

use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function index(){
        $visitantes = Visitante::all();
        return view ('teste', compact('visitantes'));
    }
}
