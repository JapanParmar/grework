<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    private function getCatalog()
    {
        return config('products');
    }

    public function home()
    {
        $catalog = $this->getCatalog();
        
        $featuredProducts = collect($catalog['products'])
            ->only(['platinum-channel', 'glass-pullout-2d', 'ss-3d-hinges', 'wardrobe-lifter'])
            ->all();

        return view('home', [
            'categories' => $catalog['categories'],
            'featuredProducts' => $featuredProducts
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function products(Request $request, $categorySlug = null)
    {
        $catalog = $this->getCatalog();
        $categories = $catalog['categories'];
        $allProducts = collect($catalog['products']);

        $selectedCategory = null;
        if ($categorySlug) {
            if (!isset($categories[$categorySlug])) {
                abort(404);
            }
            $selectedCategory = $categories[$categorySlug];
            $products = $allProducts->where('category_id', $categorySlug);
        } else {
            $products = $allProducts;
        }

        // Get unique sizes and finishes for filter options
        $allSizes = [];
        $allFinishes = [];
        foreach ($allProducts as $product) {
            if (isset($product['sizes'])) {
                foreach ($product['sizes'] as $sizeItem) {
                    $allSizes[] = $sizeItem['size'];
                }
            }
            if (isset($product['finishes'])) {
                foreach ($product['finishes'] as $finish) {
                    $allFinishes[] = $finish;
                }
            }
        }
        $sizes = array_unique($allSizes);
        $finishes = array_unique($allFinishes);

        return view('products.index', [
            'categories' => $categories,
            'products' => $products,
            'selectedCategory' => $selectedCategory,
            'sizes' => $sizes,
            'finishes' => $finishes,
            'query' => $request->get('q', '')
        ]);
    }

    public function productDetail($slug)
    {
        $catalog = $this->getCatalog();
        $product = collect($catalog['products'])->firstWhere('slug', $slug);

        if (!$product) {
            abort(404);
        }

        $category = $catalog['categories'][$product['category_id']];
        
        // Get related products (in same category, excluding current product)
        $relatedProducts = collect($catalog['products'])
            ->where('category_id', $product['category_id'])
            ->where('id', '!=', $product['id'])
            ->take(3)
            ->all();

        return view('products.show', [
            'product' => $product,
            'category' => $category,
            'relatedProducts' => $relatedProducts
        ]);
    }

    public function catalogue()
    {
        return view('catalogue');
    }

    public function contact()
    {
        return view('contact');
    }

    public function enquiry()
    {
        return view('enquiry');
    }

    public function submitEnquiry(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'state' => 'required|string',
            'items' => 'required|json',
            'message' => 'nullable|string',
            'enquiry_type' => 'required|string'
        ]);

        // In a real application, we would save this to the database or send an email.
        // For this B2B catalogue website, we will store the success message in the session 
        // and return a premium confirmation view.
        
        $enquiryData = [
            'id' => 'GWQ-' . rand(100000, 999999),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'state' => $request->state,
            'message' => $request->message,
            'enquiry_type' => $request->enquiry_type,
            'items' => json_decode($request->items, true),
            'created_at' => now()->format('d M Y, h:i A')
        ];

        return view('enquiry-success', ['enquiry' => $enquiryData]);
    }
}
