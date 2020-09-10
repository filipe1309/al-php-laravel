<?php

namespace Tests\Unit;

use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\Models\{ Temporada, Episodio };

class TemporadaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBuscaPorEpisodiosAssistidos()
    {
        $temporada = new Temporada();
        $episodio1 = new Episodio();
        $episodio1->assistido = true;
        $episodio2 = new Episodio();
        $episodio2->assistido = false;
        $episodio3 = new Episodio();
        $episodio3->assistido = true;
        $temporada->episodios->add($episodio1);
        $temporada->episodios->add($episodio2);
        $temporada->episodios->add($episodio3);
        
        $episodiosAssistidos = $temporada->getEpisodiosAssistidos();

        $this->assertCount(2, $episodiosAssistidos);
        foreach ($episodiosAssistidos as $episodio) {
            $this->assertTrue($episodio->assistido);
        }
    }
}
