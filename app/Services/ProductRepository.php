<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use App\Models\Enquiry;
use Illuminate\Support\Str;

/**
 * ProductRepository
 *
 * Thin service layer over Eloquent models.
 * All methods return plain arrays matching the shape the views already expect
 * so controllers and Blade templates remain unchanged.
 */
class ProductRepository
{
    // ──────────────────────────────────────────────────────────────────────────
    // CATALOG (combined categories + products)
    // ──────────────────────────────────────────────────────────────────────────

    /**
     * Return the full catalog in the format:
     *   ['categories' => [...keyed by slug...], 'products' => [...keyed by slug...]]
     */
    public static function getCatalog(): array
    {
        $categories = static::getCategories();
        $products   = static::getAllProductsKeyed();

        return [
            'categories' => $categories,
            'products'   => $products,
        ];
    }

    // ──────────────────────────────────────────────────────────────────────────
    // CATEGORIES
    // ──────────────────────────────────────────────────────────────────────────

    /**
     * All categories keyed by slug → view-compatible array
     */
    public static function getCategories(): array
    {
        return Category::orderBy('name')
            ->get()
            ->keyBy('slug')
            ->map(fn(Category $c) => $c->toViewArray())
            ->all();
    }

    public static function saveCategory(array $data, ?string $originalSlug = null): array
    {
        $slug = Str::slug($data['id'] ?? $data['name']);

        // If slug changed delete the old one
        if ($originalSlug && $originalSlug !== $slug) {
            Category::where('slug', $originalSlug)->delete();
        }

        $category = Category::updateOrCreate(
            ['slug' => $slug],
            [
                'name'          => trim($data['name'] ?? ''),
                'description'   => trim($data['description'] ?? ''),
                'image'         => $data['image'] ?? '/images/hero-kitchen.png',
                'icon'          => $data['icon'] ?? '',
                'subcategories' => is_array($data['subcategories'] ?? null) ? array_values(array_filter($data['subcategories'])) : [],
            ]
        );

        return $category->toViewArray();
    }

    public static function deleteCategory(string $slug): bool
    {
        return Category::where('slug', $slug)->delete() > 0;
    }

    // ──────────────────────────────────────────────────────────────────────────
    // PRODUCTS
    // ──────────────────────────────────────────────────────────────────────────

    /**
     * All products as slug-keyed array of view-compatible arrays
     */
    public static function getAllProductsKeyed(): array
    {
        return Product::orderBy('name')
            ->get()
            ->keyBy('slug')
            ->map(fn(Product $p) => $p->toViewArray())
            ->all();
    }

    /**
     * Single product by slug, or null
     */
    public static function getProductBySlug(string $slug): ?array
    {
        $product = Product::where('slug', $slug)->first();
        return $product ? $product->toViewArray() : null;
    }

    /**
     * Create or update a product record.
     * Accepts an optional $originalSlug to handle slug renames.
     */
    public static function saveProduct(array $data, ?string $originalSlug = null): array
    {
        $slug = Str::slug($data['slug'] ?? $data['name']);

        if ($originalSlug && $originalSlug !== $slug) {
            Product::where('slug', $originalSlug)->delete();
        }

        $product = Product::updateOrCreate(
            ['slug' => $slug],
            [
                'category_id' => $data['category_id'] ?? '',
                'subcategory' => trim($data['subcategory'] ?? ''),
                'name'        => trim($data['name'] ?? ''),
                'tagline'     => trim($data['tagline'] ?? ''),
                'image'       => $data['image'] ?? '/images/products/drawer-channel.png',
                'gallery'     => is_array($data['gallery'] ?? null) ? array_values(array_filter($data['gallery'])) : [$data['image'] ?? '/images/products/drawer-channel.png'],
                'description' => trim($data['description'] ?? ''),
                'features'    => is_array($data['features'] ?? null) ? array_values(array_filter($data['features'])) : [],
                'finishes'    => is_array($data['finishes'] ?? null) ? array_values(array_filter($data['finishes'])) : [],
                'warranty'    => trim($data['warranty'] ?? 'Quality Certified'),
                'tech_specs'  => is_array($data['tech_specs'] ?? null) ? $data['tech_specs'] : [],
                'sizes'       => is_array($data['sizes'] ?? null) ? array_values($data['sizes']) : [],
            ]
        );

        return $product->toViewArray();
    }

    public static function deleteProduct(string $slug): bool
    {
        return Product::where('slug', $slug)->delete() > 0;
    }

    // ──────────────────────────────────────────────────────────────────────────
    // ENQUIRIES
    // ──────────────────────────────────────────────────────────────────────────

    /**
     * All enquiries as plain arrays, newest first
     */
    public static function getEnquiries(): array
    {
        return Enquiry::orderByDesc('created_at')
            ->get()
            ->map(fn(Enquiry $e) => $e->toViewArray())
            ->all();
    }

    public static function saveEnquiry(array $data): array
    {
        $enquiryId = $data['id'] ?? ('GWQ-' . rand(100000, 999999));

        $enquiry = Enquiry::create([
            'enquiry_id'   => $enquiryId,
            'name'         => $data['name'],
            'phone'        => $data['phone'],
            'email'        => $data['email'],
            'state'        => $data['state'] ?? '',
            'message'      => $data['message'] ?? '',
            'enquiry_type' => $data['enquiry_type'] ?? 'General',
            'items'        => $data['items'] ?? [],
            'status'       => $data['status'] ?? 'Pending',
        ]);

        return $enquiry->toViewArray();
    }

    public static function updateEnquiryStatus(string $enquiryId, string $status): bool
    {
        return Enquiry::where('enquiry_id', $enquiryId)->update(['status' => $status]) > 0;
    }

    public static function deleteEnquiry(string $enquiryId): bool
    {
        return Enquiry::where('enquiry_id', $enquiryId)->delete() > 0;
    }
}
