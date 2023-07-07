<?php

namespace App\Http\Controllers;

use App\Personne;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function index()
    {
        return View('admin.personnes.index')
            ->with('personnes', Personne::orderBy('created_at', 'desc')->get());
    }
    public function create()
    {
        return view('admin.personnes.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'date_de_naissance' => 'required',
        ]);
       $personne = new Personne();
                $personne->matricule = $request->get('matricule');
                $personne->date_de_paie = $request->get('date_de_paie');
                $personne->nom = $request->get('nom');
                $personne->prenom = $request->get('prenom');
                $personne->date_de_naissance = $request->get('date_de_naissance');
                $personne->situation_familiale = $request->get('situation_familiale');
                $personne->enfinp = $request->get('enfinp');
                $personne->service = $request->get('service');
                $personne->position = $request->get('position');
                $personne->echelle = $request->get('echelle');
                $personne->echelon = $request->get('echelon');
                $personne->MCNRPS = $request->get('MCNRPS');
                $personne->thnor = $request->get('thnor');
                $personne->hnor = $request->get('hnor');
                $personne->h25 = $request->get('h25');
                $personne->h50 = $request->get('h50');
                $personne->Hfer = $request->get('Hfer');
                $personne->Snuit = $request->get('Snuit');
                $personne->save();
                return back();

    }

    public function show($id)
    {
        $personne = Personne::where('id', $id)->first();
        if ($personne) {
            return view('admin.personnes.read')->with('personnes', Personne::where('id', $personne->id)->orderBy('created_at', 'desc'));
        } else {
            return view('admin.personnes.read');
        }
    }

    public function edit($id)
    {
        $personne = Personne::find($id);
        return view('admin.personnes.edit')->with('personnes', Personne::where('id', $id)->get());
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'date_de_naissance' => 'required',
        ]);

                $personne = Personne::findOrFail($id);
                $personne->matricule = $request->get('matricule');
                $personne->date_de_paie = $request->get('date_de_paie');
                $personne->nom = $request->get('nom');
                $personne->prenom = $request->get('prenom');
                $personne->date_de_naissance = $request->get('date_de_naissance');
                $personne->situation_familiale = $request->get('situation_familiale');
                $personne->enfinp = $request->get('enfinp');
                $personne->service = $request->get('service');
                $personne->position = $request->get('position');
                $personne->echelle = $request->get('echelle');
                $personne->echelon = $request->get('echelon');
                $personne->MCNRPS = $request->get('MCNRPS');
                $personne->thnor = $request->get('thnor');
                $personne->hnor = $request->get('hnor');
                $personne->h25 = $request->get('h25');
                $personne->h50 = $request->get('h50');
                $personne->Hfer = $request->get('Hfer');
                $personne->Snuit = $request->get('Snuit');
                $personne->save();
                return back();

    }

    public function destroy($id)
    {
        $personne = Personne::where('id', $id)->first();
        $personne->delete();
        return back();
    }
}
