<?php
// config.php - Master Configuration & Dynamic Data Source

$site_name = "Kahfi Konveksi";
$site_tagline = "Jasa Jahit & Pembuatan Seragam Premium";
$site_slogan = "#Ramah #Amanah #Berkah";
$site_logo = "logo.png";
$phone_number = "628139120684";
$phone_formatted = "+62 813-9120-684";
$wa_default_msg = "Halo Kahfi Konveksi, saya ingin konsultasi pemesanan seragam.";
$wa_link = "https://wa.me/" . $phone_number . "?text=" . urlencode($wa_default_msg);
$ig_username = "kahfi.konveksi";
$ig_link = "https://instagram.com/" . $ig_username;
$current_year = date("Y");

// Helper function to safely scan image files for galleries
function get_gallery_images($dir) {
    $dir_path = __DIR__ . '/' . $dir;
    $files = glob($dir_path . '/*.{png,jpg,jpeg,webp,jpe,PNG,JPG,JPEG,WEBP}', GLOB_BRACE);
    if (!is_array($files)) {
        return [];
    }
    // Convert absolute path back to relative path for HTML src
    $relative_files = array_map(function($f) use ($dir) {
        return $dir . '/' . basename($f);
    }, $files);
    natsort($relative_files);
    return array_values($relative_files);
}

$pdh_images_files = get_gallery_images('pdh');
$pdh_images_list = !empty($pdh_images_files) ? implode('|', $pdh_images_files) : '';
$pdh_first_img = !empty($pdh_images_files) ? $pdh_images_files[0] : 'pdh/1.png';

$jaket_images_files = get_gallery_images('jaket');
$jaket_images_list = !empty($jaket_images_files) ? implode('|', $jaket_images_files) : '';
$jaket_first_img = !empty($jaket_images_files) ? $jaket_images_files[0] : 'jaket/jaket1.png';

$jersey_images_files = get_gallery_images('jersey');
$jersey_images_list = !empty($jersey_images_files) ? implode('|', $jersey_images_files) : 'https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=800';
$jersey_first_img = !empty($jersey_images_files) ? $jersey_images_files[0] : 'https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=600';

$almamater_images_files = get_gallery_images('almamater');
$almamater_images_list = !empty($almamater_images_files) ? implode('|', $almamater_images_files) : 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=800';
$almamater_first_img = !empty($almamater_images_files) ? $almamater_images_files[0] : 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=600';

$kaos_images_files = get_gallery_images('kaos');
$kaos_images_list = !empty($kaos_images_files) ? implode('|', $kaos_images_files) : 'https://images.unsplash.com/photo-1521572267360-ee0c2909d518?q=80&w=800|https://images.unsplash.com/photo-1562157873-818bc0726f68?q=80&w=800';
$kaos_first_img = !empty($kaos_images_files) ? $kaos_images_files[0] : 'https://images.unsplash.com/photo-1521572267360-ee0c2909d518?q=80&w=600';

$pdl_images_files = get_gallery_images('pdl');
$pdl_images_list = !empty($pdl_images_files) ? implode('|', $pdl_images_files) : 'https://images.unsplash.com/photo-1621184455862-c163dfb30e0f?q=80&w=800';
$pdl_first_img = !empty($pdl_images_files) ? $pdl_images_files[0] : 'https://images.unsplash.com/photo-1621184455862-c163dfb30e0f?q=80&w=600';

// Navigation links
$nav_links = [
    '#home' => 'Home',
    '#keunggulan' => 'Keunggulan',
    '#layanan' => 'Layanan',
    '#bahan' => 'Bahan Kain',
    '#produk' => 'Katalog',
    '#alur' => 'Alur Order',
    '#faq' => 'FAQ'
];

// Marquee announcements
$announcements = [
    ['icon' => 'fas fa-shield-alt', 'text' => 'GARANSI RETUR 100% ATAU REVISI GRATIS'],
    ['icon' => 'fas fa-pencil-ruler', 'text' => 'FREE CONSULTATION & DESAIN MOCKUP 3D'],
    ['icon' => 'fas fa-shipping-fast', 'text' => 'PENGERJAAN TEPAT WAKTU & KIRIM SE-INDONESIA'],
    ['icon' => 'fas fa-tags', 'text' => 'HARGA DIRECT KONVEKSI TANPA PERANTARA']
];

