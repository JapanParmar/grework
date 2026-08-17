@extends('layouts.app')

@section('title', 'Quotation Request Submitted | Grewok Hardware')

@section('content')
<section class="py-20 bg-brand-light" x-init="clearCart()">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        
        <div class="bg-white rounded-3xl border border-slate-100 shadow-xl overflow-hidden">
            <!-- Success Banner -->
            <div class="bg-gradient-to-br from-emerald-500 to-teal-600 text-white text-center py-12 px-6">
                <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 border border-white/30">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Quotation Request Received</h1>
                <p class="text-slate-100 mt-2 text-xs font-semibold uppercase tracking-wider">Ref ID: {{ $enquiry['id'] }}</p>
            </div>

            <!-- Invoice / Details Summary -->
            <div class="p-8 space-y-8">
                <div>
                    <h3 class="font-extrabold text-brand-navy text-xs uppercase tracking-widest border-b border-slate-100 pb-2 mb-4">Customer Credentials</h3>
                    <div class="grid grid-cols-2 gap-y-4 gap-x-6 text-xs">
                        <div>
                            <span class="block text-[9px] text-slate-400 uppercase font-bold">Contact Person</span>
                            <span class="font-extrabold text-brand-navy">{{ $enquiry['name'] }}</span>
                        </div>
                        <div>
                            <span class="block text-[9px] text-slate-400 uppercase font-bold">Inquiry Date</span>
                            <span class="font-bold text-slate-600">{{ $enquiry['created_at'] }}</span>
                        </div>
                        <div>
                            <span class="block text-[9px] text-slate-400 uppercase font-bold">Phone Number</span>
                            <span class="font-bold text-slate-600">{{ $enquiry['phone'] }}</span>
                        </div>
                        <div>
                            <span class="block text-[9px] text-slate-400 uppercase font-bold">State / Location</span>
                            <span class="font-extrabold text-brand-navy">{{ $enquiry['state'] }}</span>
                        </div>
                        <div class="col-span-2">
                            <span class="block text-[9px] text-slate-400 uppercase font-bold">Email Address</span>
                            <span class="font-bold text-slate-600">{{ $enquiry['email'] }}</span>
                        </div>
                        @if(!empty($enquiry['message']))
                        <div class="col-span-2 bg-slate-50 p-3 rounded-lg border border-slate-100 italic">
                            <span class="block text-[9px] text-slate-400 uppercase font-bold not-italic mb-1">Additional Requirements</span>
                            <span class="text-slate-600">"{{ $enquiry['message'] }}"</span>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Products Table -->
                <div>
                    <h3 class="font-extrabold text-brand-navy text-xs uppercase tracking-widest border-b border-slate-100 pb-2 mb-4">Selected Hardware Items</h3>
                    <div class="border border-slate-100 rounded-xl overflow-hidden shadow-sm">
                        <table class="w-full text-left text-xs">
                            <thead class="bg-slate-50 border-b border-slate-100 text-[10px] font-bold text-slate-500 uppercase">
                                <tr>
                                    <th class="px-4 py-3">Hardware Model</th>
                                    <th class="px-4 py-3">Item Code</th>
                                    <th class="px-4 py-3 text-center">Size</th>
                                    <th class="px-4 py-3 text-right">MRP (INR)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($enquiry['items'] as $item)
                                <tr class="border-b border-slate-100 last:border-0">
                                    <td class="px-4 py-3.5 font-bold text-brand-navy">{{ $item['name'] }}</td>
                                    <td class="px-4 py-3.5 font-mono text-slate-600">{{ $item['code'] }}</td>
                                    <td class="px-4 py-3.5 text-center text-slate-500">{{ $item['size'] }}</td>
                                    <td class="px-4 py-3.5 text-right font-extrabold text-brand-red">₹{{ $item['mrp'] }} <span class="text-[9px] text-slate-400 font-normal">/ {{ $item['unit'] }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Action Links -->
                <div class="pt-6 border-t border-slate-100 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <button onclick="window.print()" class="w-full flex items-center justify-center gap-2 bg-slate-100 hover:bg-slate-200 text-brand-navy font-bold py-3.5 rounded-xl text-xs uppercase tracking-wider transition-brand">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                        <span>Print Receipt</span>
                    </button>
                    
                    <a href="{{ route('products.all') }}" class="w-full flex items-center justify-center gap-2 bg-brand-navy hover:bg-brand-navy-dark text-white font-bold py-3.5 rounded-xl text-xs uppercase tracking-wider transition-brand">
                        <span>Continue Browsing</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7-7"></path></svg>
                    </a>
                </div>
            </div>
            
        </div>

    </div>
</section>
@endsection
