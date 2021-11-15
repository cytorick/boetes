<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $user = User::where('id', Auth::user()->id)->get();
        $team = Team::all();

        return view('home', compact('fines', 'team', 'user'));
    }

    public function index_boetes()
    {
        $fines = Fine::where('user_id', Auth::user()->id)->get();
        $user = User::where('id', Auth::user()->id)->get();
        $teams = Team::all();

        return view('boetes.index', compact('fines', 'teams', 'user'));
    }

    public function show_boetes($id)
    {
        $id = Fine::where('id', Fine::class()->id)->get();

        $fines = Fine::where('user_id', Auth::user()->id)->get();
        $teams = Team::all();

        return view('boetes.show', compact('fines', 'teams'));
    }

    public function index_teams()
    {
        return view('teams.index');
    }

    public function index_settings()
    {
        return view('settings.index');
    }
}
