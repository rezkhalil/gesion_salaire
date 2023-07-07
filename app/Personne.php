<?php

namespace App;

use App\Rbg;
use App\Rtnleg;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personne extends Model
{
    use HasFactory;
    public function rtnleg()
    {
        return $this->hasMany(Rtnleg::class);
    }
    public function rbg()
    {
        return $this->hasMany(Rbg::class);
    }

}
