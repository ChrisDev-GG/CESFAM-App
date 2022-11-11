<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimonDiceGameController extends Controller
{
    private $viewGame = 'Games.simon';

    public function index(){
        return view($this->viewGame);
    }
}
