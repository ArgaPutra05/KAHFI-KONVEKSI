    <!-- KEUNGGULAN SECTION -->
    <section id="keunggulan" class="why-us">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-subtitle">Mengapa Pilih <?php echo htmlspecialchars($site_name); ?>?</span>
                <h2 class="section-title">Keunggulan Utama Yang Kami Berikan</h2>
                <p class="section-desc">Kami memahami ekspektasi Anda terhadap seragam berkualitas tinggi. Berikut adalah alasan mengapa ratusan instansi & komunitas mempercayakan produksinya kepada kami.</p>
            </div>

            <div class="features-grid">
                <?php foreach ($features as $feature): ?>
                    <div class="feature-card reveal">
                        <div class="feature-icon"><i class="<?php echo $feature['icon']; ?>"></i></div>
                        <h3><?php echo htmlspecialchars($feature['title']); ?></h3>
                        <p><?php echo htmlspecialchars($feature['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
