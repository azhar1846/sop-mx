<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\UserHasTeam;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $name = $request->name;
        $slug = \Str::slug($name);

        $team = Team::create([
            'name' => $name,
            'slug' => $slug,
        ]);

        // Insert to pivot user_has_teams
        UserHasTeam::firstOrCreate([
            'user_id' => auth()->user()->id,
            'team_id' => $team->id,
        ]);
    }
}
