{{-- resources/views/orders/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>Edit Order</h2>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="produk" class="form-label">Produk</label>
            <input type="text" class="form-control" id="produk" name="produk" value="{{ $order->produk }}" required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $order->jumlah }}" required>
        </div>

        {{-- ...Tambahkan elemen formulir lainnya sesuai kebutuhan... --}}

        <button type="submit" class="btn btn-primary">Update Order</button>
    </form>
@endsection
