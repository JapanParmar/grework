@extends('admin.layouts.app')

@section('title', 'Manage Products | Grewok Admin Control Panel')
@section('page_title', 'Hardware Products Catalogue')
@section('page_subtitle', 'Add, update, or edit all product specifications, images, and price details.')

@section('content')

<!-- Controls & Filters Strip -->
<div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 mb-8">
    <form action="{{ route('admin.products.index') }}" method="GET" class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-end">
        
        <!-- Search Input -->
        <div class="sm:col-span-6">
            <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Search Products</label>
            <div class="relative">
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Search by product name, code, or subcategory..." 
                       class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-2.5 pl-4 pr-10 text-xs text-white outline-none font-medium">
                <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-white">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
            </div>
        </div>

        <!-- Category Filter -->
        <div class="sm:col-span-4">
            <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Category</label>
            <select name="category" onchange="this.form.submit()" class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-2.5 px-4 text-xs text-white outline-none font-medium cursor-pointer">
                <option value="">All Categories</option>
                @foreach($categories as $catId => $cat)
                    <option value="{{ $catId }}" {{ request('category') == $catId ? 'selected' : '' }}>{{ $cat['name'] }}</option>
                @endforeach
            </select>
        </div>

        <!-- Add Product Button -->
        <div class="sm:col-span-2 flex justify-end">
            <a href="{{ route('admin.products.create') }}" class="w-full bg-brand-red hover:bg-brand-red-dark text-white text-xs font-bold py-2.5 px-4 rounded-xl shadow-lg shadow-brand-red/20 transition-all text-center flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
                <span>Add Product</span>
            </a>
        </div>

    </form>
</div>

<!-- Products Table -->
<div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden shadow-sm">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-slate-950 text-slate-400 text-[10px] font-extrabold uppercase tracking-wider border-b border-slate-800">
                <tr>
                    <th class="px-6 py-4">Image</th>
                    <th class="px-6 py-4">Product Details</th>
                    <th class="px-6 py-4">Category & Subcategory</th>
                    <th class="px-6 py-4">MRP Range</th>
                    <th class="px-6 py-4">Warranty</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800/60">
                @forelse($products as $p)
                <tr class="hover:bg-slate-800/40 transition-colors">
                    
                    <!-- Thumbnail Image with Skeleton Loading -->
                    <td class="px-6 py-4">
                        <div x-data="{ loaded: false }" class="relative w-14 h-14 rounded-xl bg-slate-800 overflow-hidden border border-slate-700 flex-shrink-0">
                            <!-- Skeleton Wave Loader -->
                            <div x-show="!loaded" class="absolute inset-0 skeleton-shimmer-dark"></div>
                            <!-- Real Image -->
                            <img src="{{ $p['image'] }}" alt="{{ $p['name'] }}" @load="loaded = true" :class="loaded ? 'opacity-100' : 'opacity-0'" class="w-full h-full object-cover transition-opacity duration-500">
                        </div>
                    </td>

                    <!-- Product Details -->
                    <td class="px-6 py-4">
                        <div class="font-extrabold text-white text-sm mb-1 hover:text-brand-red transition-all">
                            <a href="{{ route('admin.products.edit', $p['slug']) }}">{{ $p['name'] }}</a>
                        </div>
                        <p class="text-[11px] text-slate-400 line-clamp-1 max-w-sm">{{ $p['tagline'] }}</p>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="text-[9px] bg-slate-800 text-slate-300 font-mono px-2 py-0.5 rounded border border-slate-700">Code: {{ $p['sizes'][0]['code'] ?? $p['slug'] }}</span>
                            <span class="text-[9px] text-slate-500">{{ count($p['sizes'] ?? []) }} Sizes Configured</span>
                        </div>
                    </td>

                    <!-- Category & Subcategory -->
                    <td class="px-6 py-4">
                        <span class="block text-slate-300 font-semibold text-xs">
                            {{ $categories[$p['category_id']]['name'] ?? 'Hardware' }}
                        </span>
                        <span class="text-[11px] text-brand-red font-semibold block mt-0.5">
                            {{ $p['subcategory'] }}
                        </span>
                    </td>

                    <!-- MRP Range -->
                    <td class="px-6 py-4">
                        <div class="font-black text-emerald-400 text-sm">
                            ₹{{ $p['sizes'][0]['mrp'] ?? 0 }} - ₹{{ end($p['sizes'])['mrp'] ?? 0 }}
                        </div>
                        <span class="text-[10px] text-slate-500">Per {{ $p['sizes'][0]['unit'] ?? 'Set' }}</span>
                    </td>

                    <!-- Warranty -->
                    <td class="px-6 py-4">
                        <span class="bg-brand-navy border border-slate-700 text-slate-200 text-[10px] font-extrabold px-2.5 py-1 rounded-lg">
                            {{ $p['warranty'] ?? 'Certified' }}
                        </span>
                    </td>

                    <!-- Actions -->
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('products.show', $p['slug']) }}" target="_blank" class="p-2 text-slate-400 hover:text-sky-400 hover:bg-slate-800 rounded-lg transition-all" title="View Public Page">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>

                            <a href="{{ route('admin.products.edit', $p['slug']) }}" class="p-2 text-slate-400 hover:text-white hover:bg-slate-800 rounded-lg transition-all" title="Edit Product">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </a>

                            <form action="{{ route('admin.products.delete', $p['slug']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product? This action cannot be undone.')">
                                @csrf
                                <button type="submit" class="p-2 text-slate-400 hover:text-red-400 hover:bg-slate-800 rounded-lg transition-all" title="Delete Product">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </form>
                        </div>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-12 text-center text-slate-500 text-xs">
                        No products found matching your search or category filter.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
