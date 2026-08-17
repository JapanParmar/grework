@extends('layouts.app')

@section('title', 'Submit Quote Request | Grewok Hardware')

@section('content')
<!-- Header Section -->
<section class="bg-brand-navy text-white py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl font-extrabold tracking-tight">Request an Official Quotation</h1>
        <p class="text-slate-300 mt-2 text-sm max-w-xl mx-auto">Submit your chosen hardware codes, sizes, and quantities. Our Ahmedabad sales desk will respond with corporate prices.</p>
    </div>
</section>

<!-- Cart & Submission Form -->
<section class="py-20 bg-brand-light" x-data="{
    // Bind input items
    serializeItemsForSubmit() {
        document.getElementById('hidden_items_input').value = JSON.stringify(this.items);
    }
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Empty State -->
        <div class="py-20 bg-white rounded-3xl border border-slate-100 shadow-sm text-center max-w-xl mx-auto" x-show="items.length === 0" x-cloak>
            <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-slate-300 mx-auto mb-6">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
            </div>
            <h2 class="text-xl font-extrabold text-brand-navy mb-2">No Products Selected</h2>
            <p class="text-xs text-slate-500 max-w-xs mx-auto leading-relaxed mb-8">Please browse our categories and add specific hardware models to your enquiry list before requesting quotes.</p>
            <a href="{{ route('products.all') }}" class="bg-brand-red hover:bg-brand-red-dark text-white font-bold py-3.5 px-8 rounded-xl shadow-lg shadow-brand-red/25 transition-brand text-xs uppercase tracking-wider">Browse Product Catalogue</a>
        </div>

        <!-- Loaded State -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start" x-show="items.length > 0" x-cloak>
            
            <!-- List of Selected Products (lg:col-span-7) -->
            <div class="lg:col-span-7 space-y-6">
                <div class="flex items-center justify-between border-b border-slate-200 pb-4">
                    <h3 class="font-extrabold text-brand-navy text-lg uppercase tracking-wider">Review Selected Fittings</h3>
                    <button @click="clearCart()" class="text-xs text-brand-red font-bold hover:underline">Remove All</button>
                </div>

                <div class="space-y-4">
                    <template x-for="(item, index) in items" :key="item.code">
                        <div class="bg-white border border-slate-100 rounded-2xl p-5 shadow-sm flex items-center justify-between gap-6 hover:shadow-md transition-brand">
                            <div class="flex items-center gap-4 min-w-0">
                                <div class="w-16 h-16 bg-slate-50 border border-slate-200 rounded-xl overflow-hidden flex-shrink-0 flex items-center justify-center">
                                    <img :src="item.image" :alt="item.name" class="w-full h-full object-cover">
                                </div>
                                <div class="min-w-0">
                                    <h4 class="font-extrabold text-sm text-brand-navy truncate" x-text="item.name"></h4>
                                    <div class="flex items-center gap-2 mt-1 text-xs">
                                        <span class="bg-slate-100 text-slate-600 font-bold px-2 py-0.5 rounded text-[10px]" x-text="item.code"></span>
                                        <span class="text-slate-500 font-medium" x-text="'Size: ' + item.size"></span>
                                    </div>
                                    <div class="text-xs text-brand-red font-bold mt-2" x-text="'MRP: ₹' + item.mrp + ' / ' + item.unit"></div>
                                </div>
                            </div>
                            
                            <button @click="removeItem(item.code)" class="text-slate-300 hover:text-brand-red p-2 rounded-full hover:bg-slate-50 transition-brand">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Enquiry Submission Form (lg:col-span-5) -->
            <div class="lg:col-span-5 bg-white border border-slate-100 rounded-3xl p-8 lg:p-10 shadow-sm">
                <span class="text-xs uppercase font-extrabold tracking-widest text-brand-red">Contact Sales Desk</span>
                <h3 class="font-extrabold text-brand-navy text-xl mt-1 mb-6">Complete Quote Request</h3>
                
                @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-l-brand-red p-4 rounded-lg mb-6">
                    <ul class="list-disc pl-4 text-xs text-brand-red space-y-1 font-semibold">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('enquiry.submit') }}" method="POST" @submit="serializeItemsForSubmit()" class="space-y-4">
                    @csrf
                    <!-- Hidden serialised cart input -->
                    <input type="hidden" name="items" id="hidden_items_input" value="">

                    <div>
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Your Full Name</label>
                        <input type="text" name="name" required value="{{ old('name') }}" placeholder="Enter name" 
                               class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Mobile Number</label>
                            <input type="tel" name="phone" required value="{{ old('phone') }}" placeholder="10-digit mobile" 
                                   class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">State Location</label>
                            <select name="state" required class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand cursor-pointer">
                                <option value="">Select State</option>
                                <option value="Gujarat" {{ old('state') == 'Gujarat' ? 'selected' : '' }}>Gujarat</option>
                                <option value="Maharashtra" {{ old('state') == 'Maharashtra' ? 'selected' : '' }}>Maharashtra</option>
                                <option value="Chhattisgarh" {{ old('state') == 'Chhattisgarh' ? 'selected' : '' }}>Chhattisgarh</option>
                                <option value="Rajasthan" {{ old('state') == 'Rajasthan' ? 'selected' : '' }}>Rajasthan</option>
                                <option value="Madhya Pradesh" {{ old('state') == 'Madhya Pradesh' ? 'selected' : '' }}>Madhya Pradesh</option>
                                <option value="Karnataka" {{ old('state') == 'Karnataka' ? 'selected' : '' }}>Karnataka</option>
                                <option value="Telangana" {{ old('state') == 'Telangana' ? 'selected' : '' }}>Telangana</option>
                                <option value="Other" {{ old('state') == 'Other' ? 'selected' : '' }}>Other State</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Email Address</label>
                        <input type="email" name="email" required value="{{ old('email') }}" placeholder="e.g. buyer@showroom.com" 
                               class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand">
                    </div>

                    <div>
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Inquiry Type</label>
                        <select name="enquiry_type" required class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand cursor-pointer">
                            <option value="Modular Kitchen Manufacturer" {{ old('enquiry_type') == 'Modular Kitchen Manufacturer' ? 'selected' : '' }}>Modular Kitchen Manufacturer</option>
                            <option value="Furniture Showroom / Dealer" {{ old('enquiry_type') == 'Furniture Showroom / Dealer' ? 'selected' : '' }}>Furniture Showroom / Dealer</option>
                            <option value="Architect / Interior Designer" {{ old('enquiry_type') == 'Architect / Interior Designer' ? 'selected' : '' }}>Architect / Interior Designer</option>
                            <option value="End Consumer (Residential)" {{ old('enquiry_type') == 'End Consumer (Residential)' ? 'selected' : '' }}>End Consumer (Residential)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Additional Requirements (Optional)</label>
                        <textarea name="message" rows="3" placeholder="Mention volume requirements, project delivery timelines, custom color adjustments..." 
                                  class="w-full bg-slate-50 border border-slate-200 focus:border-brand-navy rounded-xl py-3 px-4 text-xs font-semibold outline-none transition-brand resize-none">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="w-full bg-brand-red hover:bg-brand-red-dark text-white font-bold py-4 rounded-xl shadow-lg shadow-brand-red/25 transition-brand text-xs uppercase tracking-wider">
                        Submit Quote Request &rarr;
                    </button>
                </form>
            </div>

        </div>

    </div>
</section>
@endsection
