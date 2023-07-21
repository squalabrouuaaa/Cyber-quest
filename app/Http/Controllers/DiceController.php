<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class DiceController extends Controller
{
    /**
     * roll some dices
     * @param Request $request
     * @return JsonResponse
    */

    public function basicRoll(Request $request)
    {
        $detail = []; 
        for ($i=0; $i < $request->nb_dice; $i++) { 
            $jet = rand(1,10);
            array_push($detail,$jet);
        }
        $best_score = 0;
        if ($request->nb_dice >= 10) {
            arsort($detail);
            for ($i=0; $i < 9; $i++) { 
                $best_score += $detail[$i];
            }
        }
        else {
            foreach ($detail as $jet) {
                $best_score += $jet;
            }
        }
        $data = [
            'detail' => $detail,
            'best_score' => $best_score
        ];
        if ($best_score >= $request->dificulty) {
            //reussite
            return response()->json([
                'status'  => 'success',
                'data' => $data,
            ], 200);
        }else {
            //echec       
            return response()->json([
                'status'  => 'success',
                'data' => $data,
            ], 200);
        }
    }

}
