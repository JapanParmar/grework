<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug',
        'category_id',
        'subcategory',
        'name',
        'tagline',
        'image',
        'gallery',
        'description',
        'features',
        'finishes',
        'warranty',
        'tech_specs',
        'sizes',
    ];

    protected $casts = [
        'gallery'    => 'array',
        'features'   => 'array',
        'finishes'   => 'array',
        'tech_specs' => 'array',
        'sizes'      => 'array',
    ];

    /**
     * Parent category (matched by slug)
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'slug');
    }

    /**
     * Use slug as route key
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Convert to the flat associative array the views expect
     */
    public function toViewArray(): array
    {
        $sizes = $this->sizes ?? [];
        return [
            'id'          => $this->slug,
            'category_id' => $this->category_id,
            'subcategory' => $this->subcategory ?? '',
            'name'        => $this->name,
            'tagline'     => $this->tagline ?? '',
            'slug'        => $this->slug,
            'image'       => $this->image ?? '/images/products/drawer-channel.png',
            'gallery'     => $this->gallery ?? [$this->image],
            'description' => $this->description ?? '',
            'features'    => $this->features ?? [],
            'finishes'    => $this->finishes ?? [],
            'warranty'    => $this->warranty ?? 'Quality Certified',
            'tech_specs'  => $this->tech_specs ?? [],
            'sizes'       => $sizes,
        ];
    }
}
