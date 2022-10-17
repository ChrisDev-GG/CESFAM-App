<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DragAndDropColorsController extends Controller
{
    public function index(){
        return view('Games.dragdropcolors');
    }
}
