{{-- resources/views/customer/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h2>Daftar Customer</h2>
    <a href="{{ route('customers.create') }}" class="btn btn-success">Tambah Customer</a>
    
    @foreach ($customers as $customer)
        <div>
            <h3>{{ $customer->nama }}</h3>
            <p>Alamat: {{ $customer->alamat }}</p>
            <p>Telepon: {{ $customer->telepon }}</p>
            <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info">Detail</a>
            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('customers.destroy', $customer->id) }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
            </form>
        </div>
        <hr>
    @endforeach
@endsection
