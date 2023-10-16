<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RoundResource;
use App\Models\Challenge;
use App\Models\Round;
use App\Modules\Challenges\ChallengeRequest;
use App\Modules\Challenges\ChallengeResource;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ChallengeController extends Controller
{
    public function index()
    {
        return Challenge::all();
    }

    public function latestActiveRoute()
    {
        $latestActiveRound = Round::latestActive();
        return new RoundResource($latestActiveRound);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Challenge $challenge)
    {
        return new ChallengeResource($challenge);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Challenge $challenge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChallengeRequest $request, Challenge $challenge)
    {
        $challenge->name = $request->get('name');
        $challenge->description = $request->get('description');
        $challenge->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Challenge $challenge)
    {
        //
    }
}
