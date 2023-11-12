{{-- resources/views/orders/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Order List</h2>

        <a href="{{ route('orders.create') }}" class="btn btn-success mb-3">Create New Order</a>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Customer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->produk }}</td>
                            <td>{{ $order->jumlah }}</td>
                            <td>{{ $order->customer->nama }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    {{-- Tambahkan tombol delete jika diperlukan --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