// Features / Keunggulan
$features = [
    [
        'icon' => 'fas fa-paint-brush',
        'title' => 'Free Desain & Mockup 3D',
        'desc' => 'Belum punya desain? Tim desainer profesional kami siap membantu membuatkan gambar visualisasi 3D secara gratis sebelum produksi.'
    ],
    [
        'icon' => 'fas fa-shield-alt',
        'title' => 'Garansi Retur 100%',
        'desc' => 'Setiap produk melewati Quality Control berlapis. Jika ada cacat produksi atau kesalahan ukuran dari pihak kami, kami ganti 100%.'
    ],
    [
        'icon' => 'fas fa-cut',
        'title' => 'Jahitan Double-Stitch Rapi',
        'desc' => 'Menggunakan mesin jahit & komputer modern dengan pola presisi, jahitan lebih rapat, kokoh, serta tahan dipakai bertahun-tahun.'
    ],
    [
        'icon' => 'fas fa-hand-holding-usd',
        'title' => 'Harga Direct Konveksi',
        'desc' => 'Dapatkan penawaran harga terbaik langsung dari pabrik konveksi pertama tanpa biaya tersembunyi atau perantara broker.'
    ],
    [
        'icon' => 'fas fa-swatchbook',
        'title' => 'Bebas Custom Bahan & Warna',
        'desc' => 'Pilihan katalog kain terlengkap mulai dari Combed, Drill, Ripstop, Taslan, hingga Fleece dengan ratusan varian warna kain.'
    ],
    [
        'icon' => 'fas fa-truck-loading',
        'title' => 'Pengerjaan Cepat & On-Time',
        'desc' => 'Kapasitas produksi besar didukung sistem manajemen tepat waktu untuk memastikan pesanan Anda selesai sesuai jadwal deadline.'
    ]
];

// Services / Kategori Seragam
$services = [
    [
        'badge' => 'POPULER',
        'icon' => 'fas fa-tshirt',
        'title' => 'Kaos',
        'desc' => 'Bahan Cotton Combed 24s/30s adem dengan opsi Sablon Plastisol, DTF, atau Bordir Komputer presisi.'
    ],
    [
        'badge' => 'BEST SELLER',
        'icon' => 'fas fa-user-tie',
        'title' => 'Seragam Kantor / PDH',
        'desc' => 'Kemeja kerja formal/semi-formal berpotongan ergonomis menggunakan bahan Nagata Drill & American Drill.'
    ],
    [
        'badge' => 'OUTDOOR',
        'icon' => 'fas fa-user-ninja',
        'title' => 'Kemeja PDL Lapangan',
        'desc' => 'Kemeja tactical bahan Ripstop tahan sobek lengkap dengan ventilasi udara bagian belakang.'
    ],
    [
        'badge' => 'PREMIUM',
        'icon' => 'fas fa-vest-patches',
        'title' => 'Jaket & Hoodie',
        'desc' => 'Jaket Bomber, Windbreaker, Coach Jacket, dan Hoodie Fleece tebal nyaman berstandar apparel clothing.'
    ],
    [
        'badge' => 'FORMAL',
        'icon' => 'fas fa-user-graduate',
        'title' => 'Jas Almamater',
        'desc' => 'Jas instansi & kampus bahan High Twist / Taipan Drill berfuring halus dan menggunakan busa pundak profesional.'
    ],
    [
        'badge' => 'TACTICAL',
        'icon' => 'fas fa-vest',
        'title' => 'Rompi Lapangan & Event',
        'desc' => 'Rompi kerja, rompi safety scotchlite, dan rompi organisasi dengan banyak saku fungsional.'
    ]
];

