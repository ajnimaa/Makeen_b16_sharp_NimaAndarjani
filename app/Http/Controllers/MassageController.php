<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function index($id = null){
        if($id){
            $massage = Massage::where('id' , $id)->first();
        }else{
            $massage = Massage::orderby('id' , 'desc')->get();
        }
        return response()->json($massage);
    }

    public function store(Request $request){
        $massage = Massage::create($request->toArray());
        return response()->json($massage);
    }

    public function edit(Request $request, $id){
        $massage = Massage::where('id' , $id)->update($request->toArray());
        return response()->json($massage);
    }

    public function delete($id){
        $massage = Massage::where('id' , $id)->delete();
        return response()->json($massage);
    }
}
