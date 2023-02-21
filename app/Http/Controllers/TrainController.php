<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train; // aggiungere model

class TrainController extends Controller
{
    public function index(){
        
        $treno = Train::all();
        return view('biglietto', compact('treno'));
    } 
}