// Fabrics Data Specification
$fabrics = [
    'combed' => [
        'name' => 'Cotton Combed',
        'title' => 'Cotton Combed 24s / 30s Premium',
        'desc' => 'Bahan kaos 100% serat kapas murni. Memiliki tekstur super halus, menyerap keringat dengan sangat baik, adem, dan tidak berbulu saat dicuci.',
        'image' => 'bahan/combed.jpg',
        'specs' => [
            '100% Cotton Organic',
            'Gramasi: 170-190 gsm',
            'Sablon: Plastisol & DTF High-Res',
            'Cocok untuk Event, Komunitas, Brand Distro'
        ],
        'breathability' => 95,
        'durability' => 88,
        'softness' => 98
    ],
    'drill' => [
        'name' => 'Nagata / American Drill',
        'title' => 'American & Nagata Drill',
        'desc' => 'Kain bertulang diagonal yang kokoh, tidak gampang kusut, serta memiliki warna yang tahan lama. Pilihan nomor 1 untuk Kemeja PDH/PDL.',
        'image' => 'bahan/drill.jpg',
        'specs' => [
            'Campuran Cotton & Polyester High Density',
            'Bordir Komputer Presisi Tinggi',
            'Tahan Gesekan & Cuci Berulang',
            'Cocok untuk Seragam Kantor, Kampus, & Organisasi'
        ],
        'breathability' => 85,
        'durability' => 96,
        'softness' => 82
    ],
    'ripstop' => [
        'name' => 'Ripstop Tactical',
        'title' => 'Ripstop Outdoor Tactical',
        'desc' => 'Kain dengan struktur serat kotak-kotak khusus anti-sobek. Sangat kuat untuk aktivitas luar ruangan dan kondisi ekstrem.',
        'image' => 'bahan/ripstop.jpg',
        'specs' => [
            'Serat Sintetis Anti Tear (Tahan Sobek)',
            'Fitur Air-Ventilaion System',
            'Water-repellent Coating Available',
            'Cocok untuk PDL Lapangan, Komunitas Outdoor'
        ],
        'breathability' => 80,
        'durability' => 99,
        'softness' => 75
    ],
    'taslan' => [
        'name' => 'Taslan JN & Fleece',
        'title' => 'Taslan JN & Fleece Premium',
        'desc' => 'Bahan jaket berteknologi windproof & water-resistant. Dilengkapi dengan furing jaring atau hyget adem di bagian dalam.',
        'image' => 'bahan/taslan.jpg',
        'specs' => [
            'Waterproof & Windproof Level Medium-High',
            'Inner Furing Adem / Cotton Fleece',
            'Bordir / Emblem Kustom',
            'Cocok untuk Jaket Bombers, Windbreaker, Coach'
        ],
        'breathability' => 78,
        'durability' => 94,
        'softness' => 86
    ],
    'hightwist' => [
        'name' => 'High Twist Almamater',
        'title' => 'High Twist Premium Semi-Jas',
        'desc' => 'Kain halus berkilau elegan, jatuhnya rapi di badan, dan memberikan kesan sangat formal & profesional untuk almamater.',
        'image' => 'bahan/hightwist.jpg',
        'specs' => [
            'Tampilan Glossy Rapi',
            'Dilengkapi Padded Shoulder (Busa Pundak)',
            'Full Furing Satin Silk Inner',
            'Cocok untuk Jas Almamater Kampus & Sekolah'
        ],
        'breathability' => 82,
        'durability' => 92,
        'softness' => 90
    ]
];

// Product Portfolio Catalog
$products = [
    [
        'category' => 'baju',
        'title' => 'Kaos Combed & Polo Shirt',
        'desc' => 'Menggunakan bahan Cotton Combed 30s adem dengan sablon plastisol hd presisi tinggi anti pecah.',
        'cover' => $kaos_first_img,
        'images' => $kaos_images_list,
        'btn_text' => !empty($kaos_images_files) ? 'Lihat ' . count($kaos_images_files) . ' Foto Kaos' : 'Buka Galeri Foto'
    ],
    [
        'category' => 'pdh',
        'title' => 'Kemeja PDH',
        'desc' => 'Bahan American Drill dan Nagata Drill bermutu tinggi dengan bordir komputer tajam dan kancing tersembunyi.',
        'cover' => $pdh_first_img,
        'images' => $pdh_images_list,
        'btn_text' => !empty($pdh_images_files) ? 'Lihat ' . count($pdh_images_files) . ' Foto PDH' : 'Buka Galeri Foto'
    ],
    [
        'category' => 'pdl',
        'title' => 'Kemeja PDL Tactical',
        'desc' => 'Kain Ripstop kokoh tahan sobek, saku velcro serbaguna, dan jaring sistem sirkulasi udara.',
        'cover' => $pdl_first_img,
        'images' => $pdl_images_list,
        'btn_text' => !empty($pdl_images_files) ? 'Lihat ' . count($pdl_images_files) . ' Foto PDL' : 'Buka Galeri Foto'
    ],
    [
        'category' => 'jaket',
        'title' => 'Jaket',
        'desc' => 'Bahan Taslan JN anti angin dengan inner furing cotton adem, zipper YKK anti macet.',
        'cover' => $jaket_first_img,
        'images' => $jaket_images_list,
        'btn_text' => 'Lihat ' . count($jaket_images_files) . ' Foto Jaket'
    ],
    [
        'category' => 'jas',
        'title' => 'Jas Almamater Kampus',
        'desc' => 'Bahan High Twist premium dengan finishing semi-jas resmi, full furing, dan busa bahu.',
        'cover' => $almamater_first_img,
        'images' => $almamater_images_list,
        'btn_text' => !empty($almamater_images_files) ? 'Lihat ' . count($almamater_images_files) . ' Foto Almamater' : 'Buka Galeri Foto'
    ],
    [
        'category' => 'jersey',
        'title' => 'Jersey Printing Custom',
        'desc' => 'Bahan Dryfit / Milano adem menyerap keringat dengan teknik Full Print Sublimasi warna tajam & tidak luntur.',
        'cover' => $jersey_first_img,
        'images' => $jersey_images_list,
        'btn_text' => !empty($jersey_images_files) ? 'Lihat ' . count($jersey_images_files) . ' Foto Jersey' : 'Buka Galeri Foto'
    ]
];

