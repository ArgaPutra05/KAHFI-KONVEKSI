    <!-- GOOGLE RATING & LOKASI WORKSHOP SECTION -->
    <section id="lokasi" class="location-section">
        <div class="container reveal">
            <div class="section-header">
                <span class="section-subtitle"><i class="fab fa-google"></i> Google Business Profile</span>
                <h2 class="section-title">Rating Pelanggan & Lokasi</h2>
                <p class="section-desc">Kunjungi workshop kami di Kartasura atau lihat ulasan asli pelanggan kami di Google Maps.</p>
            </div>

            <div class="location-grid">
                <!-- Left Column: Google Rating & Featured Review Card -->
                <div class="google-review-box">
                    <div class="google-rating-header">
                        <div class="google-brand">
                            <i class="fab fa-google google-g-logo"></i>
                            <div>
                                <h3><?php echo htmlspecialchars($site_name); ?></h3>
                                <p class="google-address-subtitle"><i class="fas fa-map-marker-alt"></i> Kartasura, Sukoharjo, Jawa Tengah</p>
                            </div>
                        </div>
                        <a href="<?php echo $google_maps_search_url; ?>" target="_blank" class="btn-google-review">
                            <i class="fas fa-pen"></i> Tulis ulasan
                        </a>
                    </div>

                    <div class="rating-summary-bar">
                        <span class="rating-score"><?php echo $google_rating; ?></span>
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-count"><?php echo $google_reviews_count; ?> ulasan</span>
                    </div>

                    <!-- Topic Filter Pills from Screenshot -->
                    <div class="review-topic-pills">
                        <span class="topic-pill active">Semua</span>
                        <span class="topic-pill">neat stitching <small>12</small></span>
                        <span class="topic-pill">uniform <small>17</small></span>
                        <span class="topic-pill">small party uniforms <small>2</small></span>
                        <span class="topic-pill">uniform making <small>4</small></span>
                    </div>

                    <!-- Real Customer Review Card (Gideon) -->
                    <div class="google-review-card">
                        <div class="reviewer-profile">
                            <div class="avatar-wrapper">
                                <img src="https://ui-avatars.com/api/?name=Gideon&background=eab308&color=0f172a&bold=true" alt="Gideon Ulasan Google" class="reviewer-avatar">
                            </div>
                            <div class="reviewer-info">
                                <h4>Gideon</h4>
                                <span class="reviewer-meta">1 ulasan</span>
                            </div>
                            <i class="fab fa-google reviewer-google-icon" title="Verified Google Review"></i>
                        </div>
                        <div class="review-stars-line">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="review-date">sebulan lalu</span>
                        </div>
                        <p class="review-text">"pelayanan di kahfi knveksi sangat baik dan responsif. hasil konveksinya juga rapi, sesuai pesanan, dan kualitas bahannya bagus."</p>
                    </div>

                    <div class="google-action-footer">
                        <a href="<?php echo $google_maps_search_url; ?>" target="_blank" class="btn-maps-link">
                            <i class="fas fa-external-link-alt"></i> Lihat Semua <?php echo $google_reviews_count; ?> Ulasan di Google Maps
                        </a>
                    </div>
                </div>

                <!-- Right Column: Workshop Address & Interactive Map -->
                <div class="location-details-box">
                    <div class="address-card">
                        <div class="address-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="address-content">
                            <h3>Alamat Workshop Kahfi Konveksi</h3>
                            <p class="full-address"><?php echo htmlspecialchars($google_maps_address); ?></p>
                            <div class="address-meta">
                                <span><i class="far fa-clock"></i> Senin - Sabtu: 08.00 - 17.00 WIB</span>
                            </div>
                            <div class="address-cta">
                                <a href="<?php echo $google_maps_search_url; ?>" target="_blank" class="btn-directions">
                                    <i class="fas fa-directions"></i> Petunjuk Arah (Google Maps)
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Embedded Google Map -->
                    <div class="map-container">
                        <iframe 
                            src="<?php echo $google_maps_embed_url; ?>" 
                            width="100%" 
                            height="280" 
                            style="border:0; border-radius: 16px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Lokasi Kahfi Konveksi Kartasura">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT & FOOTER SECTION -->
    <section id="kontak" class="contact-section">
        <div class="container reveal">
            <span class="section-subtitle">Konsultasi Desain & Penawaran Gratis</span>
            <h2 class="section-title">Siap Wujudkan Seragam Impian Anda?</h2>
            <p class="section-desc" style="max-width: 600px; margin: 0 auto;">Punya pertanyaan mengenai jenis bahan, size chart, atau ingin nego harga grosir? Hubungi tim kami via WhatsApp sekarang juga!</p>

            <div class="social-links">
                <a href="<?php echo $wa_link; ?>" target="_blank" class="card-link wa">
                    <i class="fab fa-whatsapp fa-lg"></i>
                    <span>Chat Via WhatsApp</span>
                </a>

                <a href="<?php echo $ig_link; ?>" target="_blank" class="card-link ig">
                    <i class="fab fa-instagram fa-lg"></i>
                    <span>@<?php echo htmlspecialchars($ig_username); ?></span>
                </a>

                <a href="<?php echo $google_maps_search_url; ?>" target="_blank" class="card-link maps">
                    <i class="fas fa-map-marker-alt fa-lg"></i>
                    <span>Google Maps Workshop</span>
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo $current_year; ?> <?php echo htmlspecialchars($site_name); ?>. All Rights Reserved. <?php echo htmlspecialchars($google_maps_short_address); ?> &bull; Rating <?php echo $google_rating; ?> ★ (<?php echo $google_reviews_count; ?> Ulasan Google)</p>
        </div>
    </footer>
