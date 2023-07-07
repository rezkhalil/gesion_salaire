<?php

namespace App\Http\Controllers;

use App\Rbg;
use App\Rtnleg;
use App\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RbgController extends Controller
{

    public function index()

    {
        $rbgs= Rbg::with('personne')->get();
        return view('admin.rbgs.index',compact('rbgs'));

    }
    public function create()
    {
        $personne= Personne::all();
        return view('admin.rbgs.create',compact('personne'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'matricule' => 'required',
            'code' => 'required',
            'etat' => 'required',

        ]);
       $rbg = new Rbg();
                $rbg->matricule = $request->get('matricule');
                $rbg->code = $request->get('code');
                $rbg->montant = $request->get('montant');
                $rbg->libel = $request->get('libel');
                $rbg->etat = $request->get('etat');
                $rbg->personne_id = $request->get('personne_id');
                $rbg->save();
                return redirect()->route('admin.rbgs.index');


    }

    public function show($id)
    {
        $rbg = Rbg::where('id', $id)->first();
        if ($rbg) {
            return view('admin.rbgs.read')->with('rbgs', Rbg::where('id', $rbg->id)->orderBy('created_at', 'desc'));
        } else {
            return view('admin.rbgs.read');
        }
    }

    public function edit($id)
    {
        $rbg = Rbg::find($id);
        return view('admin.rbgs.edit')->with('rbgs', Rbg::where('id', $id)->get());
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'date_de_naissance' => 'required',
        ]);

                $rbg = Rbg::findOrFail($id);
                $rbg->matricule = $request->get('matricule');
                $rbg->code = $request->get('code');
                $rbg->etat = $request->get('etat');
                $rbg->save();
                return redirect()->route('admin.rbgs.index');


    }

    public function destroy($id)
    {
        $rbg = Rbg::where('id', $id)->first();
        $rbg->delete();
        return redirect()->route('admin.rbgs.index');

    }
}
