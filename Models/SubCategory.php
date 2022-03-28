<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

    protected $fillable =['sub_cate_name', 'category_id', 'status'];

    
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
    
   

    use HasFactory;
}
