<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;

class barangController extends Controller
{
     function input(){

    	return view('inputBarang');
}
    
    function insert(Request $req){


    	$barang = new barang;

    		$barang->kode_barang = $req->kode_barang;
    		$barang->nama_barang = $req->nama_barang;
    		$barang->stok = $req->stok;
    		$barang->jumlah = $req->jumlah;

    	$barang->save();
        
        return redirect('/table barang');
    }

    function table(){

        $barang = barang::all();

        return view('table_barang')

        ->with('data',$barang);
    }

    function edit($id){

        $tabel = barang::find($id);
        return view('edit')
        ->with('data', $tabel);

    }

    function update($id, Request $req){


        $tabel = barang::find($id);
        
        $tabel->kode_barang = $req->kode_barang;
        $tabel->nama_barang = $req->nama_barang;
        $tabel->stok = $req->stok;
        $tabel->jumlah = $req->jumlah;

        $tabel->save();

        return redirect('/table barang');

    }

    function delete($id){

        $tabel = barang::find($id);
        $tabel->delete();

        return redirect('/table barang');
    }
}
