<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train; // aggiungere model

class TrainController extends Controller
{
    public function index(){
        // se non compare nulla fare sempre php artisan optimize nel caso chiudere tutto e riaprire
        $treno = Train::all();
        return view('biglietto', compact('treno'));
    } 
}
