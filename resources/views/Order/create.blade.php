{{-- resources/views/orders/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>Create Order</h2>

    {{-- Form untuk membuat order --}}
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        {{-- Tambahkan input dan elemen formulir lainnya sesuai kebutuhan --}}
        <div class="mb-3">
            <label for="produk" class="form-label">Produk</label>
            <input type="text" class="form-control" id="produk" name="produk" required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>

        <div class="mb-3">
            <label for="customer_id" class="form-label">Customer</label>
            <select class="form-control" id="customer_id" name="customer_id" required>
                {{-- Tambahkan opsi-opsi customer dari database --}}
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Order</button>
    </form>
@endsection
