<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        //sesuai DB
        'products_id', 'transactions_id'
    ];

    protected $hidden = [
        //digunakan untuk data yang ingin tidak di tampilkan ex:

    ];

    //relasi
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
