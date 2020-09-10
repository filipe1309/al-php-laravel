<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{ Model, Collection };

class Temporada extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    public $fillable = ['numero'];

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function getEpisodiosAssistidos(): Collection
    {
        return $this->episodios->filter(function(Episodio $episodio) {
            return $episodio->assistido;
        });        
    }
}
