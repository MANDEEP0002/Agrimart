<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

   protected $table ="order";
   protected $fillable = [
    'user_name',
    'product_name',
    'product_price',
    'product_stock',
    'order_status'
      
  
  ];


  public function history()
  {
      return $this->hasMany(History::class, 'order_id');
  }

}