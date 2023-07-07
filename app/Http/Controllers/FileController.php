<?php

namespace App\Http\Controllers;

use App\Rbg;
use App\Rtnleg;
use App\Personne;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function file()

    {


        $data=Personne::with('rtnleg')->get();

        return view('admin.file.index',compact('data'));

    }
    public function show($id){
        $data=Personne::with('rtnleg')->find($id);
    return view('admin.file.show',compact('data'));

    }
}
