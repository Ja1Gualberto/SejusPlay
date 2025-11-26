<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogos;

class JogosControler extends Controller
{
    public function index()
    {
        $produtos = Jogos::all();
        return view('gamesPage',['produtos' => $produtos]);
    }
}
