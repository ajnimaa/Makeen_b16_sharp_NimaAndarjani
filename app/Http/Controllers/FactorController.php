<?php

namespace App\Http\Controllers;

use App\Http\Requests\FactorStoreRequst;
use App\Models\Factor;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class FactorController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $factor = Factor::where('id', $id)->first();
        } else {
            $factor = Factor::orderby('id', 'desc')->get();
        }
        return response()->json($factor);
    }

    public function store(FactorStoreRequst $request)
    {
        $factor = Factor::create($request->toArray());
        return response()->json($factor);
    }

    public function edit(Request $request, $id)
    {
        $factor = Factor::where('id', $id)->update($request->toArray());
        return response()->json($factor);
    }

    public function delete($id){
        $factor = Factor::where('id', $id)->delete();
        return response()->json($factor);
    }
}
