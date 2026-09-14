    <!-- LAYANAN PRODUSEN -->
    <section id="layanan" class="services">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-subtitle">Layanan Produksi Kami</span>
                <h2 class="section-title">Kategori Seragam & Apparel</h2>
                <p class="section-desc">Spesialis pembuatan berbagai jenis pakaian formal, casual, maupun atribut outdoor untuk organisasi, kantor, & event.</p>
            </div>

            <div class="services-grid">
                <?php foreach ($services as $service): ?>
                    <div class="service-card reveal">
                        <span class="service-badge"><?php echo htmlspecialchars($service['badge']); ?></span>
                        <div class="service-icon-wrap"><i class="<?php echo $service['icon']; ?>"></i></div>
                        <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                        <p><?php echo htmlspecialchars($service['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
