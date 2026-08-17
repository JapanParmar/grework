@extends('layouts.app')

@section('title', 'Product Catalog | Grewok – Fit For Forever')

@section('content')
<!-- Header Section -->
<section class="bg-brand-navy text-white py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div>
            <h1 class="text-3xl font-extrabold tracking-tight">
                @if($selectedCategory)
                    {{ $selectedCategory['name'] }}
                @else
                    All Furniture Hardware
                @endif
            </h1>
            <p class="text-slate-300 mt-2 text-xs max-w-xl">
                @if($selectedCategory)
                    {{ $selectedCategory['description'] }}
                @else
                    Discover our full engineering catalogue containing premium B2B and B2C hardware fittings.
                @endif
            </p>
        </div>
        
        <!-- Breadcrumb / Counter -->
        <div class="text-xs bg-white/10 px-4 py-2 rounded-lg inline-flex self-center md:self-auto">
            <span class="font-bold text-slate-300">Total Products: {{ count($products) }}</span>
        </div>
    </div>
</section>

<!-- Main Products Filter & Grid -->
<section class="py-12 bg-brand-light" x-data="{
    search: '{{ $query }}',
    category: '{{ $selectedCategory ? $selectedCategory['id'] : '' }}',
    size: '',
    finish: '',
    init() {
        // Watch parameters or changes
    },
    matchProduct(el) {
        let name = el.getAttribute('data-name').toLowerCase();
        let code = el.getAttribute('data-code').toLowerCase();
        let cat = el.getAttribute('data-category');
        let sizes = el.getAttribute('data-sizes').split('|');
        let finishes = el.getAttribute('data-finishes').split('|');
        
        let q = this.search.trim().toLowerCase();
        
        // Search filter matches name or code
        if (q && !name.includes(q) && !code.includes(q)) {
            return false;
        }
        
        // Category filter
        if (this.category && cat !== this.category) {
            return false;
        }
        
        // Size filter
        if (this.size && !sizes.some(s => s === this.size)) {
            return false;
        }
        
        // Finish filter
        if (this.finish && !finishes.some(f => f === this.finish)) {
            return false;
        }
        
        return true;
    }
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Search & Filter Controls -->
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 mb-8 grid grid-cols-1 md:grid-cols-4 gap-4">
            
            <!-- Live Search -->
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-2">Search Input</label>
                <div class="relative">
                    <input type="text" x-model="search" placeholder="Type name or GW-code..." 
                           class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-2.5 pl-4 pr-10 text-xs outline-none font-medium transition-brand">
                    <button class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                </div>
            </div>

            <!-- Category Filter (Disabled if already in a subcategory unless they want to jump) -->
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-2">Category Filter</label>
                <select x-model="category" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-2.5 px-4 text-xs outline-none font-medium transition-brand cursor-pointer">
                    <option value="">All Categories</option>
                    @foreach($categories as $slug => $cat)
                        <option value="{{ $slug }}">{{ $cat['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Size Filter Options -->
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-2">Size Selection</label>
                <select x-model="size" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-2.5 px-4 text-xs outline-none font-medium transition-brand cursor-pointer">
                    <option value="">Any Size</option>
                    @foreach($sizes as $sz)
                        @if(!empty($sz))
                            <option value="{{ $sz }}">{{ $sz }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <!-- Finish Filter Options -->
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-2">Finish Options</label>
                <select x-model="finish" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-2.5 px-4 text-xs outline-none font-medium transition-brand cursor-pointer">
                    <option value="">Any Finish</option>
                    @foreach($finishes as $fn)
                        @if(!empty($fn))
                            <option value="{{ $fn }}">{{ $fn }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

        </div>

        <!-- Dynamic Grid Content -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $prod)
            <div x-show="matchProduct($el)"
                 data-name="{{ $prod['name'] }}"
                 data-code="{{ $prod['sizes'][0]['code'] }}"
                 data-category="{{ $prod['category_id'] }}"
                 data-sizes="{{ implode('|', array_column($prod['sizes'], 'size')) }}"
                 data-finishes="{{ isset($prod['finishes']) ? implode('|', $prod['finishes']) : '' }}"
                 class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-xl transition-brand"
                 x-cloak>
                 
                <div>
                    <!-- Product Image container -->
                    <div class="relative aspect-video bg-slate-50 border-b border-slate-100 flex items-center justify-center overflow-hidden">
                        <img src="{{ $prod['image'] }}" alt="{{ $prod['name'] }}" class="w-full h-full object-cover">
                        
                        <!-- Warranty Badge Overlay -->
                        <div class="absolute top-3 left-3 bg-brand-navy/90 backdrop-blur text-white text-[9px] font-bold uppercase tracking-widest px-2.5 py-1 rounded shadow-sm">
                            {{ $prod['warranty'] ?? 'Quality Certified' }}
                        </div>
                    </div>

                    <!-- Details -->
                    <div class="p-6">
                        <span class="text-[10px] text-brand-red font-bold uppercase tracking-wider block mb-1">
                            {{ $categories[$prod['category_id']]['name'] }} &bull; {{ $prod['subcategory'] }}
                        </span>
                        
                        <h3 class="font-extrabold text-brand-navy text-base leading-tight mb-2 hover:text-brand-red transition-brand">
                            <a href="{{ route('products.show', $prod['slug']) }}">{{ $prod['name'] }}</a>
                        </h3>
                        
                        <p class="text-xs text-slate-500 line-clamp-2 leading-relaxed mb-4">
                            {{ $prod['tagline'] }}
                        </p>

                        <!-- Key Features Checklist (First 2) -->
                        <ul class="space-y-1.5 mb-4">
                            @foreach(array_slice($prod['features'], 0, 2) as $feat)
                            <li class="flex items-start gap-2 text-xs text-slate-600">
                                <svg class="w-3.5 h-3.5 text-emerald-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span class="leading-none">{{ $feat }}</span>
                            </li>
                            @endforeach
                        </ul>

                        <!-- Sizes badge summary -->
                        <div class="flex items-center gap-1.5 flex-wrap">
                            <span class="text-[9px] font-extrabold text-slate-400 uppercase">Available Sizes:</span>
                            @foreach(array_slice($prod['sizes'], 0, 4) as $sz)
                            <span class="text-[9px] bg-slate-100 text-slate-600 font-semibold px-2 py-0.5 rounded border border-slate-200/50">
                                {{ $sz['size'] }}
                            </span>
                            @endforeach
                            @if(count($prod['sizes']) > 4)
                            <span class="text-[9px] bg-brand-red/5 text-brand-red font-bold px-2 py-0.5 rounded border border-brand-red/10">
                                +{{ count($prod['sizes']) - 4 }} More
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Footer details / Link -->
                <div class="px-6 pb-6 pt-3 border-t border-slate-50 flex items-center justify-between">
                    <div>
                        <span class="block text-[9px] text-slate-400 uppercase font-bold">MRP Range</span>
                        <span class="text-sm font-extrabold text-brand-navy">₹{{ $prod['sizes'][0]['mrp'] }} - ₹{{ end($prod['sizes'])['mrp'] }}</span>
                    </div>
                    
                    <a href="{{ route('products.show', $prod['slug']) }}" class="inline-flex items-center gap-1 bg-brand-navy hover:bg-brand-navy-dark text-white font-bold py-2 px-4 rounded-lg text-xs transition-brand">
                        <span>View Details</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7-7"></path></svg>
                    </a>
                </div>

            </div>
            @endforeach
        </div>

        <!-- No Products Found Match State -->
        <!-- Alpine checks if any product is visible; if none, show empty state -->
        <div class="py-16 text-center bg-white rounded-3xl border border-slate-100 shadow-sm mt-8" 
             x-show="!Array.from($el.parentNode.querySelectorAll('[data-category]')).some(e => e.style.display !== 'none')" 
             x-cloak>
            <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center text-slate-400 mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h3 class="font-bold text-slate-700 text-lg mb-1">No products match your filters</h3>
            <p class="text-xs text-slate-500 max-w-sm mx-auto leading-relaxed mb-6">Try resetting your size, finish, or search text selections to find your required fittings.</p>
            <button @click="search = ''; size = ''; finish = ''; category = ''" class="bg-brand-navy hover:bg-brand-navy-dark text-white text-xs font-bold py-2.5 px-6 rounded-full transition-brand">Reset Filters</button>
        </div>

    </div>
</section>
@endsection
