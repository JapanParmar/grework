@extends('admin.layouts.app')

@section('title', 'Dashboard | Grewok Admin Control Panel')
@section('page_title', 'Admin Dashboard')
@section('page_subtitle', 'Real-time overview of products, categories, and customer quote requests.')

@section('content')

<!-- Stat Cards Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    
    <!-- Total Products -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 relative overflow-hidden shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Products</span>
            <div class="p-2.5 bg-brand-navy rounded-xl text-brand-red">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
            </div>
        </div>
        <div class="text-3xl font-black text-white leading-none mb-1">{{ $totalProducts }}</div>
        <p class="text-[11px] text-slate-400">Active catalogue fittings</p>
    </div>

    <!-- Total Categories -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 relative overflow-hidden shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Categories</span>
            <div class="p-2.5 bg-slate-800 rounded-xl text-emerald-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
            </div>
        </div>
        <div class="text-3xl font-black text-white leading-none mb-1">{{ $totalCategories }}</div>
        <p class="text-[11px] text-slate-400">Hardware categories</p>
    </div>

    <!-- Total Quote Enquiries -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 relative overflow-hidden shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Quote Enquiries</span>
            <div class="p-2.5 bg-slate-800 rounded-xl text-sky-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
            </div>
        </div>
        <div class="text-3xl font-black text-white leading-none mb-1">{{ $totalEnquiries }}</div>
        <p class="text-[11px] text-slate-400">Total B2B enquiries received</p>
    </div>

    <!-- Pending Actions -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 relative overflow-hidden shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Pending Enquiries</span>
            <div class="p-2.5 bg-brand-red/10 rounded-xl text-brand-red">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
        </div>
        <div class="text-3xl font-black text-brand-red leading-none mb-1">{{ $pendingEnquiries }}</div>
        <p class="text-[11px] text-slate-400">Awaiting customer response</p>
    </div>

</div>

<!-- Quick Action Strip -->
<div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 mb-8 flex flex-wrap items-center justify-between gap-4">
    <div>
        <h3 class="font-bold text-white text-sm">Product Management Shortcuts</h3>
        <p class="text-xs text-slate-400">Easily modify hardware details, price lists, and technical specifications.</p>
    </div>
    <div class="flex items-center gap-3 flex-wrap">
        <a href="{{ route('admin.products.create') }}" class="bg-brand-red hover:bg-brand-red-dark text-white text-xs font-bold py-2.5 px-4 rounded-xl transition-all inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            <span>Add Product</span>
        </a>
        <a href="{{ route('admin.categories.index') }}" class="bg-slate-800 hover:bg-slate-700 text-white text-xs font-bold py-2.5 px-4 rounded-xl transition-all">
            Manage Categories
        </a>
        <a href="{{ route('admin.enquiries.index') }}" class="bg-slate-800 hover:bg-slate-700 text-white text-xs font-bold py-2.5 px-4 rounded-xl transition-all">
            View All Enquiries
        </a>
    </div>
</div>

<!-- Two Columns: Recent Enquiries & Recent Products -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
    
    <!-- Recent Enquiries List (lg:col-span-7) -->
    <div class="lg:col-span-7 bg-slate-900 border border-slate-800 rounded-2xl p-6 flex flex-col justify-between shadow-sm">
        <div>
            <div class="flex items-center justify-between mb-6 border-b border-slate-800 pb-4">
                <h3 class="font-bold text-base text-white">Recent Customer Quote Requests</h3>
                <a href="{{ route('admin.enquiries.index') }}" class="text-xs font-semibold text-brand-red hover:underline">View All &rarr;</a>
            </div>

            @if(empty($recentEnquiries))
            <div class="text-center py-12 text-slate-500 text-xs">
                No customer quote requests submitted yet.
            </div>
            @else
            <div class="space-y-3">
                @foreach($recentEnquiries as $enq)
                <div class="p-4 bg-slate-950/60 border border-slate-800 rounded-xl flex items-center justify-between gap-4">
                    <div class="min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="font-bold text-xs text-white truncate">{{ $enq['name'] }}</span>
                            <span class="text-[10px] font-mono bg-slate-800 text-slate-400 px-2 py-0.5 rounded">{{ $enq['id'] }}</span>
                        </div>
                        <div class="text-[11px] text-slate-400 flex items-center gap-3">
                            <span>📞 {{ $enq['phone'] }}</span>
                            <span>📍 {{ $enq['state'] }}</span>
                            <span>📦 {{ count($enq['items'] ?? []) }} Items</span>
                        </div>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold uppercase px-2.5 py-1 rounded-full {{ ($enq['status'] ?? 'Pending') === 'Pending' ? 'bg-amber-950 text-amber-400 border border-amber-800' : (($enq['status'] ?? '') === 'Contacted' ? 'bg-sky-950 text-sky-400 border border-sky-800' : 'bg-emerald-950 text-emerald-400 border border-emerald-800') }}">
                            {{ $enq['status'] ?? 'Pending' }}
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>

    <!-- Recent Products (lg:col-span-5) -->
    <div class="lg:col-span-5 bg-slate-900 border border-slate-800 rounded-2xl p-6 flex flex-col justify-between shadow-sm">
        <div>
            <div class="flex items-center justify-between mb-6 border-b border-slate-800 pb-4">
                <h3 class="font-bold text-base text-white">Latest Products</h3>
                <a href="{{ route('admin.products.index') }}" class="text-xs font-semibold text-brand-red hover:underline">View All &rarr;</a>
            </div>

            <div class="space-y-3">
                @foreach($recentProducts as $p)
                <div class="p-3 bg-slate-950/60 border border-slate-800 rounded-xl flex items-center gap-3">
                    
                    <!-- Image with Skeleton Loader -->
                    <div x-data="{ loaded: false }" class="relative w-12 h-12 rounded-lg bg-slate-800 overflow-hidden flex-shrink-0 border border-slate-700">
                        <div x-show="!loaded" class="absolute inset-0 skeleton-shimmer-dark"></div>
                        <img src="{{ $p['image'] }}" alt="{{ $p['name'] }}" @load="loaded = true" :class="loaded ? 'opacity-100' : 'opacity-0'" class="w-full h-full object-cover transition-opacity duration-300">
                    </div>

                    <div class="min-w-0 flex-grow">
                        <h4 class="font-bold text-xs text-white truncate">{{ $p['name'] }}</h4>
                        <span class="text-[10px] text-slate-400 block truncate">{{ $p['subcategory'] }}</span>
                        <div class="text-[10px] font-bold text-brand-red mt-0.5">
                            MRP: ₹{{ $p['sizes'][0]['mrp'] ?? 0 }} - ₹{{ end($p['sizes'])['mrp'] ?? 0 }}
                        </div>
                    </div>

                    <a href="{{ route('admin.products.edit', $p['slug']) }}" class="p-2 text-slate-400 hover:text-white hover:bg-slate-800 rounded-lg transition-all" title="Edit Product">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection
