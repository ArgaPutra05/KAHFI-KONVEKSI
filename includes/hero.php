    <!-- HERO SECTION -->
    <section id="home" class="hero">
        <div class="container hero-grid">
            <div class="hero-content reveal">
                <div class="hero-tag">
                    <span class="dot"></span>
                    <span>TERPERCAYA SEJAK 2020 &bull; <?php echo htmlspecialchars($site_slogan); ?></span>
                </div>
                <h1>Wujudkan Seragam Impian <br><span class="highlight-text">Kualitas Premium</span> & <span class="text-yellow">Harga Konveksi</span></h1>
                <p>Solusi konveksi modern terpercaya untuk pembuatan Kaos, Kemeja PDH/PDL, Jaket, Rompi, dan Jas Almamater. Bebas pilih bahan, free konsultasi desain mockup, dengan jaminan mutu jahitan presisi.</p>
                <div class="hero-cta">
                    <a href="<?php echo $wa_link; ?>" target="_blank" class="btn-primary">
                        <i class="fab fa-whatsapp"></i> Order via WhatsApp
                    </a>
                    <a href="#lokasi" class="btn-secondary">
                        <i class="fas fa-map-marker-alt"></i> Lokasi & Rating Google
                    </a>
                </div>
            </div>

            <div class="hero-visual reveal">
                <div class="hero-card-main">
                    <img src="<?php echo htmlspecialchars($jaket_first_img); ?>" alt="<?php echo htmlspecialchars($site_name); ?> Premium Apparel" class="hero-preview-img">
                </div>
                <!-- Floating Badges -->
                <div class="hero-badge-float top-right">
                    <div class="badge-icon"><i class="fas fa-tshirt"></i></div>
                    <div class="badge-text">
                        <span>Total Pcs Diproduksi</span>
                        <strong>10.000+ Pcs</strong>
                    </div>
                </div>
                <div class="hero-badge-float bottom-left google-hero-badge">
                    <div class="badge-icon google-icon"><i class="fab fa-google"></i></div>
                    <div class="badge-text">
                        <span>Google Business Rating</span>
                        <strong><?php echo $google_rating; ?> <i class="fas fa-star" style="color: #eab308; font-size: 13px;"></i> (<?php echo $google_reviews_count; ?> Ulasan)</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
