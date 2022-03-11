<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        $data = Contact::all();
        return view("contact", ["data" => $data, "judul" => "Contact"]);
        
    }
}
