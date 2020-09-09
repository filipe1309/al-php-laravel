<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false;
    public $fillable = ['nome'];

    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }
}
