<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'address',
        'total_price',
        'shipping_price',
        'status',
        'payment_method'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function transactionDetail()
    {
        return $this->hasMany(TransactionDetail::class,'transaction_id', 'id');
    }
}
