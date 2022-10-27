<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function Product()
    {
        return $this->belongsTo(Product::class,'products_id');
    }
   public function scopeSearch($query)
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->paginate(5);
        }else{
        return $query
        ->orWhere('date', 'like' , "%{$search}%")
        ->orWhere('ProductName', 'like' , "%{$search}%")
        ->orWhere('quantity', 'like' , "%{$search}%")
        ->orWhere('PurchasePrice', 'like' , "%{$search}%")
        ->orWhere('ProductionDate', 'like' , "%{$search}%")
        ->orWhere('ExpiryDate', 'like' , "%{$search}%")
        ->orWhere('WarehouseNumber', 'like' , "%{$search}%")
        ->orWhere('InvoiceNumber', 'like' , "%{$search}%")
        ->orWhere('total', 'like' , "%{$search}%")
        ->paginate(5);
        }
   }
}
