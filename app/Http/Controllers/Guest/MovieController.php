<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller {

    public function index () {

    // all() --> Select * from Movie 

       $movies = Movie::all();

    //    Controllo recupero dati db 
    // Dumb and Die è una funzione che fa la stessa cosa di dump(), ma è più rapida e non fa visulaizzare le righr di codice successive

    //    dd($movies); OK 

        return view('homepage', ["movies" => $movies]);
        
    }
  
}
