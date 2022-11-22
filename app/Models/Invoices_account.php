<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Invoices_account extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Client():BelongsTo
    {
        return $this->belongsTo(Client::class,'clients_id');
    }

   public function scopeSearch($query)
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->where('users_id',Auth::user()->id)->paginate(15);
        }else{
        return $query
        ->orWhere('number', 'like' , "%{$search}%")
        ->orWhere('totalpacks', 'like' , "%{$search}%")
        ->orWhere('subtotal', 'like' , "%{$search}%")
        ->orWhere('customerbalance', 'like' , "%{$search}%")
        ->orWhere('additionalDiscount', 'like' , "%{$search}%")
        ->orWhere('tax', 'like' , "%{$search}%")
        ->orWhere('total', 'like' , "%{$search}%")
        ->orWhere('paid', 'like' , "%{$search}%")
        ->orWhere('Left', 'like' , "%{$search}%")
        ->where('users_id',Auth::user()->id)->paginate(15);
        }
   }
}