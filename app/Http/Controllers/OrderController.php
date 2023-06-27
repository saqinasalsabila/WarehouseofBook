<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function index()
    {
        $order = Order::get();
        return view('orders.index', compact('order'));
    }

    public function show(string $id)
    {
        $order = DB::table('order_details')->where('order_id', $id)->get();   
        return view('orders.show', compact('order'));
    }

    public function destroy(string $id)
    {
        $order_detail = DB::table('order_details')->where('order_id', $id);
        $order_detail->delete();
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('orders')->with('success', 'Order deleted successfully');
    }
}
