<?php

namespace App\Http\Controllers;

use App\Models\Warrenty;
use Illuminate\Http\Request;

class WarrentyController extends Controller
{
    public function index($id = null){
        if($id){
            $warrenty = Warrenty::where('id', $id)->first();
        }else{
            $warrenty = Warrenty::orderby('id' , 'desc');
        }
        return response()->json($warrenty);
    }

    public function store(Request $request){
        $warrenty = Warrenty::create($request->toArray());
        return response()->json($warrenty);
    }

    public function edit(Request $request, $id){
        $warrenty = Warrenty::where('id' , $id)->update($request->toArray());
        return response()->json($warrenty);
    }

    public function delete($id){
        $warrenty = Warrenty::where('id' , $id)->delete();
        return response()->json($warrenty);
    }
}
