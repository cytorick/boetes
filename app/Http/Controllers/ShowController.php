<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fine;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}

    public function dashboard()
    {
        $fines = Fine::where('user_id', Auth::user()->id)->take(5)->get();
        $team = Team::all();

        return view('home', compact('fines', 'team'));
    }

    public function boetes()
    {
        $fines = Fine::where('user_id', Auth::user()->id)->get();
        $teams = Team::all();

        return view('boetes.index', compact('fines', 'teams'));
    }

    public function teams()
    {
        return view('teams.index');
    }
}
