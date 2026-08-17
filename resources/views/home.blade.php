@extends('layouts.app')

@section('title', 'Grewok – Fit For Forever | Always Best in Quality | Premium Furniture Hardware')

@section('content')
<!-- Hero Section -->
<section class="relative bg-brand-navy overflow-hidden">
    <!-- Visual background with overlay -->
    <div class="absolute inset-0 z-0">
        <img src="/images/hero-kitchen.png" alt="Luxury Modern Kitchen Hardware" class="w-full h-full object-cover opacity-35 mix-blend-luminosity">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-navy-dark via-brand-navy/95 to-transparent"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-36 flex flex-col justify-center min-h-[580px]">
        <div class="max-w-2xl">
            <!-- Brand Badge -->
            <div class="inline-flex items-center gap-2 bg-brand-red/10 border border-brand-red/20 px-3.5 py-1.5 rounded-full text-xs font-bold text-brand-red uppercase tracking-widest mb-6 animate-fade-in-up">
                <span>ESTD 2015</span>
                <span class="w-1.5 h-1.5 rounded-full bg-brand-red"></span>
                <span>Premium Quality Hardware</span>
            </div>
            
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-none mb-6">
                Grewok Hardware<br>
                <span class="text-brand-red">Fit For Forever</span>
            </h1>
            
            <p class="text-lg text-slate-300 font-medium mb-10 leading-relaxed">
                Always Best in Quality. Premium architectural furniture fittings and modular kitchen solutions engineered to elevate modern Indian homes.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('products.all') }}" class="inline-flex items-center justify-center gap-2.5 bg-brand-red hover:bg-brand-red-dark text-white font-bold py-4 px-8 rounded-xl shadow-lg shadow-brand-red/25 transition-brand text-sm">
                    <span>Explore Products</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="{{ route('catalogue') }}" class="inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-bold py-4 px-8 rounded-xl backdrop-blur-sm transition-brand text-sm">
                    <svg class="w-4 h-4 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    <span>Download Catalogue</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats / About Teaser Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="text-xs uppercase font-extrabold tracking-widest text-brand-red mb-3">Company Profile</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy mb-6 leading-tight">
                    Trusted Furniture Hardware Since 2015
                </h2>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Established in 2015, Grewok has grown into a trusted, premium brand in the furniture hardware industry. We are dedicated to providing builders, architects, and homeowners with high-end, heavy-duty hardware that combines luxurious aesthetic values with flawless mechanics.
                </p>
                <p class="text-slate-600 leading-relaxed mb-8">
                    Following the rigorous quality benchmarks similar to European giants like Hettich, Blum, and Häfele, we custom-engineer our fittings to handle the unique temperature, humidity, and load requirements of modular kitchens and wardrobes in Indian homes.
                </p>
                <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-brand-red font-bold hover:text-brand-navy transition-brand text-sm group">
                    <span>Learn More About Grewok</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
            
            <div class="grid grid-cols-2 gap-6">
                <div class="p-8 bg-slate-50 border border-slate-100 rounded-2xl text-center shadow-sm">
                    <div class="text-4xl font-extrabold text-brand-navy mb-2">2015</div>
                    <div class="text-xs font-bold uppercase tracking-wider text-slate-500">Established Year</div>
                </div>
                <div class="p-8 bg-slate-50 border border-slate-100 rounded-2xl text-center shadow-sm">
                    <div class="text-4xl font-extrabold text-brand-navy mb-2">10 Years</div>
                    <div class="text-xs font-bold uppercase tracking-wider text-slate-500">Product Warranty</div>
                </div>
                <div class="p-8 bg-slate-50 border border-slate-100 rounded-2xl text-center shadow-sm col-span-2">
                    <div class="text-4xl font-extrabold text-brand-red mb-2">100%</div>
                    <div class="text-xs font-bold uppercase tracking-wider text-slate-500">Virgin Raw Materials & Testing Certification</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Categories Grid Section -->
