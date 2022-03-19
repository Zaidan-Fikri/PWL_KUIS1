<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class BarangController extends Controller
{
    public function barang(){
        $barang = barang::all();
        return view("barang", ["barang" => $barang, "judul" => "Barang"]);
    }
}
