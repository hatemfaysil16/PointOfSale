<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Invoice extends Model
{
    use HasFactory;

    protected $table='invoice_products';
    protected $guarded = [];
    protected $appends = ['Total'];
    public function Product()
    {
        return $this->belongsTo(Product::class,'products_id');
    }
    public function getTotalAttribute()
    {
        
        //return $this->Product->PacksPerBox * $this->qty;
        return $this->Product->BoxPrice_shop * $this->qty;
    }

   public function scopeSearch($query)
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->where('users_id',Auth::user()->id)->where('type','accept')->paginate(15);
        }else{
        return $query
        ->orWhere('ProductName', 'like' , "%{$search}%")
        ->orWhere('ProductGroup', 'like' , "%{$search}%")
        ->orWhere('ProductBarcode', 'like' , "%{$search}%")
        ->where('users_id',Auth::user()->id)->where('type','accept')->paginate(15);
        }
   }

}