<section class="py-20 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs uppercase font-extrabold tracking-widest text-brand-red">High-End Range</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy mt-3 mb-4">Featured Product Categories</h2>
            <p class="text-slate-500 text-sm">Explore our engineered solutions designed to bring motion, structure, and security to your living spaces.</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($categories as $slug => $cat)
            <div class="group bg-white rounded-2xl border border-slate-100 hover:border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-brand flex flex-col justify-between">
                <div class="p-6">
                    <div class="w-12 h-12 rounded-xl bg-brand-navy/5 text-brand-navy flex items-center justify-center mb-6 group-hover:bg-brand-red group-hover:text-white transition-brand">
                        {!! $cat['icon'] !!}
                    </div>
                    <h3 class="text-lg font-bold text-brand-navy mb-2 group-hover:text-brand-red transition-brand">
                        {{ $cat['name'] }}
                    </h3>
                    <p class="text-xs text-slate-500 leading-relaxed mb-6">
                        {{ Str::limit($cat['description'], 90) }}
                    </p>
                </div>
                <div class="px-6 pb-6 pt-2 border-t border-slate-50">
                    <a href="{{ route('products.category', $slug) }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-navy group-hover:text-brand-red transition-brand">
                        <span>Browse Catalog</span>
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7-7"></path></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Key Selling Points Section -->
<section class="py-24 bg-white border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span class="text-xs uppercase font-extrabold tracking-widest text-brand-red">The Grewok Edge</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy mt-3 mb-4">Engineered For Indian Homes</h2>
            <p class="text-slate-500 text-sm">Every hinge, channel, and storage solution is built to deliver unmatched durability and peak mechanical performance.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="flex gap-4">
                <div class="flex-shrink-0 w-12 h-12 bg-red-50 text-brand-red rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <div>
                    <h3 class="font-bold text-brand-navy mb-2 text-sm uppercase">10 Years Warranty</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Enjoy peace of mind. Our premium SS 304 products carry a 10-year replacement warranty against manufacturing defects.</p>
                </div>
            </div>
            
            <!-- Feature 2 -->
            <div class="flex gap-4">
                <div class="flex-shrink-0 w-12 h-12 bg-blue-50 text-brand-navy rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <h3 class="font-bold text-brand-navy mb-2 text-sm uppercase">Whisper Soft-Close</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Integrated liquid silicone dampers provide a smooth, silent self-closing action, preventing slamming.</p>
                </div>
            </div>
            
            <!-- Feature 3 -->
            <div class="flex gap-4">
                <div class="flex-shrink-0 w-12 h-12 bg-slate-50 text-slate-700 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <div>
                    <h3 class="font-bold text-brand-navy mb-2 text-sm uppercase">High Load Capacity</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Telescopic slides and storage pull-outs are engineered and tested to support load capacities up to 80 kg.</p>
                </div>
            </div>
            
            <!-- Feature 4 -->
            <div class="flex gap-4">
                <div class="flex-shrink-0 w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </div>
                <div>
                    <h3 class="font-bold text-brand-navy mb-2 text-sm uppercase">Made For Indian Homes</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Built from heavy-gauge virgin metals to resist salt, rust, and oil spray inside Indian modular kitchens.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-20 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-baseline justify-between mb-12">
            <div>
                <span class="text-xs uppercase font-extrabold tracking-widest text-brand-red">Signature Line</span>
                <h2 class="text-3xl font-extrabold text-brand-navy mt-2">Engineered Masterpieces</h2>
            </div>
            <a href="{{ route('products.all') }}" class="text-xs font-bold text-brand-red hover:text-brand-navy underline mt-2 sm:mt-0 transition-brand">View All Products &rarr;</a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($featuredProducts as $slug => $prod)
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition-brand">
                <div>
                    <div class="relative aspect-square bg-slate-50 overflow-hidden group">
                        <img src="{{ $prod['image'] }}" alt="{{ $prod['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-brand">
                        
                        <div class="absolute top-3 left-3 bg-brand-navy text-white text-[9px] font-bold uppercase tracking-widest px-2.5 py-1 rounded">
                            {{ $prod['subcategory'] }}
                        </div>
                    </div>
                    
                    <div class="p-5">
                        <h3 class="font-bold text-sm text-brand-navy truncate mb-1">
                            {{ $prod['name'] }}
                        </h3>
                        <p class="text-[11px] text-slate-500 line-clamp-2 leading-relaxed mb-4">
                            {{ $prod['tagline'] }}
                        </p>
                        
                        <div class="text-[10px] text-brand-gray-dark flex flex-wrap gap-1.5 mb-2">
                            <span class="bg-slate-100 px-2 py-0.5 rounded font-bold uppercase tracking-wide">GW-Code</span>
                            <span class="bg-slate-100 px-2 py-0.5 rounded">{{ $prod['sizes'][0]['code'] }}</span>
                        </div>
                    </div>
                </div>
                
                <div class="px-5 pb-5 pt-3 border-t border-slate-50 flex items-center justify-between">
                    <span class="text-xs text-brand-red font-bold">MRP: ₹{{ $prod['sizes'][0]['mrp'] }} - ₹{{ end($prod['sizes'])['mrp'] }}</span>
                    <a href="{{ route('products.show', $prod['slug']) }}" class="text-xs font-bold text-brand-navy hover:text-brand-red transition-brand">View Details &rarr;</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action & QR Code Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-brand-navy via-brand-navy-dark to-slate-900 rounded-3xl text-white shadow-2xl p-8 lg:p-16 grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
            
            <div class="lg:col-span-2">
                <span class="text-xs uppercase font-extrabold tracking-widest text-brand-red">Direct Dealer & Builder Enquiries</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold mt-3 mb-6 leading-tight">Become a Grewok Dealer</h2>
                <p class="text-slate-300 leading-relaxed mb-8 max-w-xl text-sm">
                    Partner with India's fastest-growing furniture hardware brand. We provide flexible bulk ordering, rapid supply-chain fulfillment across 7 states, custom product branding support, and attractive margins for distribution networks.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="bg-brand-red hover:bg-brand-red-dark text-white font-bold py-3.5 px-8 rounded-xl transition-brand text-xs uppercase tracking-wider">Become a Partner</a>
                    <a href="https://wa.me/919999999999?text=Hello!%20I%20want%20to%20become%20a%20dealer%20for%20Grewok%20Hardware." target="_blank" class="bg-white/10 hover:bg-white/20 border border-white/10 text-white font-bold py-3.5 px-8 rounded-xl transition-brand text-xs uppercase tracking-wider">Chat on WhatsApp</a>
                </div>
            </div>
            
            <!-- Elegant QR Code Mockup in SVG -->
            <div class="bg-white text-slate-800 rounded-2xl p-6 flex flex-col items-center shadow-2xl border border-white/10 max-w-[280px] mx-auto">
                <div class="relative w-44 h-44 bg-slate-50 border border-slate-200 rounded-lg flex items-center justify-center p-3">
                    <!-- Geometric Grewok G in center of QR Mockup -->
                    <div class="absolute w-8 h-8 bg-brand-navy rounded flex items-center justify-center shadow-md">
                        <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="none"><path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.3 22 21.62 17.88 21.96 12.67H12V15.33H19.22C18.66 17.7 16.53 19.33 12 19.33C7.94 19.33 4.67 16.06 4.67 12C4.67 7.94 7.94 4.67 12 4.67C15.22 4.67 17.96 6.74 18.9 9.6H21.75C20.69 5.17 16.73 2 12 2Z" fill="currentColor"/><rect x="11" y="11" width="10" height="2.5" fill="#E31C25"/></svg>
                    </div>
                    
                    <!-- Clean SVG QR code path representation -->
                    <svg class="w-full h-full text-brand-navy" viewBox="0 0 100 100" fill="currentColor">
                        <!-- Top-Left Corner Finder -->
                        <path d="M0 0h30v30H0zM5 5v20h20V5zM10 10h10v10H10z"/>
                        <!-- Top-Right Corner Finder -->
                        <path d="M70 0h30v30H70zM75 5v20h20V5zM80 10h10v10H80z"/>
                        <!-- Bottom-Left Corner Finder -->
                        <path d="M0 70h30v30H0zM5 75v20h20V75zM10 80h10v10H10z"/>
                        <!-- Random bits mock -->
                        <path d="M35 5h10v10H35zM50 5h10v5H50zM65 10h5v15h-5zM35 20h15v5H35zM55 20h10v10H55zM15 35h5v20h-5zM25 35h10v5H25zM45 35h10v10H45zM60 35h10v5H60zM80 35h10v15H80zM35 50h5v15h-5zM55 50h15v5H55zM75 55h20v5H75zM45 65h5v15h-5zM60 65h10v10H60zM85 65h10v5H85zM35 80h5v15h-5zM50 80h25v5H50zM80 80h5v15h-5zM50 90h15v5H50z"/>
                    </svg>
                </div>
                <div class="text-center mt-4">
                    <span class="block text-[11px] font-bold text-brand-navy uppercase tracking-wider">Scan QR Code</span>
                    <span class="block text-[9px] text-slate-500 mt-0.5">Download PDF Catalogue instantly to your smartphone.</span>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection
