<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'description',
        'image',
        'icon',
        'subcategories',
    ];

    protected $casts = [
        'subcategories' => 'array',
    ];

    /**
     * Products belonging to this category
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'slug');
    }

    /**
     * Return slug as route key
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Convert to the keyed-by-slug array format the views expect
     */
    public function toViewArray(): array
    {
        return [
            'id'             => $this->slug,
            'name'           => $this->name,
            'description'    => $this->description ?? '',
            'image'          => $this->image ?? '/images/hero-kitchen.png',
            'icon'           => $this->icon ?? '',
            'subcategories'  => $this->subcategories ?? [],
        ];
    }
}
