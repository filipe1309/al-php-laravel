<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Temporada, Episodio };

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada, Request $request)
    {
        return view('episodios.index', [
            'episodios' => $temporada->episodios, 
            'temporadaId' => $temporada->id, 
            'mensagem' => $request->session()->get('mensagem'),
        ]);
    }

    public function assistir(Temporada $temporada, Request $request)
    {
        $episodiosassistidos = $request->episodios;
        $temporada->episodios->each(function(Episodio $episodio) use ($episodiosassistidos) {
            $episodio->assistido = in_array($episodio->id, $episodiosassistidos);
        });
        $temporada->push();

        $request->session()->flash('mensagem', 'Episodios marcados como assistidos');

        return redirect()->back();
    }
}
