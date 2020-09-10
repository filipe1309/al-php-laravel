<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Temporada, Episodio };

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada)
    {
        $episodios = $temporada->episodios;
        $temporadaId = $temporada->id;

        return view('episodios.index', compact('episodios', 'temporadaId'));
    }

    public function assistir(Temporada $temporada, Request $request)
    {
        $episodiosassistidos = $request->episodios;
        $temporada->episodios->each(function(Episodio $episodio) use ($episodiosassistidos) {
            $episodio->assistido = in_array($episodio->id, $episodiosassistidos);
        });
        $temporada->push();
    }
}
