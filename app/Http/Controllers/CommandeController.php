<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function show($id) {
        return view('/commande_details')->with('id',$id);
    }
}
