<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function showAllScores()
    {
        $collection = Score::all();
        $sorted = $collection->sortByDesc("score");
        return response()->json($sorted->values()->all());
    }

    public function showSeedScores($seed)
    {
        return response()->json(Score::where('seed_key', $seed)
            ->orderBy("score", "desc")
            ->take(10)
            ->get());
    }

    public function submitScore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50|string',
            'seed_key' => 'required|numeric',
            'score' => 'required|numeric'
        ]);
        $score = Score::create($request->all());

        return response()->json($score, 201);
    }

    public function deleteScore($id)
    {
        Score::findOrFail($id)->delete();
        return  response('Poof! It\'s gone!', 200);
    }
}
