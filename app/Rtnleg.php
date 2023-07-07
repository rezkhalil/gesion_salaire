<?php

namespace App;

use App\Personne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rtnleg extends Model
{
    use HasFactory;
    protected $fillable = ['matricule','date_de_paie', 'service',
    'valhs', 'valht', 'prmres','imposable','impotnew', 'CFA', 'prempr', 'CRmois'
    ,'CDmois','Cpmois','MUTmois','net', 'AFTA', 'AFTB', 'gain', 'retenue', 'personne_id'];
    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }


}
