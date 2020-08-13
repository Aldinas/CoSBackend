<?php

namespace App\Http\Controllers;

use App\Score;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

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

    public function gameView()
    {
        // Returns the blade with the unity game embedded in it, along with the recent scores around the edge of it.
        $seed = $this->getSeed();
        $scores = Score::where('seed_key', $seed)
            ->orderBy("score", "desc")
            ->take(10)
            ->get();

        $data["seed"] = $seed;
        $data["todaysScores"] = $scores;


        return view('endlessrunner', $data);
    }

    public function getSeed(Date $date = null)
    {
        // Returns the seed for the given date, or today if none given.
        // Date needs to be in the format of dd-mm-yyyy.
        if($date == null)
        {
            $date = Carbon::now()->format('d-m-Y');
        }

        $cleanDate = str_replace("-", "", $date);
        return $cleanDate;
    }
}
