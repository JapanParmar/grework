<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductCatalogSeeder extends Seeder
{
    /**
     * Seed all categories and products from config/products.php into MySQL.
     */
    public function run(): void
    {
        $catalog = config('products');

        if (!$catalog || empty($catalog['categories'])) {
            $this->command->warn('config/products.php is empty or missing. Nothing to seed.');
            return;
        }

        // ── 1. Seed Categories ─────────────────────────────────────────────
        $this->command->info('Seeding categories…');

        foreach ($catalog['categories'] as $slug => $cat) {
            Category::updateOrCreate(
                ['slug' => $slug],
                [
                    'name'          => $cat['name'] ?? $slug,
                    'description'   => $cat['description'] ?? '',
                    'image'         => $cat['image'] ?? '/images/hero-kitchen.png',
                    'icon'          => $cat['icon'] ?? '',
                    'subcategories' => $cat['subcategories'] ?? [],
                ]
            );
        }

        $this->command->info('✓ ' . count($catalog['categories']) . ' categories seeded.');

        // ── 2. Seed Products ───────────────────────────────────────────────
        $this->command->info('Seeding products…');

        foreach ($catalog['products'] as $slug => $p) {
            $finalSlug = $p['slug'] ?? $slug;

            Product::updateOrCreate(
                ['slug' => $finalSlug],
                [
                    'category_id' => $p['category_id'] ?? '',
                    'subcategory' => $p['subcategory'] ?? '',
                    'name'        => $p['name'] ?? $finalSlug,
                    'tagline'     => $p['tagline'] ?? '',
                    'image'       => $p['image'] ?? '/images/products/drawer-channel.png',
                    'gallery'     => $p['gallery'] ?? [$p['image'] ?? '/images/products/drawer-channel.png'],
                    'description' => $p['description'] ?? '',
                    'features'    => $p['features'] ?? [],
                    'finishes'    => $p['finishes'] ?? [],
                    'warranty'    => $p['warranty'] ?? 'Quality Certified',
                    'tech_specs'  => $p['tech_specs'] ?? [],
                    'sizes'       => $p['sizes'] ?? [],
                ]
            );
        }

        $this->command->info('✓ ' . count($catalog['products']) . ' products seeded.');
    }
}
