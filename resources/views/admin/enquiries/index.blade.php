@extends('admin.layouts.app')

@section('title', 'Manage Customer Enquiries | Grewok Admin Control Panel')
@section('page_title', 'Customer Quote Enquiries')
@section('page_subtitle', 'Review incoming B2B dealer & architect price quote requests.')

@section('content')

<div class="space-y-6">

    <div class="flex items-center justify-between">
        <div>
            <h3 class="font-bold text-white text-base">Submitted Quote Requests</h3>
            <p class="text-xs text-slate-400">Total Enquiries: {{ count($enquiries) }}</p>
        </div>
    </div>

    @forelse($enquiries as $enq)
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-sm space-y-4" x-data="{ expanded: true }">
        
        <!-- Header row -->
        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-800 pb-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-brand-navy border border-slate-700 text-white font-extrabold flex items-center justify-center text-xs">
                    {{ strtoupper(substr($enq['name'] ?? 'C', 0, 2)) }}
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <h4 class="font-extrabold text-white text-base">{{ $enq['name'] }}</h4>
                        <span class="text-[10px] font-mono font-bold bg-slate-800 text-slate-300 px-2 py-0.5 rounded border border-slate-700">{{ $enq['id'] }}</span>
                        <span class="text-[10px] bg-brand-red/10 text-brand-red font-bold px-2 py-0.5 rounded uppercase">{{ $enq['enquiry_type'] ?? 'General' }}</span>
                    </div>
                    <span class="text-xs text-slate-400">Submitted on {{ $enq['created_at'] }}</span>
                </div>
            </div>

            <!-- Status Dropdown & Actions -->
            <div class="flex items-center gap-3">
                
                <form action="{{ route('admin.enquiries.status', $enq['id']) }}" method="POST" class="inline-flex items-center gap-2">
                    @csrf
                    <label class="text-[10px] uppercase font-bold text-slate-400">Status:</label>
                    <select name="status" onchange="this.form.submit()" class="bg-slate-950 border border-slate-800 text-xs font-bold rounded-xl py-1.5 px-3 outline-none cursor-pointer {{ ($enq['status'] ?? 'Pending') === 'Pending' ? 'text-amber-400' : (($enq['status'] ?? '') === 'Contacted' ? 'text-sky-400' : 'text-emerald-400') }}">
                        <option value="Pending" {{ ($enq['status'] ?? '') === 'Pending' ? 'selected' : '' }}>⏳ Pending</option>
                        <option value="Contacted" {{ ($enq['status'] ?? '') === 'Contacted' ? 'selected' : '' }}>📞 Contacted</option>
                        <option value="Completed" {{ ($enq['status'] ?? '') === 'Completed' ? 'selected' : '' }}>✅ Completed</option>
                    </select>
                </form>

                <button @click="expanded = !expanded" class="p-2 text-slate-400 hover:text-white rounded-lg bg-slate-800" title="Toggle Details">
                    <svg class="w-4 h-4 transition-transform" :class="expanded ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>

                <form action="{{ route('admin.enquiries.delete', $enq['id']) }}" method="POST" onsubmit="return confirm('Delete enquiry record {{ $enq['id'] }}?')">
                    @csrf
                    <button type="submit" class="p-2 text-slate-400 hover:text-red-400 rounded-lg hover:bg-slate-800" title="Delete Record">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Body Details -->
        <div x-show="expanded" class="space-y-6 pt-2" x-cloak>
            
            <!-- Customer Info Strip -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 bg-slate-950/60 p-4 rounded-xl border border-slate-800 text-xs">
                <div>
                    <span class="block text-[9px] uppercase font-bold text-slate-500">Phone Number</span>
                    <a href="tel:{{ $enq['phone'] }}" class="font-bold text-white hover:text-brand-red">📞 {{ $enq['phone'] }}</a>
                </div>
                <div>
                    <span class="block text-[9px] uppercase font-bold text-slate-500">Email Address</span>
                    <a href="mailto:{{ $enq['email'] }}" class="font-bold text-white hover:text-brand-red">✉️ {{ $enq['email'] }}</a>
                </div>
                <div>
                    <span class="block text-[9px] uppercase font-bold text-slate-500">State / Region</span>
                    <span class="font-bold text-white">📍 {{ $enq['state'] }}</span>
                </div>
                <div>
                    <span class="block text-[9px] uppercase font-bold text-slate-500">Direct WhatsApp</span>
                    <a href="https://wa.me/91{{ preg_replace('/[^0-9]/', '', $enq['phone']) }}?text=Hello%20{{ urlencode($enq['name']) }},%20thank%20you%20for%20your%20quote%20enquiry%20with%20Grewok." target="_blank" class="font-bold text-emerald-400 hover:underline">
                        💬 Open WhatsApp Chat
                    </a>
                </div>
            </div>

            @if(!empty($enq['message']))
            <div>
                <span class="block text-[10px] uppercase font-bold text-slate-400 mb-1">Customer Message / Note:</span>
                <p class="p-3 bg-slate-950 border border-slate-800 rounded-xl text-xs text-slate-300 italic">"{{ $enq['message'] }}"</p>
            </div>
            @endif

            <!-- Requested Hardware Products Table -->
            <div>
                <span class="block text-[10px] uppercase font-bold text-slate-400 mb-2">Requested Hardware Items ({{ count($enq['items'] ?? []) }})</span>
                
                <div class="border border-slate-800 rounded-xl overflow-hidden bg-slate-950">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-slate-900 text-slate-400 text-[9px] uppercase font-bold border-b border-slate-800">
                            <tr>
                                <th class="p-3">Product Name</th>
                                <th class="p-3">Item Code</th>
                                <th class="p-3">Size / Dimension</th>
                                <th class="p-3 text-right">Catalogue MRP</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60">
                            @foreach($enq['items'] ?? [] as $item)
                            <tr>
                                <td class="p-3 font-bold text-white flex items-center gap-3">
                                    @if(!empty($item['image']))
                                    <div x-data="{ loaded: false }" class="relative w-8 h-8 rounded bg-slate-800 overflow-hidden flex-shrink-0 border border-slate-700">
                                        <div x-show="!loaded" class="absolute inset-0 skeleton-shimmer-dark"></div>
                                        <img src="{{ $item['image'] }}" @load="loaded = true" :class="loaded ? 'opacity-100' : 'opacity-0'" class="w-full h-full object-cover">
                                    </div>
                                    @endif
                                    <span>{{ $item['name'] ?? 'Product' }}</span>
                                </td>
                                <td class="p-3 font-mono font-bold text-slate-300">{{ $item['code'] ?? 'GW-CODE' }}</td>
                                <td class="p-3 text-slate-400">{{ $item['size'] ?? 'Standard' }}</td>
                                <td class="p-3 text-right font-extrabold text-emerald-400">₹{{ $item['mrp'] ?? 0 }} / {{ $item['unit'] ?? 'Set' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
    @empty
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-12 text-center text-slate-500 text-xs">
        No customer quote requests submitted yet.
    </div>
    @endforelse

</div>

@endsection
