<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Team;
use Illuminate\Database\Eloquent\Builder;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{

    public function index(Request $request)
    {

        $user = Auth::user();

        $teams = Team::wherehas('users', function (Builder $query) {
            $query->where('user_id', auth()->user()->id);
        })->get();

        $listProjects = Project::wherehas('teams.users', function (Builder $query) use ($user) {
            $query->where('users.id', $user->id);
        })->get();

        $projects = Project::when($request->q, function ($query, $q) {
            $query->where('project_name', 'like', '%' . $q . '%');
        })->wherehas('teams.users', function (Builder $query) use ($user) {
            $query->where('users.id', $user->id);
        })->paginate(5);

        return Inertia::render('Projects/ProjectList', [
            'menuTasks' => 'active',
            'projects' => $projects,
            'teams' => $teams,
            'search' => $request->only('q'),
            'listProjects' => $listProjects,
        ]);
    }

    public function create()
    {
        $teams = Team::wherehas('users', function (Builder $query) {
            $query->where('user_id', auth()->user()->id);
        })->get();


        return Inertia::render('Projects/CreateProject', [
            'menuProjects' => 'active',
            'teams' => $teams,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'teamId' => 'required',
            'projectName' => 'required',
            'end' => 'required',
            'start' => 'required',
        ]);

        Project::create([
            'team_id' => $request->teamId,
            'project_name' => $request->projectName,
            'start' => $request->start,
            'end' => $request->end,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'teamId' => 'required',
            'projectName' => 'required',
            'end' => 'required',
            'start' => 'required',
        ]);

        $project = Project::find($id);

        $project->project_name = $request->projectName;
        $project->start = $request->start;
        $project->end = $request->end;
        $project->team_id = $request->teamId;

        $project->update();
    }

    public function delete($id)
    {
        $project =   Project::find($id);

        if ($project) {
            $project->delete();
        }
    }
}
