@extends('layouts.app')

@section('title', 'Quotation Request Received | Grewok')

@section('content')
<div class="max-w-[800px] mx-auto px-4 sm:px-6 pt-12 pb-24" x-init="clearCart()">

    <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card overflow-hidden">
        <!-- Top Status Bar -->
        <div class="p-8 sm:p-10 text-center border-b border-[#ebebeb]">
            <div class="w-14 h-14 rounded-full bg-[#f2f4f5] border border-[#ebebeb] flex items-center justify-center mx-auto mb-4">
                <span class="w-3.5 h-3.5 rounded-full bg-[#5433eb]"></span>
            </div>
            <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-1">Confirmation &bull; Reference {{ $enquiry['id'] }}</span>
            <h1 class="text-3xl font-bold text-black tracking-tight leading-tight">Quotation Request Received</h1>
            <p class="text-[14px] text-[#4f4c4a] mt-2 track-tight-14 font-normal">Our sales desk in Ahmedabad will review and provide wholesale rates shortly.</p>
        </div>

        <div class="p-8 sm:p-10 space-y-8">
            <!-- Client Details -->
            <div>
                <h3 class="text-[14px] font-bold text-black track-tight-14 border-b border-[#ebebeb] pb-2 mb-4">Contact Profile</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-[13px] text-[#221f1d] track-tight-14 font-normal">
                    <div>
                        <span class="text-[10px] text-[#4f4c4a] uppercase tracking-wider block font-bold">Customer</span>
                        <span class="font-bold text-black">{{ $enquiry['name'] }}</span>
                    </div>
                    <div>
                        <span class="text-[10px] text-[#4f4c4a] uppercase tracking-wider block font-bold">Submission Date</span>
                        <span class="font-medium">{{ $enquiry['created_at'] }}</span>
                    </div>
                    <div>
                        <span class="text-[10px] text-[#4f4c4a] uppercase tracking-wider block font-bold">Mobile</span>
                        <span class="font-medium">{{ $enquiry['phone'] }}</span>
                    </div>
                    <div>
                        <span class="text-[10px] text-[#4f4c4a] uppercase tracking-wider block font-bold">Location</span>
                        <span class="font-medium">{{ $enquiry['state'] }}</span>
                    </div>
                    <div class="sm:col-span-2">
                        <span class="text-[10px] text-[#4f4c4a] uppercase tracking-wider block font-bold">Email</span>
                        <span class="font-medium">{{ $enquiry['email'] }}</span>
                    </div>
                </div>
            </div>

            <!-- Items Table -->
            <div>
                <h3 class="text-[14px] font-bold text-black track-tight-14 border-b border-[#ebebeb] pb-2 mb-4">Selected Fittings</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-[13px]">
                        <thead class="text-[#333333] border-b border-[#cccccc] uppercase text-[10px] tracking-wider font-bold">
                            <tr>
                                <th class="py-2.5">Hardware Item</th>
                                <th class="py-2.5">Code</th>
                                <th class="py-2.5 text-center">Size</th>
                                <th class="py-2.5 text-right">MRP (₹)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($enquiry['items'] as $item)
                            <tr class="border-b border-[#ebebeb] last:border-0">
                                <td class="py-3 font-bold text-black">{{ $item['name'] }}</td>
                                <td class="py-3 text-[#4f4c4a] font-medium">{{ $item['code'] }}</td>
                                <td class="py-3 text-center text-[#4f4c4a] font-medium">{{ $item['size'] }}</td>
                                <td class="py-3 text-right font-bold text-black">₹{{ $item['mrp'] }} <span class="text-[10px] text-[#4f4c4a] font-normal">/ {{ $item['unit'] }}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Actions -->
            <div class="pt-4 flex flex-col sm:flex-row items-center gap-3">
                <button onclick="window.print()" class="w-full sm:w-1/2 h-11 rounded-full bg-[#ffffff] border border-[#cccccc] hover:bg-[#f2f4f5] text-black text-[13px] font-bold transition-shop shadow-sm">
                    Print Receipt
                </button>
                <a href="{{ route('products.all') }}" class="w-full sm:w-1/2 h-11 rounded-full bg-[#5433eb] text-white text-[13px] font-bold shadow-violet-submit hover:opacity-95 transition-shop flex items-center justify-center gap-2">
                    <span>Continue Discovery</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
