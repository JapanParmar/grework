<!DOCTYPE html>
<html lang="en" class="h-full bg-[#f2f4f5]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Grewok – Fit For Forever | Always Best in Quality')</title>
    <meta name="description" content="@yield('meta_description', 'Established in 2015, Grewok is a premier Indian furniture hardware brand. Specializing in soft-close channels, hydraulic auto-hinges, luxury wardrobe organizers, and kitchen corner systems.')">
    
    <!-- Fonts: Inter 400/500/600 (substitute for GT Standard & Shopify Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles / Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js CDN for reactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
    </style>
    @yield('styles')
</head>
<body class="flex flex-col min-h-screen bg-[#f2f4f5] text-[#000000] font-sans antialiased selection:bg-[#5433eb] selection:text-white"
      x-data="cartManager" 
      @add-to-cart.window="addItem($event.detail)"
      x-init="initCart()">

    <!-- ── Top Announcement & Catalogue Download Banner ── -->
    <aside aria-label="Top Announcement" class="w-full bg-[#000000] text-white h-11 z-50 relative flex items-center justify-between px-4 sm:px-8 border-b border-white/10">
        <div class="hidden md:flex items-center gap-2 text-[12px] text-[#cccccc] track-tight-12">
            <span class="w-2 h-2 rounded-full bg-[#5433eb]"></span>
            <span>Premier Indian Furniture Hardware &bull; Fit For Forever &bull; Estd. 2015</span>
        </div>

        <div class="mx-auto md:mx-0 flex items-center gap-3 text-[12px] text-white">
            <a href="{{ route('catalogue') }}" class="inline-flex items-center gap-1.5 hover:text-[#c0b5f3] transition-shop font-medium">
                <svg class="w-3.5 h-3.5 text-[#5433eb]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                <span>Download 2026 Product Catalogue (PDF)</span>
            </a>
            <span class="text-white/30 hidden sm:inline">|</span>
            <a href="https://wa.me/919999999999" target="_blank" class="hidden sm:inline-flex items-center gap-1 text-[#cccccc] hover:text-white transition-shop">
                <span>WhatsApp: +91 99999 99999</span>
            </a>
        </div>
    </aside>

    <!-- ── Top Header Navigation Bar (Gives the website its proper brand identity for first-time visitors) ── -->
    <header class="sticky top-0 z-40 w-full bg-[#ffffff]/95 backdrop-blur-md border-b border-[#ebebeb] shadow-xs">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 h-18 flex items-center justify-between gap-4">
            
            <!-- Brand Logo & Tagline -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 group flex-shrink-0">
                <div class="flex flex-col">
                    <span class="text-2xl sm:text-3xl font-black text-black tracking-tight flex items-baseline leading-none">
                        grewok<span class="text-[#5433eb] text-3xl sm:text-4xl font-black ml-0.5 leading-none">.</span>
                    </span>
                    <span class="text-[9px] uppercase tracking-widest text-[#4f4c4a] font-bold mt-0.5">Fit For Forever &bull; Est. 2015</span>
                </div>
            </a>

            <!-- Desktop Nav Links (Clear, labeled, professional) -->
            <nav class="hidden lg:flex items-center gap-6">
                <a href="{{ route('home') }}" 
                   class="text-[14px] font-semibold transition-shop {{ Route::currentRouteName() == 'home' ? 'text-[#5433eb]' : 'text-black hover:text-[#5433eb]' }}">
                    Home
                </a>

                <!-- Collections Dropdown Menu -->
                <div class="relative group py-2" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="inline-flex items-center gap-1 text-[14px] font-semibold text-black hover:text-[#5433eb] transition-shop">
                        <span>Hardware Collections</span>
                        <svg class="w-3.5 h-3.5 text-[#666666] group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </button>

                    <!-- Pillow-soft Category Mega Dropdown -->
                    <div class="absolute left-1/2 -translate-x-1/2 top-full w-[600px] bg-white rounded-card-shop border border-[#ebebeb] shadow-shop-lg p-6 grid grid-cols-2 gap-4 transition-all duration-200"
                         x-show="open" 
                         x-transition
                         x-cloak>
                        @foreach($navCategories ?? [] as $navSlug => $navCat)
                        <a href="{{ route('products.category', $navSlug) }}" class="p-3 rounded-[16px] hover:bg-[#f2f4f5] transition-shop flex items-start gap-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#5433eb] mt-1.5 flex-shrink-0"></span>
                            <div>
                                <span class="block text-[13px] font-bold text-black">{{ $navCat['name'] }}</span>
                                <span class="block text-[11px] text-[#4f4c4a] line-clamp-1">{{ Str::limit($navCat['description'], 50) }}</span>
                            </div>
                        </a>
                        @endforeach

                        <div class="col-span-2 pt-2 border-t border-[#ebebeb] flex items-center justify-between">
                            <span class="text-[11px] text-[#4f4c4a] font-medium">Over 50+ German-standard hardware fittings</span>
                            <a href="{{ route('products.all') }}" class="text-[12px] font-bold text-[#5433eb] hover:underline">
                                View All Products &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('about') }}" 
                   class="text-[14px] font-semibold transition-shop {{ Route::currentRouteName() == 'about' ? 'text-[#5433eb]' : 'text-black hover:text-[#5433eb]' }}">
                    About Engineering
                </a>

                <a href="{{ route('catalogue') }}" 
                   class="text-[14px] font-semibold transition-shop {{ Route::currentRouteName() == 'catalogue' ? 'text-[#5433eb]' : 'text-black hover:text-[#5433eb]' }}">
                    PDF Catalogue
                </a>

                <a href="{{ route('contact') }}" 
                   class="text-[14px] font-semibold transition-shop {{ Route::currentRouteName() == 'contact' ? 'text-[#5433eb]' : 'text-black hover:text-[#5433eb]' }}">
                    Become a Dealer
                </a>
            </nav>

            <!-- Right Controls: Search + Quote Cart + Dealer CTA -->
            <div class="flex items-center gap-3">
                <!-- Search Pill Form -->
                <form action="{{ route('products.all') }}" method="GET" class="hidden md:flex items-center relative">
                    <input type="text" name="q" value="{{ request('q') }}" placeholder="Search hardware..." 
                           class="w-48 xl:w-56 h-10 bg-[#f2f4f5] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white pl-4 pr-10 text-[13px] text-black placeholder-[#666666] outline-none transition-shop">
                    <button type="submit" class="absolute right-3 text-[#4f4c4a] hover:text-black transition-shop" title="Search">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" /></svg>
                    </button>
                </form>

                <!-- Enquiry Cart Pill Trigger -->
                <button @click="cartDrawerOpen = true" 
                        class="h-10 px-4 rounded-full bg-[#f2f4f5] border border-[#d1d5db] hover:border-black text-black text-[13px] font-bold transition-shop flex items-center gap-2">
                    <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z" />
                    </svg>
                    <span class="hidden sm:inline">Enquiry Cart</span>
                    <span class="bg-[#5433eb] text-white text-[10px] font-bold w-5 h-5 rounded-full flex items-center justify-center leading-none" 
                          x-show="itemsCount > 0" 
                          x-text="itemsCount" 
                          x-cloak>0</span>
                </button>

                <!-- Dealer Wholesale Pill Button -->
                <a href="{{ route('contact', ['type' => 'dealer']) }}" 
                   class="hidden sm:inline-flex items-center justify-center h-10 px-5 rounded-full bg-[#5433eb] text-white text-[13px] font-bold shadow-violet-submit hover:opacity-95 transition-shop">
                    Dealer Portal
                </a>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 text-black hover:bg-[#f2f4f5] rounded-full transition-shop">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" x-show="!mobileMenuOpen">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" x-show="mobileMenuOpen" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </header>

    <!-- Mobile Dropdown Navigation -->
    <div class="lg:hidden bg-[#ffffff] border-b border-[#ebebeb] px-6 py-4 space-y-3 z-40" 
         x-show="mobileMenuOpen" 
         x-transition 
         x-cloak>
        <form action="{{ route('products.all') }}" method="GET" class="relative mb-3">
            <input type="text" name="q" value="{{ request('q') }}" placeholder="Search hardware, code..." 
                   class="w-full h-10 bg-[#f2f4f5] rounded-full border border-[#d1d5db] px-4 text-xs font-medium outline-none">
            <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-[#4f4c4a]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" /></svg>
            </button>
        </form>

        <a href="{{ route('home') }}" class="block text-sm font-bold py-1.5 text-black">Home</a>
        <a href="{{ route('products.all') }}" class="block text-sm font-bold py-1.5 text-black">All Hardware Collections</a>
        <div class="pl-4 space-y-1">
            @foreach($navCategories ?? [] as $navSlug => $navCat)
            <a href="{{ route('products.category', $navSlug) }}" class="block text-xs font-semibold py-1 text-[#4f4c4a] hover:text-[#5433eb]">{{ $navCat['name'] }}</a>
            @endforeach
        </div>
        <a href="{{ route('about') }}" class="block text-sm font-bold py-1.5 text-black">About Engineering & Quality</a>
        <a href="{{ route('catalogue') }}" class="block text-sm font-bold py-1.5 text-black">Download 2026 PDF Catalogue</a>
        <a href="{{ route('contact') }}" class="block text-sm font-bold py-1.5 text-black">Become a Dealer & Contact</a>
    </div>

    <!-- ── Main Content Area ── -->
    <div class="flex-grow flex flex-col">
        <main class="flex-grow w-full">
            @yield('content')
        </main>

        <!-- ── Clean Dark Band Footer (Full-width #000000 with high contrast typography) ── -->
        <footer class="w-full bg-[#000000] text-[#e0e0e0] mt-24 pt-16 pb-12 border-t border-black">
            <div class="max-w-[1200px] mx-auto px-6 lg:px-8">
                <!-- Columnar Link Groups -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                    <!-- Brand Column -->
                    <div class="space-y-4">
                        <div class="text-white text-2xl font-bold tracking-tight flex items-baseline">
                            <span>grewok</span><span class="text-[#5433eb] text-3xl font-black leading-none ml-0.5">.</span>
                        </div>
                        <p class="text-[13px] leading-relaxed text-[#cccccc] track-tight-12 max-w-xs">
                            Fit For Forever. High-precision architectural furniture hardware engineered with European benchmarks for Indian modular spaces.
                        </p>
                        <div class="pt-2">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#1a1a1a] border border-white/20 text-[11px] text-white">
                                <span class="w-2 h-2 rounded-full bg-[#5433eb]"></span>
                                Est. 2015 &bull; Ahmedabad, Gujarat
                            </span>
                        </div>
                    </div>

                    <!-- Shop Categories -->
                    <div>
                        <h4 class="text-white text-[14px] font-semibold track-tight-14 mb-4">Hardware Ranges</h4>
                        <ul class="space-y-2.5 text-[13px] track-tight-12">
                            @foreach($navCategories ?? [] as $navSlug => $navCat)
                            <li>
                                <a href="{{ route('products.category', $navSlug) }}" class="text-[#cccccc] hover:text-white transition-shop">
                                    {{ $navCat['name'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Discovery & Resources -->
                    <div>
                        <h4 class="text-white text-[14px] font-semibold track-tight-14 mb-4">Discovery</h4>
                        <ul class="space-y-2.5 text-[13px] track-tight-12">
                            <li><a href="{{ route('products.all') }}" class="text-[#cccccc] hover:text-white transition-shop">All Products</a></li>
                            <li><a href="{{ route('catalogue') }}" class="text-[#cccccc] hover:text-white transition-shop">Download 2026/27 Catalogue</a></li>
                            <li><a href="{{ route('about') }}" class="text-[#cccccc] hover:text-white transition-shop">Engineering & Warranty</a></li>
                            <li><a href="{{ route('contact') }}" class="text-[#cccccc] hover:text-white transition-shop">Become a Dealer</a></li>
                        </ul>
                    </div>

                    <!-- Contact & Head Office -->
                    <div>
                        <h4 class="text-white text-[14px] font-semibold track-tight-14 mb-4">Head Office</h4>
                        <address class="not-italic text-[13px] text-[#cccccc] track-tight-12 space-y-2 leading-relaxed">
                            <p>3-Seller, Arbuda Estate, Nr. Nidhi Bank, Ambica Hotel, CTM Char Rasta, Ahmedabad - 380026</p>
                            <p class="pt-1">
                                <a href="mailto:grewokhardware@gmail.com" class="text-white hover:text-[#5433eb] transition-shop underline">grewokhardware@gmail.com</a>
                            </p>
                            <p>
                                <a href="https://www.grewokindia.com" target="_blank" class="text-[#ffffff] hover:text-[#5433eb] transition-shop font-medium">www.grewokindia.com</a>
                            </p>
                        </address>
                    </div>
                </div>

                <!-- States Serving Bar -->
                <div class="border-t border-[#333333] py-6 flex flex-wrap items-center justify-between gap-4 text-[12px] text-[#cccccc] track-tight-12">
                    <div class="flex items-center gap-3 flex-wrap">
                        <span class="text-white font-semibold">Serving Regions:</span>
                        <span>Gujarat</span>
                        <span class="text-[#888888]">&bull;</span>
                        <span>Maharashtra</span>
                        <span class="text-[#888888]">&bull;</span>
                        <span>Rajasthan</span>
                        <span class="text-[#888888]">&bull;</span>
                        <span>Madhya Pradesh</span>
                        <span class="text-[#888888]">&bull;</span>
                        <span>Chhattisgarh</span>
                        <span class="text-[#888888]">&bull;</span>
                        <span>Karnataka</span>
                        <span class="text-[#888888]">&bull;</span>
                        <span>Telangana</span>
                    </div>

                    <div class="text-[12px] text-[#cccccc]">
                        &copy; {{ date('Y') }} Grewok India. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- ── Pillow-Soft Side Cart Drawer (Slide-out) ── -->
    <div class="fixed inset-0 z-50 overflow-hidden" 
         x-show="cartDrawerOpen" 
         x-transition:enter="transition ease-in-out duration-300"
         x-cloak>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50 backdrop-blur-xs transition-opacity" @click="cartDrawerOpen = false"></div>
        
        <div class="absolute inset-y-0 right-0 max-w-full flex pl-6 sm:pl-10">
            <div class="w-screen max-w-md bg-[#ffffff] shadow-2xl flex flex-col justify-between"
                 x-show="cartDrawerOpen"
                 x-transition:enter="transform transition ease-out duration-300"
                 x-transition:enter-start="translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transform transition ease-in duration-200"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="translate-x-full">
                
                <!-- Drawer Header -->
                <div class="px-6 py-5 border-b border-[#ebebeb] flex items-center justify-between bg-white">
                    <div class="flex items-center gap-2">
                        <span class="text-[16px] font-semibold text-black track-tight-16">Enquiry Cart</span>
                        <span class="text-[11px] font-semibold px-2.5 py-0.5 rounded-full bg-[#f2f4f5] border border-[#ebebeb] text-black" x-text="itemsCount + ' items'"></span>
                    </div>
                    <button @click="cartDrawerOpen = false" class="w-8 h-8 rounded-full hover:bg-[#f2f4f5] flex items-center justify-center text-[#333333] hover:text-black transition-shop">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>

                <!-- Drawer Scrollable Content -->
                <div class="flex-grow overflow-y-auto p-6 space-y-4">
                    <!-- Empty Cart State -->
                    <template x-if="items.length === 0">
                        <div class="h-full flex flex-col items-center justify-center text-center py-16">
                            <div class="w-16 h-16 bg-[#f2f4f5] border border-[#ebebeb] rounded-full flex items-center justify-center text-[#666666] mb-4">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z" />
                                </svg>
                            </div>
                            <h3 class="text-[16px] font-semibold text-black mb-1 track-tight-16">Your bag is empty</h3>
                            <p class="text-[13px] text-[#4f4c4a] max-w-[220px] leading-relaxed mb-6 track-tight-12">Explore our collections to request specifications or quotes.</p>
                            <a href="{{ route('products.all') }}" @click="cartDrawerOpen = false" class="inline-flex items-center justify-center px-6 py-2.5 rounded-full bg-black text-white text-[13px] font-medium hover:bg-[#332f2d] transition-shop">Explore Collection</a>
                        </div>
                    </template>

                    <!-- Cart Item Cards -->
                    <template x-if="items.length > 0">
                        <div class="space-y-3">
                            <template x-for="item in items" :key="item.code">
                                <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-3 flex items-center gap-3 relative">
                                    <!-- Inner image 20px radius -->
                                    <div class="w-16 h-16 rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden flex-shrink-0 flex items-center justify-center">
                                        <img :src="item.image" :alt="item.name" class="w-full h-full object-cover">
                                    </div>

                                    <div class="flex-grow min-w-0 pr-6">
                                        <h4 class="text-[14px] font-semibold text-black truncate track-tight-14" x-text="item.name"></h4>
                                        <div class="flex items-center gap-1.5 text-[11px] text-[#4f4c4a] mt-0.5">
                                            <span class="font-semibold text-black" x-text="item.code"></span>
                                            <span>&bull;</span>
                                            <span class="truncate" x-text="item.size"></span>
                                        </div>
                                        <div class="text-[13px] font-bold text-black mt-1" x-text="'MRP: ₹' + item.mrp + ' / ' + item.unit"></div>
                                    </div>

                                    <button @click="removeItem(item.code)" class="absolute right-3 top-3 text-[#999999] hover:text-black p-1 transition-shop" title="Remove item">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </template>
                </div>

                <!-- Drawer Footer -->
                <div class="p-6 border-t border-[#ebebeb] bg-[#ffffff]" x-show="items.length > 0">
                    <div class="flex items-center justify-between text-[13px] text-[#4f4c4a] mb-4 font-medium">
                        <span x-text="itemsCount + ' Products Selected'"></span>
                        <button @click="clearCart()" class="text-[#333333] hover:text-black transition-shop underline text-[12px]">Clear all</button>
                    </div>

                    <a href="{{ route('enquiry') }}" @click="cartDrawerOpen = false" 
                       class="w-full h-12 flex items-center justify-center gap-2 rounded-full bg-[#5433eb] text-white text-[14px] font-medium shadow-violet-submit hover:opacity-95 transition-shop">
                        <span>Proceed to Enquiry</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Client-side Javascript for Cart Management -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('cartManager', () => ({
                items: [],
                itemsCount: 0,
                cartDrawerOpen: false,
                mobileMenuOpen: false,

                initCart() {
                    let localData = localStorage.getItem('grewok_enquiry_cart');
                    if (localData) {
                        try {
                            this.items = JSON.parse(localData);
                            this.updateCount();
                        } catch (e) {
                            this.items = [];
                            this.updateCount();
                        }
                    }
                },

                addItem(product) {
                    let existingIndex = this.items.findIndex(item => item.code === product.code);
                    if (existingIndex > -1) {
                        this.cartDrawerOpen = true;
                        return;
                    }
                    this.items.push(product);
                    this.saveCart();
                    this.cartDrawerOpen = true;
                },

                removeItem(code) {
                    this.items = this.items.filter(item => item.code !== code);
                    this.saveCart();
                },

                clearCart() {
                    this.items = [];
                    this.saveCart();
                },

                saveCart() {
                    localStorage.setItem('grewok_enquiry_cart', JSON.stringify(this.items));
                    this.updateCount();
                },

                updateCount() {
                    this.itemsCount = this.items.length;
                },

                isInCart(code) {
                    return this.items.some(item => item.code === code);
                }
            }));
        });
    </script>
    @yield('scripts')
</body>
</html>
