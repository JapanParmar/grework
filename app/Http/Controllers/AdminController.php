<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductRepository;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display Login Form
     */
    public function loginForm()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    /**
     * Process Admin Login
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $adminEmail = config('app.admin_email', 'admin@grewok.com');
        $adminPassword = config('app.admin_password', 'grewok@admin');

        if (($request->email === $adminEmail || $request->email === 'admin') && $request->password === $adminPassword) {
            session(['admin_authenticated' => true, 'admin_user' => $request->email]);
            return redirect()->route('admin.dashboard')->with('success', 'Welcome back to Grewok Admin Control Panel!');
        }

        return back()->withErrors(['email' => 'Invalid email/username or password provided.'])->withInput();
    }

    /**
     * Admin Logout
     */
    public function logout()
    {
        session()->forget(['admin_authenticated', 'admin_user']);
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }

    /**
     * Dashboard Overview
     */
    public function dashboard()
    {
        $catalog = ProductRepository::getCatalog();
        $products = array_values($catalog['products'] ?? []);
        $categories = array_values($catalog['categories'] ?? []);
        $enquiries = ProductRepository::getEnquiries();

        $pendingEnquiriesCount = count(array_filter($enquiries, fn($e) => ($e['status'] ?? '') === 'Pending'));

        return view('admin.dashboard', [
            'totalProducts' => count($products),
            'totalCategories' => count($categories),
            'totalEnquiries' => count($enquiries),
            'pendingEnquiries' => $pendingEnquiriesCount,
            'recentEnquiries' => array_slice($enquiries, 0, 5),
            'recentProducts' => array_slice(array_reverse($products), 0, 5)
        ]);
    }

    /**
     * List all products
     */
    public function products(Request $request)
    {
        $catalog = ProductRepository::getCatalog();
        $products = array_values($catalog['products'] ?? []);
        $categories = $catalog['categories'] ?? [];

        $search = strtolower(trim($request->get('q', '')));
        $categoryFilter = $request->get('category', '');

        if ($search !== '') {
            $products = array_filter($products, function ($p) use ($search) {
                return str_contains(strtolower($p['name'] ?? ''), $search) ||
                       str_contains(strtolower($p['slug'] ?? ''), $search) ||
                       str_contains(strtolower($p['subcategory'] ?? ''), $search);
            });
        }

        if ($categoryFilter !== '') {
            $products = array_filter($products, function ($p) use ($categoryFilter) {
                return ($p['category_id'] ?? '') === $categoryFilter;
            });
        }

        return view('admin.products.index', [
            'products' => array_values($products),
            'categories' => $categories,
            'search' => $search,
            'categoryFilter' => $categoryFilter
        ]);
    }

    /**
     * Show Product Creation Form
     */
    public function createProduct()
    {
        $categories = ProductRepository::getCategories();
        return view('admin.products.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Handle Image File Uploads
     */
    protected function handleImageUpload(Request $request, string $inputName, string $default = '/images/products/drawer-channel.png'): string
    {
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            if ($file->isValid()) {
                $filename = time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();
                $uploadPath = public_path('uploads/products');

                if (!File::exists($uploadPath)) {
                    File::makeDirectory($uploadPath, 0755, true);
                }

                $file->move($uploadPath, $filename);
                return '/uploads/products/' . $filename;
            }
        }

        $url = $request->input($inputName . '_url');
        if (!empty($url)) {
            return trim($url);
        }

        return $default;
    }

    /**
     * Store new product
     */
    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|string',
            'subcategory' => 'required|string',
            'tagline' => 'required|string',
            'description' => 'required|string',
        ]);

        $mainImage = $this->handleImageUpload($request, 'image', '/images/products/drawer-channel.png');

        // Process gallery images
        $gallery = [$mainImage];
        if ($request->hasFile('gallery_files')) {
            foreach ($request->file('gallery_files') as $gFile) {
                if ($gFile->isValid()) {
                    $gFilename = time() . '_' . Str::random(8) . '.' . $gFile->getClientOriginalExtension();
                    $uploadPath = public_path('uploads/products');
                    if (!File::exists($uploadPath)) {
                        File::makeDirectory($uploadPath, 0755, true);
                    }
                    $gFile->move($uploadPath, $gFilename);
                    $gallery[] = '/uploads/products/' . $gFilename;
                }
            }
        }
        if (!empty($request->input('gallery_urls'))) {
            $urls = explode("\n", $request->input('gallery_urls'));
            foreach ($urls as $u) {
                $u = trim($u);
                if (!empty($u)) {
                    $gallery[] = $u;
                }
            }
        }
        $gallery = array_values(array_unique($gallery));

        // Process Features
        $features = [];
        if (is_array($request->input('features'))) {
            $features = array_values(array_filter(array_map('trim', $request->input('features'))));
        }

        // Process Finishes
        $finishes = [];
        if (is_array($request->input('finishes'))) {
            $finishes = array_values(array_filter(array_map('trim', $request->input('finishes'))));
        }

        // Process Tech Specs
        $techSpecs = [];
        $specKeys = $request->input('spec_keys', []);
        $specValues = $request->input('spec_values', []);
        if (is_array($specKeys) && is_array($specValues)) {
            foreach ($specKeys as $idx => $sKey) {
                $sKey = trim($sKey);
                $sVal = trim($specValues[$idx] ?? '');
                if ($sKey !== '' && $sVal !== '') {
                    $techSpecs[$sKey] = $sVal;
                }
            }
        }

        // Process Sizes & Pricing Matrix
        $sizes = [];
        $sizeCodes = $request->input('size_codes', []);
        $sizeNames = $request->input('size_names', []);
        $sizeMrps = $request->input('size_mrps', []);
        $sizeUnits = $request->input('size_units', []);

        if (is_array($sizeCodes)) {
            foreach ($sizeCodes as $i => $code) {
                $code = trim($code);
                $szName = trim($sizeNames[$i] ?? '');
                $mrp = floatval($sizeMrps[$i] ?? 0);
                $unit = trim($sizeUnits[$i] ?? 'Set');

                if ($code !== '' || $szName !== '') {
                    $sizes[] = [
                        'code' => $code ?: ('GW-' . Str::random(4)),
                        'size' => $szName ?: 'Standard',
                        'mrp' => $mrp,
                        'unit' => $unit
                    ];
                }
            }
        }

        if (empty($sizes)) {
            $sizes[] = [
                'code' => 'GW-' . strtoupper(Str::random(5)),
                'size' => 'Standard Size',
                'mrp' => 500,
                'unit' => 'Set'
            ];
        }

        $slug = Str::slug($request->input('slug') ?: $request->input('name'));

        $productData = [
            'id' => $slug,
            'category_id' => $request->input('category_id'),
            'subcategory' => $request->input('subcategory'),
            'name' => $request->input('name'),
            'tagline' => $request->input('tagline'),
            'slug' => $slug,
            'image' => $mainImage,
            'gallery' => $gallery,
            'description' => $request->input('description'),
            'features' => $features,
            'finishes' => $finishes,
            'warranty' => $request->input('warranty', 'Quality Certified'),
            'tech_specs' => $techSpecs,
            'sizes' => $sizes
        ];

        ProductRepository::saveProduct($productData);

        return redirect()->route('admin.products.index')->with('success', 'Product "' . $request->input('name') . '" created successfully!');
    }

    /**
     * Show Product Edit Form
     */
    public function editProduct($slug)
    {
        $product = ProductRepository::getProductBySlug($slug);
        if (!$product) {
            return redirect()->route('admin.products.index')->with('error', 'Product not found.');
        }

        $categories = ProductRepository::getCategories();

        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update Product
     */
    public function updateProduct(Request $request, $slug)
    {
        $existing = ProductRepository::getProductBySlug($slug);
        if (!$existing) {
            return redirect()->route('admin.products.index')->with('error', 'Product not found.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|string',
            'subcategory' => 'required|string',
            'tagline' => 'required|string',
            'description' => 'required|string',
        ]);

        $mainImage = $existing['image'] ?? '/images/products/drawer-channel.png';
        if ($request->hasFile('image') || !empty($request->input('image_url'))) {
            $mainImage = $this->handleImageUpload($request, 'image', $mainImage);
        }

        $gallery = $existing['gallery'] ?? [$mainImage];
        if ($request->hasFile('gallery_files')) {
            foreach ($request->file('gallery_files') as $gFile) {
                if ($gFile->isValid()) {
                    $gFilename = time() . '_' . Str::random(8) . '.' . $gFile->getClientOriginalExtension();
                    $uploadPath = public_path('uploads/products');
                    if (!File::exists($uploadPath)) {
                        File::makeDirectory($uploadPath, 0755, true);
                    }
                    $gFile->move($uploadPath, $gFilename);
                    $gallery[] = '/uploads/products/' . $gFilename;
                }
            }
        }
        if (!empty($request->input('gallery_urls'))) {
            $urls = explode("\n", $request->input('gallery_urls'));
            foreach ($urls as $u) {
                $u = trim($u);
                if (!empty($u)) {
                    $gallery[] = $u;
                }
            }
        }
        $gallery = array_values(array_unique($gallery));

        // Process Features
        $features = [];
        if (is_array($request->input('features'))) {
            $features = array_values(array_filter(array_map('trim', $request->input('features'))));
        }

        // Process Finishes
        $finishes = [];
        if (is_array($request->input('finishes'))) {
            $finishes = array_values(array_filter(array_map('trim', $request->input('finishes'))));
        }

        // Process Tech Specs
        $techSpecs = [];
        $specKeys = $request->input('spec_keys', []);
        $specValues = $request->input('spec_values', []);
        if (is_array($specKeys) && is_array($specValues)) {
            foreach ($specKeys as $idx => $sKey) {
                $sKey = trim($sKey);
                $sVal = trim($specValues[$idx] ?? '');
                if ($sKey !== '' && $sVal !== '') {
                    $techSpecs[$sKey] = $sVal;
                }
            }
        }

        // Process Sizes
        $sizes = [];
        $sizeCodes = $request->input('size_codes', []);
        $sizeNames = $request->input('size_names', []);
        $sizeMrps = $request->input('size_mrps', []);
        $sizeUnits = $request->input('size_units', []);

        if (is_array($sizeCodes)) {
            foreach ($sizeCodes as $i => $code) {
                $code = trim($code);
                $szName = trim($sizeNames[$i] ?? '');
                $mrp = floatval($sizeMrps[$i] ?? 0);
                $unit = trim($sizeUnits[$i] ?? 'Set');

                if ($code !== '' || $szName !== '') {
                    $sizes[] = [
                        'code' => $code ?: ('GW-' . Str::random(4)),
                        'size' => $szName ?: 'Standard',
                        'mrp' => $mrp,
                        'unit' => $unit
                    ];
                }
            }
        }

        if (empty($sizes)) {
            $sizes = $existing['sizes'] ?? [];
        }

        $newSlug = Str::slug($request->input('slug') ?: $request->input('name'));

        $productData = [
            'id' => $newSlug,
            'category_id' => $request->input('category_id'),
            'subcategory' => $request->input('subcategory'),
            'name' => $request->input('name'),
            'tagline' => $request->input('tagline'),
            'slug' => $newSlug,
            'image' => $mainImage,
            'gallery' => $gallery,
            'description' => $request->input('description'),
            'features' => $features,
            'finishes' => $finishes,
            'warranty' => $request->input('warranty', 'Quality Certified'),
            'tech_specs' => $techSpecs,
            'sizes' => $sizes
        ];

        ProductRepository::saveProduct($productData, $slug);

        return redirect()->route('admin.products.index')->with('success', 'Product "' . $request->input('name') . '" updated successfully!');
    }

    /**
     * Delete Product
     */
    public function deleteProduct($slug)
    {
        $deleted = ProductRepository::deleteProduct($slug);
        if ($deleted) {
            return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
        }
        return redirect()->route('admin.products.index')->with('error', 'Could not find or delete product.');
    }

    /**
     * Category Management
     */
    public function categories()
    {
        $categories = ProductRepository::getCategories();
        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Store/Update Category
     */
    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $image = $this->handleImageUpload($request, 'image', '/images/hero-kitchen.png');
        $originalId = $request->input('original_id');

        $subcategories = [];
        if (!empty($request->input('subcategories_str'))) {
            $subcategories = array_values(array_filter(array_map('trim', explode(',', $request->input('subcategories_str')))));
        }

        $catData = [
            'id' => $request->input('id') ?: Str::slug($request->input('name')),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $image,
            'icon' => $request->input('icon') ?: '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path></svg>',
            'subcategories' => $subcategories
        ];

        ProductRepository::saveCategory($catData, $originalId);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Delete Category
     */
    public function deleteCategory($slug)
    {
        ProductRepository::deleteCategory($slug);
        return redirect()->route('admin.categories.index')->with('success', 'Category removed successfully.');
    }

    /**
     * List Quote Enquiries
     */
    public function enquiries()
    {
        $enquiries = ProductRepository::getEnquiries();
        return view('admin.enquiries.index', [
            'enquiries' => $enquiries
        ]);
    }

    /**
     * Update Enquiry Status
     */
    public function updateEnquiryStatus(Request $request, $id)
    {
        $status = $request->input('status', 'Pending');
        ProductRepository::updateEnquiryStatus($id, $status);
        return redirect()->route('admin.enquiries.index')->with('success', 'Enquiry status updated to ' . $status);
    }

    /**
     * Delete Enquiry
     */
    public function deleteEnquiry($id)
    {
        ProductRepository::deleteEnquiry($id);
        return redirect()->route('admin.enquiries.index')->with('success', 'Enquiry record deleted.');
    }
}
