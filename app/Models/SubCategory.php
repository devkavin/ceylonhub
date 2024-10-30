<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class SubCategory extends Model
{
    /** @use HasFactory<\Database\Factories\SubCategoryFactory> */
    use HasFactory;

    protected $collection = 'sub_categories';
    protected $fillable = ['sub_category_name', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', '_id');
    }
}
