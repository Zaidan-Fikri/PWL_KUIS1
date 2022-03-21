<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;


class PelangganController extends Controller
{
   public function pelanggan(){
       $pelanggan = pelanggan::all();
       return view("pelanggan", ["pelanggan" => $pelanggan, "judul" => "Pelanggan"]);
   } 
}
