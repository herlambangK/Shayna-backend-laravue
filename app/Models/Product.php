<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'name', 'type', 'description', 'price', 'slug', 'quantity'
    ];

    protected $hidden = [
        //digunakan untuk data yang ingin tidak di tampilkan ex:
    ];

    // melakukan Relasi dengan db galleries
    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id');
    }
}
