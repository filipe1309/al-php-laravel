<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        echo $request->url() . PHP_EOL;
        var_dump($request->query());
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
