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
            $products = Product::with('Factor:id,price,number,seller_name,description,product_id')
                ->orderby('id', 'desc');
        } else {
            $products = Product::with('Factor:id,price,number,seller_name,description,product_id')
                ->orderby('id', 'desc')
                ->first();
        }
        return response()->json($products);
    }

    public function store(ProductStoreRequest $request)
    {

        $product = Product::create($request->toArray());
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
}
