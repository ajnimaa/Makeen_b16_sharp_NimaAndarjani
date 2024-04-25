<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteStoreRequest;
use App\Models\Note;
use Illuminate\Http\Request;

use function Laravel\Prompts\note;

class NoteController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $note = Note::where('id', $id)->first();
        } else {
            $note = Note::orderby('id', 'desc')->get();
        }
        return response()->json($note);
    }

    public function store(NoteStoreRequest $request){
        $note = Note::create($request->toArray());
        return response()->json($note);
    }

    public function edit(Request $request, $id){
        $note = Note::where('id', $id)->update($request->toArray());
        return response()->json($note);
    }

    public function delete($id){
        $note = Note::where('id' , $id)->delete();
        return response()->json($note);
    }
}
