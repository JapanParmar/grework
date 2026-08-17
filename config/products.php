<?php

return [
    'categories' => [
        'drawer-channel' => [
            'id' => 'drawer-channel',
            'name' => 'Drawer Channel Solution',
            'description' => 'Ultra-smooth, heavy-duty drawer slides and slim double-wall boxes engineered for silent and effortless movement.',
            'image' => '/images/products/drawer-channel.png',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path></svg>',
            'subcategories' => [
                'Platinum Channel',
                'Gold Channel',
                'Undermount Quadro Channel',
                'Slim Box System'
            ]
        ],
        'modern-kitchen' => [
            'id' => 'modern-kitchen',
            'name' => 'Modern Kitchen Solution',
            'description' => 'Smart storage organizers, pantry systems, elevated pull-downs, magic corners, and wicker baskets designed to optimize modern kitchens.',
            'image' => '/images/hero-kitchen.png',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>',
            'subcategories' => [
                'Pull Out Systems',
                'Corner Systems',
                'Pantry Units',
                'Kitchen Organizers',
                'Kitchen Accessories'
            ]
        ],
        'auto-hinges' => [
            'id' => 'auto-hinges',
            'name' => 'Auto Hinges Solution',
            'description' => 'High-performance hydraulic hinges featuring advanced 2D & 3D adjustments and whisper-quiet soft-close technology.',
            'image' => '/images/products/drawer-channel.png',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4-4m-4 4l4 4"></path></svg>',
            'subcategories' => [
                '2D Hydraulic Hinges',
                '3D Hydraulic Hinges'
            ]
        ],
        'wardrobe-solution' => [
            'id' => 'wardrobe-solution',
            'name' => 'Wardrobe Solution',
            'description' => 'Luxury wardrobe pull-outs, jewellery trays, rotation shoe racks, led mirrors, leather baskets, and ironing boards.',
            'image' => '/images/products/wardrobe-organizer.png',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7H4M20 12H4M20 17H4"></path></svg>',
            'subcategories' => [
                'Wardrobe Organizers',
                'Trouser Racks',
                'Shoe & Storage Systems',
                'Wardrobe Utilities'
            ]
        ],
        'hydraulic-folding' => [
            'id' => 'hydraulic-folding',
            'name' => 'Hydraulic Folding Solution',
            'description' => 'Pneumatic gas pumps, bed lift-up fittings, bi-fold doors, and folding brackets for smart spaces.',
            'image' => '/images/hero-kitchen.png',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 11l5-5 5 5M7 17l5-5 5 5"></path></svg>',
            'subcategories' => [
                'Gas Pumps',
                'Folding & Bed Fittings'
            ]
        ],
        'locking-solution' => [
            'id' => 'locking-solution',
            'name' => 'Locking Solution',
            'description' => 'Secure and durable drawer and cupboard locks featuring computerized brass dimple keys.',
            'image' => '/images/products/drawer-channel.png',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>',
            'subcategories' => [
                'Drawer & Cabinet Locks'
            ]
        ],
        'wardrobe-fitting' => [
            'id' => 'wardrobe-fitting',
            'name' => 'Wardrobe Fitting Solution',
            'description' => 'Sliding door slim tracks, heavy-duty soft-close runners, and OPK systems for modern wardrobes.',
            'image' => '/images/products/wardrobe-organizer.png',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V5z"></path></svg>',
            'subcategories' => [
                'Sliding Door Fittings'
            ]
        ]
    ],
    
    'products' => [
        // 1. DRAWER CHANNEL SOLUTION
        'platinum-channel' => [
            'id' => 'platinum-channel',
            'category_id' => 'drawer-channel',
            'subcategory' => 'Platinum Channel',
            'name' => 'Platinum Telescopic Channel (10" - 22")',
            'tagline' => 'Heavy-Duty Ball Bearing Telescopic Slide with 10 Years Warranty',
            'slug' => 'platinum-telescopic-channel',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'Grewok Platinum Telescopic Channels represent the peak of drawer sliding precision. Outfitted with heavy grey plates, big end rubber damping buffers, and high-purity virgin accessories, they provide flawless silent operation under loads up to 45 kg.',
            'features' => [
                '10 Years Replacement Warranty',
                'Weight capacity: 45 kg',
                'Weight density: 72 gm ± 2 per inch',
                'Triple hardened ball bearing system (3 BB)',
                'Available in Premium Black & Zinc finishes',
                'Virgin materials for durability'
            ],
            'finishes' => ['Black Finish', 'Zinc Silver Finish'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Slide Weight' => '72 gm ± 2 / Inch',
                'Load Capacity' => '45 kg',
                'Ball Bearing Count' => '3 Bearings',
                'Plate Thickness' => 'Heavy Grey Plate',
                'Buffer Rubber' => 'Big End Rubber Buffer',
                'Standards Passed' => '100% Virgin Grade Accessories'
            ],
            'sizes' => [
                ['code' => 'GTC 010', 'size' => '10" (250mm)', 'mrp' => 280, 'unit' => 'Set'],
                ['code' => 'GTC 012', 'size' => '12" (300mm)', 'mrp' => 336, 'unit' => 'Set'],
                ['code' => 'GTC 014', 'size' => '14" (350mm)', 'mrp' => 392, 'unit' => 'Set'],
                ['code' => 'GTC 016', 'size' => '16" (400mm)', 'mrp' => 448, 'unit' => 'Set'],
                ['code' => 'GTC 018', 'size' => '18" (450mm)', 'mrp' => 504, 'unit' => 'Set'],
                ['code' => 'GTC 020', 'size' => '20" (500mm)', 'mrp' => 560, 'unit' => 'Set'],
                ['code' => 'GTC 022', 'size' => '22" (550mm)', 'mrp' => 616, 'unit' => 'Set'],
            ]
        ],
        'gold-channel' => [
            'id' => 'gold-channel',
            'category_id' => 'drawer-channel',
            'subcategory' => 'Gold Channel',
            'name' => 'Gold Telescopic Channel (8" - 24")',
            'tagline' => 'High-Performance Standard Telescopic Slides',
            'slug' => 'gold-telescopic-channel',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'The Grewok Gold Channel line delivers solid sliding metrics. Formulated for everyday cabinet and residential drawers, it contains double ball bearings and anti-rebound rubber buffers.',
            'features' => [
                '7 Years Replacement Warranty',
                'Weight capacity: 35 kg',
                'Weight density: 55 gm ± 2 per inch',
                'Double ball bearing mechanics (2 BB)',
                'Anti-rebound big end rubber',
                'Tested electroplated corrosion protection'
            ],
            'finishes' => ['Black Finish', 'Zinc Silver Finish'],
            'warranty' => '7 Years Warranty',
            'tech_specs' => [
                'Slide Weight' => '55 gm ± 2 / Inch',
                'Load Capacity' => '35 kg',
                'Ball Bearing Count' => '2 Bearings',
                'Plate Thickness' => 'Heavy Grey Plate',
                'Buffer Rubber' => 'Big End Rubber Buffer',
                'Sourcing Standards' => 'Virgin Sourced Parts'
            ],
            'sizes' => [
                ['code' => 'GT 08', 'size' => '8" (200mm)', 'mrp' => 280, 'unit' => 'Set'],
                ['code' => 'GT 010', 'size' => '10" (250mm)', 'mrp' => 350, 'unit' => 'Set'],
                ['code' => 'GT 012', 'size' => '12" (300mm)', 'mrp' => 420, 'unit' => 'Set'],
                ['code' => 'GT 014', 'size' => '14" (350mm)', 'mrp' => 490, 'unit' => 'Set'],
                ['code' => 'GT 016', 'size' => '16" (400mm)', 'mrp' => 560, 'unit' => 'Set'],
                ['code' => 'GT 018', 'size' => '18" (450mm)', 'mrp' => 630, 'unit' => 'Set'],
                ['code' => 'GT 020', 'size' => '20" (500mm)', 'mrp' => 700, 'unit' => 'Set'],
                ['code' => 'GT 022', 'size' => '22" (550mm)', 'mrp' => 770, 'unit' => 'Set'],
                ['code' => 'GT 024', 'size' => '24" (600mm)', 'mrp' => 840, 'unit' => 'Set'],
            ]
        ],
        'undermount-quadro-channel' => [
            'id' => 'undermount-quadro-channel',
            'category_id' => 'drawer-channel',
            'subcategory' => 'Undermount Quadro Channel',
            'name' => 'Undermount Quadro Channel with Soft Close',
            'tagline' => 'Silent Synchronized Concealed Slides',
            'slug' => 'undermount-quadro-channel',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'Grewok Undermount Quadro systems provide clean drawer edges by concealing mechanical hardware underneath the drawer box. Integrating 3D alignment locks, a fluid brass core hydraulic shock absorber, and double-synchronized glide rails.',
            'features' => [
                'Whisper-quiet silent system with synchronized motion',
                'Full extension with hydraulic soft-closing',
                'Integrated tool-free 3D front adjustment',
                'Load capacity up to 40 kg',
                'Rust-proof galvanized structure'
            ],
            'finishes' => ['Galvanized Zinc Finish'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Material Thickness' => '1.8mm x 1.5mm x 1.2mm Heavy Gauge',
                'Load Capacity' => 'Up to 40 kg',
                'Alignment System' => '3D Adjustment Mechanism',
                'Core Tech' => 'Heavy Brass Damping Core',
                'Slide Type' => 'Full Extension Soft-Close'
            ],
            'sizes' => [
                ['code' => 'GQ 012', 'size' => '12" (300mm)', 'mrp' => 2060, 'unit' => 'Set'],
                ['code' => 'GQ 014', 'size' => '14" (350mm)', 'mrp' => 2175, 'unit' => 'Set'],
                ['code' => 'GQ 016', 'size' => '16" (400mm)', 'mrp' => 2260, 'unit' => 'Set'],
                ['code' => 'GQ 018', 'size' => '18" (450mm)', 'mrp' => 2370, 'unit' => 'Set'],
                ['code' => 'GQ 020', 'size' => '20" (500mm)', 'mrp' => 2480, 'unit' => 'Set'],
                ['code' => 'GQ 022', 'size' => '22" (550mm)', 'mrp' => 2572, 'unit' => 'Set'],
            ]
        ],
        'slim-box-system-4in' => [
            'id' => 'slim-box-system-4in',
            'category_id' => 'drawer-channel',
            'subcategory' => 'Slim Box System',
            'name' => 'Slim Box System 4 Inch (84mm)',
            'tagline' => 'Minimalist Double-Wall Metal Drawer Side',
            'slug' => 'slim-box-system-4in',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'The Grewok 4-inch Slim Box System features ultra-thin 13mm side walls to interpret minimalist light luxury. Equipped with synchronized soft-closing slide guides and 50 kg loaded life-cycle mechanisms.',
            'features' => [
                'Quick installation and dismantle design',
                'Fully smooth sliding with improved synchronisation',
                'Full extension with soft closing system',
                'Slim double-wall profile in Grey Finish',
                '50 kg dynamic load capacity'
            ],
            'finishes' => ['Iron Grey Powder Coat'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Wall Height' => '84mm (4 Inch)',
                'Load Capacity' => '50 kg Dynamic Load',
                'Gliding Style' => 'Synchronized Soft-Close',
                'Side Profile' => '13mm Ultra-thin Side walls',
                'Mount Style' => 'Easy Clip-on Click Installation'
            ],
            'sizes' => [
                ['code' => 'GWST-2530 (300)', 'size' => '300 MM Length', 'mrp' => 3558, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (350)', 'size' => '350 MM Length', 'mrp' => 3654, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (400)', 'size' => '400 MM Length', 'mrp' => 3717, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (450)', 'size' => '450 MM Length', 'mrp' => 3780, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (500)', 'size' => '500 MM Length', 'mrp' => 3843, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (550)', 'size' => '550 MM Length', 'mrp' => 4032, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (600)', 'size' => '600 MM Length', 'mrp' => 4221, 'unit' => 'Set'],
            ]
        ],
        'slim-box-system-6in' => [
            'id' => 'slim-box-system-6in',
            'category_id' => 'drawer-channel',
            'subcategory' => 'Slim Box System',
            'name' => 'Slim Box System 6 Inch (116mm)',
            'tagline' => 'Luxury Double-Wall Mid Height Drawer Sides',
            'slug' => 'slim-box-system-6in',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'The 6-inch Slim Box System features an elevated 116mm height, ideal for modular kitchen grocery drawers. Integrates non-slip interior mats and quiet synchronization.',
            'features' => [
                'Tool-free cabinet front detachment',
                'Fully smooth silent synchronization',
                'Double-wall grey side profiles',
                'Non-slip interior matting support',
                '50 kg load capacity'
            ],
            'finishes' => ['Iron Grey Powder Coat'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Wall Height' => '116mm (6 Inch)',
                'Load Rating' => '50 kg Dynamic Load',
                'Closing Damper' => 'Silicone Hydraulic Soft-Close',
                'Slats design' => 'Minimalist clean-edge luxury'
            ],
            'sizes' => [
                ['code' => 'GWST-2530 (300)', 'size' => '300 MM Length', 'mrp' => 4218, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (350)', 'size' => '350 MM Length', 'mrp' => 4284, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (400)', 'size' => '400 MM Length', 'mrp' => 4347, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (450)', 'size' => '450 MM Length', 'mrp' => 4410, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (500)', 'size' => '500 MM Length', 'mrp' => 4473, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (550)', 'size' => '550 MM Length', 'mrp' => 4662, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (600)', 'size' => '600 MM Length', 'mrp' => 4851, 'unit' => 'Set'],
            ]
        ],
        'slim-box-system-8in' => [
            'id' => 'slim-box-system-8in',
            'category_id' => 'drawer-channel',
            'subcategory' => 'Slim Box System',
            'name' => 'Slim Box System 8 Inch (167mm)',
            'tagline' => 'High-Capacity Deep Pan Modular Drawer Box',
            'slug' => 'slim-box-system-8in',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'The deep 8-inch system (167mm side height) is engineered to organize heavy pots and kitchen canisters. Provides full extension access and non-slip mats.',
            'features' => [
                'Full extension slides for complete visibility',
                '50 kg loaded cycle rating',
                'Double-wall steel construction',
                'Smooth & silent motion technology',
                'Perfect for tall storage'
            ],
            'finishes' => ['Iron Grey Powder Coat'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Wall Height' => '167mm (8 Inch)',
                'Load Limit' => '50 kg Dynamic Load',
                'Extension Type' => 'Full Extension Soft-Close',
                'Profile Thickness' => '13mm Slim Panel'
            ],
            'sizes' => [
                ['code' => 'GWST-2530 (300)', 'size' => '300 MM Length', 'mrp' => 4848, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (350)', 'size' => '350 MM Length', 'mrp' => 4914, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (400)', 'size' => '400 MM Length', 'mrp' => 4977, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (450)', 'size' => '450 MM Length', 'mrp' => 5040, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (500)', 'size' => '500 MM Length', 'mrp' => 5103, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (550)', 'size' => '550 MM Length', 'mrp' => 5292, 'unit' => 'Set'],
                ['code' => 'GWST-2530 (600)', 'size' => '600 MM Length', 'mrp' => 5481, 'unit' => 'Set'],
            ]
        ],

        // 2. MODERN KITCHEN SOLUTION
        'glass-pullout-2d' => [
            'id' => 'glass-pullout-2d',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Pull Out Systems',
            'name' => '2 Shelf Glass Pull Out',
            'tagline' => 'Tempered Glass Border Cabinet Pullout',
            'slug' => 'glass-pullout-2d',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'A luxury 2-shelf kitchen pullout featuring thick tempered glass borders and an iron grey base. Mountable on either left or right sides on soft-closing runner guides.',
            'features' => [
                'Taffan (tempered) glass side panels',
                'Universal pullout: left or right side mounted frame',
                'DIY Installation friendly structure',
                'Quiet, fluid-damped sliding rails',
                'Optimal for bottles and containers'
            ],
            'finishes' => ['Tempered Glass + Iron Grey'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Cabinet Widths' => '200mm / 250mm / 300mm',
                'Border Material' => 'Tempered Glass',
                'Mount' => 'Universal Side Mounted Frame',
                'Damping' => 'Fluid Damped Soft-Close'
            ],
            'sizes' => [
                ['code' => 'GK A-209', 'size' => '200 MM Width', 'mrp' => 8064, 'unit' => 'Set'],
                ['code' => 'GK A-210', 'size' => '250 MM Width', 'mrp' => 8512, 'unit' => 'Set'],
                ['code' => 'GK A-211', 'size' => '300 MM Width', 'mrp' => 8960, 'unit' => 'Set'],
            ]
        ],
        'glass-pullout-3d' => [
            'id' => 'glass-pullout-3d',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Pull Out Systems',
            'name' => '3 Shelf Glass Pull Out',
            'tagline' => 'High-Capacity Overhead/Under-counter Organizer',
            'slug' => 'glass-pullout-3d',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'High capacity 3-tier larder pullout system with tempered glass side aesthetics, providing maximum spice jar organization.',
            'features' => [
                '3 full shelves of storage space',
                'Tempered safety glass border trim',
                'Universal frame (left/right mounting)',
                'Durable soft-close sliding action'
            ],
            'finishes' => ['Tempered Glass + Iron Grey'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Cabinet Widths' => '200mm / 250mm / 300mm',
                'Baskets' => '3 Baskets with solid base',
                'Runners' => 'Soft-close synchronized'
            ],
            'sizes' => [
                ['code' => 'GK A-212', 'size' => '200 MM Width', 'mrp' => 9632, 'unit' => 'Set'],
                ['code' => 'GK A-213', 'size' => '250 MM Width', 'mrp' => 10080, 'unit' => 'Set'],
                ['code' => 'GK A-214', 'size' => '300 MM Width', 'mrp' => 10528, 'unit' => 'Set'],
            ]
        ],
        'gray-pullout-2d' => [
            'id' => 'gray-pullout-2d',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Pull Out Systems',
            'name' => '2 Shelf Gray Pull Out',
            'tagline' => 'Sleek Iron Grey Solid Basket Pullout',
            'slug' => 'gray-pullout-2d',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Modern 2-shelf solid metal basket pullout finished in textured Slate Grey. High load capacities with smooth, silent glide guides.',
            'features' => [
                'Universal left or right mounting frame',
                'Solid metal baskets in Grey Finish',
                'DIY friendly cabinet attachment',
                'Soft close self-closing slides'
            ],
            'finishes' => ['Iron Grey Finish'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Cabinet Widths' => '200mm / 250mm / 300mm',
                'Tray Style' => 'Solid Steel Plate',
                'Glide Tech' => 'Integrated Soft-Close'
            ],
            'sizes' => [
                ['code' => 'GKA-200', 'size' => '200 MM Width', 'mrp' => 7616, 'unit' => 'Set'],
                ['code' => 'GKA-201', 'size' => '250 MM Width', 'mrp' => 8064, 'unit' => 'Set'],
                ['code' => 'GKA-202', 'size' => '300 MM Width', 'mrp' => 8512, 'unit' => 'Set'],
            ]
        ],
        'gray-pullout-3d' => [
            'id' => 'gray-pullout-3d',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Pull Out Systems',
            'name' => '3 Shelf Gray Pull Out',
            'tagline' => '3-Tier Solid Grey Basket Pullout Organizer',
            'slug' => 'gray-pullout-3d',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'A 3-tier pull-out organizer in Slate Grey, built for space efficiency in compact cabinet layouts.',
            'features' => [
                '3 solid shelf storage tiers',
                'Textured anti-scratch grey metal finish',
                'Dual soft close side rails',
                'Universal fit'
            ],
            'finishes' => ['Iron Grey Finish'],
            'warranty' => '5 Years Warranty',
            'sizes' => [
                ['code' => 'GKA-203', 'size' => '200 MM Width', 'mrp' => 8960, 'unit' => 'Set'],
                ['code' => 'GKA-204', 'size' => '250 MM Width', 'mrp' => 9400, 'unit' => 'Set'],
                ['code' => 'GKA-205', 'size' => '300 MM Width', 'mrp' => 9856, 'unit' => 'Set'],
            ]
        ],
        'champagne-pullout' => [
            'id' => 'champagne-pullout',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Pull Out Systems',
            'name' => 'Champagne Grey Pull Out',
            'tagline' => 'Luxury Warm Champagne Finish 2-Shelf Pullout',
            'slug' => 'champagne-grey-pull-out',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'A top-tier luxury 2-shelf kitchen pullout in Grewok\'s warm Champagne Grey finish. Offers unmatched blind-corner extension, smooth gliding rails, and anti-slip matting.',
            'features' => [
                'Maximizes narrow kitchen blind corners',
                'Elegant powder-coated warm champagne finish',
                'Heavy-duty slide rail pushes and pulls smoothly',
                'Includes premium anti-slip tray liners'
            ],
            'finishes' => ['Champagne Grey'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Cabinet Widths' => '200mm / 250mm / 300mm',
                'Basket Style' => 'Champagne double solid tray'
            ],
            'sizes' => [
                ['code' => 'GKA-206', 'size' => '200 MM Width', 'mrp' => 13688, 'unit' => 'Set'],
                ['code' => 'GKA-207', 'size' => '250 MM Width', 'mrp' => 14635, 'unit' => 'Set'],
                ['code' => 'GKA-208', 'size' => '300 MM Width', 'mrp' => 15576, 'unit' => 'Set'],
            ]
        ],
        'grey-swing-corner' => [
            'id' => 'grey-swing-corner',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Corner Systems',
            'name' => 'Grey Swing Corner System',
            'tagline' => 'Blind Corner Swing-out Trays in Solid Grey',
            'slug' => 'grey-swing-corner',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'The Grewok Swing Corner swings completely out of the cabinet door to bring stored items within reach. Fits 450mm cabinet doors, with a 10 kg capacity per tray.',
            'features' => [
                'Soft close mechanism built-in',
                'Weight capacity: 10 kg per tray (20 kg total)',
                'Designed for blind corner cabinets (door min 450mm)',
                'Available in Left-open and Right-open options',
                'Non-slip solid grey base'
            ],
            'finishes' => ['Solid Grey Base'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Tray Capacity' => '10 kg / Tray',
                'Door Size Requirement' => '450 mm Door',
                'Installation Depth' => 'Min 500 mm inside'
            ],
            'sizes' => [
                ['code' => 'GKA-215 (Left)', 'size' => 'Left Open (Grey)', 'mrp' => 17500, 'unit' => 'Set'],
                ['code' => 'GKA-216 (Right)', 'size' => 'Right Open (Grey)', 'mrp' => 17500, 'unit' => 'Set'],
            ]
        ],
        'chrome-swing-corner' => [
            'id' => 'chrome-swing-corner',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Corner Systems',
            'name' => 'Chrome Swing Corner System',
            'tagline' => 'Elegant Polished Chrome Wire Swing Corner Trays',
            'slug' => 'chrome-swing-corner',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Features high-density polished chrome wire trays that swing out individually. Equipped with integrated soft-close dampers.',
            'features' => [
                'Double electroplated polished chrome wires',
                'Soft Close Left & Right options',
                '10 kg capacity per tray',
                'Double-axis rotation trajectory'
            ],
            'finishes' => ['Polished Chrome'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GKA-217 (Left)', 'size' => 'Left Open (Chrome)', 'mrp' => 16500, 'unit' => 'Set'],
                ['code' => 'GKA-218 (Right)', 'size' => 'Right Open (Chrome)', 'mrp' => 16500, 'unit' => 'Set'],
            ]
        ],
        'champagne-swing-corner' => [
            'id' => 'champagne-swing-corner',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Corner Systems',
            'name' => 'Champagne Grey Swing Corner',
            'tagline' => 'Luxury Double-Axis Rotation Swing Corner',
            'slug' => 'champagne-swing-corner',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Grewok Swing Corner Shearer Style uses a precise mechanical double-axis design for balanced rotational motion. Crafted with warm champagne side plates.',
            'features' => [
                'Innovative double-axis motion trajectory',
                'Elegant champagne base and side guards',
                'Whisper-quiet soft closing dampers',
                '10 kg load rating per tray'
            ],
            'finishes' => ['Champagne Gold Grey'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GKA-219 (Left)', 'size' => 'Left Open (Champagne)', 'mrp' => 28650, 'unit' => 'Set'],
                ['code' => 'GKA-220 (Right)', 'size' => 'Right Open (Champagne)', 'mrp' => 28650, 'unit' => 'Set'],
            ]
        ],
        'glass-magic-corner' => [
            'id' => 'glass-magic-corner',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Corner Systems',
            'name' => 'Glass Magic Corner',
            'tagline' => 'Tempered Glass 4-Basket Slide Corner System',
            'slug' => 'glass-magic-corner',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'The Grewok Glass Magic Corner utilizes a split-slide track design. Opening the door pulls the front glass-paneled baskets out, while drawing the rear baskets to the front. Perfect for dead corners.',
            'features' => [
                'Universal left or right installation',
                '4 solid-base baskets with premium tempered glass sides',
                'Loading capacity: 24 kg',
                'Soft close self-closing slides',
                'Fits 450mm door cabinet openings'
            ],
            'finishes' => ['Tempered Glass + Solid Base'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Dimensions' => '640mm W x 480mm D x 600mm H',
                'Load Capacity' => '24 kg',
                'Min. Cabinet Space' => 'Depth 515mm, Width 1050mm, Height 600mm',
                'Basket Count' => '4 Baskets'
            ],
            'sizes' => [
                ['code' => 'GKA-221', 'size' => '640 x 480 x 600 MM', 'mrp' => 32550, 'unit' => 'Set'],
            ]
        ],
        'gray-magic-corner' => [
            'id' => 'gray-magic-corner',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Corner Systems',
            'name' => 'Gray Magic Corner',
            'tagline' => 'Heavy Duty Gray Solid 4-Basket Magic Corner',
            'slug' => 'gray-magic-corner',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'An ultra-robust 4-basket blind corner pull-out finished in Slate Grey. Heavy weight capacity of 28 kg and smooth soft closing.',
            'features' => [
                'Universal Left / Right installation frame',
                'Solid metal baskets in Slate Grey',
                'Loading capacity: 28 kg',
                'Soft close hydraulic dampers',
                'Ideal for pots, pans, and dry goods'
            ],
            'finishes' => ['Solid Grey Base'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Dimensions' => '640mm W x 480mm D x 600mm H',
                'Load Capacity' => '28 kg',
                'Min. Cabinet Space' => 'Depth 515mm, Width 1050mm, Height 600mm'
            ],
            'sizes' => [
                ['code' => 'GKA-222', 'size' => '640 x 480 x 600 MM', 'mrp' => 27000, 'unit' => 'Set'],
            ]
        ],
        'champagne-magic-corner' => [
            'id' => 'champagne-magic-corner',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Corner Systems',
            'name' => 'Champagne Grey Magic Corner',
            'tagline' => 'Luxury Champagne Finish Dead Corner Slides',
            'slug' => 'champagne-magic-corner',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'The ultimate blind corner larder. Grewok Champagne Grey Magic Corner offers smooth, silent slide actions and high-end aesthetic values.',
            'features' => [
                'Split slide design pulls deep items forward',
                'Luxury champagne gold anodized finish',
                'Quiet split slider mechanisms',
                'Soft close self-closing dampers'
            ],
            'finishes' => ['Champagne Grey Gold'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Dimensions' => '640mm W x 480mm D x 600mm H',
                'Min. Cabinet Space' => 'Depth 515mm, Width 1050mm, Height 600mm'
            ],
            'sizes' => [
                ['code' => 'GKA-223', 'size' => '640 x 480 x 600 MM', 'mrp' => 43424, 'unit' => 'Set'],
            ]
        ],
        'glass-elevated-basket' => [
            'id' => 'glass-elevated-basket',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Kitchen Organizers',
            'name' => 'Glass Elevated Wall Cabinet Basket',
            'tagline' => 'Wall-Mounted Pneumatic Pull-Down Organizer',
            'slug' => 'glass-elevated-basket',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Grewok Elevated Wall Cabinet Baskets utilize wall cabinet space with double-layer glass baskets that pull down on assisted pneumatic shocks.',
            'features' => [
                'Brings high overhead storage to eye level',
                'Double-layer glass shelves',
                'Mechanical lifting arm with gravity buffers',
                'Reduces stretching and stool dependencies'
            ],
            'finishes' => ['Tempered Glass + Silver Frame'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GKA-225', 'size' => '600 MM Cabinet Width', 'mrp' => 30680, 'unit' => 'Set'],
                ['code' => 'GKA-226', 'size' => '900 MM Cabinet Width', 'mrp' => 35400, 'unit' => 'Set'],
            ]
        ],
        'champagne-elevated-basket' => [
            'id' => 'champagne-elevated-basket',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Kitchen Organizers',
            'name' => 'Champagne Grey Elevated Wall Basket',
            'tagline' => 'Luxury Wall Cabinet Pull-Down with Gravity Gears',
            'slug' => 'champagne-elevated-basket',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Features adjustable gravity gear selectors, allowing users to modify the arm strength based on stored weights for easy lifting.',
            'features' => [
                'Adjustable gravity gear system',
                'Premium champagne gold finish',
                'Hydraulic soft-close return bumpers',
                'Space saving overhead double basket'
            ],
            'finishes' => ['Champagne Grey'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Cabinet Width' => '900 MM',
                'Lifting Shocks' => 'Assisted Pneumatic Shocks',
                'Adjustment' => 'Mechanical Gravity Dial'
            ],
            'sizes' => [
                ['code' => 'GKA-224', 'size' => '900 MM Cabinet Width', 'mrp' => 44845, 'unit' => 'Set'],
            ]
        ],
        'matt-roll' => [
            'id' => 'matt-roll',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Kitchen Accessories',
            'name' => 'Anti-Slip Protective Drawer Liner Matt Roll',
            'tagline' => 'High-Quality PVC-Free Eco Drawer Liners',
            'slug' => 'anti-slip-drawer-liner-matt',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Embossed non-slip drawer liners. Manufactured from high-quality PVC-free elastomers, they protect cabinet shelves from moisture, oils, and scratches.',
            'features' => [
                '100% physiologically and ecologically safe material',
                'Iron Grey premium texture',
                'Keeps utensils from sliding and rattling',
                'Available in 10 Meter and 20 Meter rolls'
            ],
            'finishes' => ['Iron Grey Matte'],
            'warranty' => 'Quality Certified',
            'sizes' => [
                ['code' => 'GKA-240 (10M)', 'size' => '20 Inch Width x 10 Meters', 'mrp' => 2100, 'unit' => 'Roll'],
                ['code' => 'GKA-240 (20M)', 'size' => '20 Inch Width x 20 Meters', 'mrp' => 4030, 'unit' => 'Roll'],
                ['code' => 'GKA-241 (10M)', 'size' => '22 Inch Width x 10 Meters', 'mrp' => 2750, 'unit' => 'Roll'],
                ['code' => 'GKA-241 (20M)', 'size' => '22 Inch Width x 20 Meters', 'mrp' => 5203, 'unit' => 'Roll'],
            ]
        ],
        'pantry-unit-grey' => [
            'id' => 'pantry-unit-grey',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Pantry Units',
            'name' => 'Pantry Unit Grey',
            'tagline' => 'Tall 6-Layer Modular Kitchen Larder in Slate Grey',
            'slug' => 'pantry-unit-grey',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'A heavy-duty 6-layer pantry unit. Opening the cabinet swings the door baskets out while drawing the inner shelves forward on heavy guides.',
            'features' => [
                'Supplied with door frame and inner baskets (4/5/6 layers)',
                'Universal for left and right door openings',
                'Textured grey anti-scratch coating',
                'Heavy-load capacity track runners'
            ],
            'finishes' => ['Slate Grey Metal'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GKA-230', 'size' => '450 MM Cabinet Width', 'mrp' => 28500, 'unit' => 'Set'],
                ['code' => 'GKA-231', 'size' => '600 MM Cabinet Width', 'mrp' => 30500, 'unit' => 'Set'],
            ]
        ],
        'pantry-unit-glass' => [
            'id' => 'pantry-unit-glass',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Pantry Units',
            'name' => 'Pantry Unit Glass',
            'tagline' => 'Luxury Glass-Panel Tall Grocery Larder',
            'slug' => 'pantry-unit-glass',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Premium larder lacing glass-border baskets on heavy-gauge framing. Brings instant transparency and elegance to grocery storage.',
            'features' => [
                'Solid-bottom baskets with tempered glass borders',
                'Synchronized sliding system for door and frame',
                'Quiet, soft-closing operations',
                'Universal left or right'
            ],
            'finishes' => ['Tempered Glass + Silver Frame'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GKA-232', 'size' => '450 MM Cabinet Width', 'mrp' => 29500, 'unit' => 'Set'],
                ['code' => 'GKA-233', 'size' => '600 MM Cabinet Width', 'mrp' => 31500, 'unit' => 'Set'],
            ]
        ],
        'pantry-unit-champagne' => [
            'id' => 'pantry-unit-champagne',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Pantry Units',
            'name' => 'Champagne Grey Pantry Unit',
            'tagline' => 'Elite Champagne Finish Swivel Pantry Larder',
            'slug' => 'pantry-unit-champagne',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'The Shearer Swivel Pullout Pantry features champagne gold accents and a swivelling larder column for access to every shelf.',
            'features' => [
                'Innovative swivelling column hinges',
                'Elite champagne powder coat detailing',
                'Smooth movement under heavy loaded baskets',
                'Maximized grocery larder space'
            ],
            'finishes' => ['Champagne Grey Gold'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GKA-234', 'size' => '450 MM Cabinet Width', 'mrp' => 49000, 'unit' => 'Set'],
                ['code' => 'GKA-235', 'size' => '600 MM Cabinet Width', 'mrp' => 52000, 'unit' => 'Set'],
            ]
        ],
        'kitchen-waste-bin' => [
            'id' => 'kitchen-waste-bin',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Kitchen Accessories',
            'name' => 'Kitchen Waste Bin (Drawer Dustbin)',
            'tagline' => 'Under-counter Slide Out Trash Organizer',
            'slug' => 'kitchen-waste-bin',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Manufactured out of non-toxic, food-grade polypropylene. Fits drawer cabinets for convenient waste disposal.',
            'features' => [
                'Elegantly designed for under-sink or cabinet mounting',
                'Food-grade polypropylene (PP) plastic',
                'Easy to pull out and wash',
                'Traps odor'
            ],
            'finishes' => ['Dark Grey PP'],
            'warranty' => '2 Years Warranty',
            'sizes' => [
                ['code' => 'GKA-242', 'size' => '9 Liters Capacity', 'mrp' => 3540, 'unit' => 'Set'],
                ['code' => 'GKA-243', 'size' => '14 Liters Capacity', 'mrp' => 4012, 'unit' => 'Set'],
            ]
        ],
        'kitchen-waste-bin-soft' => [
            'id' => 'kitchen-waste-bin-soft',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Kitchen Accessories',
            'name' => 'Kitchen Waste Bin Soft Close',
            'tagline' => 'Double Bin Under-Sink Soft-Close Waste System',
            'slug' => 'kitchen-waste-bin-soft',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Features dual 11-liter compartments (22L total) mounted on soft close slides, designed for recycling and organic segregation.',
            'features' => [
                'Dual compartments (11L + 11L)',
                'Integrated soft closing slides',
                'Odour-locking top cover plate',
                'Robust metal frame mounting'
            ],
            'finishes' => ['Dark Grey PP + Metal Frame'],
            'warranty' => '2 Years Warranty',
            'sizes' => [
                ['code' => 'GKA-244', 'size' => '11 + 11 Liters', 'mrp' => 10150, 'unit' => 'Set'],
            ]
        ],
        'rolling-shutter' => [
            'id' => 'rolling-shutter',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Kitchen Accessories',
            'name' => 'PVC Cassette Rolling Shutter',
            'tagline' => 'Premium Countertop Appliance Garage',
            'slug' => 'kitchen-rolling-shutter',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Countertop shutter with cassette roll-up mechanism. Designed to hide mixers, toasters, and blenders.',
            'features' => [
                'PVC Rolling Shutter with Cassette Mechanism',
                'Min cabinet depth required: 350mm',
                'Fully smooth vertical slide and stay-height positioning',
                'Available in Black, Silver, White, and Grey slats'
            ],
            'finishes' => ['Black Slat', 'Silver Slat', 'White Slat', 'Grey Slat'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Height' => '1400 MM Standard',
                'Depth' => 'Min 350 MM Recess',
                'Mechanism' => 'Counterbalanced Spring Cassette'
            ],
            'sizes' => [
                ['code' => 'GKA-237', 'size' => '450 MM Cabinet Width', 'mrp' => 16800, 'unit' => 'Set'],
                ['code' => 'GKA-238', 'size' => '600 MM Cabinet Width', 'mrp' => 18500, 'unit' => 'Set'],
                ['code' => 'GKA-239', 'size' => '900 MM Cabinet Width', 'mrp' => 24000, 'unit' => 'Set'],
            ]
        ],
        'wicker-basket' => [
            'id' => 'wicker-basket',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Pull Out Systems',
            'name' => 'Wicker Vegetable Basket',
            'tagline' => 'Beechwood & Wicker Breathable Food Storage',
            'slug' => 'beechwood-wicker-basket',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Woven vegetable drawers built with solid wood frames. The natural breathing holes are ideal for onions, garlic, and fresh bread.',
            'features' => [
                'Hand-woven breathable PVC wicker cords',
                'Solid beechwood framework base',
                'Natural wood finish borders',
                'Anti-fungal and moisture resistant'
            ],
            'finishes' => ['Beechwood Wood Finish'],
            'warranty' => '3 Years Warranty',
            'tech_specs' => [
                'Depth' => '500 MM Standard',
                'Frame Material' => 'Wood & PVC Wicker',
                'Quality' => 'Anti-Fungal Sourced'
            ],
            'sizes' => [
                ['code' => 'GKA-245 (100)', 'size' => '450 W x 100 H (Basket 414mm)', 'mrp' => 5500, 'unit' => 'Set'],
                ['code' => 'GKA-245 (150)', 'size' => '450 W x 150 H (Basket 414mm)', 'mrp' => 5660, 'unit' => 'Set'],
                ['code' => 'GKA-245 (200)', 'size' => '450 W x 200 H (Basket 414mm)', 'mrp' => 5820, 'unit' => 'Set'],
                ['code' => 'GKA-246 (100)', 'size' => '600 W x 100 H (Basket 564mm)', 'mrp' => 6350, 'unit' => 'Set'],
                ['code' => 'GKA-246 (150)', 'size' => '600 W x 150 H (Basket 564mm)', 'mrp' => 6550, 'unit' => 'Set'],
                ['code' => 'GKA-246 (200)', 'size' => '600 W x 200 H (Basket 564mm)', 'mrp' => 6750, 'unit' => 'Set'],
            ]
        ],
        'cup-thali-plate-stand' => [
            'id' => 'cup-thali-plate-stand',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Kitchen Organizers',
            'name' => 'Stainless Steel Cup, Thali & Plate Stand',
            'tagline' => 'Heavy-Gauge Kitchen Cabinet Organizer Rack',
            'slug' => 'ss-cup-thali-plate-stand',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Heavy-gauge Stainless Steel organizing stand. Built from 6mm rods, providing storage for cups, dinner thalis, and plates.',
            'features' => [
                '100% Stainless Steel construction',
                'Sturdy 6 MM rod thickness',
                'Organizes cups, dinner thalis, and side plates',
                'Corrosion and rust resistant'
            ],
            'finishes' => ['Polished Stainless Steel'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Rod Size' => '6 MM Solid Wire',
                'Material' => 'Stainless Steel 304 Grade',
                'Depth Compatibility' => 'Fits 500 / 550 MM draw lines'
            ],
            'sizes' => [
                ['code' => 'GW-SS-1821', 'size' => '18 x 21 Inch', 'mrp' => 1040, 'unit' => 'Set'],
                ['code' => 'GW-SS-2021', 'size' => '20 x 21 Inch', 'mrp' => 1239, 'unit' => 'Set'],
                ['code' => 'GW-SS-2421', 'size' => '24 x 21 Inch', 'mrp' => 1438, 'unit' => 'Set'],
                ['code' => 'GW-SS-2821', 'size' => '28 x 21 Inch', 'mrp' => 1635, 'unit' => 'Set'],
                ['code' => 'GW-SS-3221', 'size' => '32 x 21 Inch', 'mrp' => 1834, 'unit' => 'Set'],
                ['code' => 'GW-SS-3621', 'size' => '36 x 21 Inch', 'mrp' => 2032, 'unit' => 'Set'],
            ]
        ],
        'tandem-accessories' => [
            'id' => 'tandem-accessories',
            'category_id' => 'modern-kitchen',
            'subcategory' => 'Kitchen Organizers',
            'name' => 'Tandem Accessories',
            'tagline' => 'Adjustable Organizer Rails for Deep Drawers',
            'slug' => 'tandem-accessories-rails',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Cross-dividers and railing systems designed to coordinate with tandem drawer boxes to sort deep pots.',
            'features' => [
                'Adjustable railing lengths',
                'Coordinates with Slim Box and double-wall systems',
                'Easy click-in brackets'
            ],
            'finishes' => ['Iron Grey Finish'],
            'warranty' => '5 Years Warranty',
            'sizes' => [
                ['code' => 'GW-TA-20', 'size' => '20 Inch Length', 'mrp' => 2250, 'unit' => 'Set'],
                ['code' => 'GW-TA-22', 'size' => '22 Inch Length', 'mrp' => 2500, 'unit' => 'Set'],
            ]
        ],

        // 3. AUTO HINGES SOLUTION
        'ms-2d-hinges' => [
            'id' => 'ms-2d-hinges',
            'category_id' => 'auto-hinges',
            'subcategory' => '2D Hydraulic Hinges',
            'name' => 'MS 2D Hydraulic Hinges',
            'tagline' => 'Reliable Mild Steel Soft-Close Hinges',
            'slug' => 'ms-2d-hydraulic-hinges',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'Mild Steel soft-close hydraulic hinges. Plated in double-layer copper and nickel to resist corrosion, featuring 100,000 cycle testing.',
            'features' => [
                'Quiet soft-closing mechanism cylinder',
                'Double layer electroplated (copper + nickel) protective coating',
                'Opening angle 100 degrees',
                '100,000 loaded cycle pass certification',
                'Shutter thickness compatibility: 16mm to 19mm'
            ],
            'finishes' => ['Nickel Plated Steel'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Material' => 'Mild Steel (MS)',
                'Cup Depth' => '13 MM Shallow Cup',
                'Open Angle' => '100° Degree',
                'Cycles Certified' => '100,000 Cycles'
            ],
            'sizes' => [
                ['code' => 'GAH001', 'size' => 'Full Overlay (0 Crank)', 'mrp' => 240, 'unit' => 'Set'],
                ['code' => 'GAH002', 'size' => 'Half Overlay (8 Crank)', 'mrp' => 255, 'unit' => 'Set'],
                ['code' => 'GAH003', 'size' => 'Inset (16 Crank)', 'mrp' => 270, 'unit' => 'Set'],
            ]
        ],
        'ss-2d-hinges' => [
            'id' => 'ss-2d-hinges',
            'category_id' => 'auto-hinges',
            'subcategory' => '2D Hydraulic Hinges',
            'name' => 'SS 2D Hydraulic Hinges',
            'tagline' => 'Stainless Steel 304 Soft-Close Dampened Hinges',
            'slug' => 'ss-2d-hydraulic-hinges',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'Stainless Steel cabinet hinges. Salt-spray tested for 48 hours to resist rust inside kitchen damp cabinets.',
            'features' => [
                'Stainless steel concealed soft-close tank',
                '48 hours continuous salt spray test pass',
                'Opening angle 100 degrees',
                '100,000 loaded cycle pass certification',
                'Recommended for wet modular zones'
            ],
            'finishes' => ['SS 304 Polished'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Material' => 'Grade 304 Stainless Steel',
                'Cup Depth' => '13 MM Cup',
                'Rust Testing' => '48 Hours Salt Spray Chamber Passed',
                'Cycles' => '100,000 Cycles Passed'
            ],
            'sizes' => [
                ['code' => 'GAH011', 'size' => 'Full Overlay (0 Crank)', 'mrp' => 325, 'unit' => 'Set'],
                ['code' => 'GAH012', 'size' => 'Half Overlay (8 Crank)', 'mrp' => 340, 'unit' => 'Set'],
                ['code' => 'GAH013', 'size' => 'Inset (16 Crank)', 'mrp' => 355, 'unit' => 'Set'],
            ]
        ],
        'ms-3d-hinges' => [
            'id' => 'ms-3d-hinges',
            'category_id' => 'auto-hinges',
            'subcategory' => '3D Hydraulic Hinges',
            'name' => 'MS 3D Hydraulic Hinges',
            'tagline' => '3D Micro-Adjustable Mild Steel Clip-on Hinges',
            'slug' => 'ms-3d-hydraulic-hinges',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'Grewok MS 3D clip-on hinges feature a 3-way alignment adjustment plate (Depth 9mm, Horizontal 8mm) to align cabinet doors.',
            'features' => [
                'Clip-on release base plate for easy tool-free door mount',
                '3D Micro-adjustment alignment (X, Y, Z axes)',
                'Opening angle 100 degrees',
                'Nickel double-layer protection plating'
            ],
            'finishes' => ['Nickel Plated Steel'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Depth adjust range' => '9 mm Adjustment',
                'Horizontal adjust' => '8 mm Adjustment',
                'Mechanism' => 'Clip-On Release Base',
                'Cycles' => '100,000 Cycles Passed'
            ],
            'sizes' => [
                ['code' => 'GAH004', 'size' => 'Full Overlay (0 Crank)', 'mrp' => 350, 'unit' => 'Set'],
                ['code' => 'GAH005', 'size' => 'Half Overlay (8 Crank)', 'mrp' => 365, 'unit' => 'Set'],
                ['code' => 'GAH006', 'size' => 'Inset (16 Crank)', 'mrp' => 380, 'unit' => 'Set'],
            ]
        ],
        'ss-3d-hinges' => [
            'id' => 'ss-3d-hinges',
            'category_id' => 'auto-hinges',
            'subcategory' => '3D Hydraulic Hinges',
            'name' => 'SS 3D Hydraulic Hinges',
            'tagline' => 'Stainless Steel 304 3D Clip-on Soft-Close Hinges',
            'slug' => 'ss-3d-hydraulic-hinges',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'The ultimate cabinet hinge. Combines Grade 304 Stainless Steel, a clip-on base, 3D alignment adjustment screws, and leak-proof soft-close tanks.',
            'features' => [
                'Grade 304 Stainless Steel construction',
                '3-Dimensional front adjustments (Depth 9mm, Horizontal 8mm)',
                'Clip-on quick mounting system',
                '48 hrs salt spray tested for kitchens',
                '100,000 cycle tested for durability'
            ],
            'finishes' => ['SS 304 Polished'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Material' => 'SS 304 Virgin Grade',
                'Adjustment Options' => '3D Micro-Adjustment',
                'Base Mount' => 'Clip-on Click plate',
                'Rust Class' => '48 Hrs salt spray tested'
            ],
            'sizes' => [
                ['code' => 'GAH014', 'size' => 'Full Overlay (0 Crank)', 'mrp' => 465, 'unit' => 'Set'],
                ['code' => 'GAH015', 'size' => 'Half Overlay (8 Crank)', 'mrp' => 490, 'unit' => 'Set'],
                ['code' => 'GAH016', 'size' => 'Inset (16 Crank)', 'mrp' => 515, 'unit' => 'Set'],
            ]
        ],

        // 4. WARDROBE SOLUTION
        'wardrobe-lifter' => [
            'id' => 'wardrobe-lifter',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Wardrobe Organizers',
            'name' => 'Wardrobe Lifter',
            'tagline' => 'Heavy Duty Pull-Down Wardrobe Clothes Rail',
            'slug' => 'hydraulic-wardrobe-lifter',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Ergonomic wardrobe organizer designed to utilize high cabinet space. The heavy-duty hydraulic gas pistons lower and raise clothes hanger rails.',
            'features' => [
                'Reasonable, practical & beautiful structure design',
                'Damping air rod with high quality buffer system',
                'Easy to pull down & smooth automatic return rise',
                'Adjustable width extendable up to 4 inches',
                'Available in Slate Grey and Mocha finishes'
            ],
            'finishes' => ['Slate Grey Finish', 'Mocha Finish'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Cabinet Width' => '830 to 1150 MM Adjustable',
                'Damping' => 'Pneumatic Gas Shocks with Buttering function',
                'Design' => 'High-Strength Magnesium Aluminum Frame'
            ],
            'sizes' => [
                ['code' => 'GWA-301 (Grey)', 'size' => '830 x 1150 MM Grey', 'mrp' => 6920, 'unit' => 'Set'],
                ['code' => 'GWA-301 (Mocha)', 'size' => '830 x 1150 MM Mocha', 'mrp' => 7450, 'unit' => 'Set'],
            ]
        ],
        'jewellery-box' => [
            'id' => 'jewellery-box',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Wardrobe Organizers',
            'name' => 'Jewellery Box',
            'tagline' => 'Velvet Compartment Valuables Organizer Pullout',
            'slug' => 'wardrobe-jewellery-box',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Premium sliding wardrobe drawer frame lined with velvet and compartments. Built with magnesium aluminum frames and silent soft close slides.',
            'features' => [
                'Frame: space grade magnesium aluminum alloy',
                'Width adjustable up to 15mm for cabinet fit',
                'Synchronized silent damping rails',
                'Multi-grid felt layout for watches, rings, and jewelry'
            ],
            'finishes' => ['Grey Finish', 'Mocha Finish'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Frame Adjustability' => '+15mm Width Adjustment',
                'Railings' => 'Synchronized Silent Under-mount Slides',
                'Metal Frame' => 'Magnesium Aluminum Alloy'
            ],
            'sizes' => [
                ['code' => 'GWA-302 (600G)', 'size' => '600 MM Cabinet Width (Grey)', 'mrp' => 20000, 'unit' => 'Set'],
                ['code' => 'GWA-302 (900G)', 'size' => '900 MM Cabinet Width (Grey)', 'mrp' => 23790, 'unit' => 'Set'],
                ['code' => 'GWA-302 (600M)', 'size' => '600 MM Cabinet Width (Mocha)', 'mrp' => 21890, 'unit' => 'Set'],
                ['code' => 'GWA-302 (900M)', 'size' => '900 MM Cabinet Width (Mocha)', 'mrp' => 26040, 'unit' => 'Set'],
            ]
        ],
        'trouser-pullout' => [
            'id' => 'trouser-pullout',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Trouser Racks',
            'name' => 'Trouser Pull Out',
            'tagline' => 'Sliding Multi-Rod Wardrobe Trouser Organizer',
            'slug' => 'trouser-pull-out-rack',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Sliding trouser hanging frame with non-slip rods. Features soft close undermount slides and adjustable width frames.',
            'features' => [
                'High-strength magnesium aluminum alloy framing',
                'Width frame adjustable up to 15mm',
                'Soft close synchronized rails',
                'Anti-slip hanging rods for trousers'
            ],
            'finishes' => ['Grey Finish', 'Mocha Finish'],
            'warranty' => '5 Years Warranty',
            'sizes' => [
                ['code' => 'GWA-304 (600G)', 'size' => '600 MM Cabinet Width (Grey)', 'mrp' => 9790, 'unit' => 'Set'],
                ['code' => 'GWA-304 (900G)', 'size' => '900 MM Cabinet Width (Grey)', 'mrp' => 11290, 'unit' => 'Set'],
                ['code' => 'GWA-304 (600M)', 'size' => '600 MM Cabinet Width (Mocha)', 'mrp' => 12255, 'unit' => 'Set'],
                ['code' => 'GWA-304 (900M)', 'size' => '900 MM Cabinet Width (Mocha)', 'mrp' => 14784, 'unit' => 'Set'],
            ]
        ],
        'single-side-trouser' => [
            'id' => 'single-side-trouser',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Trouser Racks',
            'name' => 'Single Side Trouser Rack (V-Shaped)',
            'tagline' => 'Top Mounted Damping V-Shaped Trouser Organizer',
            'slug' => 'single-side-trouser-rack',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Top mounted trouser hanger with non-slip V-shaped rods and soft velvet linings. Built with arch couple alloys.',
            'features' => [
                'Top mounted damping V-shaped trouser rack',
                'Arch couple alloy frame with nano-degree coating technology',
                'Soft velvet board slippery and traceless protection',
                'Compact dimensions'
            ],
            'finishes' => ['Grey Finish', 'Mocha Finish'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Dimensions' => '340 x 455 x 140 MM',
                'Mount Style' => 'Top Ceiling Recess Mounted',
                'Railing Damping' => 'Integrated Fluid Damping'
            ],
            'sizes' => [
                ['code' => 'GWA 305 (Grey)', 'size' => '340 x 455 x 140 MM (Grey)', 'mrp' => 8770, 'unit' => 'Set'],
                ['code' => 'GWA 305 (Mocha)', 'size' => '340 x 455 x 140 MM (Mocha)', 'mrp' => 9345, 'unit' => 'Set'],
            ]
        ],
        'side-trouser-rack' => [
            'id' => 'side-trouser-rack',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Trouser Racks',
            'name' => 'Side Trouser Rack',
            'tagline' => 'Side Mounted Soft-Close Clothes Hanger Rail',
            'slug' => 'side-trouser-rack',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Side row mount organizer. Lined with flannelette elastic guards to prevent creases.',
            'features' => [
                'Side row mounting design for shallow partitions',
                'Flannelette soft close elastic protection',
                'Tamper-resistant alloy slides'
            ],
            'finishes' => ['Grey Finish', 'Mocha Finish'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Dimensions' => '350 x 455 x 115 MM'
            ],
            'sizes' => [
                ['code' => 'GWA 306 (Grey)', 'size' => '350 x 455 x 115 MM (Grey)', 'mrp' => 8520, 'unit' => 'Set'],
                ['code' => 'GWA 306 (Mocha)', 'size' => '350 x 455 x 115 MM (Mocha)', 'mrp' => 9000, 'unit' => 'Set'],
            ]
        ],
        'double-side-trouser' => [
            'id' => 'double-side-trouser',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Trouser Racks',
            'name' => 'Double Side Trouser Rack',
            'tagline' => 'High-Capacity Double Row Trouser Pullout',
            'slug' => 'double-side-trouser-rack',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'A double-row trouser pullout for wide cabinet sections. Equipped with flannelette soft close elastics.',
            'features' => [
                'Double row rack design for maximum storage',
                'Flannelette soft close crease-free elastics',
                'Magnesium aluminum structural rails'
            ],
            'finishes' => ['Grey Finish', 'Mocha Finish'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Dimensions' => '630 x 455 x 115 MM'
            ],
            'sizes' => [
                ['code' => 'GWA 307 (Grey)', 'size' => '630 x 455 x 115 MM (Grey)', 'mrp' => 10000, 'unit' => 'Set'],
                ['code' => 'GWA 307 (Mocha)', 'size' => '630 x 455 x 115 MM (Mocha)', 'mrp' => 10500, 'unit' => 'Set'],
            ]
        ],
        'cloth-hanger' => [
            'id' => 'cloth-hanger',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Wardrobe Organizers',
            'name' => 'Cloth Hanger',
            'tagline' => 'Extendable Wardrobe Clothes Hanger Rail',
            'slug' => 'sliding-cloth-hanger',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Slide-out clothes hanger. Built with high-strength alloy frames to prevent tilting and damage to clothes.',
            'features' => [
                'High strength alloy sliding frame',
                'Glides forward on soft close rails',
                'Hangs clothes without tilt'
            ],
            'finishes' => ['Grey Finish', 'Mocha Finish'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Dimensions' => '115 x 455 x 115 MM'
            ],
            'sizes' => [
                ['code' => 'GWA 308 (Grey)', 'size' => '115 x 455 x 115 MM (Grey)', 'mrp' => 6720, 'unit' => 'Set'],
                ['code' => 'GWA 308 (Mocha)', 'size' => '115 x 455 x 115 MM (Mocha)', 'mrp' => 7150, 'unit' => 'Set'],
            ]
        ],
        'rotating-shoe-rack' => [
            'id' => 'rotating-shoe-rack',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Shoe & Storage Systems',
            'name' => '360° Rotation Shoe Rack',
            'tagline' => '12-Layer Tall Rotating Wardrobe Shoe Organiser',
            'slug' => 'rotating-shoe-rack-360',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'A show-stopping 12-layer tall shoe organizer column. Rotates 360° on dual top-bottom bearing pivots.',
            'features' => [
                'Rotates 360 degrees for complete accessibility',
                '12 layers of steel laminated shelves',
                'Diagonal cross tray layout stores 3+ pairs per layer',
                'Smooth rotation mechanism'
            ],
            'finishes' => ['Grey Finish', 'Mocha Finish'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Dimensions' => '700mm W x 360mm D x 1910mm H',
                'Rotation' => '360° Degrees Pivot',
                'Layers' => '12 Steel laminated layers'
            ],
            'sizes' => [
                ['code' => 'GWA 310 (Grey)', 'size' => '700 x 360 x 1910 MM (Grey)', 'mrp' => 56500, 'unit' => 'Set'],
                ['code' => 'GWA 310 (Mocha)', 'size' => '700 x 360 x 1910 MM (Mocha)', 'mrp' => 61500, 'unit' => 'Set'],
            ]
        ],
        'storage-basket-leather' => [
            'id' => 'storage-basket-leather',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Shoe & Storage Systems',
            'name' => 'Storage Basket Leather',
            'tagline' => 'Luxury Hand-Sewn Leather Wardrobe Drawer Basket',
            'slug' => 'leather-storage-basket',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'A wardrobe clothes basket framed in space-grade aluminum and wrapped in hand-sewn leather.',
            'features' => [
                'Space grade aluminum frame with fluorocarbon coating',
                'Basket wrapped in hand-sewn leather',
                'Concealed soft-close undermount slides',
                'Ideal for fine garments and blankets'
            ],
            'finishes' => ['Slate Grey Leather', 'Mocha Leather'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Metal Frame' => 'Space Grade Aluminum',
                'Coating' => 'Fluorocarbon scratch-proof tech',
                'Drawer Type' => 'Under-mount Soft-Close'
            ],
            'sizes' => [
                ['code' => 'GWA-311 (600G)', 'size' => '600 MM Cabinet (Grey)', 'mrp' => 18950, 'unit' => 'Set'],
                ['code' => 'GWA-311 (900G)', 'size' => '900 MM Cabinet (Grey)', 'mrp' => 22700, 'unit' => 'Set'],
                ['code' => 'GWA-311 (600M)', 'size' => '600 MM Cabinet (Mocha)', 'mrp' => 21600, 'unit' => 'Set'],
                ['code' => 'GWA-311 (900M)', 'size' => '900 MM Cabinet (Mocha)', 'mrp' => 25360, 'unit' => 'Set'],
            ]
        ],
        'storage-basket-glass' => [
            'id' => 'storage-basket-glass',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Shoe & Storage Systems',
            'name' => 'Storage Basket Glass Leather',
            'tagline' => 'Luxury Tempered Glass & Leather Wardrobe Drawer',
            'slug' => 'glass-leather-storage-basket',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'A luxury wardrobe slide-out drawer merging tempered glass panels, hand-sewn leather liners, and soft-close slides.',
            'features' => [
                'Outer frame: space-grade aluminum + tempered glass panels',
                'Basket wrapped in hand-sewn leather liners',
                'Soft close undermount slides',
                'Wear-resistant and scratch-proof'
            ],
            'finishes' => ['Slate Grey Leather + Glass', 'Mocha Leather + Glass'],
            'warranty' => '5 Years Warranty',
            'sizes' => [
                ['code' => 'GWA-312 (600G)', 'size' => '600 MM Cabinet (Grey)', 'mrp' => 17290, 'unit' => 'Set'],
                ['code' => 'GWA-312 (900G)', 'size' => '900 MM Cabinet (Grey)', 'mrp' => 21000, 'unit' => 'Set'],
                ['code' => 'GWA-312 (600M)', 'size' => '600 MM Cabinet (Mocha)', 'mrp' => 19370, 'unit' => 'Set'],
                ['code' => 'GWA-312 (900M)', 'size' => '900 MM Cabinet (Mocha)', 'mrp' => 23100, 'unit' => 'Set'],
            ]
        ],
        'triple-drawer-box' => [
            'id' => 'triple-drawer-box',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Shoe & Storage Systems',
            'name' => 'Triple Drawer Box Combination',
            'tagline' => '3-Tier Sliding Wardrobe Drawer Stack',
            'slug' => 'triple-drawer-box-stack',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Stacked triple-drawer organizing unit for closets, sliding out on soft-close dampers.',
            'features' => [
                '3-tier sliding drawer stack',
                'Magnesium aluminum frame',
                'Concealed soft-close sliding rails'
            ],
            'finishes' => ['Grey Finish', 'Mocha Finish'],
            'warranty' => '5 Years Warranty',
            'sizes' => [
                ['code' => 'GWA-316 (600G)', 'size' => '600 MM Cabinet (Grey)', 'mrp' => 19475, 'unit' => 'Set'],
                ['code' => 'GWA-316 (900G)', 'size' => '900 MM Cabinet (Grey)', 'mrp' => 23650, 'unit' => 'Set'],
                ['code' => 'GWA-316 (600M)', 'size' => '600 MM Cabinet (Mocha)', 'mrp' => 20950, 'unit' => 'Set'],
                ['code' => 'GWA-316 (900M)', 'size' => '900 MM Cabinet (Mocha)', 'mrp' => 25120, 'unit' => 'Set'],
            ]
        ],
        'safe-box-fingerprint' => [
            'id' => 'safe-box-fingerprint',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Wardrobe Utilities',
            'name' => 'Safe Box with Finger Print (Triple Drawer)',
            'tagline' => 'Biometric Unbreakable Mild Steel Drawer Safe',
            'slug' => 'safe-box-fingerprint',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Unbreakable mild steel drawer safe stack, featuring fingerprint biometric scanners and backup keypad locks.',
            'features' => [
                'Biometric fingerprint + password keypads',
                'Heavy-gauge mild steel vault shell (unbreakable)',
                'Concealed slides with backup physical override keys',
                'Available in Grey and Mocha options'
            ],
            'finishes' => ['Black Vault Shell + Grey/Mocha Inserts'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Locking Type' => 'Biometric Scanner + Digital PIN Pad',
                'Vault Material' => 'Mild Steel Vault Housing',
                'Inserts' => 'Felt lined drawers'
            ],
            'sizes' => [
                ['code' => 'GWA-317 (600G)', 'size' => '600 MM Cabinet (Grey)', 'mrp' => 41500, 'unit' => 'Set'],
                ['code' => 'GWA-317 (900G)', 'size' => '900 MM Cabinet (Grey)', 'mrp' => 49600, 'unit' => 'Set'],
                ['code' => 'GWA-317 (600M)', 'size' => '600 MM Cabinet (Mocha)', 'mrp' => 43000, 'unit' => 'Set'],
                ['code' => 'GWA-317 (900M)', 'size' => '900 MM Cabinet (Mocha)', 'mrp' => 51000, 'unit' => 'Set'],
            ]
        ],
        'wardrobe-mirror' => [
            'id' => 'wardrobe-mirror',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Wardrobe Utilities',
            'name' => 'Wardrobe Mirror',
            'tagline' => 'Revolve & Slide Out Wardrobe Dressing Mirror',
            'slug' => 'rotating-wardrobe-mirror',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Slide-out and revolving mirror. Baked with high-purity aluminium alloy frames.',
            'features' => [
                'Revolves, rotates, and slides out completely',
                'Smooth telescoping slide rails',
                'Premium grey high-purity aluminum alloy frame',
                '3-layer car baking finish prevents scrapes'
            ],
            'finishes' => ['Grey Finish'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Dimensions' => '356 x 1200 MM',
                'Rotation' => 'Full swivelling motion',
                'Guides' => 'Heavy ball bearing guides'
            ],
            'sizes' => [
                ['code' => 'GWA 315', 'size' => '356 x 1200 MM', 'mrp' => 7050, 'unit' => 'Set'],
            ]
        ],
        'ironing-board' => [
            'id' => 'ironing-board',
            'category_id' => 'wardrobe-solution',
            'subcategory' => 'Wardrobe Utilities',
            'name' => 'Ironing Board',
            'tagline' => 'Foldable Slide-Out Wardrobe Ironing Unit',
            'slug' => 'foldable-ironing-board',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Foldable cabinet ironing board. Mounts inside drawers or shelves to save space.',
            'features' => [
                'Telescopic pull-out slides',
                'Foldable space-saving framework',
                'Heat-resistant fabric lining'
            ],
            'finishes' => ['Grey Finish'],
            'warranty' => '5 Years Warranty',
            'tech_specs' => [
                'Dimensions' => '295 x 430 x 140 MM',
                'Mount' => 'Drawer Recess Mounted'
            ],
            'sizes' => [
                ['code' => 'GWA 317', 'size' => '295 x 430 x 140 MM', 'mrp' => 10500, 'unit' => 'Set'],
            ]
        ],

        // 5. HYDRAULIC FOLDING SOLUTION
        'gas-pump-9' => [
            'id' => 'gas-pump-9',
            'category_id' => 'hydraulic-folding',
            'subcategory' => 'Gas Pumps',
            'name' => '9" Gas Pump',
            'tagline' => 'Standard Overhead Door Hydraulic Gas Spring',
            'slug' => 'gas-pump-9-inch',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Standard 9-inch gas spring struts for overhead cabinet shutter lift support. Rated for lifts from 5 kg to 25 kg.',
            'features' => [
                'Weight lift capacities: 5 kg to 25 kg',
                'Durable mild steel rod cylinder',
                'Easy click-fit brackets'
            ],
            'finishes' => ['Grey Finish'],
            'warranty' => '3 Years Warranty',
            'sizes' => [
                ['code' => 'GHS 001 (5K)', 'size' => '5 KG Lift Capacity', 'mrp' => 460, 'unit' => 'Pair'],
                ['code' => 'GHS 001 (10K)', 'size' => '10 KG Lift Capacity', 'mrp' => 460, 'unit' => 'Pair'],
                ['code' => 'GHS 001 (15K)', 'size' => '15 KG Lift Capacity', 'mrp' => 460, 'unit' => 'Pair'],
                ['code' => 'GHS 001 (20K)', 'size' => '20 KG Lift Capacity', 'mrp' => 460, 'unit' => 'Pair'],
                ['code' => 'GHS 001 (25K)', 'size' => '25 KG Lift Capacity', 'mrp' => 460, 'unit' => 'Pair'],
            ]
        ],
        'gas-pump-12' => [
            'id' => 'gas-pump-12',
            'category_id' => 'hydraulic-folding',
            'subcategory' => 'Gas Pumps',
            'name' => '12" Gas Pump',
            'tagline' => 'Heavy Duty 12-inch Hydraulic Gas Spring',
            'slug' => 'gas-pump-12-inch',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Heavy duty 12-inch gas struts featuring 8mm rods and 18x8mm chambers, rated for loads up to 35 kg.',
            'features' => [
                'Lifting capacities: 10 kg to 35 kg',
                '8 MM solid metal piston rods',
                'Black powder coated cylinders'
            ],
            'finishes' => ['Black Finish'],
            'warranty' => '3 Years Warranty',
            'sizes' => [
                ['code' => 'GHS 002 (10K)', 'size' => '10 KG Lift Capacity', 'mrp' => 560, 'unit' => 'Pair'],
                ['code' => 'GHS 002 (15K)', 'size' => '15 KG Lift Capacity', 'mrp' => 560, 'unit' => 'Pair'],
                ['code' => 'GHS 002 (20K)', 'size' => '20 KG Lift Capacity', 'mrp' => 560, 'unit' => 'Pair'],
                ['code' => 'GHS 002 (25K)', 'size' => '25 KG Lift Capacity', 'mrp' => 560, 'unit' => 'Pair'],
                ['code' => 'GHS 002 (30K)', 'size' => '30 KG Lift Capacity', 'mrp' => 560, 'unit' => 'Pair'],
                ['code' => 'GHS 002 (35K)', 'size' => '35 KG Lift Capacity', 'mrp' => 560, 'unit' => 'Pair'],
            ]
        ],
        'gas-pump-9-soft' => [
            'id' => 'gas-pump-9-soft',
            'category_id' => 'hydraulic-folding',
            'subcategory' => 'Gas Pumps',
            'name' => '9" Soft Close Gas Pump',
            'tagline' => '9-inch Soft Close Double Motion Gas Pump',
            'slug' => 'gas-pump-9-soft-close',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Features automated cushion control. Shutter closes softly when below 25° and assists opening once above 30°.',
            'features' => [
                'Automatic cushioning close at less than 25° angle',
                'Automatic opening push at greater than 30° angle',
                'Load capacity: 5 kg to 25 kg'
            ],
            'finishes' => ['Grey Finish'],
            'warranty' => '5 Years Warranty',
            'sizes' => [
                ['code' => 'GHS 003 (5K)', 'size' => '5 KG Lift Capacity', 'mrp' => 560, 'unit' => 'Pair'],
                ['code' => 'GHS 003 (10K)', 'size' => '10 KG Lift Capacity', 'mrp' => 560, 'unit' => 'Pair'],
                ['code' => 'GHS 003 (15K)', 'size' => '15 KG Lift Capacity', 'mrp' => 560, 'unit' => 'Pair'],
                ['code' => 'GHS 003 (20K)', 'size' => '20 KG Lift Capacity', 'mrp' => 560, 'unit' => 'Pair'],
                ['code' => 'GHS 003 (25K)', 'size' => '25 KG Lift Capacity', 'mrp' => 560, 'unit' => 'Pair'],
            ]
        ],
        'bifold-liftup' => [
            'id' => 'bifold-liftup',
            'category_id' => 'hydraulic-folding',
            'subcategory' => 'Folding & Bed Fittings',
            'name' => 'Bi Fold Lift Up',
            'tagline' => 'Soft-Close Bi-fold Shutter Lift System',
            'slug' => 'bifold-lift-up-system',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Overhead bi-fold lift system. Features soft close dampers for two wooden or aluminum cabinet doors.',
            'features' => [
                'Use for high wall cabinet structures with 2 door panels',
                'Capacity options support weights from 5 kg to 11 kg',
                'Silent internal soft closing mechanism',
                'Saves overhead head-bump space'
            ],
            'finishes' => ['Anodized Aluminium + Grey cover'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GHS-011', 'size' => '5 to 6 KG (Door 200 x 600mm)', 'mrp' => 10700, 'unit' => 'Set'],
                ['code' => 'GHS-012', 'size' => '7 to 8 KG (Door 300 x 650-850mm)', 'mrp' => 11200, 'unit' => 'Set'],
                ['code' => 'GHS-013', 'size' => '9 to 11 KG (Door 300 x 650-850mm)', 'mrp' => 13650, 'unit' => 'Set'],
            ]
        ],
        'folding-brackets' => [
            'id' => 'folding-brackets',
            'category_id' => 'hydraulic-folding',
            'subcategory' => 'Folding & Bed Fittings',
            'name' => 'Folding Brackets',
            'tagline' => 'Space-Saving Wall Mounted Heavy folding Brackets',
            'slug' => 'wall-folding-brackets',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Heavy-duty iron folding brackets, ideal for wall-mounted study desks, dining counters, or tools storage.',
            'features' => [
                'Maximum load bearing capacity folding joints',
                'Durable iron material coated in rust-resistant grey',
                'Simple lock lever for collapse foldings'
            ],
            'finishes' => ['Grey Finish'],
            'warranty' => '5 Years Warranty',
            'sizes' => [
                ['code' => 'GFB - 101', 'size' => '300 MM Length', 'mrp' => 860, 'unit' => 'Pair'],
                ['code' => 'GFB - 102', 'size' => '350 MM Length', 'mrp' => 940, 'unit' => 'Pair'],
                ['code' => 'GFB - 103', 'size' => '400 MM Length', 'mrp' => 1000, 'unit' => 'Pair'],
                ['code' => 'GFB - 104', 'size' => '450 MM Length', 'mrp' => 1140, 'unit' => 'Pair'],
                ['code' => 'GFB - 105', 'size' => '500 MM Length', 'mrp' => 1210, 'unit' => 'Pair'],
                ['code' => 'GFB - 106', 'size' => '600 MM Length', 'mrp' => 1450, 'unit' => 'Pair'],
            ]
        ],
        'dining-folding' => [
            'id' => 'dining-folding',
            'category_id' => 'hydraulic-folding',
            'subcategory' => 'Folding & Bed Fittings',
            'name' => 'Dining Folding Bracket',
            'tagline' => 'Heavy Duty Folding Dining Table Hardware Frame',
            'slug' => 'dining-table-folding-bracket',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Iron folding frames designed for space-saving fold-down dining tables.',
            'features' => [
                'High load bearing capacity',
                'Easy adjustment opening or closing',
                'Iron structural joints'
            ],
            'finishes' => ['Grey Finish'],
            'warranty' => '5 Years Warranty',
            'sizes' => [
                ['code' => 'GDF -101', 'size' => '600 MM Width', 'mrp' => 3140, 'unit' => 'Set'],
                ['code' => 'GDF -102', 'size' => '750 MM Width', 'mrp' => 3760, 'unit' => 'Set'],
                ['code' => 'GDF -103', 'size' => '900 MM Width', 'mrp' => 4160, 'unit' => 'Set'],
                ['code' => 'GDF -104', 'size' => '1050 MM Width', 'mrp' => 4750, 'unit' => 'Set'],
                ['code' => 'GDF -105', 'size' => '1200 MM Width', 'mrp' => 5170, 'unit' => 'Set'],
            ]
        ],
        'bed-fitting-gold' => [
            'id' => 'bed-fitting-gold',
            'category_id' => 'hydraulic-folding',
            'subcategory' => 'Folding & Bed Fittings',
            'name' => 'Bed Fitting Offwhite (Gold)',
            'tagline' => 'Standard Hydraulic Bed Lift-up Fitting',
            'slug' => 'bed-fitting-lift-gold',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => '1500mm standard hydraulic lift-up frames for bed storage access. Coated in off-white (gold).',
            'features' => [
                'Includes heavy-duty pneumatic gas pumps',
                'Sizes support 75 KG to 250 KG gas spring forces',
                'Enables easy lift storage access'
            ],
            'finishes' => ['Offwhite (Gold) Coating'],
            'warranty' => '5 Years Warranty',
            'sizes' => [
                ['code' => 'GHS-501', 'size' => '1500 MM Length Frame', 'mrp' => 2950, 'unit' => 'Set'],
            ]
        ],
        'bed-fitting-platinum' => [
            'id' => 'bed-fitting-platinum',
            'category_id' => 'hydraulic-folding',
            'subcategory' => 'Folding & Bed Fittings',
            'name' => 'Bed Fitting Grey (Platinum)',
            'tagline' => 'Heavy Duty Hydraulic Bed Lift-up System',
            'slug' => 'bed-fitting-lift-platinum',
            'image' => '/images/hero-kitchen.png',
            'gallery' => ['/images/hero-kitchen.png'],
            'description' => 'Heavy gauge 1500mm hydraulic lift frames finished in Platinum Grey.',
            'features' => [
                'Pneumatic assistance lift',
                'Support capacities up to 250 KG springs',
                'Platinum Grey protective coating'
            ],
            'finishes' => ['Platinum Grey Coating'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GHS-502', 'size' => '1500 MM Length Frame', 'mrp' => 3500, 'unit' => 'Set'],
            ]
        ],

        // 6. LOCKING SOLUTION
        'drawer-lock' => [
            'id' => 'drawer-lock',
            'category_id' => 'locking-solution',
            'subcategory' => 'Drawer & Cabinet Locks',
            'name' => 'Drawer Lock',
            'tagline' => 'Computerized Brass Dimple Key Drawer Lock',
            'slug' => 'brass-cylinder-drawer-lock',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'Computerized brass cylinder locks, featuring secure tamper-resistant dimple keys.',
            'features' => [
                'Computerized brass dimple keys (anti-pick)',
                'Solid zinc alloy cylinder housing in SS finish',
                'Smooth mechanical turning, easy operation'
            ],
            'finishes' => ['Stainless Steel Finish'],
            'warranty' => '3 Years Warranty',
            'tech_specs' => [
                'Cylinder Type' => 'Computerized Brass Dimple Cylinder',
                'Key count' => '3 Brass Keys',
                'Standard Finish' => 'SS Anodized Finish'
            ],
            'sizes' => [
                ['code' => 'GDL -301', 'size' => '19 MM Cylinder Length', 'mrp' => 408, 'unit' => 'Set'],
                ['code' => 'GDL -302', 'size' => '23 MM Cylinder Length', 'mrp' => 442, 'unit' => 'Set'],
                ['code' => 'GDL -303', 'size' => '29 MM Cylinder Length', 'mrp' => 476, 'unit' => 'Set'],
            ]
        ],
        'cupboard-lock' => [
            'id' => 'cupboard-lock',
            'category_id' => 'locking-solution',
            'subcategory' => 'Drawer & Cabinet Locks',
            'name' => 'Cupboard Lock',
            'tagline' => 'Heavy Duty Cabinet & Cupboard Deadbolt Lock',
            'slug' => 'brass-cylinder-cupboard-lock',
            'image' => '/images/products/drawer-channel.png',
            'gallery' => ['/images/products/drawer-channel.png'],
            'description' => 'Heavy-gauge cupboard deadbolt locks featuring secure computerized dimple keys.',
            'features' => [
                'Computerized brass dimple keys',
                'Double-throw deadbolt lock mechanism',
                'Anti-tamper cylinder casing'
            ],
            'finishes' => ['Stainless Steel Finish'],
            'warranty' => '3 Years Warranty',
            'tech_specs' => [
                'Key system' => 'Brass Dimple Keys',
                'Housing' => 'Alloy Casing in SS finish'
            ],
            'sizes' => [
                ['code' => 'GCL-401', 'size' => '23 MM Cylinder Length', 'mrp' => 509, 'unit' => 'Set'],
                ['code' => 'GCL-402', 'size' => '29 MM Cylinder Length', 'mrp' => 543, 'unit' => 'Set'],
                ['code' => 'GCL-403', 'size' => '35 MM Cylinder Length', 'mrp' => 578, 'unit' => 'Set'],
            ]
        ],

        // 7. WARDROBE FITTING SOLUTION
        'slim-track-fitting-60' => [
            'id' => 'slim-track-fitting-60',
            'category_id' => 'wardrobe-fitting',
            'subcategory' => 'Sliding Door Fittings',
            'name' => 'Slim Track Fitting 60 KG',
            'tagline' => 'Premium Soft Close Sliding Wardrobe Fitting',
            'slug' => 'slim-track-sliding-fitting-60kg',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Advanced sliding wardrobe roller kit, featuring double-sided soft closing dampers.',
            'features' => [
                'Double-sided soft close sliding dampeners',
                'Use for both glass and wooden wardrobe doors',
                'Smooth 8-wheel silent nylon runners',
                'Heavy-load capacity: 60 kg per door'
            ],
            'finishes' => ['Silver Track Finish'],
            'warranty' => '10 Years Warranty',
            'tech_specs' => [
                'Door Weight Capacity' => '60 KG per door',
                'Damping' => '2-way soft close pump',
                'Application' => 'Glass & Wooden sliding shutters'
            ],
            'sizes' => [
                ['code' => 'GSF - 201', 'size' => '60 KG Load Capacity Set', 'mrp' => 2550, 'unit' => 'Set'],
            ]
        ],
        'slim-track-fitting-60b' => [
            'id' => 'slim-track-fitting-60b',
            'category_id' => 'wardrobe-fitting',
            'subcategory' => 'Sliding Door Fittings',
            'name' => 'Slim Track Fitting 60 KG (Type B)',
            'tagline' => 'Heavy-Duty 60 kg Soft-Close Wardrobe Rails',
            'slug' => 'slim-track-sliding-fitting-60kg-b',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Features robust soft close cylinders for sliding wooden and glass shutters.',
            'features' => [
                '2 side soft close mechanism',
                'Compatible with heavy wooden and glass wardrobe shutters',
                'Load rating: 60 kg per door',
                'Tested for 100,000 cycles'
            ],
            'finishes' => ['Silver Track Finish'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GSF - 202 (60K)', 'size' => '60 KG Load Capacity Set', 'mrp' => 2550, 'unit' => 'Set'],
            ]
        ],
        'slim-track-fitting-50' => [
            'id' => 'slim-track-fitting-50',
            'category_id' => 'wardrobe-fitting',
            'subcategory' => 'Sliding Door Fittings',
            'name' => 'Slim Track Fitting 50 KG',
            'tagline' => 'Standard Soft-Close Wardrobe Fitting',
            'slug' => 'slim-track-sliding-fitting-50kg',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Standard sliding wardrobe track rollers, supporting loads up to 50 kg.',
            'features' => [
                'Soft close mechanism built-in',
                'Dual side dampeners',
                'Load rating: 50 kg per door'
            ],
            'finishes' => ['Silver Track Finish'],
            'warranty' => '5 Years Warranty',
            'sizes' => [
                ['code' => 'GSF - 202 (50K)', 'size' => '50 KG Load Capacity Set', 'mrp' => 2150, 'unit' => 'Set'],
            ]
        ],
        'opk-sliding-system' => [
            'id' => 'opk-sliding-system',
            'category_id' => 'wardrobe-fitting',
            'subcategory' => 'Sliding Door Fittings',
            'name' => 'OPK Sliding System',
            'tagline' => 'High-End OPK System sliding Wardrobe Fittings',
            'slug' => 'opk-sliding-system-fitting',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Original OPK system sliding rollers, featuring soft close dampers.',
            'features' => [
                'Double-sided soft close damping',
                '1-Door roller kit',
                'Engineered to support heavy door panels up to 50 kg'
            ],
            'finishes' => ['Standard OPK Grey'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GSF - 203', 'size' => '50 KG Load Capacity Set', 'mrp' => 2990, 'unit' => 'Set'],
            ]
        ],
        'soft-close-runner-8' => [
            'id' => 'soft-close-runner-8',
            'category_id' => 'wardrobe-fitting',
            'subcategory' => 'Sliding Door Fittings',
            'name' => '8 Wheel Soft Close Runner',
            'tagline' => '8-Wheel Heavy Duty Sliding Door Roller Kit',
            'slug' => '8-wheel-soft-close-runner',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Heavy duty 8-wheel sliding runner kit, engineered to carry doors up to 100 kg.',
            'features' => [
                '8-wheel nylon rollers for smooth movement',
                'Soft close system on both ends',
                'Runner capacity: 80 kg to 100 kg per door'
            ],
            'finishes' => ['Zinc Silver Steel'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GSF - 204', 'size' => '100 KG Load Capacity Set', 'mrp' => 3750, 'unit' => 'Set'],
            ]
        ],
        'slim-track' => [
            'id' => 'slim-track',
            'category_id' => 'wardrobe-fitting',
            'subcategory' => 'Sliding Door Fittings',
            'name' => 'Slim Track',
            'tagline' => 'Aluminium Sliding Wardrobe Door Profile Track',
            'slug' => 'slim-sliding-door-track',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Heavy-gauge aluminium top and bottom sliding tracks.',
            'features' => [
                'Heavy-gauge anodized aluminium profile',
                'Available in 6.5 FT, 8 FT, and 12 FT standard lengths',
                'Anodized surface finish'
            ],
            'finishes' => ['Anodized Aluminium Silver'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GST - 101 (6.5)', 'size' => '6.5 Feet Length', 'mrp' => 1560, 'unit' => 'Set'],
                ['code' => 'GST - 101 (8)', 'size' => '8 Feet Length', 'mrp' => 1920, 'unit' => 'Set'],
                ['code' => 'GST - 101 (12)', 'size' => '12 Feet Length', 'mrp' => 2880, 'unit' => 'Set'],
            ]
        ],
        'slim-track-cap' => [
            'id' => 'slim-track-cap',
            'category_id' => 'wardrobe-fitting',
            'subcategory' => 'Sliding Door Fittings',
            'name' => 'Slim Track with Cap',
            'tagline' => 'Aluminium Sliding Track with Protective Cover Cap',
            'slug' => 'slim-sliding-track-with-cap',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Aluminium sliding track profiling, including a snap-on cover cap.',
            'features' => [
                'Snap-on cover cap conceals installation screws',
                'Heavy-gauge anodized aluminium',
                'Sizes: 6.5 FT, 8 FT, and 12 FT'
            ],
            'finishes' => ['Anodized Aluminium Silver'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GST - 102 (6.5)', 'size' => '6.5 Feet Length', 'mrp' => 1950, 'unit' => 'Set'],
                ['code' => 'GST - 102 (8)', 'size' => '8 Feet Length', 'mrp' => 2400, 'unit' => 'Set'],
                ['code' => 'GST - 102 (12)', 'size' => '12 Feet Length', 'mrp' => 3600, 'unit' => 'Set'],
            ]
        ],
        'single-sliding-track' => [
            'id' => 'single-sliding-track',
            'category_id' => 'wardrobe-fitting',
            'subcategory' => 'Sliding Door Fittings',
            'name' => 'Single Sliding Track',
            'tagline' => 'Single Sliding Wardrobe Door Profile Track',
            'slug' => 'single-sliding-door-track',
            'image' => '/images/products/wardrobe-organizer.png',
            'gallery' => ['/images/products/wardrobe-organizer.png'],
            'description' => 'Heavy-gauge aluminium single track profiling for sliding shutters.',
            'features' => [
                'Anodized single profile track',
                'Sizes: 8 FT and 12 FT'
            ],
            'finishes' => ['Anodized Aluminium Silver'],
            'warranty' => '10 Years Warranty',
            'sizes' => [
                ['code' => 'GST - 103 (8)', 'size' => '8 Feet Length', 'mrp' => 2980, 'unit' => 'Set'],
                ['code' => 'GST - 103 (12)', 'size' => '12 Feet Length', 'mrp' => 4450, 'unit' => 'Set'],
            ]
        ],
    ]
];
