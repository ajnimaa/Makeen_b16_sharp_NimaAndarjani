<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $posts = Post::where('id', $id)->first();
        } else {
            $posts = Post::orderBy('id', 'desc')
                ->get();
        }
        return response()->json($posts);
    }

    public function add(Request $request)
    {

        $post = Post::create($request->toArray());
        return response()->json($post);
    }

    public function edit(Request $request, $id)
    {

        $post = Post::where('id', $id)->update($request->toArray());
        return response()->json($post);
    }

    public function delete($id)
    {

        $post = Post::where('id', $id)->delete();
        return response()->json($post);
    }
}
