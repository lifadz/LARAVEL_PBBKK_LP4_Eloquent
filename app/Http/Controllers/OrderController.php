<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('order.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk' => 'required',
            'jumlah' => 'required|integer',
            'customer_id' => 'required',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')->with('success', 'Order Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $order = Order::with('customer')->find($id);
        return view('order.show', compact('order'));
    }

    public function edit($id)
    {
        $order = Order::find($id);
        $customers = Customer::all();
        return view('order.edit', compact('order', 'customers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'produk' => 'required',
            'jumlah' => 'required|integer',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);
    
        $order = Order::findOrFail($id);
        $order->fill($request->all());
        $order->save();
    
        return redirect()->route('orders.index')->with('success', 'Order Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        Order::destroy($id);

        return redirect()->route('orders.index')->with('success', 'Order Berhasil Dihapus');
    }
}