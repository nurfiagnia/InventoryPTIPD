<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\barang;
use App\ruangan;

class adminController extends Controller
{
    function dashboard(){

       $tabelAdmin = Admin::all();
       $tabelbarang = barang::all();
       $tabelruangan = ruangan::all();

       return view ('dash_admin')

       ->with('tbAdmin', $tabelAdmin)
       ->with('tbBarang', $tabelbarang)
       ->with('tbRuangan', $tabelruangan);
       

    }

    
}
