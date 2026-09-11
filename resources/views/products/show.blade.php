@extends('layouts.app')

@section('title', $product['name'] . ' | Grewok Hardware')

@section('content')
<!-- Product Details Section -->
<section class="py-12 bg-white" x-data="{
    activeImage: '{{ $product['image'] }}',
    selectedSizeIndex: 0,
    sizes: {{ json_encode($product['sizes']) }},
    
    getSelectedCode() {
        return this.sizes[this.selectedSizeIndex].code;
    },
    getSelectedSize() {
        return this.sizes[this.selectedSizeIndex].size;
    },
    getSelectedMrp() {
        return this.sizes[this.selectedSizeIndex].mrp;
    },
    getSelectedUnit() {
        return this.sizes[this.selectedSizeIndex].unit;
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
        // Dispatch event to global Alpine cart manager
        this.$dispatch('add-to-cart', selectedItem);
    }
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex text-xs font-semibold text-slate-500 uppercase tracking-wider mb-8">
            <a href="{{ route('home') }}" class="hover:text-brand-red transition-brand">Home</a>
            <span class="mx-2.5 text-slate-300">/</span>
            <a href="{{ route('products.all') }}" class="hover:text-brand-red transition-brand">Products</a>
            <span class="mx-2.5 text-slate-300">/</span>
            <a href="{{ route('products.category', $product['category_id']) }}" class="hover:text-brand-red transition-brand">{{ $category['name'] }}</a>
            <span class="mx-2.5 text-slate-300">/</span>
            <span class="text-brand-navy">{{ $product['subcategory'] }}</span>
        </nav>

        <!-- Product Presentation -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Gallery Panel (lg:col-span-5) -->
            <div class="lg:col-span-5 space-y-4">
                <!-- Large Display with Skeleton Loader -->
                <div x-data="{ loaded: false }" class="aspect-square bg-slate-50 border border-slate-100 rounded-3xl overflow-hidden shadow-sm flex items-center justify-center p-6 relative">
                    <div x-show="!loaded" class="absolute inset-0 skeleton-shimmer"></div>
                    <img :src="activeImage" alt="{{ $product['name'] }}" @load="loaded = true" :class="loaded ? 'opacity-100' : 'opacity-0'" class="w-full h-full object-cover rounded-2xl transition-all duration-300">
                    
                    <!-- Warranty Badge -->
                    <div class="absolute top-4 left-4 bg-brand-navy/95 backdrop-blur text-white text-[9px] font-bold uppercase tracking-widest px-3 py-1.5 rounded-lg shadow-sm border border-white/10">
                        {{ $product['warranty'] ?? 'Quality Checked' }}
                    </div>
                </div>

                <!-- Gallery Thumbnails -->
                @if(count($product['gallery']) > 1)
                <div class="grid grid-cols-4 gap-3">
                    @foreach($product['gallery'] as $galleryImg)
                    <button @click="activeImage = '{{ $galleryImg }}'" 
                            class="aspect-square bg-slate-50 border rounded-xl overflow-hidden p-2 transition-brand focus:outline-none"
                            :class="activeImage === '{{ $galleryImg }}' ? 'border-brand-red ring-2 ring-brand-red/10' : 'border-slate-200 hover:border-slate-300'">
                        <img src="{{ $galleryImg }}" class="w-full h-full object-cover rounded">
                    </button>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Product Specs & Purchasing Panel (lg:col-span-7) -->
            <div class="lg:col-span-7">
                <span class="text-xs uppercase font-extrabold tracking-widest text-brand-red block mb-2">
                    {{ $category['name'] }} &bull; {{ $product['subcategory'] }}
                </span>
                
                <h1 class="text-3xl font-extrabold text-brand-navy mb-3 leading-tight">{{ $product['name'] }}</h1>
                <p class="text-base text-slate-500 font-semibold mb-6">{{ $product['tagline'] }}</p>
                
                <!-- Description -->
                <p class="text-slate-600 text-sm leading-relaxed mb-8">{{ $product['description'] }}</p>

                <!-- Features list -->
                <div class="mb-8">
                    <h3 class="font-extrabold text-brand-navy text-sm uppercase tracking-wider mb-4 border-b border-slate-100 pb-2">Key Technical Advantages</h3>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-3.5">
                        @foreach($product['features'] as $feat)
                        <li class="flex items-start gap-3 text-xs text-slate-700">
                            <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            <span class="leading-relaxed">{{ $feat }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Finishes available -->
                @if(isset($product['finishes']) && count($product['finishes']) > 0)
                <div class="mb-8">
                    <h3 class="font-extrabold text-brand-navy text-sm uppercase tracking-wider mb-3">Available Finishes</h3>
                    <div class="flex items-center gap-2 flex-wrap">
                        @foreach($product['finishes'] as $fn)
                        <span class="bg-slate-50 border border-slate-200 text-slate-700 font-semibold px-3 py-1.5 rounded-lg text-xs">
                            {{ $fn }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Configuration size & Price dropdown selection -->
                <div class="bg-slate-50 rounded-2xl border border-slate-100 p-6 mb-8">
                    <h3 class="font-extrabold text-brand-navy text-sm uppercase tracking-wider mb-4">Select Specification & Size</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Size / Dimension</label>
                            <select x-model="selectedSizeIndex" class="w-full bg-white border border-slate-200 focus:border-brand-navy rounded-xl py-2.5 px-4 text-xs font-semibold outline-none cursor-pointer">
                                <template x-for="(sz, index) in sizes" :key="sz.code">
                                    <option :value="index" x-text="sz.size"></option>
                                </template>
                            </select>
                        </div>
                        
                        <div class="md:text-right pt-2 md:pt-0">
                            <span class="block text-[9px] text-slate-400 uppercase font-bold">Item Code</span>
                            <span class="block text-sm font-extrabold text-slate-800" x-text="getSelectedCode()"></span>
                            <div class="mt-2 flex items-baseline md:justify-end gap-1.5 text-brand-red">
                                <span class="text-xs font-bold">MRP:</span>
                                <span class="text-2xl font-black" x-text="'₹' + getSelectedMrp()"></span>
                                <span class="text-[10px] font-bold text-slate-500" x-text="'/ ' + getSelectedUnit()"></span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6 border-t border-slate-200/60 pt-6">
                        <button @click="addToQuoteCart()" class="w-full flex items-center justify-center gap-2.5 bg-brand-red hover:bg-brand-red-dark text-white font-bold py-3.5 px-6 rounded-xl shadow-lg shadow-brand-red/25 transition-brand text-xs uppercase tracking-wider">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
                            <span>Add to Enquiry</span>
                        </button>
                        
                        <a href="{{ route('enquiry') }}" class="w-full flex items-center justify-center gap-2 bg-brand-navy hover:bg-brand-navy-dark text-white font-bold py-3.5 px-6 rounded-xl transition-brand text-xs uppercase tracking-wider">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2"></path></svg>
                            <span>View Enquiry List</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Technical Specification & Size Table -->
        <div class="mt-20 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Technical Specifications Table (lg:col-span-6) -->
            <div class="lg:col-span-6 space-y-6">
                <h3 class="font-extrabold text-brand-navy text-lg uppercase tracking-wider border-b border-slate-200 pb-3">Technical Specifications</h3>
                
                <div class="border border-slate-100 rounded-2xl overflow-hidden shadow-sm">
                    <table class="w-full text-left text-xs">
                        <tbody>
                            @foreach($product['tech_specs'] ?? [] as $specKey => $specVal)
                            <tr class="border-b border-slate-100 last:border-0 odd:bg-slate-50">
                                <td class="px-5 py-4 font-bold text-slate-500 w-1/3">{{ $specKey }}</td>
                                <td class="px-5 py-4 font-semibold text-brand-navy">{{ $specVal }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Full Catalogue Size & Price Matrix Table (lg:col-span-6) -->
            <div class="lg:col-span-6 space-y-6">
                <h3 class="font-extrabold text-brand-navy text-lg uppercase tracking-wider border-b border-slate-200 pb-3">Item Code & Price Matrix</h3>
                
                <div class="border border-slate-100 rounded-2xl overflow-hidden shadow-sm">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-brand-navy text-white text-[10px] font-bold uppercase tracking-wider">
                            <tr>
                                <th class="px-5 py-4">Item Code</th>
                                <th class="px-5 py-4 text-center">Size</th>
                                <th class="px-5 py-4 text-right">MRP (INR)</th>
                                <th class="px-5 py-4 text-right">Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product['sizes'] as $szKey => $szVal)
                            <tr class="border-b border-slate-100 last:border-0 hover:bg-slate-50 cursor-pointer"
                                :class="selectedSizeIndex === {{ $szKey }} ? 'bg-brand-red/5 font-semibold text-brand-red border-l-4 border-l-brand-red' : ''"
                                @click="selectedSizeIndex = {{ $szKey }}">
                                <td class="px-5 py-4 font-bold text-slate-800">{{ $szVal['code'] }}</td>
                                <td class="px-5 py-4 text-center text-slate-600">{{ $szVal['size'] }}</td>
                                <td class="px-5 py-4 text-right font-extrabold text-slate-800">₹{{ $szVal['mrp'] }}</td>
                                <td class="px-5 py-4 text-right text-slate-500">{{ $szVal['unit'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-[10px] text-slate-400 italic">
                    * Click table rows to select that specific size and code for adding to the enquiry cart.
                </div>
            </div>

        </div>

        <!-- Sample / B2B Request Catalogue CTA Widget -->
        <div class="mt-20 bg-slate-900 text-white rounded-3xl p-8 lg:p-12 shadow-2xl relative overflow-hidden">
            <div class="absolute -right-16 -top-16 w-44 h-44 bg-brand-red rounded-full opacity-10 blur-xl"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <div class="md:col-span-2">
                    <div class="text-xs uppercase font-extrabold tracking-widest text-brand-red mb-2">Architect & Builder Program</div>
                    <h2 class="text-2xl font-extrabold leading-tight mb-4">Request a Hardware Sample Package</h2>
                    <p class="text-slate-300 text-xs leading-relaxed max-w-xl">
                        Are you an architect, interior designer, or developer? Grewok provides hardware sample boxes containing sample hinges, channels, and finishes to help you evaluate our "Fit For Forever" build quality.
                    </p>
                </div>
                <div class="flex md:justify-end">
                    <a href="{{ route('contact', ['type' => 'sample', 'product' => $product['name']]) }}" 
                       class="inline-flex items-center justify-center gap-2 bg-brand-red hover:bg-brand-red-dark text-white font-bold py-3.5 px-8 rounded-xl text-xs uppercase tracking-wider transition-brand">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
                        <span>Request Free Sample</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        @if(count($relatedProducts) > 0)
        <div class="mt-24 border-t border-slate-100 pt-16">
            <h3 class="font-extrabold text-brand-navy text-xl mb-10">You May Also Be Interested In</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($relatedProducts as $rel)
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition-brand">
                    <div>
                        <div class="relative aspect-video bg-slate-50 flex items-center justify-center border-b border-slate-100 overflow-hidden">
                            <img src="{{ $rel['image'] }}" alt="{{ $rel['name'] }}" class="w-full h-full object-cover">
                            <div class="absolute top-3 left-3 bg-brand-navy text-white text-[9px] font-bold uppercase tracking-widest px-2.5 py-1 rounded">
                                {{ $rel['subcategory'] }}
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <h4 class="font-extrabold text-sm text-brand-navy leading-snug mb-2 hover:text-brand-red transition-brand">
                                <a href="{{ route('products.show', $rel['slug']) }}">{{ $rel['name'] }}</a>
                            </h4>
                            <p class="text-[11px] text-slate-500 leading-relaxed mb-4 line-clamp-2">
                                {{ $rel['tagline'] }}
                            </p>
                        </div>
                    </div>
                    
                    <div class="px-6 pb-6 pt-3 border-t border-slate-50 flex items-center justify-between">
                        <span class="text-xs text-brand-red font-bold">
                            @if(!empty($rel['sizes']))
                                MRP: ₹{{ $rel['sizes'][0]['mrp'] }}+
                            @else
                                Contact for Price
                            @endif
                        </span>
                        <a href="{{ route('products.show', $rel['slug']) }}" class="text-xs font-bold text-brand-navy hover:text-brand-red transition-brand">Details &rarr;</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>
@endsection
