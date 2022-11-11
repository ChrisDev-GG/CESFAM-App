<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GolpeaTopoGameController extends Controller
{
    private $viewGame = 'Games.topo';

    public function index(){
        return view($this->viewGame);
    }
}
