<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Challenge;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContestantDashboardController extends Controller
{
    public function index(Request $request): View
    {
//        dd("$challenges");
//        $challenges = Challenge::all();
//
//        return view('backoffice.dashboard',$challenges);
    }
}
