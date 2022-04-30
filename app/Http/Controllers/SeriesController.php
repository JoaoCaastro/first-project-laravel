<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        # echo $request->url();
        # echo $request->query('parametro');
        # var_dump($request->query());
        # exit();

        $series = [
            'Stranger Things',
            'Grey\'s Anatomy',
            'Agent of SHIELD'
        ];

        return view('series.index', [
            'series' => $series,
            'titulo' => "Página de Séries"
        ]);
    
    }

    public function create(){

        return view('series.create', [
            'titulo' => "Adicionar Séries"
        ]);

    }

}
