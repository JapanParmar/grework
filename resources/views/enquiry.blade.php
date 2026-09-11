@extends('layouts.app')

@section('title', 'Request Official Quotation | Grewok — Fit For Forever')

@section('content')
<div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-24" 
     x-data="{
        serializeItemsForSubmit() {
            document.getElementById('hidden_items_input').value = JSON.stringify(this.items);
        }
     }">

    <!-- ── Header ── -->
    <div class="mb-10 text-center max-w-2xl mx-auto">
        <div class="flex items-center justify-center gap-2 text-[12px] text-[#4f4c4a] track-tight-12 mb-2 font-medium">
            <a href="{{ route('home') }}" class="hover:text-black transition-shop">Home</a>
            <span>&bull;</span>
            <span class="text-black font-bold">Official Quotation</span>
        </div>
        <h1 class="text-3xl sm:text-4xl font-bold text-black tracking-tight leading-tight mb-2">
            Request an Official Quotation
        </h1>
        <p class="text-[15px] text-[#4f4c4a] track-tight-14 font-normal">
            Submit your chosen hardware codes, sizes, and volumes for direct factory pricing.
        </p>
    </div>

    <!-- Empty State -->
    <div class="py-20 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card text-center max-w-lg mx-auto p-8" x-show="items.length === 0" x-cloak>
        <div class="w-16 h-16 bg-[#f2f4f5] border border-[#ebebeb] rounded-full flex items-center justify-center text-[#666666] mx-auto mb-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007z" />
            </svg>
        </div>
        <h2 class="text-[20px] font-bold text-black mb-2 track-tight-20">Your Quotation List is Empty</h2>
        <p class="text-[13px] text-[#4f4c4a] max-w-xs mx-auto leading-relaxed mb-6 track-tight-12 font-normal">
            Add products from our catalog to review dimensions and request bulk or dealership pricing.
        </p>
        <a href="{{ route('products.all') }}" class="h-11 px-6 rounded-full bg-black text-white text-[13px] font-bold hover:bg-[#332f2d] transition-shop inline-flex items-center justify-center shadow-sm">
            Explore Hardware Collections
        </a>
    </div>

    <!-- Loaded State: Two Column Split -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start" x-show="items.length > 0" x-cloak>
        
        <!-- Left: Selected Items List (lg:col-span-7) -->
        <div class="lg:col-span-7 space-y-4">
            <div class="flex items-center justify-between px-2 mb-2">
                <h3 class="text-[18px] font-bold text-black track-tight-20">Selected Specifications (<span x-text="itemsCount"></span>)</h3>
                <button @click="clearCart()" class="text-[12px] text-[#4f4c4a] hover:text-black underline transition-shop font-medium">Clear all</button>
            </div>

            <template x-for="(item, index) in items" :key="item.code">
                <div class="bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-4 flex items-center justify-between gap-4 hover-float transition-shop relative">
                    <div class="flex items-center gap-4 min-w-0">
                        <!-- 20px inner image radius -->
                        <div class="w-16 h-16 rounded-inner-shop bg-[#f2f4f5] border border-[#ebebeb] overflow-hidden flex-shrink-0 flex items-center justify-center">
                            <img :src="item.image" :alt="item.name" class="w-full h-full object-cover">
                        </div>

                        <div class="min-w-0 pr-6">
                            <h4 class="text-[15px] font-bold text-black track-tight-14 truncate" x-text="item.name"></h4>
                            <div class="flex items-center gap-2 mt-0.5 text-[11px] text-[#4f4c4a] font-medium">
                                <span class="font-bold text-black" x-text="item.code"></span>
                                <span>&bull;</span>
                                <span class="truncate" x-text="item.size"></span>
                            </div>
                            <div class="text-[13px] font-bold text-black mt-1" x-text="'MRP: ₹' + item.mrp + ' / ' + item.unit"></div>
                        </div>
                    </div>

                    <button @click="removeItem(item.code)" class="text-[#999999] hover:text-black p-2 transition-shop" title="Remove">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>
            </template>
        </div>

        <!-- Right: Submit Quotation Form (lg:col-span-5) -->
        <div class="lg:col-span-5 bg-[#ffffff] rounded-card-shop border border-[#ebebeb] shadow-shop-card p-8 sm:p-10">
            <span class="text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] block mb-1">Direct Sales Desk</span>
            <h3 class="text-2xl font-bold text-black track-tight-20 mb-6">Submit Details</h3>

            @if ($errors->any())
            <div class="bg-red-50 border border-red-200 p-4 rounded-[20px] mb-6">
                <ul class="list-disc pl-4 text-[12px] text-red-700 space-y-1 font-medium">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('enquiry.submit') }}" method="POST" @submit="serializeItemsForSubmit()" class="space-y-4">
                @csrf
                <input type="hidden" name="items" id="hidden_items_input" value="">

                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Full Name</label>
                    <input type="text" name="name" required value="{{ old('name') }}" placeholder="Your Name" 
                           class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Mobile</label>
                        <input type="tel" name="phone" required value="{{ old('phone') }}" placeholder="Mobile Number" 
                               class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">State</label>
                        <select name="state" required class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-4 text-[14px] text-black font-medium outline-none transition-shop cursor-pointer">
                            <option value="">Select Region</option>
                            <option value="Gujarat" {{ old('state') == 'Gujarat' ? 'selected' : '' }}>Gujarat</option>
                            <option value="Maharashtra" {{ old('state') == 'Maharashtra' ? 'selected' : '' }}>Maharashtra</option>
                            <option value="Chhattisgarh" {{ old('state') == 'Chhattisgarh' ? 'selected' : '' }}>Chhattisgarh</option>
                            <option value="Rajasthan" {{ old('state') == 'Rajasthan' ? 'selected' : '' }}>Rajasthan</option>
                            <option value="Madhya Pradesh" {{ old('state') == 'Madhya Pradesh' ? 'selected' : '' }}>Madhya Pradesh</option>
                            <option value="Karnataka" {{ old('state') == 'Karnataka' ? 'selected' : '' }}>Karnataka</option>
                            <option value="Telangana" {{ old('state') == 'Telangana' ? 'selected' : '' }}>Telangana</option>
                            <option value="Other" {{ old('state') == 'Other' ? 'selected' : '' }}>Other Region</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Email Address</label>
                    <input type="email" name="email" required value="{{ old('email') }}" placeholder="Email Address" 
                           class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-5 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop">
                </div>

                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Client Type</label>
                    <select name="enquiry_type" required class="w-full h-11 bg-[#f9fafb] rounded-full border border-[#d1d5db] focus:border-black focus:bg-white px-4 text-[14px] text-black font-medium outline-none transition-shop cursor-pointer">
                        <option value="Modular Kitchen Manufacturer">Modular Kitchen Manufacturer</option>
                        <option value="Furniture Showroom / Dealer">Furniture Showroom / Dealer</option>
                        <option value="Architect / Interior Designer">Architect / Interior Designer</option>
                        <option value="End Consumer (Residential)">End Consumer (Residential)</option>
                    </select>
                </div>

                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-[#4f4c4a] mb-1.5">Project Notes / Quantities (Optional)</label>
                    <textarea name="message" rows="2" placeholder="Mention approx quantities, preferred finishes..." 
                              class="w-full bg-[#f9fafb] rounded-[20px] border border-[#d1d5db] focus:border-black focus:bg-white p-4 text-[14px] text-black font-medium placeholder-[#666666] outline-none transition-shop resize-none">{{ old('message') }}</textarea>
                </div>

                <!-- Submit Button: Shop Violet with tinted shadow -->
                <button type="submit" class="w-full h-12 rounded-full bg-[#5433eb] text-white text-[14px] font-bold shadow-violet-submit hover:opacity-95 transition-shop mt-2">
                    Submit Quote Request &rarr;
                </button>
            </form>
        </div>

    </div>

</div>
@endsection
