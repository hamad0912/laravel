<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Section;
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['product_name', 'price', 'alert_stock', 
                            'brand', 'description', 'quantity', 'barcode', 'qrcode', 
                            'product_image', 'section_id'];

           public function orderdetails()
       {
           return $this->hasMany(OrderDetail::class);
       } 
       
       public function cart()
       {
           return $this->hasMany(Cart::class);
       } 

       public function section(): BelongsTo
       {
           return $this->belongsTo(Section::class);
       }
    use HasFactory;
}
