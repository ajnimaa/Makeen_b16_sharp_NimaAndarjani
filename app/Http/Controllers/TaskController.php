<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskEditRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $task = Task::where('id', $id)->first();
        } else {
            $task = Task::orderby('id', 'desc')->get();
        }
        return response()->json($task);
    }

    public function store(Request $request)
    {
        $task = Task::create($request->toArray());
        return response()->json($task);
    }

    public function edit(TaskEditRequest $request, $id)
    {
        $task = Task::where('id', $id)->update($request->toArray());
        return response()->json($task);
    }
    public function delete($id){
        $task = Task::where('id' , $id)->delete();
        return response()->json($task);
    }
}
