<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendGameDataController extends Controller
{
    public function sendGameDataMemorama(Request $request){
        if(Auth::check()){
            Score::create([
                'score' => $request->score,
                'id_game' => 1,
                'id_user' => Auth::id(),
            ]);
        }
        return redirect()->to('/memorama');
    }
    public function sendGameDataSimon(Request $request){

        if(Auth::check()){
            Score::create([
                'score' => $request->score,
                'id_game' => 3,
                'id_user' => Auth::id(),
            ]);
        }
        return redirect()->to('/simondice');
    }
    public function sendGameDataTopo(Request $request){
        if(Auth::check()){
            Score::create([
                'score' => $request->score,
                'id_game' => 2,
                'id_user' => Auth::id(),
            ]);
        }
        return redirect()->to('/golpeatopo');
    }
}
