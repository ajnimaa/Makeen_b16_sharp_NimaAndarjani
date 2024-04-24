<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderEditRequest;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $orders = Order::with(
                'User:id,name,last_name,phone_number,email,gender',
                'Products:id,product_name,product_code,product_price,inventory'
            )->orderby('id', 'desc');
        } else {
            $orders = Order::with(
                'User:id,name,last_name,phone_number,email,gender',
                'Products:id,product_name,product_code,product_price,inventory'
            )->orderby('id', 'desc')->first();
        }
        return response()->json($orders);
    }

    public function store(OrderStoreRequest $request)
    {

        $order = Order::create($request->toArray());
        $order->products()->attach($request->products_id);
        return response()->json($order);
    }
    public function edit(OrderEditRequest $request, $id)
    {

        $order = Order::where('id', $id)->update($request->toArray());
        return response()->json($order);
    }

    public function delete($id)
    {

        $order = Order::where('id', $id)->delete();
        return response()->json($order);
    }
}
