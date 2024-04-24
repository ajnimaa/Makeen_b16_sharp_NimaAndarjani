<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $label = Label::where('id', $id)->first();
        } else {
            $label = Label::orderby('id', 'desc');
        }
        return response()->json($label);
    }

    public function store(Request $request)
    {
        $label = Label::create($request->toArray());
        return response()->json($label);
    }

    public function edit(Request $request, $id)
    {
        $label = Label::where('id', $id)->update($request->toArray());
        return response()->json($label);
    }

    public function delete($id)
    {
        $label = Label::where('id', $id)->delete();
        return response()->json($label);
    }
}
