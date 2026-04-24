<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
   public function index (){
    $games =["GTA6", "PokemonGO", "Pokemon masters EX" ];

    return view ('Lista de jogos', ['game' => $games]);
   }

   public function show($id){
    return "Você esta vendo os jogos disponiveis no momento" .$id;
}
}






