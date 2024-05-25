<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index($id = null)
    {
        if($id){
            $media = Media::with('users')->orderBy('id', 'desc')->paginate(10);
        }else{
            $media = Media::with('users')->find($id);
        }
        return response()->json($media);
    }
    public function storeprofile(Request $request): string
    {
        $path = $request->file('product image')->store('product images');
        return $path;
    }
    public function edit(Request $request, $id)
    {
        $media = Media::where('id', $id)->update($request->toArray());
        return response()->json($media);
    }
    public function delete($id)
    {
        $media = Media::where($id, 'id')->delete();
        return response()->json($media);
    }
    public function download(Request $request)
    {
        $path = $request->path;
        return Storage::download($path);
    }
}
