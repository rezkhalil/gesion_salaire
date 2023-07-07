<?php

namespace App;

use App\Personne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rbg extends Model
{
    use HasFactory;
    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
}
