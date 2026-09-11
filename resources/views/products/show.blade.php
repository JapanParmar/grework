@extends('layouts.app')

@section('title', $product['name'] . ' | Grewok Architectural Hardware')

@section('content')
<div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-24" 
     x-data="{
        activeImage: '{{ $product['image'] }}',
        selectedSizeIndex: 0,
        sizes: {{ json_encode($product['sizes']) }},
        
        getSelectedCode() {
            return this.sizes[this.selectedSizeIndex]?.code ?? '';
        },
        getSelectedSize() {
            return this.sizes[this.selectedSizeIndex]?.size ?? '';
        },
        getSelectedMrp() {
            return this.sizes[this.selectedSizeIndex]?.mrp ?? '';
        },
        getSelectedUnit() {
            return this.sizes[this.selectedSizeIndex]?.unit ?? 'pc';
        },
        addToQuoteCart() {
            let selectedItem = {
                code: this.getSelectedCode(),
                name: '{{ $product['name'] }}',
                size: this.getSelectedSize(),
                mrp: this.getSelectedMrp(),
                unit: this.getSelectedUnit(),
                image: '{{ $product['image'] }}'
            };
            this.$dispatch('add-to-cart', selectedItem);
        }
     }">

    <!-- ── Breadcrumb Affordance ── -->
    <nav class="flex items-center gap-2 text-[12px] text-[#4f4c4a] track-tight-12 mb-8 font-medium">
        <a href="{{ route('home') }}" class="hover:text-black transition-shop">Home</a>
        <span>&bull;</span>
        <a href="{{ route('products.all') }}" class="hover:text-black transition-shop">Collections</a>
        <span>&bull;</span>
        <a href="{{ route('products.category', $product['category_id']) }}" class="hover:text-black transition-shop">{{ $category['name'] }}</a>
        <span>&bull;</span>
        <span class="text-black font-bold truncate">{{ $product['name'] }}</span>
    </nav>

    <!-- ── Main Product Presentation (Two Column Layout) ── -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
        
        <!-- Left Column: Gallery (lg:col-span-6) -->
        <div class="lg:col-span-6 space-y-4">
            <!-- Large Elevated Display Card (28px radius, white surface, dual shadow, distinct hairline border) -->
            <div x-data="{ loaded: false }" class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-3 relative flex items-center justify-center">
                <!-- 1:1 image with 20px inner radius creating white border frame -->
                <div class="w-full aspect-square rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden relative flex items-center justify-center">
                    <div x-show="!loaded" class="absolute inset-0 skeleton-shimmer"></div>
                    <img :src="activeImage" alt="{{ $product['name'] }}" @load="loaded = true" :class="loaded ? 'opacity-100' : 'opacity-0'" class="w-full h-full object-cover transition-opacity duration-300">
                    
                    <!-- Warranty Badge Overlay (Crisp black on white with clear shadow so it never camouflages) -->
                    <div class="absolute top-3.5 left-3.5 bg-black text-white text-[10px] font-bold px-3.5 py-1 rounded-full shadow-sm">
                        {{ $product['warranty'] ?? '10 Year Warranty' }}
                    </div>
                </div>
            </div>

            <!-- Mini Thumbnails Swatch Strip -->
            @if(count($product['gallery']) > 1)
            <div class="flex items-center gap-2.5 overflow-x-auto pb-1">
                @foreach($product['gallery'] as $galleryImg)
                <button @click="activeImage = '{{ $galleryImg }}'" 
                        class="w-16 h-16 rounded-[12px] bg-white p-1 shadow-shop-sm border transition-shop overflow-hidden flex-shrink-0"
                        :class="activeImage === '{{ $galleryImg }}' ? 'border-[#5433eb] ring-2 ring-[#5433eb]/30' : 'border-[#cccccc] hover:border-black'">
                    <img src="{{ $galleryImg }}" class="w-full h-full object-cover rounded-[8px]">
                </button>
                @endforeach
            </div>
            @endif
        </div>

        <!-- Right Column: Specs, Details & Purchase Action (lg:col-span-6) -->
        <div class="lg:col-span-6 space-y-6">
            <div>
                <span class="inline-block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1">
                    {{ $category['name'] }} &bull; {{ $product['subcategory'] }}
                </span>
                
                <h1 class="text-3xl sm:text-4xl font-bold text-black tracking-tight leading-tight mb-2">
                    {{ $product['name'] }}
                </h1>
                
                <p class="text-[16px] text-[#4f4c4a] track-tight-16 font-medium mb-4">
                    {{ $product['tagline'] }}
                </p>

                <!-- Rating -->
                <div class="flex items-center gap-2 text-[12px] text-[#333333] font-medium">
                    <div class="flex text-amber-500 text-[13px]">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <span>5.0 &bull; Tested to 80,000 Cycles</span>
                </div>
            </div>

            <p class="text-[14px] text-[#221f1d] leading-relaxed track-tight-14 font-normal">
                {{ $product['description'] }}
            </p>

            <!-- Key Features List -->
            <div class="pt-2">
                <h3 class="text-[14px] font-bold text-black track-tight-14 mb-3">Mechanical Highlights</h3>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                    @foreach($product['features'] as $feat)
                    <li class="flex items-start gap-2 text-[13px] text-[#221f1d] track-tight-12 font-medium">
                        <svg class="w-4 h-4 text-black flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        <span>{{ $feat }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Available Finishes -->
            @if(isset($product['finishes']) && count($product['finishes']) > 0)
            <div class="pt-2">
                <h3 class="text-[12px] font-bold text-[#4f4c4a] uppercase tracking-wider mb-2">Finishes</h3>
                <div class="flex items-center gap-2 flex-wrap">
                    @foreach($product['finishes'] as $fn)
                    <span class="bg-white border border-[#cccccc] text-black text-[12px] font-bold px-3.5 py-1 rounded-full shadow-shop-sm">
                        {{ $fn }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- ── Specification & Purchasing Card (Bordered with high contrast controls) ── -->
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-6 space-y-6">
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-2">Select Dimension / Code</span>
                    
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div class="flex-grow max-w-xs">
                            <select x-model="selectedSizeIndex" class="w-full h-11 bg-white rounded-full border border-[#d1d5db] focus:border-black px-4 text-[14px] text-black font-bold track-tight-14 outline-none cursor-pointer">
                                <template x-for="(sz, index) in sizes" :key="sz.code">
                                    <option :value="index" x-text="sz.size"></option>
                                </template>
                            </select>
                        </div>

                        <div class="sm:text-right">
                            <span class="text-[11px] text-[#4f4c4a] uppercase tracking-wider block font-bold" x-text="'Item Code: ' + getSelectedCode()"></span>
                            <div class="flex items-baseline sm:justify-end gap-1 text-black mt-0.5">
                                <span class="text-[12px] text-[#4f4c4a] font-semibold">MRP:</span>
                                <span class="text-3xl font-extrabold tracking-tight" x-text="'₹' + getSelectedMrp()"></span>
                                <span class="text-[12px] text-[#4f4c4a] font-medium" x-text="'/ ' + getSelectedUnit()"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Buttons: Shop Violet submit button with tinted shadow -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                    <button @click="addToQuoteCart()" 
                            class="h-12 rounded-full bg-[#5433eb] text-white text-[14px] font-bold shadow-violet-submit hover:opacity-95 transition-shop flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                        <span>Add to Enquiry</span>
                    </button>

                    <a href="{{ route('enquiry') }}" 
                       class="h-12 rounded-full bg-[#ffffff] border border-[#cccccc] text-black text-[14px] font-bold shadow-shop-sm hover:bg-[#f2f4f5] transition-shop flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z" /></svg>
                        <span>View Enquiry Cart</span>
                    </a>
                </div>
            </div>

        </div>

    </div>

    <!-- ── Technical Matrix & Table Section ── -->
    <div class="mt-20 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        <!-- Specs Table -->
        <div class="lg:col-span-6 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-6">
            <h3 class="text-[18px] font-bold text-black track-tight-20 mb-4 border-b border-[#ebebeb] pb-3">Technical Specifications</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-[13px]">
                    <tbody>
                        @foreach($product['tech_specs'] ?? [] as $specKey => $specVal)
                        <tr class="border-b border-[#ebebeb] last:border-0">
                            <td class="py-3 text-[#4f4c4a] font-bold w-1/3">{{ $specKey }}</td>
                            <td class="py-3 text-black font-semibold">{{ $specVal }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Size Matrix Table -->
        <div class="lg:col-span-6 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-6">
            <h3 class="text-[18px] font-bold text-black track-tight-20 mb-4 border-b border-[#ebebeb] pb-3">Item Code & Price Matrix</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-[13px]">
                    <thead class="text-[#333333] border-b border-[#cccccc] uppercase text-[11px] tracking-wider font-bold">
                        <tr>
                            <th class="py-2.5">Item Code</th>
                            <th class="py-2.5 text-center">Size</th>
                            <th class="py-2.5 text-right">MRP (₹)</th>
                            <th class="py-2.5 text-right">Unit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product['sizes'] as $szKey => $szVal)
                        <tr class="border-b border-[#ebebeb] last:border-0 hover:bg-[#f2f4f5] cursor-pointer transition-shop"
                            :class="selectedSizeIndex === {{ $szKey }} ? 'bg-[#f2f4f5] text-black font-bold ring-1 ring-inset ring-[#5433eb]' : ''"
                            @click="selectedSizeIndex = {{ $szKey }}">
                            <td class="py-3 font-bold text-black">{{ $szVal['code'] }}</td>
                            <td class="py-3 text-center text-[#4f4c4a] font-medium">{{ $szVal['size'] }}</td>
                            <td class="py-3 text-right font-bold text-black">₹{{ $szVal['mrp'] }}</td>
                            <td class="py-3 text-right text-[#4f4c4a] font-medium">{{ $szVal['unit'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <p class="text-[11px] text-[#4f4c4a] mt-3 italic font-medium">* Click any row to select specification for enquiry.</p>
        </div>
    </div>

    <!-- ── Related Products Row ── -->
    @if(count($relatedProducts) > 0)
    <div class="mt-20">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-[20px] font-bold text-black track-tight-20">Similar Hardware In This Range</h2>
            <a href="{{ route('products.category', $product['category_id']) }}" class="text-[14px] font-bold text-black hover:text-[#5433eb] transition-shop">
                View Category &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($relatedProducts as $rel)
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-3.5 flex flex-col justify-between hover-float transition-shop group">
                <div>
                    <div class="w-full aspect-square rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden mb-3">
                        <img src="{{ $rel['image'] }}" alt="{{ $rel['name'] }}" class="w-full h-full object-cover group-hover:scale-103 transition-shop">
                    </div>
                    <div class="px-1">
                        <span class="text-[11px] text-[#4f4c4a] block uppercase tracking-wider font-bold">{{ $rel['subcategory'] }}</span>
                        <h4 class="text-[16px] font-bold text-black track-tight-16 truncate mb-1">
                            <a href="{{ route('products.show', $rel['slug']) }}">{{ $rel['name'] }}</a>
                        </h4>
                        <p class="text-[12px] text-[#4f4c4a] line-clamp-1 mb-2 font-normal">{{ $rel['tagline'] }}</p>
                    </div>
                </div>

                <div class="px-1 pt-2 border-t border-[#ebebeb] flex items-center justify-between">
                    <span class="text-[13px] font-bold text-black">
                        @if(!empty($rel['sizes']))
                            ₹{{ $rel['sizes'][0]['mrp'] }}+
                        @else
                            Inquire
                        @endif
                    </span>
                    <a href="{{ route('products.show', $rel['slug']) }}" class="text-[13px] font-bold text-[#5433eb] hover:underline">
                        Details &rarr;
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

</div>
@endsection
