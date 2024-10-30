<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Advertisement extends Model
{
    /** @use HasFactory<\Database\Factories\AdvertisementFactory> */
    use HasFactory;

    protected $collection = 'advertisements';
    protected $fillable = [
        'title',
        'description',
        'price',
        'contact_no',
        'subcategory_id',
        'user_id',
        'attributes'
    ];

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id', '_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', '_id');
    }
}
