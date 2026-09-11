<!DOCTYPE html>
<html lang="en" class="h-full bg-brand-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Grewok – Fit For Forever | Always Best in Quality')</title>
    <meta name="description" content="@yield('meta_description', 'Established in 2015, Grewok is a premier Indian furniture hardware brand. Specializing in soft-close channels, hydraulic auto-hinges, luxury wardrobe organizers, and kitchen corner systems.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js CDN for robust client-side reactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }

        .skeleton-shimmer {
            background: linear-gradient(90deg, #f1f5f9 25%, #cbd5e1 37%, #f1f5f9 63%);
            background-size: 200% 100%;
            animation: skeleton-wave 1.5s infinite linear;
        }

        @keyframes skeleton-wave {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
    </style>
    @yield('styles')
</head>
<body class="flex flex-col min-h-screen font-sans text-slate-800 antialiased" 
      x-data="cartManager" 
      @add-to-cart.window="addItem($event.detail)"
      x-init="initCart()">

    <!-- Sticky Header -->
    <header class="sticky top-0 z-40 w-full bg-white/95 backdrop-blur-md border-b border-slate-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="relative flex items-center justify-center w-11 h-11 bg-brand-navy rounded-xl overflow-hidden shadow-md group-hover:scale-105 transition-brand">
                        <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.3 22 21.62 17.88 21.96 12.67H12V15.33H19.22C18.66 17.7 16.53 19.33 12 19.33C7.94 19.33 4.67 16.06 4.67 12C4.67 7.94 7.94 4.67 12 4.67C15.22 4.67 17.96 6.74 18.9 9.6H21.75C20.69 5.17 16.73 2 12 2Z" fill="currentColor"/>
                            <rect x="11" y="11" width="10" height="2.5" fill="#E31C25"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-extrabold text-2xl tracking-tight text-brand-navy leading-none flex flex-col">
                            <span class="flex items-baseline">Grewok</span>
                            <span class="h-0.75 w-full bg-brand-red mt-0.5 rounded-full"></span>
                        </div>
                        <span class="text-[9px] uppercase tracking-widest text-brand-gray-dark font-bold">Fit For Forever</span>
                    </div>
                </a>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden lg:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="font-medium text-sm text-brand-navy hover:text-brand-red transition-brand {{ Route::currentRouteName() == 'home' ? 'text-brand-red border-b-2 border-brand-red py-1' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="font-medium text-sm text-brand-navy hover:text-brand-red transition-brand {{ Route::currentRouteName() == 'about' ? 'text-brand-red border-b-2 border-brand-red py-1' : '' }}">About Us</a>
                    
                    <!-- Mega Menu Products Link -->
                    <div class="relative group py-5" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button class="flex items-center gap-1 font-medium text-sm text-brand-navy hover:text-brand-red transition-brand">
                            <span>Products</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        
                        <!-- Mega Menu Panel -->
                        <div class="absolute left-1/2 -translate-x-1/2 top-full w-[800px] bg-white border border-slate-100 shadow-2xl rounded-2xl p-6 grid grid-cols-3 gap-6 transition-all duration-300 transform origin-top"
                             x-show="open"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                             x-transition:leave-end="opacity-0 scale-95 -translate-y-2"
                             x-cloak>
                            <div class="col-span-2 grid grid-cols-2 gap-4">
                                @php $catChunks = collect($navCategories ?? [])->chunk(max(1, ceil(count($navCategories ?? []) / 2))); @endphp
                                @foreach($catChunks as $chunk)
                                <div class="space-y-1">
                                    @foreach($chunk as $navSlug => $navCat)
                                    <a href="{{ route('products.category', $navSlug) }}" class="block p-2 rounded-lg hover:bg-slate-50 transition-brand">
                                        <span class="block text-sm font-semibold text-brand-navy">{{ $navCat['name'] }}</span>
                                        <span class="block text-[11px] text-slate-500">{{ Str::limit($navCat['description'], 50) }}</span>
                                    </a>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                            <div class="bg-gradient-to-br from-brand-navy to-brand-navy-dark text-white rounded-xl p-5 flex flex-col justify-between">
                                <div>
                                    <div class="text-[10px] uppercase font-bold tracking-widest text-brand-red mb-1">Premium Hardware</div>
                                    <h4 class="font-bold text-lg leading-tight mb-2">Fit For Forever Quality</h4>
                                    <p class="text-xs text-slate-300 leading-relaxed">Discover Hettich & Blum level engineering tailored for Indian modular homes.</p>
                                </div>
                                <a href="{{ route('products.all') }}" class="inline-flex items-center justify-center gap-2 bg-brand-red hover:bg-brand-red-dark text-white text-xs font-bold py-2 px-4 rounded-lg mt-4 transition-brand">
                                    <span>Explore Full Range</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7-7"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('catalogue') }}" class="font-medium text-sm text-brand-navy hover:text-brand-red transition-brand {{ Route::currentRouteName() == 'catalogue' ? 'text-brand-red border-b-2 border-brand-red py-1' : '' }}">Download Catalogue</a>
                    <a href="{{ route('contact') }}" class="font-medium text-sm text-brand-navy hover:text-brand-red transition-brand {{ Route::currentRouteName() == 'contact' ? 'text-brand-red border-b-2 border-brand-red py-1' : '' }}">Contact / Dealership</a>
                </nav>

                <!-- Search & Action Buttons -->
                <div class="flex items-center gap-4">
                    <!-- Search Input Box -->
                    <form action="{{ route('products.all') }}" method="GET" class="hidden md:relative md:flex items-center">
                        <input type="text" name="q" placeholder="Search by name or code..." 
                               value="{{ request('q') }}"
                               class="w-60 bg-slate-50 focus:bg-white text-xs border border-slate-200 focus:border-brand-navy rounded-full py-2 pl-4 pr-10 outline-none transition-brand font-medium">
                        <button type="submit" class="absolute right-3 text-slate-400 hover:text-brand-red transition-brand">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                    </form>

                    <!-- Enquiry Quote Cart Trigger -->
                    <button @click="cartDrawerOpen = true" class="relative p-2.5 bg-slate-50 hover:bg-slate-100 rounded-full text-brand-navy transition-brand focus:outline-none">
                        <svg class="w-5.5 h-5.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-brand-red text-white text-[10px] font-bold w-5 h-5 rounded-full flex items-center justify-center animate-pulse" 
                              x-show="itemsCount > 0" 
                              x-text="itemsCount" 
                              x-cloak>0</span>
                    </button>

                    <!-- Mobile Menu Button -->
                    <button class="lg:hidden p-2 bg-slate-50 text-brand-navy hover:bg-slate-100 rounded-lg transition-brand focus:outline-none" 
                            @click="mobileMenuOpen = !mobileMenuOpen">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileMenuOpen">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="mobileMenuOpen" x-cloak>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="lg:hidden border-t border-slate-100 bg-white" 
             x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             x-cloak>
            <div class="px-4 pt-3 pb-6 space-y-3">
                <form action="{{ route('products.all') }}" method="GET" class="relative flex items-center mb-4">
                    <input type="text" name="q" placeholder="Search product name or code..." value="{{ request('q') }}"
                           class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-2.5 pl-4 pr-10 text-xs outline-none">
                    <button type="submit" class="absolute right-3 text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                </form>
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg font-medium text-sm hover:bg-slate-50 text-brand-navy">Home</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 rounded-lg font-medium text-sm hover:bg-slate-50 text-brand-navy">About Us</a>
                
                <!-- Mobile Products Expandable List -->
                <div x-data="{ expanded: false }">
                    <button @click="expanded = !expanded" class="w-full flex items-center justify-between px-3 py-2 rounded-lg font-medium text-sm hover:bg-slate-50 text-brand-navy text-left">
                        <span>Products</span>
                        <svg class="w-4 h-4 transition-transform" :class="expanded ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="pl-6 space-y-2 mt-1" x-show="expanded" x-cloak>
                        @foreach($navCategories ?? [] as $navSlug => $navCat)
                        <a href="{{ route('products.category', $navSlug) }}" class="block py-1.5 text-xs text-brand-gray-dark hover:text-brand-red">{{ $navCat['name'] }}</a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('catalogue') }}" class="block px-3 py-2 rounded-lg font-medium text-sm hover:bg-slate-50 text-brand-navy">Download Catalogue</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-lg font-medium text-sm hover:bg-slate-50 text-brand-navy">Contact / Dealership</a>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Serving States Strip -->
    <div class="bg-brand-navy border-y border-brand-navy-dark py-4 text-center overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 flex items-center justify-center flex-wrap gap-x-6 gap-y-2 text-xs font-semibold text-slate-300 uppercase tracking-widest">
            <span class="text-brand-red">Currently Serving:</span>
            <span>Gujarat</span>
            <span class="text-slate-600">|</span>
            <span>Maharashtra</span>
            <span class="text-slate-600">|</span>
            <span>Chhattisgarh</span>
            <span class="text-slate-600">|</span>
            <span>Rajasthan</span>
            <span class="text-slate-600">|</span>
            <span>Madhya Pradesh</span>
            <span class="text-slate-600">|</span>
            <span>Karnataka</span>
            <span class="text-slate-600">|</span>
            <span>Telangana</span>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 pt-16 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                
                <!-- Brand Profile -->
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="relative flex items-center justify-center w-10 h-10 bg-brand-navy rounded-lg overflow-hidden border border-slate-700">
                            <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.3 22 21.62 17.88 21.96 12.67H12V15.33H19.22C18.66 17.7 16.53 19.33 12 19.33C7.94 19.33 4.67 16.06 4.67 12C4.67 7.94 7.94 4.67 12 4.67C15.22 4.67 17.96 6.74 18.9 9.6H21.75C20.69 5.17 16.73 2 12 2Z" fill="currentColor"/>
                                <rect x="11" y="11" width="10" height="2.5" fill="#E31C25"/>
                            </svg>
                        </div>
                        <span class="font-extrabold text-xl text-white tracking-wider">Grewok</span>
                    </div>
                    <p class="text-sm leading-relaxed mb-6">Grewok is a leading name in high-end architectural furniture hardware. Established in 2015, we represent premium quality, reliability, and precision engineering for modern homes.</p>
                    <div class="flex gap-4">
                        <a href="#" class="p-2 bg-slate-800 hover:bg-brand-navy text-slate-300 hover:text-white rounded-lg transition-brand">
                            <!-- FB -->
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/></svg>
                        </a>
                        <a href="#" class="p-2 bg-slate-800 hover:bg-brand-navy text-slate-300 hover:text-white rounded-lg transition-brand">
                            <!-- Insta -->
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div>
                    <h4 class="font-semibold text-white text-sm uppercase tracking-wider mb-6">Quick Links</h4>
                    <ul class="space-y-3.5 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-brand">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-brand">About Us</a></li>
                        <li><a href="{{ route('products.all') }}" class="hover:text-white transition-brand">Explore Hardware Products</a></li>
                        <li><a href="{{ route('catalogue') }}" class="hover:text-white transition-brand">Download PDF Catalogue</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-brand">Become a Dealer</a></li>
                    </ul>
                </div>

                <!-- Categories (Dynamic from DB) -->
                <div>
                    <h4 class="font-semibold text-white text-sm uppercase tracking-wider mb-6">Product Range</h4>
                    <ul class="space-y-3.5 text-sm">
                        @foreach($navCategories ?? [] as $navSlug => $navCat)
                        <li><a href="{{ route('products.category', $navSlug) }}" class="hover:text-white transition-brand">{{ $navCat['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Contact Details -->
                <div>
                    <h4 class="font-semibold text-white text-sm uppercase tracking-wider mb-6">Head Office</h4>
                    <address class="not-italic text-sm space-y-3">
                        <p class="leading-relaxed">
                            3-Seller, Arbuda Estate,<br>
                            Nr. Nidhi Co. Op. Bank, Ambica Hotel,<br>
                            CTM Char Rasta N.H. 08,<br>
                            Ahmedabad, Gujarat - 380026
                        </p>
                        <p class="pt-2">
                            <span class="block text-xs uppercase tracking-wider text-slate-500">Email Address</span>
                            <a href="mailto:grewokhardware@gmail.com" class="text-white hover:text-brand-red transition-brand">grewokhardware@gmail.com</a>
                        </p>
                        <p>
                            <span class="block text-xs uppercase tracking-wider text-slate-500">Official Website</span>
                            <a href="http://www.grewokindia.com" target="_blank" class="text-white hover:text-brand-red transition-brand">www.grewokindia.com</a>
                        </p>
                    </address>
                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="border-t border-slate-800 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} Grewok India. All rights reserved. | Tagline: Fit For Forever</p>
                <div class="flex gap-4">
                    <a href="{{ route('about') }}" class="hover:text-slate-300">Quality Assurance</a>
                    <span>&bull;</span>
                    <a href="{{ route('contact') }}" class="hover:text-slate-300">Dealer Portal</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Side Cart Drawer (Slide-out) -->
    <div class="fixed inset-0 z-50 overflow-hidden" 
         x-show="cartDrawerOpen" 
         x-transition:enter="transition ease-in-out duration-300"
         x-cloak>
        <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" @click="cartDrawerOpen = false"></div>
        
        <div class="absolute inset-y-0 right-0 max-w-full flex pl-10">
            <div class="w-screen max-w-md bg-white shadow-2xl flex flex-col"
                 x-show="cartDrawerOpen"
                 x-transition:enter="transform transition ease-in-out duration-300 sm:duration-400"
                 x-transition:enter-start="translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transform transition ease-in-out duration-300 sm:duration-400"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="translate-x-full">
                
                <!-- Drawer Header -->
                <div class="px-6 py-5 border-b border-slate-100 flex items-center justify-between bg-brand-navy text-white">
                    <div class="flex items-center gap-2">
                        <svg class="w-5.5 h-5.5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                        <h2 class="text-lg font-bold">Enquiry Cart</h2>
                    </div>
                    <button @click="cartDrawerOpen = false" class="text-slate-300 hover:text-white p-1 rounded-full hover:bg-white/10 transition-brand">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <!-- Drawer Content -->
                <div class="flex-grow overflow-y-auto px-6 py-4">
                    <!-- Empty Cart State -->
                    <template x-if="items.length === 0">
                        <div class="h-full flex flex-col items-center justify-center text-center py-12">
                            <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-slate-300 mb-4">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2"></path></svg>
                            </div>
                            <h3 class="font-bold text-slate-700 mb-1">Your Enquiry Cart is empty</h3>
                            <p class="text-xs text-slate-500 max-w-[240px] leading-relaxed mb-6">Browse our premium hardware catalog and add products to request code/price quotes.</p>
                            <a href="{{ route('products.all') }}" @click="cartDrawerOpen = false" class="bg-brand-navy hover:bg-brand-navy-dark text-white text-xs font-bold py-2.5 px-6 rounded-full transition-brand">Browse Products</a>
                        </div>
                    </template>

                    <!-- Cart Items List -->
                    <template x-if="items.length > 0">
                        <div class="space-y-4">
                            <template x-for="item in items" :key="item.code">
                                <div class="flex items-center gap-3 p-3 bg-slate-50 border border-slate-100 rounded-xl">
                                    <div class="w-14 h-14 bg-white border border-slate-200 rounded-lg overflow-hidden flex-shrink-0 flex items-center justify-center">
                                        <img :src="item.image" :alt="item.name" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-grow min-w-0">
                                        <h4 class="font-semibold text-xs text-brand-navy truncate" x-text="item.name"></h4>
                                        <div class="flex items-center gap-1.5 mt-0.5 text-[10px] text-slate-500">
                                            <span class="font-bold bg-slate-200 text-slate-600 px-1.5 py-0.5 rounded" x-text="item.code"></span>
                                            <span class="truncate" x-text="'Size: ' + item.size"></span>
                                        </div>
                                        <div class="text-xs text-brand-red font-bold mt-1" x-text="'MRP Range: ₹' + item.mrp + ' / ' + item.unit"></div>
                                    </div>
                                    <button @click="removeItem(item.code)" class="text-slate-400 hover:text-brand-red p-1.5 rounded-full hover:bg-slate-200 transition-brand">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </template>
                </div>

                <!-- Drawer Footer -->
                <div class="p-6 border-t border-slate-100 bg-slate-50" x-show="items.length > 0">
                    <div class="flex items-center justify-between text-xs font-bold text-slate-700 mb-4">
                        <span x-text="itemsCount + ' Products Selected'"></span>
                        <button @click="clearCart()" class="text-brand-red hover:underline focus:outline-none">Clear All</button>
                    </div>
                    <a href="{{ route('enquiry') }}" @click="cartDrawerOpen = false" class="w-full flex items-center justify-center gap-2 bg-brand-red hover:bg-brand-red-dark text-white text-sm font-bold py-3 rounded-xl shadow-lg shadow-brand-red/20 transition-brand">
                        <span>Proceed to Enquiry</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Floating Action Buttons -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col gap-3">
        <!-- Enquiry Cart Floating Button (hidden on desktop since header is sticky) -->
        <button @click="cartDrawerOpen = true" 
                class="lg:hidden flex items-center justify-center w-12 h-12 bg-brand-navy hover:bg-brand-navy-dark text-white rounded-full shadow-lg transition-brand focus:outline-none relative">
            <svg class="w-5.5 h-5.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2"></path></svg>
            <span class="absolute -top-1 -right-1 bg-brand-red text-white text-[10px] font-bold w-5 h-5 rounded-full flex items-center justify-center" x-show="itemsCount > 0" x-text="itemsCount" x-cloak>0</span>
        </button>

        <!-- Floating WhatsApp Button -->
        <a href="https://wa.me/919999999999?text=Hello%20Grewok%20Hardware!%20I%20am%20interested%20in%20your%20products." 
           target="_blank" 
           class="flex items-center justify-center w-12 h-12 bg-emerald-500 hover:bg-emerald-600 text-white rounded-full shadow-lg hover:scale-105 transition-brand focus:outline-none">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.73-1.45L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.859-4.42 9.863-9.864.002-2.637-1.023-5.116-2.887-6.98C16.584 1.9 14.11 .876 11.477.876c-5.437 0-9.862 4.42-9.866 9.864-.001 1.902.501 3.757 1.455 5.378L2.005 22l6.009-1.576c1.625.962 3.15 1.43 4.633 1.43zM18.23 15.35c-.34-.17-2.01-.99-2.32-1.1-.31-.11-.53-.17-.76.17-.23.34-.88 1.1-.1.79 1.1.23.23.46.12.79-.11.34-.17.76-.08.43-.09-.34-.73-2.91-.74-2.92-.3-.29-.6-.25-.82-.24-.22 0-.47-.01-.73-.01-.26 0-.68.1-1.04.5-.36.4-1.38 1.35-1.38 3.28s1.4 3.8 1.6 4.07c.2.27 2.76 4.21 6.69 5.91.93.4 1.66.65 2.23.83.94.3 1.8.26 2.48.16.76-.11 2.32-.95 2.65-1.87.33-.92.33-1.71.23-1.87-.1-.16-.36-.26-.71-.43z"/>
            </svg>
        </a>
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
                    // Check if already in cart
                    let existingIndex = this.items.findIndex(item => item.code === product.code);
                    if (existingIndex > -1) {
                        // Already exists, just open the drawer
                        this.cartDrawerOpen = true;
                        return;
                    }

                    // Add new item
                    this.items.push(product);
                    this.saveCart();
                    
                    // Open drawer automatically when adding
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
