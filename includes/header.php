<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($site_name); ?> - <?php echo htmlspecialchars($site_tagline); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($site_name); ?> adalah pusat pembuatan seragam, kemeja PDH/PDL, kaos, jaket, dan jas almamater berkualitas tinggi dengan harga konveksi terjangkau dan garansi 100%.">
    <link rel="stylesheet" href="style.css?v=<?php echo filemtime(__DIR__ . '/../style.css'); ?>">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- TOP ANNOUNCEMENT MARQUEE BAR -->
    <div class="top-bar">
        <div class="marquee-content">
            <?php 
            // Loop marquee announcements twice for seamless animation loop
            for ($i = 0; $i < 2; $i++): 
                foreach ($announcements as $item): ?>
                    <span><i class="<?php echo $item['icon']; ?>"></i> <?php echo htmlspecialchars($item['text']); ?></span>
                <?php endforeach; 
            endfor; ?>
        </div>
    </div>

    <!-- HEADER / NAVIGATION -->
    <header>
        <div class="container navbar">
            <a href="#" class="logo">
                Kahfi<span>Konveksi</span>
            </a>
            
            <ul class="nav-links">
                <?php foreach ($nav_links as $url => $label): ?>
                    <li><a href="<?php echo $url; ?>"><?php echo htmlspecialchars($label); ?></a></li>
                <?php endforeach; ?>
            </ul>

            <div style="display: flex; align-items: center; gap: 12px;">
                <button id="themeToggle" class="theme-toggle-btn" aria-label="Toggle Theme" title="Ubah Mode Gelap / Terang">
                    <i class="fas fa-moon"></i>
                </button>
                <a href="<?php echo $wa_link; ?>" target="_blank" class="btn-primary">
                    <i class="fab fa-whatsapp"></i> Konsultasi WA
                </a>
                <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>
