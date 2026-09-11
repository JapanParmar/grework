<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductRepository;

class PageController extends Controller
{
    private function getCatalog()
    {
        return ProductRepository::getCatalog();
    }

    public function home()
    {
        $catalog = $this->getCatalog();
        $allProducts = collect($catalog['products']);
        
        // Take the first 4 products as featured — always works regardless of slug names
        $featuredProducts = $allProducts->take(4)->all();

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
            if (isset($product['sizes']) && is_array($product['sizes'])) {
                foreach ($product['sizes'] as $sizeItem) {
                    if (isset($sizeItem['size'])) {
                        $allSizes[] = $sizeItem['size'];
                    }
                }
            }
            if (isset($product['finishes']) && is_array($product['finishes'])) {
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
        $product = ProductRepository::getProductBySlug($slug);

        if (!$product) {
            abort(404);
        }

        $categoryId = $product['category_id'] ?? '';
        $category = $catalog['categories'][$categoryId] ?? [
            'name' => 'Hardware Solution',
            'id' => $categoryId
        ];
        
        // Get related products (in same category, excluding current product)
        $relatedProducts = collect($catalog['products'])
            ->where('category_id', $categoryId)
            ->where('slug', '!=', $product['slug'])
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

        $itemsArray = json_decode($request->items, true) ?? [];
        
        $enquiryData = [
            'id' => 'GWQ-' . rand(100000, 999999),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'state' => $request->state,
            'message' => $request->message,
            'enquiry_type' => $request->enquiry_type,
            'items' => $itemsArray,
            'status' => 'Pending',
            'created_at' => now()->format('d M Y, h:i A')
        ];

        ProductRepository::saveEnquiry($enquiryData);

        return view('enquiry-success', ['enquiry' => $enquiryData]);
    }
}
