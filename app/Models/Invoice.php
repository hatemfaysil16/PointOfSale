<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['Total'];
    public function Product()
    {
        return $this->belongsTo(Product::class,'products_id');
    }
    public function getTotalAttribute()
    {
        return $this->Product->PacksPerBox * $this->qty;
    }

}
