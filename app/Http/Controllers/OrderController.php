<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function add(Request $request)
    {

        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'date' => 'required',
            'time' => 'required',
            'number_of_person' => 'required',
            'phone' => 'required',
        ]);

        $order = auth()->user()->orders()->create([
            'from' => $request->from,
            'to' => $request->to,
            'date' => $request->date,
            'time' => $request->time,
            'number_of_person' => $request->number_of_person,
            'phone' => $request->phone,
        ]);

        if ($order) {
            return redirect()->route('dashboard')->with('success', 'Order created successfully');
        }
        return response()->json([
            'message' => 'Error'
        ], 422);
    }



    // view
    public function view(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:orders,id',
        ]);

        $order = Order::where('id', $request->id)->with('user')->first();
        return view('order.view', ['order' => $order]);
    }
}
