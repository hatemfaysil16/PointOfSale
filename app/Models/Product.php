<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Product extends Model implements  HasMedia
{
    use HasFactory , InteractsWithMedia;
    protected $guarded = [];
    public function Typesofweight()
    {
        return $this->belongsTo(Typesofweight::class,'typesofweights_id');
    }

   public function scopeSearch($query)
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->paginate(5);
        }else{
        return $query
        ->orWhere('ProductName', 'like' , "%{$search}%")
        ->orWhere('ProductGroup', 'like' , "%{$search}%")
        ->orWhere('ProductBarcode', 'like' , "%{$search}%")
        ->orWhere('BoxLength', 'like' , "%{$search}%")
        ->orWhere('BoxWidth', 'like' , "%{$search}%")
        ->orWhere('BoxHight', 'like' , "%{$search}%")
        ->orWhere('PacksPerBox', 'like' , "%{$search}%")
        ->orWhere('PackType', 'like' , "%{$search}%")
        ->orWhere('PackWeight', 'like' , "%{$search}%")
        ->orWhere('typesofweights_id', 'like' , "%{$search}%")
        ->orWhere('BoxCostPrice', 'like' , "%{$search}%")
        ->orWhere('BoxPrice_shop', 'like' , "%{$search}%")
        ->orWhere('BoxPrice_company', 'like' , "%{$search}%")
        ->orWhere('CountryOfOrigin', 'like' , "%{$search}%")
        ->orWhere('Manufacturer', 'like' , "%{$search}%")
        ->paginate(5);
        }
   }
}
