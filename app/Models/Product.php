<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'sku',
        'price',
        'old_price',
        'stock',
        'category_id',
        'supplier_id',
        'material',
        'free_shipping',
        'rating',
        'reviews_count',
        'status',
        'published_at',
    ];

    protected $casts = [
        'free_shipping' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function primaryImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }

    public function isActive(): bool
    {
        return $this->status === 'active';
    }
}