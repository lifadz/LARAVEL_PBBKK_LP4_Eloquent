<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Kolom-kolom yang dapat diisi (fillable) secara massal

    protected $guarded = [];

    protected $attributes = [
        'foto' => '{{blank.png}}',
    ];

    // Relasi dengan model Order, satu Customer memiliki banyak Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}