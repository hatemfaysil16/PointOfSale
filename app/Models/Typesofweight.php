<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Typesofweight extends Model 
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
   public function scopeSearch($query)
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->paginate(5);
        }else{
        return $query->orWhere('name', 'like' , "%{$search}%")->paginate(5);
        }
   }
    

}
       