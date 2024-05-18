<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function store(Request $request): string
    {
        $path = $request->file('product image')->store('product images');
        return $path;
    }

    public function index($id = null)
    {
        if($id){
            $path = Media::where($id, 'id')->first();
        }else{
            $path = Media::where($id, 'id')->get();
        }
        return $path;
    }
}
