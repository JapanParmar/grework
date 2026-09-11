@extends('layouts.app')

@section('title', 'Grewok – Fit For Forever | Premier Architectural Furniture Hardware')

@section('content')
<div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-20">

    <!-- ── 1. Hero Section for First-Time Visitors (Floating Constellation on White Marble) ── -->
    <section class="relative pt-6 pb-16 text-center select-none overflow-hidden">
        
        <!-- Credibility Badge for First-Time Visitors -->
        <div class="inline-flex items-center gap-2 bg-[#ffffff] border border-[#d1d5db] rounded-full px-4 py-1.5 shadow-shop-sm mb-6">
            <span class="w-2 h-2 rounded-full bg-[#5433eb] animate-pulse"></span>
            <span class="text-[12px] font-bold text-black uppercase tracking-wider">
                ESTD 2015 &bull; PREMIER ARCHITECTURAL HARDWARE &bull; FIT FOR FOREVER
            </span>
        </div>

        <!-- High-Impact Main Headline -->
        <div class="max-w-4xl mx-auto mb-6">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-black tracking-tight leading-tight mb-4">
                Engineered For Forever.<br>
                <span class="text-[#5433eb]">Architectural Hardware</span> For Modern Homes.
            </h1>
            <p class="text-[16px] sm:text-[18px] text-[#4f4c4a] track-tight-16 max-w-2xl mx-auto font-normal leading-relaxed">
                Specializing in whisper-quiet soft-close drawer channels, 3D hydraulic auto-hinges, luxury wardrobe organizers, and kitchen corner systems. Built with European mechanical precision for Indian modular homes.
            </p>
        </div>

        <!-- First-Time Visitor Action Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
            <a href="{{ route('products.all') }}" 
               class="h-12 px-7 rounded-full bg-[#5433eb] text-white text-[14px] font-bold shadow-violet-submit hover:opacity-95 transition-shop flex items-center justify-center gap-2">
                <span>Explore Hardware Collections</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
            </a>

            <a href="{{ route('catalogue') }}" 
               class="h-12 px-7 rounded-full bg-[#ffffff] border border-[#cccccc] hover:border-black text-black text-[14px] font-bold shadow-shop-sm hover:bg-[#f2f4f5] transition-shop flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-[#5433eb]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                <span>Download 2026 PDF Catalogue</span>
            </a>

            <a href="{{ route('contact', ['type' => 'dealer']) }}" 
               class="h-12 px-6 rounded-full bg-[#ffffff] border border-[#ebebeb] text-[#4f4c4a] hover:text-black text-[13px] font-bold shadow-shop-sm hover:bg-[#f2f4f5] transition-shop flex items-center justify-center">
                <span>Dealer & Architect Wholesale</span>
            </a>
        </div>

        <!-- ── Floating Product Constellation (Overlapping 28px cards showcasing real hardware solutions) ── -->
        <div class="relative w-full max-w-4xl mx-auto h-[260px] sm:h-[300px] mb-8 flex items-center justify-center">
            
            <!-- Floating Card 1: Telescopic Channel -->
            <div class="absolute -left-2 sm:left-4 top-8 sm:top-4 w-44 sm:w-56 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-3 hover-float transition-shop cursor-pointer z-10 hidden xs:block text-left">
                <div class="w-full aspect-square rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden relative">
                    <img src="/images/products/drawer-channel.png" alt="Drawer Channels" class="w-full h-full object-cover">
                    <span class="absolute top-2 left-2 bg-black text-white text-[9px] font-bold px-2 py-0.5 rounded-full">45 kg Load</span>
                </div>
                <div class="pt-2.5 px-1 pb-0.5">
                    <div class="text-[14px] font-bold text-black track-tight-14 truncate">Quadro Soft-Close Slide</div>
                    <div class="text-[11px] text-[#4f4c4a] font-medium">GW-Code: GW-QC-450</div>
                    <div class="flex items-center justify-between mt-1">
                        <span class="text-[12px] font-extrabold text-black">MRP ₹850</span>
                        <div class="flex text-amber-500 text-[10px]">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Floating Card 2: Center Hero Elevated Corner Pantry -->
            <div class="relative w-52 sm:w-64 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-lg p-3.5 hover-float transition-shop cursor-pointer z-20 text-left">
                <div class="w-full aspect-square rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden relative">
                    <img src="/images/hero-kitchen.png" alt="Corner Pantry System" class="w-full h-full object-cover">
                    <span class="absolute top-2.5 left-2.5 bg-[#5433eb] text-white text-[10px] font-bold px-3 py-1 rounded-full shadow-sm">Grade 304 SS</span>
                </div>
                <div class="pt-3 px-1 pb-1">
                    <div class="flex items-center justify-between">
                        <span class="text-[15px] font-extrabold text-black track-tight-14 truncate">Corner Swing Magic Pantry</span>
                        <span class="text-[13px] font-black text-black">₹4,200</span>
                    </div>
                    <p class="text-[11px] text-[#4f4c4a] mt-0.5 font-medium">Liquid silicone damping &bull; 60 kg load</p>
                    <div class="flex items-center gap-1.5 text-[11px] text-[#333333] mt-1.5 font-semibold">
                        <div class="flex text-amber-500 text-[12px]">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <span>4.95 &bull; 128 installations</span>
                    </div>
                </div>
            </div>

            <!-- Floating Card 3: 3D Auto Hinge / Wardrobe System -->
            <div class="absolute -right-2 sm:right-6 top-6 sm:top-2 w-44 sm:w-56 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-3 hover-float transition-shop cursor-pointer z-10 hidden sm:block text-left">
                <div class="w-full aspect-square rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden relative">
                    <img src="/images/products/wardrobe-organizer.png" alt="Wardrobe Organizers" class="w-full h-full object-cover">
                    <span class="absolute top-2 left-2 bg-black text-white text-[9px] font-bold px-2 py-0.5 rounded-full">Italian Style</span>
                </div>
                <div class="pt-2.5 px-1 pb-0.5">
                    <div class="text-[14px] font-bold text-black track-tight-14 truncate">Rotating Shoe & Tray Rack</div>
                    <div class="text-[11px] text-[#4f4c4a] font-medium">360° Smooth Rotation</div>
                    <div class="flex items-center justify-between mt-1">
                        <span class="text-[12px] font-extrabold text-black">₹3,150</span>
                        <div class="flex text-amber-500 text-[10px]">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── Search Input with Violet Submit Button ── -->
        <div class="max-w-2xl mx-auto mb-8 px-4">
            <form action="{{ route('products.all') }}" method="GET" class="relative flex items-center bg-[#ffffff] rounded-full border border-[#cccccc] shadow-shop-sm pl-6 pr-1.5 py-1.5">
                <input type="text" 
                       name="q" 
                       value="{{ request('q') }}"
                       placeholder="Search by product name, item code (e.g. GW-01), or hardware category..." 
                       class="w-full bg-transparent border-0 outline-none text-[15px] text-black font-medium placeholder-[#666666] track-tight-16 pr-12">
                
                <!-- Circular Violet Submit Button -->
                <button type="submit" 
                        class="w-12 h-12 rounded-full bg-[#5433eb] text-white flex items-center justify-center flex-shrink-0 shadow-violet-submit hover:opacity-95 transition-shop"
                        title="Search Hardware">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </form>
        </div>

        <!-- ── Category Quick Access Chips ── -->
        <div class="flex items-center justify-center gap-3 flex-wrap px-2">
            @php
                $pillColors = ['#5433eb', '#059669', '#2563eb', '#d97706', '#db2777', '#7c3aed'];
                $pillIdx = 0;
            @endphp
            @foreach($categories as $slug => $cat)
                @php 
                    $activeColor = $pillColors[$pillIdx % count($pillColors)];
                    $pillIdx++;
                @endphp
                <a href="{{ route('products.category', $slug) }}" 
                   class="inline-flex items-center gap-2.5 bg-[#ffffff] border border-[#d1d5db] rounded-full pl-3 pr-4 py-2 shadow-shop-sm hover-float transition-shop">
                    <span class="w-3 h-3 rounded-full flex-shrink-0" style="background-color: {{ $activeColor }};"></span>
                    <span class="text-[14px] font-bold text-black track-tight-16">
                        {{ $cat['name'] }}
                    </span>
                </a>
            @endforeach
        </div>

    </section>

    <!-- ── 2. First-Time Visitor Trust & Credentials Bar (4 Pillow-Soft Cards) ── -->
    <section class="my-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            
            <!-- Metric 1 -->
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-6 flex items-start gap-4 hover-float transition-shop">
                <div class="w-12 h-12 rounded-full bg-[#f2f4f5] border border-[#ebebeb] flex items-center justify-center flex-shrink-0 text-[#5433eb]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <div>
                    <div class="text-2xl font-black text-black leading-tight">10 Years</div>
                    <div class="text-[13px] font-bold text-black mt-0.5">Replacement Warranty</div>
                    <p class="text-[11px] text-[#4f4c4a] mt-1 font-normal leading-normal">On Grade 304 SS auto-hinges and heavy-duty slide channels.</p>
                </div>
            </div>

            <!-- Metric 2 -->
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-6 flex items-start gap-4 hover-float transition-shop">
                <div class="w-12 h-12 rounded-full bg-[#f2f4f5] border border-[#ebebeb] flex items-center justify-center flex-shrink-0 text-[#5433eb]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <div>
                    <div class="text-2xl font-black text-black leading-tight">80k+ Cycles</div>
                    <div class="text-[13px] font-bold text-black mt-0.5">Endurance Certified</div>
                    <p class="text-[11px] text-[#4f4c4a] mt-1 font-normal leading-normal">Precision fatigue-tested to European DIN mechanical standards.</p>
                </div>
            </div>

            <!-- Metric 3 -->
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-6 flex items-start gap-4 hover-float transition-shop">
                <div class="w-12 h-12 rounded-full bg-[#f2f4f5] border border-[#ebebeb] flex items-center justify-center flex-shrink-0 text-[#5433eb]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" /></svg>
                </div>
                <div>
                    <div class="text-2xl font-black text-black leading-tight">100% Virgin</div>
                    <div class="text-[13px] font-bold text-black mt-0.5">Heavy Gauge Metal</div>
                    <p class="text-[11px] text-[#4f4c4a] mt-1 font-normal leading-normal">Zero scrap metal. Certified cold-rolled virgin alloy steel.</p>
                </div>
            </div>

            <!-- Metric 4 -->
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-6 flex items-start gap-4 hover-float transition-shop">
                <div class="w-12 h-12 rounded-full bg-[#f2f4f5] border border-[#ebebeb] flex items-center justify-center flex-shrink-0 text-[#5433eb]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                </div>
                <div>
                    <div class="text-2xl font-black text-black leading-tight">7 States</div>
                    <div class="text-[13px] font-bold text-black mt-0.5">Active Dealer Network</div>
                    <p class="text-[11px] text-[#4f4c4a] mt-1 font-normal leading-normal">Gujarat, Maharashtra, Rajasthan, MP, Karnataka & beyond.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ── 3. Category Visual Showcase (All 5 Core Hardware Ranges) ── -->
    <section class="my-20">
        <div class="flex items-center justify-between mb-8">
            <div>
                <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-1">Architectural Catalogue</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-black track-tight-20">Explore By Hardware Solution</h2>
            </div>
            <a href="{{ route('products.all') }}" class="hidden sm:inline-flex items-center gap-1 text-[13px] font-bold text-[#5433eb] hover:underline">
                <span>View Full Catalog</span>
                <span>&rarr;</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($categories as $slug => $cat)
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-4 flex flex-col justify-between hover-float transition-shop group">
                <div>
                    <!-- Category Image with 20px inner radius -->
                    <div class="w-full h-48 rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden relative mb-4">
                        <img src="{{ $cat['image'] }}" alt="{{ $cat['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-shop">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-3 left-3 text-white font-bold text-[14px]">
                            {{ $cat['name'] }}
                        </div>
                    </div>

                    <div class="px-2">
                        <p class="text-[13px] text-[#4f4c4a] leading-relaxed mb-4 font-normal">
                            {{ $cat['description'] }}
                        </p>

                        <!-- Subcategories Pills -->
                        <div class="flex items-center gap-1.5 flex-wrap mb-4">
                            @foreach(array_slice($cat['subcategories'] ?? [], 0, 3) as $subcat)
                            <span class="text-[10px] font-bold bg-[#f2f4f5] border border-[#ebebeb] text-black px-2.5 py-1 rounded-full">
                                {{ $subcat }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="px-2 pt-3 border-t border-[#ebebeb] flex items-center justify-between">
                    <span class="text-[11px] font-bold text-[#4f4c4a]">Engineered in Gujarat</span>
                    <a href="{{ route('products.category', $slug) }}" class="h-9 px-4 rounded-full bg-black hover:bg-[#332f2d] text-white text-[12px] font-bold inline-flex items-center justify-center transition-shop shadow-xs">
                        Browse Range &rarr;
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- ── 4. Signature Masterpieces (Featured Products Grid) ── -->
    <section class="my-20">
        <div class="flex items-center justify-between mb-6">
            <div>
                <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-1">Premier Engineering Line</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-black track-tight-20">Featured Masterpieces</h2>
            </div>
            
            <a href="{{ route('products.all') }}" class="w-9 h-9 rounded-full bg-white shadow-shop-sm border border-[#cccccc] flex items-center justify-center text-black hover:bg-[#f2f4f5] transition-shop" title="View all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
            </a>
        </div>

        <!-- 4-Column Card Grid of Product Image Tiles -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($featuredProducts as $slug => $prod)
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-3 flex flex-col justify-between hover-float transition-shop group">
                <div>
                    <!-- 1:1 product image with 20px inner radius -->
                    <div class="relative w-full aspect-square rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden">
                        <img src="{{ $prod['image'] }}" alt="{{ $prod['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-shop">
                        
                        <!-- Subcategory Pill Overlay -->
                        <span class="absolute top-2.5 left-2.5 bg-black text-white text-[10px] font-bold px-3 py-1 rounded-full shadow-sm">
                            {{ $prod['subcategory'] }}
                        </span>
                    </div>

                    <!-- Details beneath image -->
                    <div class="pt-3 px-1">
                        <h3 class="text-[15px] font-bold text-black track-tight-14 truncate mb-0.5">
                            <a href="{{ route('products.show', $prod['slug']) }}" class="hover:text-[#5433eb] transition-shop">{{ $prod['name'] }}</a>
                        </h3>
                        
                        <p class="text-[12px] text-[#4f4c4a] track-tight-12 line-clamp-1 mb-2 font-normal">
                            {{ $prod['tagline'] }}
                        </p>

                        <!-- GW Code tag -->
                        @if(!empty($prod['sizes']))
                        <div class="text-[10px] text-[#4f4c4a] flex items-center gap-1.5 mb-2 font-bold">
                            <span class="bg-[#f2f4f5] px-2 py-0.5 rounded-full border border-[#ebebeb]">Code: {{ $prod['sizes'][0]['code'] }}</span>
                            <span>&bull;</span>
                            <span>{{ count($prod['sizes']) }} Sizes Available</span>
                        </div>
                        @endif

                        <!-- 5-star rating row -->
                        <div class="flex items-center gap-1.5 text-[11px] text-[#333333] track-tight-9 mb-2 font-medium">
                            <div class="flex text-amber-500 text-[12px]">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                            <span>5.0 (42 reviews)</span>
                        </div>
                    </div>
                </div>

                <!-- Footer with MRP & Link -->
                <div class="px-1 pt-2.5 pb-1 border-t border-[#ebebeb] flex items-center justify-between">
                    <div>
                        <span class="text-[13px] font-bold text-black">
                            @if(!empty($prod['sizes']))
                                ₹{{ $prod['sizes'][0]['mrp'] }}
                            @else
                                Contact
                            @endif
                        </span>
                    </div>

                    <a href="{{ route('products.show', $prod['slug']) }}" 
                       class="text-[13px] font-bold text-[#5433eb] hover:underline track-tight-12">
                        Details &rarr;
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- ── 5. 2-Column Hero-and-Grid Composition (Silence In Motion) ── -->
    <section class="my-20">
        <div class="flex items-center justify-between mb-6">
            <div class="inline-flex items-center gap-2">
                <h2 class="text-2xl font-bold text-black track-tight-20">Modular Kitchen & Wardrobe Systems</h2>
                <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
            
            <!-- Left 60%: Product Type Hero Image -->
            <div class="lg:col-span-7 relative bg-black rounded-card-shop overflow-hidden min-h-[380px] flex flex-col justify-between p-8 sm:p-10 text-white shadow-shop-card group border border-black">
                <img src="/images/hero-kitchen.png" alt="Modern Kitchen Solutions" class="absolute inset-0 w-full h-full object-cover opacity-35 group-hover:scale-102 transition-shop">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/75 to-black/60"></div>

                <!-- Top Display overlay -->
                <div class="relative z-10">
                    <span class="inline-block text-[11px] font-bold tracking-wider uppercase text-white bg-white/20 backdrop-blur-md px-3.5 py-1.5 rounded-full mb-3 border border-white/20">
                        German Engineered Mechanics
                    </span>
                    <h3 class="text-3xl sm:text-4xl font-bold text-white tracking-tight leading-tight drop-shadow-sm">
                        Silence in Motion.
                    </h3>
                    <p class="text-[14px] text-[#cccccc] max-w-md mt-2 font-normal leading-relaxed">
                        Soft-close pantry swing mechanics and double-wall slim drawer boxes designed to handle heavy Indian spices, cookware, and daily cycles.
                    </p>
                    <div class="flex items-center gap-2 mt-3 text-[13px] text-white font-medium">
                        <div class="flex text-amber-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <span>5.0 Rating &bull; Over 50,000 Modular Installations</span>
                    </div>
                </div>

                <!-- Bottom Strip with Mini Product Thumbnail Swatches -->
                <div class="relative z-10 pt-8 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                    <div>
                        <span class="text-[12px] text-white uppercase tracking-wider block mb-2 font-bold">Compatible Systems</span>
                        <div class="flex items-center gap-2">
                            <div class="w-12 h-12 rounded-[12px] bg-white p-0.5 overflow-hidden border-2 border-white/40 shadow-sm" title="Drawer Channels">
                                <img src="/images/products/drawer-channel.png" class="w-full h-full object-cover rounded-[10px]" alt="Drawer Channel">
                            </div>
                            <div class="w-12 h-12 rounded-[12px] bg-white p-0.5 overflow-hidden border-2 border-white/40 shadow-sm" title="Wardrobe Organizers">
                                <img src="/images/products/wardrobe-organizer.png" class="w-full h-full object-cover rounded-[10px]" alt="Wardrobe Organizer">
                            </div>
                            <div class="w-12 h-12 rounded-[12px] bg-white p-0.5 overflow-hidden border-2 border-white/40 shadow-sm" title="Pantry Systems">
                                <img src="/images/hero-kitchen.png" class="w-full h-full object-cover rounded-[10px]" alt="Kitchen System">
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('products.all') }}" class="inline-flex items-center justify-center px-6 py-2.5 rounded-full bg-white text-black text-[14px] font-bold hover:bg-[#f2f4f5] transition-shop self-start sm:self-auto shadow-md">
                        Explore Full Range &rarr;
                    </a>
                </div>
            </div>

            <!-- Right 40%: Brand Spotlight Cards -->
            <div class="lg:col-span-5 flex flex-col justify-between gap-4">
                
                <!-- Spotlight 1 -->
                <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-5 flex items-center gap-4 hover-float transition-shop">
                    <div class="w-24 h-24 rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden flex-shrink-0">
                        <img src="/images/products/drawer-channel.png" alt="Telescopic Channel" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-grow min-w-0">
                        <span class="text-[11px] font-bold text-[#4f4c4a] uppercase tracking-wider block">Drawer Hardware</span>
                        <h4 class="text-[16px] font-bold text-black track-tight-16 truncate">Telescopic Channel Series</h4>
                        <p class="text-[12px] text-[#4f4c4a] track-tight-12 mt-0.5 font-normal leading-normal">Heavy gauge cold-rolled steel tested for 80,000 cycles without play.</p>
                        <div class="mt-2 text-[12px] font-bold text-[#5433eb]">10 Year Replacement Warranty</div>
                    </div>
                </div>

                <!-- Spotlight 2 -->
                <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-5 flex items-center gap-4 hover-float transition-shop">
                    <div class="w-24 h-24 rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden flex-shrink-0">
                        <img src="/images/products/wardrobe-organizer.png" alt="Wardrobe Solutions" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-grow min-w-0">
                        <span class="text-[11px] font-bold text-[#4f4c4a] uppercase tracking-wider block">Luxury Storage</span>
                        <h4 class="text-[16px] font-bold text-black track-tight-16 truncate">Rotating Shoe & Accessory Rack</h4>
                        <p class="text-[12px] text-[#4f4c4a] track-tight-12 mt-0.5 font-normal leading-normal">360-degree rotation with integrated soft-close liquid damper.</p>
                        <div class="mt-2 text-[12px] font-bold text-[#5433eb]">Italian Aluminum Finish</div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ── 6. How It Works (First-Time Buyer Guide for Dealers, Architects & Homeowners) ── -->
    <section class="my-20">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-1">Simple & Direct Ordering</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-black track-tight-20">How To Procure Grewok Hardware</h2>
            <p class="text-[14px] text-[#4f4c4a] mt-2 font-normal">Whether you are an architect specifying a project, a dealer stocking shelves, or a homeowner upgrading, we make procurement effortless.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Step 1 -->
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 flex flex-col justify-between hover-float transition-shop">
                <div>
                    <span class="w-10 h-10 rounded-full bg-[#5433eb] text-white flex items-center justify-center font-bold text-[14px] mb-4 shadow-sm">
                        01
                    </span>
                    <h3 class="text-[18px] font-bold text-black track-tight-16 mb-2">Browse & Select Codes</h3>
                    <p class="text-[13px] text-[#4f4c4a] leading-relaxed font-normal">
                        Explore our catalog of channels, hinges, and kitchen fittings. Each model has detailed load ratings, exact mm sizes, and official GW item codes.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 flex flex-col justify-between hover-float transition-shop">
                <div>
                    <span class="w-10 h-10 rounded-full bg-[#5433eb] text-white flex items-center justify-center font-bold text-[14px] mb-4 shadow-sm">
                        02
                    </span>
                    <h3 class="text-[18px] font-bold text-black track-tight-16 mb-2">Add to Enquiry Cart</h3>
                    <p class="text-[13px] text-[#4f4c4a] leading-relaxed font-normal">
                        Click "Add to Enquiry" on any item code. No upfront checkout required—compile your required bill of materials (BOM) in seconds.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 flex flex-col justify-between hover-float transition-shop">
                <div>
                    <span class="w-10 h-10 rounded-full bg-[#5433eb] text-white flex items-center justify-center font-bold text-[14px] mb-4 shadow-sm">
                        03
                    </span>
                    <h3 class="text-[18px] font-bold text-black track-tight-16 mb-2">Direct Wholesale Rates</h3>
                    <p class="text-[13px] text-[#4f4c4a] leading-relaxed font-normal">
                        Our sales desk in Ahmedabad responds with project pricing, dealer discounts, and direct door delivery across 7 states.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── 7. Architect, Builder & Dealership CTA Banner (Bordered & High Contrast) ── -->
    <section class="my-20">
        <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 sm:p-12 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="max-w-xl">
                <span class="text-[11px] font-bold uppercase tracking-wider text-[#5433eb] block mb-1">Direct Wholesale & Dealerships</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-black track-tight-20 mb-3">Partner with Grewok India</h2>
                <p class="text-[14px] text-[#4f4c4a] track-tight-14 leading-relaxed font-normal mb-4">
                    Join an expansive network of premier modular fabricators, architects, and hardware retail dealers across 7 states. We offer attractive margins, rapid supply fulfillment, and free physical hardware sample boxes for project evaluation.
                </p>
                <div class="flex items-center gap-4 text-[12px] text-black font-bold">
                    <span>&check; 100% Virgin Metals</span>
                    <span>&check; 10-Year Warranty</span>
                    <span>&check; Direct Factory Dispatch</span>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center gap-3 flex-shrink-0 w-full md:w-auto">
                <a href="{{ route('contact', ['type' => 'dealer']) }}" 
                   class="w-full sm:w-auto h-12 px-7 rounded-full bg-[#5433eb] text-white text-[14px] font-bold shadow-violet-submit hover:opacity-95 transition-shop inline-flex items-center justify-center">
                    Become an Authorized Dealer
                </a>
                <a href="{{ route('catalogue') }}" 
                   class="w-full sm:w-auto h-12 px-7 rounded-full bg-[#ffffff] border border-[#cccccc] text-black text-[14px] font-bold shadow-shop-sm hover:bg-[#f2f4f5] transition-shop inline-flex items-center justify-center">
                    Download Full Catalogue
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
