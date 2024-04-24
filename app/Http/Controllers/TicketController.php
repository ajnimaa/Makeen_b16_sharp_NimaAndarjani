<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index($id = null){
        if($id){
            $tickets = Ticket::where('id', $id)->first();
        }else{
            $tickets = Ticket::orderby('id', 'desc')->get();
        }
        return response()->json($tickets);
    }

    public function store(Request $request){
        $tickets = Ticket::create($request->toArray());
        return response()->json($tickets);
    }

    public function edit(Request $request, $id){
        $tickets = Ticket::where('id', $id)->update($request->toArray());
        return response()->json($tickets);
    }

    public function delete($id){
        $tickets = Ticket::where('id' , $id)->delete();
        return response()->json($tickets);
    }
}
