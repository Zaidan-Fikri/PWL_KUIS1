<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class SupplierController extends Controller
{
    public function supplier(){
        $supplier = supplier::all();
        return view("supplier", ["supplier" => $supplier, "judul" => "supplier"]);
    }
}
