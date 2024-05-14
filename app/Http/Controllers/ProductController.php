<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductEditRequest;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $products = Product::with(
                'Orders:id,order_name,order_code,order_delivery_time,delivery_method'
            )->orderby('id', 'desc');
        } else {
            $products = Product::with(
                'Orders:id,order_name,order_code,order_delivery_time,delivery_method'
            )->orderby('id', 'desc')->first();
        }
        return response()->json($products);
    }

    public function store(ProductStoreRequest $request)
    {
        $path = $request->file('image_path')->store('public/product_images');

        $product = Product::create($request->merge(['image_path' => $path])
        ->toArray());
        return response()->json($product);
    }
    public function edit(ProductEditRequest $request, $id)
    {

        $product = Product::where('id', $id)->update($request->toArray());
        return response()->json($product);
    }

    public function delete($id)
    {

        $product = Product::where('id', $id)->delete();
        return response()->json($product);
    }

    public function update(Request $request): string
    {
        $path = $request->file('product image')->store('product images');
        return $path;
    }
}
