<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable =['cate_name', 'section_id', 'discount', 'description', 'status'];

    
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }
    
    public function sub_categories(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }
    
    // public function products() {
    //     return $this->hasMany(Product::class);
    // }

    use HasFactory;
}
