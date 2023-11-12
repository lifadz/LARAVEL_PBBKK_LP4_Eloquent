<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Tabel database yang terkait dengan model
    protected $table = 'orders';

    // Kolom-kolom yang dapat diisi (fillable) secara massal
    protected $fillable = ['produk', 'jumlah','customer_id'];

    // Relasi dengan model Customer, satu Order dimiliki oleh satu Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}