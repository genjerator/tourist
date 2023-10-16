<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Challenge;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $challenges = Challenge::with(['round','user'])->get();

        return view('backoffice.dashboard',compact('challenges'));
    }
}
