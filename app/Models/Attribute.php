<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Attribute extends Model
{
    /** @use HasFactory<\Database\Factories\AttributeFactory> */
    use HasFactory;

    protected $collection = 'attributes';
    protected $fillable = ['subcategory_id', 'attribute_name'];

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id', '_id');
    }
}
