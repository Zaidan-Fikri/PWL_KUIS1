<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    public function pegawai(){
        $pegawai = pegawai::all();
        return view("pegawai", ["pegawai" => $pegawai, "judul" => "Pegawai"]);
    }
}
