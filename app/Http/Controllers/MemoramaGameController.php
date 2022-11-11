<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoramaGameController extends Controller
{
    private $viewGame = 'Games.memorama';

    public function index(){
        return view($this->viewGame);
    }
}
