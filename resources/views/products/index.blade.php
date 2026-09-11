@extends('layouts.app')

@section('title', 'Hardware Collections | Grewok — Fit For Forever')

@section('content')
<div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-24"
     x-data="{
        search: '{{ $query }}',
        category: '{{ $selectedCategory ? $selectedCategory['id'] : '' }}',
        size: '',
        finish: '',
        matchProduct(el) {
            let name = el.getAttribute('data-name').toLowerCase();
            let code = el.getAttribute('data-code').toLowerCase();
            let cat = el.getAttribute('data-category');
            let sizes = el.getAttribute('data-sizes').split('|');
            let finishes = el.getAttribute('data-finishes').split('|');
            
            let q = this.search.trim().toLowerCase();
            if (q && !name.includes(q) && !code.includes(q)) return false;
            if (this.category && cat !== this.category) return false;
            if (this.size && !sizes.some(s => s === this.size)) return false;
            if (this.finish && !finishes.some(f => f === this.finish)) return false;
            return true;
        }
     }">

    <!-- ── Page Title & Breadcrumb Affordance ── -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <div class="flex items-center gap-2 text-[12px] text-[#4f4c4a] track-tight-12 mb-1">
                <a href="{{ route('home') }}" class="hover:text-black transition-shop font-medium">Home</a>
                <span>&bull;</span>
                <span class="text-black font-semibold">Discovery</span>
            </div>
            <h1 class="text-[28px] sm:text-[32px] font-bold text-black tracking-tight leading-none">
                @if($selectedCategory)
                    {{ $selectedCategory['name'] }}
                @else
                    All Hardware Collections
                @endif
            </h1>
        </div>

        <!-- Counter Chip -->
        <div class="inline-flex items-center gap-2 bg-[#ffffff] border border-[#d1d5db] rounded-full px-4 py-1.5 shadow-shop-sm self-start sm:self-auto">
            <span class="w-2.5 h-2.5 rounded-full bg-[#5433eb]"></span>
            <span class="text-[13px] font-bold text-black track-tight-12">{{ count($products) }} Products Available</span>
        </div>
    </div>

    <!-- ── Filter & Search Controls (Crisp borders so inputs never camouflage) ── -->
    <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-6 mb-10 grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
        <!-- Search Input -->
        <div class="relative">
            <input type="text" 
                   x-model="search" 
                   placeholder="Search name or item code..." 
                   class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] track-tight-14 outline-none transition-shop">
            <svg class="w-4 h-4 text-[#4f4c4a] absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" /></svg>
        </div>

        <!-- Category Filter -->
        <div>
            <select x-model="category" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-4 text-[14px] text-black font-medium track-tight-14 outline-none transition-shop cursor-pointer">
                <option value="">All Categories</option>
                @foreach($categories as $slug => $cat)
                    <option value="{{ $slug }}">{{ $cat['name'] }}</option>
                @endforeach
            </select>
        </div>

        <!-- Size Filter -->
        <div>
            <select x-model="size" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-4 text-[14px] text-black font-medium track-tight-14 outline-none transition-shop cursor-pointer">
                <option value="">Any Size Specification</option>
                @foreach($sizes as $sz)
                    @if(!empty($sz))
                        <option value="{{ $sz }}">{{ $sz }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <!-- Finish Filter -->
        <div>
            <select x-model="finish" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-4 text-[14px] text-black font-medium track-tight-14 outline-none transition-shop cursor-pointer">
                <option value="">Any Finish</option>
                @foreach($finishes as $fn)
                    @if(!empty($fn))
                        <option value="{{ $fn }}">{{ $fn }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <!-- ── Products Grid (Bordered cards, high-contrast badges & text) ── -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $prod)
        <div x-show="matchProduct($el)"
             data-name="{{ $prod['name'] }}"
             data-code="{{ !empty($prod['sizes']) ? $prod['sizes'][0]['code'] : '' }}"
             data-category="{{ $prod['category_id'] }}"
             data-sizes="{{ implode('|', array_column($prod['sizes'], 'size')) }}"
             data-finishes="{{ isset($prod['finishes']) ? implode('|', $prod['finishes']) : '' }}"
             class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-3.5 flex flex-col justify-between hover-float transition-shop group"
             x-cloak>
             
            <div>
                <!-- 1:1 image with 20px inner radius creating white border frame -->
                <div x-data="{ loaded: false }" class="relative aspect-square rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden flex items-center justify-center">
                    <div x-show="!loaded" class="absolute inset-0 skeleton-shimmer"></div>
                    <img src="{{ $prod['image'] }}" alt="{{ $prod['name'] }}" @load="loaded = true" :class="loaded ? 'opacity-100' : 'opacity-0'" class="w-full h-full object-cover transition-opacity duration-300 group-hover:scale-103">
                    
                    <!-- Warranty Tag (Crisp black on white with clear border so it never camouflages) -->
                    <span class="absolute top-3 left-3 bg-black text-white text-[10px] font-bold px-3 py-1 rounded-full shadow-sm">
                        {{ $prod['warranty'] ?? 'Quality Verified' }}
                    </span>
                </div>

                <!-- Content Area -->
                <div class="pt-4 px-1 pb-2">
                    <span class="text-[11px] font-bold text-[#4f4c4a] uppercase tracking-wider block mb-1">
                        {{ isset($categories[$prod['category_id']]) ? $categories[$prod['category_id']]['name'] : 'Hardware' }} &bull; {{ $prod['subcategory'] }}
                    </span>

                    <h3 class="text-[16px] font-bold text-black track-tight-16 leading-snug mb-1">
                        <a href="{{ route('products.show', $prod['slug']) }}" class="hover:text-[#5433eb] transition-shop">
                            {{ $prod['name'] }}
                        </a>
                    </h3>

                    <p class="text-[12px] text-[#4f4c4a] track-tight-12 line-clamp-2 leading-relaxed mb-3 font-normal">
                        {{ $prod['tagline'] }}
                    </p>

                    <!-- 5-star rating row -->
                    <div class="flex items-center gap-1.5 text-[11px] text-[#333333] track-tight-9 mb-3 font-medium">
                        <div class="flex text-amber-500 text-[12px]">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <span>5.0 (European Spec)</span>
                    </div>

                    <!-- Available Sizes Summary Pills -->
                    <div class="flex items-center gap-1.5 flex-wrap">
                        @foreach(array_slice($prod['sizes'], 0, 3) as $sz)
                        <span class="text-[11px] font-semibold bg-[#f2f4f5] border border-[#ebebeb] text-black px-2.5 py-0.5 rounded-full">
                            {{ $sz['size'] }}
                        </span>
                        @endforeach
                        @if(count($prod['sizes']) > 3)
                        <span class="text-[11px] font-bold text-[#4f4c4a] px-1.5">
                            +{{ count($prod['sizes']) - 3 }} more
                        </span>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Card Bottom Bar -->
            <div class="px-1 pt-3 pb-1 border-t border-[#ebebeb] flex items-center justify-between mt-2">
                <div>
                    <span class="block text-[10px] text-[#4f4c4a] uppercase tracking-wider font-bold">MRP Range</span>
                    <span class="text-[15px] font-bold text-black">
                        @if(!empty($prod['sizes']))
                            ₹{{ $prod['sizes'][0]['mrp'] }} - ₹{{ end($prod['sizes'])['mrp'] }}
                        @else
                            On Request
                        @endif
                    </span>
                </div>

                <a href="{{ route('products.show', $prod['slug']) }}" 
                   class="h-9 px-5 rounded-full bg-black hover:bg-[#332f2d] text-white text-[12px] font-bold inline-flex items-center justify-center transition-shop shadow-sm">
                    View
                </a>
            </div>

        </div>
        @endforeach
    </div>

    <!-- Empty State -->
    <div class="py-16 text-center bg-white rounded-card-shop border border-[#ebebeb] shadow-shop-card mt-10" 
         x-show="!Array.from($el.parentNode.querySelectorAll('[data-category]')).some(e => e.style.display !== 'none')" 
         x-cloak>
        <div class="w-16 h-16 bg-[#f2f4f5] border border-[#ebebeb] rounded-full flex items-center justify-center text-[#666666] mx-auto mb-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" /></svg>
        </div>
        <h3 class="text-[18px] font-bold text-black mb-1 track-tight-20">No matching products found</h3>
        <p class="text-[13px] text-[#4f4c4a] max-w-sm mx-auto leading-relaxed mb-6 track-tight-12">Try clearing your search query or selecting a different size or finish filter.</p>
        <button @click="search = ''; size = ''; finish = ''; category = ''" class="h-10 px-6 rounded-full bg-black text-white text-[12px] font-bold hover:bg-[#332f2d] transition-shop">
            Reset Filters
        </button>
    </div>

</div>
@endsection
