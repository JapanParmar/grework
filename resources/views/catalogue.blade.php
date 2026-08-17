@extends('layouts.app')

@section('title', 'Download PDF Catalogue | Grewok – Fit For Forever')

@section('content')
<!-- Header Section -->
<section class="bg-brand-navy text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Product Catalogue Center</h1>
        <p class="text-slate-300 mt-2 text-sm max-w-xl mx-auto">Access the full catalog of Grewok hardware fittings, sizes, and pricing guides anytime.</p>
    </div>
</section>

<!-- Catalogue Content -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <!-- Digital Catalogue Card (lg:col-span-6) -->
            <div class="lg:col-span-6 bg-brand-light border border-slate-100 rounded-3xl p-8 lg:p-12 shadow-sm text-center flex flex-col justify-between h-full">
                <div>
                    <div class="w-16 h-16 bg-brand-navy/5 text-brand-navy flex items-center justify-center rounded-2xl mx-auto mb-6">
                        <!-- PDF Icon -->
                        <svg class="w-8 h-8 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    
                    <h2 class="text-2xl font-extrabold text-brand-navy mb-4">Grewok Complete Digital Catalogue</h2>
                    <p class="text-xs text-slate-500 leading-relaxed max-w-sm mx-auto mb-8">
                        Download the comprehensive PDF catalogue containing exact product images, descriptions, item codes, dimensions, price matrices, and warranty details.
                    </p>
                    
                    <div class="space-y-3 mb-10 text-left max-w-xs mx-auto text-xs font-semibold text-slate-600">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>File Size: ~18.4 MB (High-Res PDF)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Edition: 2026 / 2027 Latest Version</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Includes complete price matrices</span>
                        </div>
                    </div>
                </div>

                <a href="#" onclick="alert('Digital PDF Catalogue download initialized! (Demo Link)'); return false;" 
                   class="w-full flex items-center justify-center gap-2 bg-brand-navy hover:bg-brand-navy-dark text-white font-bold py-4 rounded-xl shadow-lg transition-brand text-xs uppercase tracking-wider">
                    <svg class="w-4 h-4 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    <span>Download Full Catalogue (PDF)</span>
                </a>
            </div>

            <!-- Printed Catalogue Request Form (lg:col-span-6) -->
            <div class="lg:col-span-6 bg-white border border-slate-100 rounded-3xl p-8 lg:p-12 shadow-sm h-full">
                <span class="text-xs uppercase font-extrabold tracking-widest text-brand-red">Direct Mail Program</span>
                <h2 class="text-2xl font-extrabold text-brand-navy mt-2 mb-4">Request Printed Catalogue</h2>
                <p class="text-xs text-slate-500 leading-relaxed mb-6">
                    Enter your dealership or corporate address below to receive our luxury embossed binder catalog containing physical raw finish metal swatches.
                </p>

                <!-- Demo Form -->
                <form action="#" method="POST" onsubmit="alert('Thank you! Your printed catalogue request has been received. Our team will verify and dispatch it shortly.'); this.reset(); return false;" class="space-y-4">
                    <div>
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Business Name / Individual Name</label>
                        <input type="text" required placeholder="e.g. Royal Kitchens & Interiors" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Mobile Number</label>
                            <input type="tel" required placeholder="e.g. +91 99999 88888" class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">State</label>
                            <select required class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand cursor-pointer">
                                <option value="">Select State</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Other">Other State</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Full Mailing Address (with Pincode)</label>
                        <textarea required rows="3" placeholder="Enter complete office/showroom shipping address..." class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand resize-none"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-brand-red hover:bg-brand-red-dark text-white font-bold py-3.5 rounded-xl shadow-lg shadow-brand-red/25 transition-brand text-xs uppercase tracking-wider">
                        Request Printed Copies
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
