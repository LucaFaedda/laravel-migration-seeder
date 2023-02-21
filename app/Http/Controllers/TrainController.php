<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\train; // aggiungere model

class TrainController extends Controller
{
    public function index(){
        
        $treno = Train::all();
        dd($treno);
        return view('home', compact('treno'));
    } 
}
