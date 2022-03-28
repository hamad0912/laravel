<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $fillable = [' order_id', 'product_id',
                         'unitprice', 'quantity',
                        'amount', 'discount'];

       public function product()
       {
           return $this->belongsTo(Product::class);
       }           
                        
       public function order()
       {
           return $this->belongsTo(Order::class);
       } 
       
    use HasFactory;
}
