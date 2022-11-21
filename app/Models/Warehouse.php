<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Warehouse extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Product():BelongsTo
    {
        return $this->belongsTo(Product::class,'products_id');
    }

    public function Typesofweight():BelongsTo
    {
        return $this->belongsTo(Typesofweight::class,'typesofweights_id');
    }
}
