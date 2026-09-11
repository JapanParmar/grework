<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-900 text-slate-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Grewok Admin Control Panel')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
    </style>
    @yield('styles')
</head>
<body class="h-full font-sans bg-slate-950 text-slate-200 antialiased flex flex-col md:flex-row" x-data="{ sidebarOpen: false }">

    <!-- Mobile Top Navigation Header -->
    <header class="md:hidden bg-slate-900 border-b border-slate-800 p-4 flex items-center justify-between sticky top-0 z-50">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5">
            <div class="flex items-center justify-center w-9 h-9 bg-brand-red rounded-lg text-white font-black text-sm">G</div>
            <span class="font-extrabold text-base tracking-wider text-white">Grewok Admin</span>
        </a>
        <button @click="sidebarOpen = !sidebarOpen" class="p-2 text-slate-400 hover:text-white rounded-lg bg-slate-800">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </header>

    <!-- Sidebar Overlay for Mobile -->
    <div class="fixed inset-0 z-40 bg-slate-950/80 backdrop-blur-sm md:hidden" x-show="sidebarOpen" @click="sidebarOpen = false" x-cloak></div>

    <!-- Sidebar Navigation -->
    <aside class="fixed inset-y-0 left-0 z-50 w-64 bg-slate-900 border-r border-slate-800 flex flex-col justify-between transition-transform duration-300 transform md:translate-x-0"
           :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0'">
        
        <div>
            <!-- Brand Logo Header -->
            <div class="h-20 flex items-center justify-between px-6 border-b border-slate-800">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                    <div class="relative flex items-center justify-center w-10 h-10 bg-brand-navy rounded-xl border border-slate-700 shadow-md">
                        <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.3 22 21.62 17.88 21.96 12.67H12V15.33H19.22C18.66 17.7 16.53 19.33 12 19.33C7.94 19.33 4.67 16.06 4.67 12C4.67 7.94 7.94 4.67 12 4.67C15.22 4.67 17.96 6.74 18.9 9.6H21.75C20.69 5.17 16.73 2 12 2Z" fill="currentColor"/>
                            <rect x="11" y="11" width="10" height="2.5" fill="#E31C25"/>
                        </svg>
                    </div>
                    <div>
                        <span class="block font-black text-lg text-white leading-none">Grewok</span>
                        <span class="text-[9px] uppercase font-bold text-brand-red tracking-widest">Admin Portal</span>
                    </div>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 space-y-1.5 text-xs font-semibold">
                <div class="px-3 text-[10px] font-extrabold uppercase text-slate-500 tracking-wider mb-2">Main Menu</div>
                
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl transition-all {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-brand-red text-white font-bold shadow-lg shadow-brand-red/20' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('admin.products.index') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl transition-all {{ str_contains(Route::currentRouteName(), 'admin.products') ? 'bg-brand-red text-white font-bold shadow-lg shadow-brand-red/20' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    <span>Manage Products</span>
                </a>

                <a href="{{ route('admin.categories.index') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl transition-all {{ str_contains(Route::currentRouteName(), 'admin.categories') ? 'bg-brand-red text-white font-bold shadow-lg shadow-brand-red/20' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                    <span>Categories</span>
                </a>

                <a href="{{ route('admin.enquiries.index') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl transition-all {{ str_contains(Route::currentRouteName(), 'admin.enquiries') ? 'bg-brand-red text-white font-bold shadow-lg shadow-brand-red/20' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                    <span>Customer Enquiries</span>
                </a>

                <div class="pt-4 px-3 text-[10px] font-extrabold uppercase text-slate-500 tracking-wider mb-2">Shortcuts</div>

                <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-3 px-3.5 py-2.5 text-slate-400 hover:text-white hover:bg-slate-800/60 rounded-xl transition-all">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    <span>Visit Live Website</span>
                </a>
            </nav>
        </div>

        <!-- Admin Profile Footer -->
        <div class="p-4 border-t border-slate-800">
            <div class="flex items-center justify-between bg-slate-800/60 p-3 rounded-xl">
                <div class="flex items-center gap-3 overflow-hidden">
                    <div class="w-9 h-9 rounded-lg bg-slate-700 text-slate-200 font-bold flex items-center justify-center flex-shrink-0 text-xs">
                        AD
                    </div>
                    <div class="min-w-0">
                        <span class="block text-xs font-bold text-white truncate">{{ session('admin_user', 'Admin') }}</span>
                        <span class="block text-[10px] text-emerald-400 font-medium">Administrator</span>
                    </div>
                </div>

                <a href="{{ route('admin.logout') }}" title="Logout" class="p-2 text-slate-400 hover:text-brand-red hover:bg-slate-700/50 rounded-lg transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </a>
            </div>
        </div>

    </aside>

    <!-- Main Workspace Content Area -->
    <div class="flex-grow md:pl-64 flex flex-col min-h-screen">
        
        <!-- Top Workspace Bar -->
        <header class="hidden md:flex items-center justify-between h-20 px-8 bg-slate-900/60 backdrop-blur-md border-b border-slate-800 sticky top-0 z-30">
            <div>
                <h2 class="text-lg font-bold text-white">@yield('page_title', 'Admin Dashboard')</h2>
                <p class="text-xs text-slate-400">@yield('page_subtitle', 'Manage your catalogue products, categories, and customer quotes.')</p>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ route('admin.products.create') }}" class="inline-flex items-center gap-2 bg-brand-red hover:bg-brand-red-dark text-white text-xs font-bold py-2.5 px-4 rounded-xl shadow-lg shadow-brand-red/20 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
                    <span>Add New Product</span>
                </a>
            </div>
        </header>

        <!-- Flash Alerts -->
        <main class="flex-grow p-4 sm:p-6 lg:p-8">
            @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-950/70 border border-emerald-500/40 text-emerald-300 rounded-2xl flex items-center justify-between text-xs font-semibold">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span>{{ session('success') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-emerald-200">&times;</button>
            </div>
            @endif

            @if(session('error'))
            <div class="mb-6 p-4 bg-red-950/70 border border-red-500/40 text-red-300 rounded-2xl flex items-center justify-between text-xs font-semibold">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>{{ session('error') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-red-400 hover:text-red-200">&times;</button>
            </div>
            @endif

            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="p-6 border-t border-slate-800 text-center text-xs text-slate-500">
            Grewok Admin Control Panel &bull; Fit For Forever &bull; JSON Storage & DB Compatible
        </footer>
    </div>

    @yield('scripts')
</body>
</html>
