<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaController extends Controller
{
    public function index($id = null)
    {
        if ($id == null) {
            $media = Media::orderBy('id', 'desc')->paginate(10);
        } else {
            $media = Media::find($id);
        }
        return response()->json($media);
    }
    public function store(Request $request)
    {
        $type = $request->type;
        if ($type == 'users') {
            $user = new User();
            $user->find($request->id)->addMediaFromRequest('media')->toMediaCollection('avatar');
        } else if ($type == 'products') {
            $product = new Product();
            $product->find($request->id)->addMediaFromRequest('media')->toMediaCollection('product');
        } else  if ($type == 'messages') {
            $message = new Massage();
            $message->find($request->id)->addMediaFromRequest('media')->toMediaCollection('message');
        } else {
            $order = new Order();
            $order->find($request->id)->addMediaFromRequest('media')->toMediaCollection('order');
        }

        return response()->json('uploaded');
    }

    public function delete(Request $request, string $id)
    {
        $id = $request->id;
        $media = Media::destroy($id);
        return "deleted";
    }
    public function download(Request $request)
    {
        $id = $request->id;
        $media = new Media();
        $media = $media->find($id);
        return response()->download($media->getPath());
    }
}
