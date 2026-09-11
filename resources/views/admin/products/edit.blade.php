@extends('admin.layouts.app')

@section('title', 'Edit ' . $product['name'] . ' | Grewok Admin Control Panel')
@section('page_title', 'Edit Product: ' . $product['name'])
@section('page_subtitle', 'Update specifications, sizes, prices, images, and category assignments.')

@section('content')

<form action="{{ route('admin.products.update', $product['slug']) }}" method="POST" enctype="multipart/form-data" x-data="{
    name: '{{ addslashes($product['name']) }}',
    slug: '{{ $product['slug'] }}',
    generateSlug() {
        this.slug = this.name.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
    },
    features: {{ json_encode($product['features'] ?? []) }},
    addFeature() { this.features.push(''); },
    removeFeature(index) { this.features.splice(index, 1); },

    specs: [
        @foreach($product['tech_specs'] ?? [] as $k => $v)
        { key: '{{ addslashes($k) }}', val: '{{ addslashes($v) }}' },
        @endforeach
    ],
    addSpec() { this.specs.push({ key: '', val: '' }); },
    removeSpec(index) { this.specs.splice(index, 1); },

    sizes: {{ json_encode($product['sizes'] ?? []) }},
    addSize() { this.sizes.push({ code: 'GW-' + Math.floor(100 + Math.random() * 900), size: '', mrp: 0, unit: 'Set' }); },
    removeSize(index) { this.sizes.splice(index, 1); },

    finishes: ['Black Finish', 'Zinc Silver Finish', 'Rose Gold', 'Matt Black', 'Chrome', 'Iron Grey Finish', 'Tempered Glass + Iron Grey', 'Champagne Grey'],
    selectedFinishes: {{ json_encode($product['finishes'] ?? []) }},

    mainImagePreview: '{{ $product['image'] }}',
    previewImage(e) {
        let file = e.target.files[0];
        if (file) {
            this.mainImagePreview = URL.createObjectURL(file);
        }
    }
}" class="space-y-8 max-w-5xl">
    @csrf

    <!-- Form Section 1: Basic Information -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 sm:p-8 space-y-6 shadow-sm">
        <h3 class="font-extrabold text-base text-white border-b border-slate-800 pb-3 flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-brand-red"></span>
            <span>1. Basic Product Specifications</span>
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Product Name -->
            <div>
                <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Product Name *</label>
                <input type="text" name="name" x-model="name" required
                       class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none font-medium">
            </div>

            <!-- Slug -->
            <div>
                <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">URL Slug *</label>
                <input type="text" name="slug" x-model="slug" required
                       class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none font-medium">
            </div>

            <!-- Category -->
            <div>
                <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Category *</label>
                <select name="category_id" required class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none font-medium cursor-pointer">
                    <option value="">Select Category</option>
                    @foreach($categories as $catId => $cat)
                        <option value="{{ $catId }}" {{ ($product['category_id'] ?? '') === $catId ? 'selected' : '' }}>{{ $cat['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Subcategory -->
            <div>
                <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Subcategory / Line *</label>
                <input type="text" name="subcategory" value="{{ $product['subcategory'] ?? '' }}" required
                       class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none font-medium">
            </div>

            <!-- Tagline -->
            <div class="md:col-span-2">
                <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Tagline / Short Summary *</label>
                <input type="text" name="tagline" value="{{ $product['tagline'] ?? '' }}" required
                       class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none font-medium">
            </div>

            <!-- Warranty -->
            <div>
                <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Warranty Badge</label>
                <input type="text" name="warranty" value="{{ $product['warranty'] ?? 'Quality Certified' }}"
                       class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none font-medium">
            </div>

            <!-- Description -->
            <div class="md:col-span-2">
                <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Full Description *</label>
                <textarea name="description" rows="4" required
                          class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl p-4 text-xs text-white outline-none font-medium">{{ $product['description'] ?? '' }}</textarea>
            </div>
        </div>
    </div>

    <!-- Form Section 2: Product Media & Skeleton Preview -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 sm:p-8 space-y-6 shadow-sm">
        <h3 class="font-extrabold text-base text-white border-b border-slate-800 pb-3 flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-brand-red"></span>
            <span>2. Product Images & Gallery</span>
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
            
            <!-- Main Image Controls -->
            <div class="md:col-span-8 space-y-4">
                <div>
                    <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Replace Main Image</label>
                    <input type="file" name="image" @change="previewImage" accept="image/*"
                           class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl p-2.5 text-xs text-slate-300 file:mr-4 file:py-1.5 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-brand-red file:text-white hover:file:bg-brand-red-dark">
                </div>

                <div>
                    <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">OR Main Image Image URL</label>
                    <input type="text" name="image_url" x-model="mainImagePreview"
                           class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-3 px-4 text-xs text-white outline-none font-medium">
                </div>

                <div>
                    <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">Upload Additional Gallery Images</label>
                    <input type="file" name="gallery_files[]" multiple accept="image/*"
                           class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl p-2.5 text-xs text-slate-300 file:mr-4 file:py-1.5 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-slate-800 file:text-white">
                </div>

                <div>
                    <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-2">OR Additional Gallery Image URLs (One per line)</label>
                    <textarea name="gallery_urls" rows="2" placeholder="https://..."
                              class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl p-3 text-xs text-white outline-none font-medium">{{ implode("\n", array_slice($product['gallery'] ?? [], 1)) }}</textarea>
                </div>
            </div>

            <!-- Real-time Skeleton Preview Box -->
            <div class="md:col-span-4 space-y-2">
                <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400">Current Main Image Preview</label>
                <div class="aspect-square bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden relative flex items-center justify-center p-2">
                    <div class="w-full h-full relative" x-data="{ loaded: false }">
                        <div x-show="!loaded" class="absolute inset-0 skeleton-shimmer-dark"></div>
                        <img :src="mainImagePreview" @load="loaded = true" :class="loaded ? 'opacity-100' : 'opacity-0'" class="w-full h-full object-cover rounded-xl transition-opacity duration-300">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Form Section 3: Finishes & Key Features -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 sm:p-8 space-y-6 shadow-sm">
        <h3 class="font-extrabold text-base text-white border-b border-slate-800 pb-3 flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-brand-red"></span>
            <span>3. Available Finishes & Key Features</span>
        </h3>

        <!-- Finishes Selection -->
        <div>
            <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400 mb-3">Check Finishes Available for this Item</label>
            <div class="flex flex-wrap gap-3">
                <template x-for="f in finishes" :key="f">
                    <label class="inline-flex items-center gap-2 bg-slate-950 border border-slate-800 px-3.5 py-2 rounded-xl text-xs font-semibold text-slate-300 cursor-pointer hover:border-slate-700">
                        <input type="checkbox" name="finishes[]" :value="f" x-model="selectedFinishes" class="rounded border-slate-700 text-brand-red focus:ring-0">
                        <span x-text="f"></span>
                    </label>
                </template>
            </div>
        </div>

        <!-- Key Features Checklist Builder -->
        <div>
            <div class="flex items-center justify-between mb-3">
                <label class="block text-[10px] font-extrabold uppercase tracking-wider text-slate-400">Key Technical Advantages (Bullet points)</label>
                <button type="button" @click="addFeature()" class="text-xs font-bold text-brand-red hover:underline">+ Add Feature Bullet</button>
            </div>
            
            <div class="space-y-3">
                <template x-for="(feat, index) in features" :key="index">
                    <div class="flex items-center gap-3">
                        <span class="w-6 text-center text-xs text-slate-500 font-bold" x-text="(index + 1) + '.'"></span>
                        <input type="text" name="features[]" x-model="features[index]" placeholder="Feature line"
                               class="flex-grow bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-2.5 px-4 text-xs text-white outline-none font-medium">
                        <button type="button" @click="removeFeature(index)" class="p-2 text-slate-500 hover:text-red-400 rounded-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <!-- Form Section 4: Technical Specifications Table Builder -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 sm:p-8 space-y-6 shadow-sm">
        <div class="flex items-center justify-between border-b border-slate-800 pb-3">
            <h3 class="font-extrabold text-base text-white flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-brand-red"></span>
                <span>4. Technical Specifications Table</span>
            </h3>
            <button type="button" @click="addSpec()" class="text-xs font-bold text-brand-red hover:underline">+ Add Specification Row</button>
        </div>

        <div class="space-y-3">
            <template x-for="(spec, index) in specs" :key="index">
                <div class="grid grid-cols-12 gap-3 items-center">
                    <div class="col-span-5">
                        <input type="text" name="spec_keys[]" x-model="spec.key" placeholder="Specification Title"
                               class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-2.5 px-4 text-xs text-white outline-none font-medium">
                    </div>
                    <div class="col-span-6">
                        <input type="text" name="spec_values[]" x-model="spec.val" placeholder="Specification Value"
                               class="w-full bg-slate-950 border border-slate-800 focus:border-brand-red rounded-xl py-2.5 px-4 text-xs text-white outline-none font-medium">
                    </div>
                    <div class="col-span-1 flex justify-end">
                        <button type="button" @click="removeSpec(index)" class="p-2 text-slate-500 hover:text-red-400 rounded-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Form Section 5: Size & Pricing Matrix -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 sm:p-8 space-y-6 shadow-sm">
        <div class="flex items-center justify-between border-b border-slate-800 pb-3">
            <div>
                <h3 class="font-extrabold text-base text-white flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-brand-red"></span>
                    <span>5. Item Code, Size & Price Matrix *</span>
                </h3>
                <p class="text-xs text-slate-400 mt-0.5">Specify item codes, size options, and MRP values in INR.</p>
            </div>
            <button type="button" @click="addSize()" class="text-xs font-bold text-brand-red hover:underline">+ Add Size Option</button>
        </div>

        <div class="space-y-3">
            <template x-for="(sz, index) in sizes" :key="index">
                <div class="grid grid-cols-12 gap-3 items-center bg-slate-950 p-3 rounded-xl border border-slate-800">
                    <div class="col-span-3">
                        <label class="block text-[9px] uppercase font-bold text-slate-500 mb-1">Item Code</label>
                        <input type="text" name="size_codes[]" x-model="sz.code" placeholder="GTC 010" required
                               class="w-full bg-slate-900 border border-slate-800 focus:border-brand-red rounded-lg py-2 px-3 text-xs text-white outline-none font-mono font-bold">
                    </div>
                    <div class="col-span-4">
                        <label class="block text-[9px] uppercase font-bold text-slate-500 mb-1">Size / Dimension</label>
                        <input type="text" name="size_names[]" x-model="sz.size" placeholder="10 Inch (250mm)" required
                               class="w-full bg-slate-900 border border-slate-800 focus:border-brand-red rounded-lg py-2 px-3 text-xs text-white outline-none font-medium">
                    </div>
                    <div class="col-span-3">
                        <label class="block text-[9px] uppercase font-bold text-slate-500 mb-1">MRP (INR ₹)</label>
                        <input type="number" step="0.01" name="size_mrps[]" x-model="sz.mrp" placeholder="350" required
                               class="w-full bg-slate-900 border border-slate-800 focus:border-brand-red rounded-lg py-2 px-3 text-xs text-emerald-400 outline-none font-bold">
                    </div>
                    <div class="col-span-1">
                        <label class="block text-[9px] uppercase font-bold text-slate-500 mb-1">Unit</label>
                        <input type="text" name="size_units[]" x-model="sz.unit" placeholder="Set" required
                               class="w-full bg-slate-900 border border-slate-800 focus:border-brand-red rounded-lg py-2 px-2 text-xs text-white outline-none font-medium">
                    </div>
                    <div class="col-span-1 flex justify-end pt-4">
                        <button type="button" @click="removeSize(index)" class="p-2 text-slate-500 hover:text-red-400 rounded-lg">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex items-center justify-end gap-4 pt-4 border-t border-slate-800">
        <a href="{{ route('admin.products.index') }}" class="px-6 py-3 bg-slate-800 hover:bg-slate-700 text-slate-300 font-bold rounded-xl text-xs">Cancel</a>
        <button type="submit" class="px-8 py-3 bg-brand-red hover:bg-brand-red-dark text-white font-bold rounded-xl text-xs uppercase tracking-wider shadow-lg shadow-brand-red/25">
            Save Changes
        </button>
    </div>

</form>

@endsection
