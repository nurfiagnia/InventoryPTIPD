<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ruangan;

class ruanganController extends Controller
{
    function input(){

    	return view('InputRuangan');
    }

    function insert(Request $req){

    	$ruangan = new ruangan;

    		$ruangan->kode_ruangan = $req->kode_ruangan;
    		$ruangan->nama_ruangan = $req->nama_ruangan;
    		$ruangan->jumlah = $req->jumlah;
    		$ruangan->keterangan = $req->keterangan;

    	$ruangan->save();
        
        return redirect('/table ruangan');

    }

    function table_ruangan(){
        $ruangan = ruangan::all();

        return view('table_ruangan')
        ->with('data',$ruangan);
    }

    function edit_ruangan($id){

        $tabel = ruangan::find($id);
        return view('editRuangan')
        ->with('data', $tabel);

    }

    function updateRuangan($id, Request $req){


        $tabel = ruangan::find($id);
        
        $tabel->kode_ruangan = $req->kode_ruangan;
        $tabel->nama_ruangan = $req->nama_ruangan;
        $tabel->jumlah = $req->jumlah;
        $tabel->keterangan = $req->keterangan;

        $tabel->save();

        return redirect('/table ruangan');

    }

    function delete($id){

        $tabel = ruangan::find($id);
        $tabel->delete();

        return redirect('/table ruangan');
    }
}
