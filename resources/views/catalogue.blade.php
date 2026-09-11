@extends('layouts.app')

@section('title', 'Download PDF Catalogue | Grewok — Fit For Forever')

@section('content')
<div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-24">

    <!-- ── Header ── -->
    <div class="mb-10 text-center max-w-2xl mx-auto">
        <div class="flex items-center justify-center gap-2 text-[12px] text-[#4f4c4a] track-tight-12 mb-2 font-medium">
            <a href="{{ route('home') }}" class="hover:text-black transition-shop">Home</a>
            <span>&bull;</span>
            <span class="text-black font-bold">Catalogue Center</span>
        </div>
        <h1 class="text-3xl sm:text-4xl font-bold text-black tracking-tight leading-tight mb-2">
            Product Catalogue Center
        </h1>
        <p class="text-[15px] text-[#4f4c4a] track-tight-14 font-normal">
            Access the complete architectural hardware specifications, dimension matrices, and pricing charts.
        </p>
    </div>

    <!-- ── Two Column Presentation ── -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
        
        <!-- Digital Catalogue Card -->
        <div class="lg:col-span-6 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 sm:p-12 flex flex-col justify-between">
            <div>
                <div class="w-14 h-14 rounded-full bg-[#f2f4f5] border border-[#ebebeb] flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-[#5433eb]" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </div>

                <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-1">Instant Digital Access</span>
                <h2 class="text-2xl font-bold text-black track-tight-20 mb-3">Complete Digital Catalogue</h2>
                <p class="text-[14px] text-[#4f4c4a] track-tight-14 leading-relaxed mb-6 font-normal">
                    High-resolution PDF featuring high-precision diagrams, installation clearances, item codes, finishes, and warranty guidelines.
                </p>

                <div class="space-y-3 mb-8 text-[13px] text-[#221f1d] track-tight-12 font-medium">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-[#5433eb]"></span>
                        <span>File Size: ~18.4 MB (High-Resolution Vector PDF)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-[#5433eb]"></span>
                        <span>Edition: 2026 / 2027 Latest Revision</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-[#5433eb]"></span>
                        <span>Includes complete item codes & price matrices</span>
                    </div>
                </div>
            </div>

            <!-- Download Button -->
            <a href="#" onclick="alert('Digital PDF Catalogue download initialized! (Demo Link)'); return false;" 
               class="w-full h-12 rounded-full bg-[#5433eb] text-white text-[14px] font-bold shadow-violet-submit hover:opacity-95 transition-shop flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                <span>Download Full Catalogue (PDF)</span>
            </a>
        </div>

        <!-- Printed Catalogue Request Form -->
        <div class="lg:col-span-6 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 sm:p-12 flex flex-col justify-between">
            <div>
                <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-1">Direct Mail Program</span>
                <h2 class="text-2xl font-bold text-black track-tight-20 mb-3">Request Hardbound Binder</h2>
                <p class="text-[14px] text-[#4f4c4a] track-tight-14 leading-relaxed mb-6 font-normal">
                    Enter your showroom or architectural office address to receive our luxury binder containing actual finish swatches.
                </p>

                <form action="#" method="POST" onsubmit="alert('Thank you! Your printed catalogue request has been received.'); this.reset(); return false;" class="space-y-4">
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Business / Architect Name</label>
                        <input type="text" required placeholder="e.g. Royal Modular Studio" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] track-tight-14 outline-none transition-shop">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Mobile Number</label>
                            <input type="tel" required placeholder="+91 99999 88888" class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] track-tight-14 outline-none transition-shop">
                        </div>

                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">State</label>
                            <select required class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-4 text-[14px] text-black font-medium track-tight-14 outline-none transition-shop cursor-pointer">
                                <option value="">Select Region</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Other">Other Region</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Shipping Address</label>
                        <textarea required rows="2" placeholder="Full address with pincode..." class="w-full bg-[#f9fafb] rounded-[20px] border border-[#d1d5db] focus:border-black focus:bg-white p-4 text-[14px] text-black font-medium placeholder-[#666666] track-tight-14 outline-none transition-shop resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full h-12 rounded-full bg-black text-white text-[14px] font-bold hover:bg-[#332f2d] transition-shop mt-2 shadow-sm">
                        Request Physical Copy
                    </button>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection
