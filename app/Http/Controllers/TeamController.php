<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamEditRequest;
use App\Http\Requests\TeamStoreRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $team = Team::where('id', $id)->first();
        } else {
            $team = Team::orderby('id', 'desc')->get();
        }
        return response()->json($team);
    }

    public function store(TeamStoreRequest $request)
    {
        $team = Team::create($request->toArray());
        return response()->json($team);
    }

    public function edit(TeamEditRequest $request, $id)
    {
        $team = Team::where('id', $id)->update($request->toArray());
        return response()->json($team);
    }

    public function delete($id){
        $team = Team::where('id', $id)->delete();
        return response()->json($team);
    }
}
