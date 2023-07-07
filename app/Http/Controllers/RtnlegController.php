<?php

namespace App\Http\Controllers;

use App\Rtnleg;
use App\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class RtnlegController extends Controller
{
    public function index()
    {
        $rtnlegs= Rtnleg::with('personne')->get();
        return view('admin.rtnlegs.index',compact('rtnlegs'));
    }
    public function create()
    {
        $personne= Personne::all();
        return view('admin.rtnlegs.create',compact('personne'));
    }
    public function getData(Request $request)
        {
            $date = Personne::where("id",$request->id)->get();
            return response()->json($date);
        }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'matricule' => 'required',
            'service' => 'required',
        ]);
       $rtnleg = new Rtnleg();
                $rtnleg->matricule = $request->matricule;
                $rtnleg->service = $request->service;
                $rtnleg->valhs = $request->valhs;
                $rtnleg->valht = $request->valht;
                $rtnleg->prmres = $request->prmres;
                $rtnleg->imposable = $request->imposable;
                $rtnleg->impotnew = $request->impotnew;
                $rtnleg->CFA = $request->CFA;
                $rtnleg->prempr = $request->prempr;
                $rtnleg->CRmois = $request->CRmois;
                $rtnleg->CDmois = $request->CDmois;
                $rtnleg->Cpmois = $request->Cpmois;
                $rtnleg->MUTmois = $request->MUTmois;
                $rtnleg->net = $request->net;
                $rtnleg->AFTA = $request->AFTA;
                $rtnleg->AFTB = $request->AFTB;
                $rtnleg->gain = $request->gain;
                $rtnleg->retenue = $request->retenue;
                $rtnleg->personne_id = $request->personne_id;
                $rtnleg->save();
                return redirect()->back();


    }

    public function show($id)
    {
        $rtnleg = Rtnleg::where('id', $id)->first();
        if ($rtnleg) {
            return view('admin.rtnlegs.read')->with('rtnlegs', Rtnleg::where('id', $rtnleg->id)->orderBy('created_at', 'desc'));
        } else {
            return view('admin.rtnlegs.read');
        }
    }

    public function edit($id)
    {
        $rtnleg = Rtnleg::find($id);
        return view('admin.rtnlegs.edit')->with('rtnlegs', Rtnleg::where('id', $id)->get());
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'matricule' => 'required',
            'service' => 'required',
        ]);

                $rtnleg = Rtnleg::findOrFail($id);
                $rtnleg->matricule = $request->matricule;
                $rtnleg->service = $request->service;
                $rtnleg->valhs = $request->valhs;
                $rtnleg->valht = $request->valht;
                $rtnleg->prmres = $request->prmres;
                $rtnleg->imposable = $request->imposable;
                $rtnleg->impotnew = $request->impotnew;
                $rtnleg->CFA = $request->CFA;
                $rtnleg->prempr = $request->prempr;
                $rtnleg->CRmois = $request->CRmois;
                $rtnleg->CDmois = $request->CDmois;
                $rtnleg->Cpmois = $request->Cpmois;
                $rtnleg->MUTmois = $request->MUTmois;
                $rtnleg->net = $request->net;
                $rtnleg->AFTA = $request->AFTA;
                $rtnleg->AFTB = $request->AFTB;
                $rtnleg->gain = $request->gain;
                $rtnleg->retenue = $request->retenue;
                $rtnleg->personne_id = $request->personne_id;
                $rtnleg->save();
                return redirect()->route('admin.rtnlegs.update');

    }

    public function destroy($id)
    {
        $rtnleg = Rtnleg::where('id', $id)->first();
        $rtnleg->delete();
        return redirect()->route('admin.rtnlegs.index');

    }
}