// Timeline / Alur Order
$timeline_steps = [
    1 => [
        'title' => 'Konsultasi Dengan MinKaf', 
        'desc' => 'Diskusikan ide, kebutuhan seragam, dan konsep pakaian bersama Admin MinKaf.',
        'icon' => 'fas fa-comments'
    ],
    2 => [
        'title' => 'DP 100K Masuk Proses Desain', 
        'desc' => 'Pembayaran komitmen awal Rp 100.000 untuk pembuatan visualisasi desain / mockup 3D.',
        'icon' => 'fas fa-palette'
    ],
    3 => [
        'title' => 'Finalisasi Design, Jumlah, & Bahan', 
        'desc' => 'Penyempurnaan mockup 3D, penentuan pilihan bahan kain, size chart, dan total kuantitas.',
        'icon' => 'fas fa-clipboard-check'
    ],
    4 => [
        'title' => 'Konfirmasi Order & DP 50%', 
        'desc' => 'Konfirmasi kesepakatan order resmi dan pembayaran DP produksi sebesar 50%.',
        'icon' => 'fas fa-file-invoice-dollar'
    ],
    5 => [
        'title' => 'Proses Produksi Hingga Selesai', 
        'desc' => 'Proses pemotongan bahan, pembordiran/sablon, penjahitan presisi, dan Quality Control berlapis.',
        'icon' => 'fas fa-industry'
    ],
    6 => [
        'title' => 'Pelunasan', 
        'desc' => 'Inspeksi hasil fisik produk produksi dan pembayaran pelunasan sisa tagihan pesanan.',
        'icon' => 'fas fa-hand-holding-usd'
    ],
    7 => [
        'title' => 'Pengiriman Ke Alamat Tujuan', 
        'desc' => 'Pengemasan rapi dan pengiriman pesanan ke alamat tujuan Anda di seluruh Indonesia.',
        'icon' => 'fas fa-shipping-fast'
    ]
];

// Stats Counters
$stats = [
    ['target' => 10000, 'suffix' => '+', 'label' => 'Pcs Seragam Diproduksi'],
    ['target' => 200, 'suffix' => '+', 'label' => 'Klien Instansi & Komunitas'],
    ['target' => 99, 'suffix' => '.8%', 'label' => 'Ketepatan Waktu Delivery'],
    ['target' => 100, 'suffix' => '%', 'label' => 'Garansi Kualitas Retur']
];

// FAQs
$faqs = [
    [
        'question' => 'Berapa minimal order quantity (MOQ) di Kahfi Konveksi?',
        'answer' => 'Minimal order untuk Kaos, Kemeja PDH/PDL, dan Jaket adalah 12 pcs per desain. Semakin banyak jumlah pesanan Anda, semakin murah harga per pcs yang didapatkan.',
        'active' => true
    ],
    [
        'question' => 'Berapa lama estimasi waktu pengerjaan produksi?',
        'answer' => 'Waktu pengerjaan standar adalah 10 hari kerja tergantung jumlah pesanan dan kompleksitas desain. Kami juga melayani pengerjaan kilat/express sesuai kesepakatan.',
        'active' => false
    ],
    [
        'question' => 'Apakah bisa bantu buatkan desain jika belum punya mockup?',
        'answer' => 'Tentu saja! Tim desainer Kahfi Konveksi akan membantu membuatkan visualisasi mockup 3D secara <strong>GRATIS</strong> hingga sesuai dengan keinginan Anda.',
        'active' => false
    ],
    [
        'question' => 'Bagaimana sistem garansi jika ada barang yang rusak / cacat?',
        'answer' => 'Kami memberikan garansi 100% perbaikan atau ganti baru secara gratis jika terjadi cacat jahitan, salah warna, atau ukuran yang tidak sesuai kesepakatan awal.',
        'active' => false
    ]
];
