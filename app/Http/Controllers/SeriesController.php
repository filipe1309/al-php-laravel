<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
    public function listarSeries()
    {
        $series = [
            'Breaking Bad',
            'The Office',
            'Westworld',
        ];
        $html = "<ul>";
        foreach($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";
    
        return $html;
    }
}
