<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class BarangController extends Controller
{
    public function barang(){
        $barang = barang::paginate(2);
        return view("barang", ["barang" => $barang, "judul" => "Barang"]);
    }
}
