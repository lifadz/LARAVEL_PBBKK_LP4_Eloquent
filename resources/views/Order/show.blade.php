{{-- resources/views/orders/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>Show Order</h2>

    <p>Produk: {{ $order->produk }}</p>
    <p>Jumlah: {{ $order->jumlah }}</p>
    {{-- Tambahkan informasi lain yang ingin ditampilkan --}}

    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>

@endsection
