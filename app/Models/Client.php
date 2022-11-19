<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [];
    
   public function scopeSearch($query)
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->paginate(5);
        }else{
        return $query
        ->orWhere('name', 'like' , "%{$search}%")
        ->orWhere('street', 'like' , "%{$search}%")
        ->orWhere('CompanyState', 'like' , "%{$search}%")
        ->orWhere('phone', 'like' , "%{$search}%")
        ->orWhere('companyName', 'like' , "%{$search}%")
        ->orWhere('companyCity', 'like' , "%{$search}%")
        ->orWhere('PostalCode', 'like' , "%{$search}%")
        ->paginate(5);
        }
   }
}