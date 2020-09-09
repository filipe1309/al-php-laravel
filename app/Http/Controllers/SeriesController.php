<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Breaking Bad',
            'The Office',
            'Westworld',
        ];
        
        return view('series.index', compact('series'));
    }
}
