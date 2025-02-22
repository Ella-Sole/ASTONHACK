<?php

namespace App\Http\Controllers;

use App\Events\ScoreUpdated;
use App\Models\Leaderboard;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function updateScore(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'score' => 'required|integer',
        ]);

        $leaderboard = Leaderboard::updateOrCreate(
            ['username' => $request->username],
            ['score' => $request->score]
        );

        event(new ScoreUpdated($leaderboard));

        return response()->json($leaderboard);
    }
}
