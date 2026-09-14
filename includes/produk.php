    <!-- KATALOG HASIL PRODUKSI & GALERI -->
    <section id="produk" class="products">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-subtitle">Portfolio Real Production</span>
                <h2 class="section-title">Galeri Hasil Produksi Kami</h2>
                <p class="section-desc">Klik pada kategori filter untuk melihat portfolio kami, atau **klik gambar produk** untuk membuka gallery viewer.</p>
            </div>

            <div class="filter-buttons reveal">
                <button class="btn-filter active" data-target="semua">Semua Produk</button>
                <button class="btn-filter" data-target="baju">Kaos / Baju</button>
                <button class="btn-filter" data-target="pdh">Kemeja PDH</button>
                <button class="btn-filter" data-target="pdl">Kemeja PDL</button>
                <button class="btn-filter" data-target="jaket">Jaket & Hoodie</button>
                <button class="btn-filter" data-target="jas">Jas Almamater</button>
                <button class="btn-filter" data-target="jersey">Jersey</button>
            </div>

            <div class="products-grid">
                <?php foreach ($products as $item): ?>
                    <div class="product-item reveal" data-category="<?php echo htmlspecialchars($item['category']); ?>" data-images="<?php echo htmlspecialchars($item['images']); ?>">
                        <div class="product-img">
                            <img src="<?php echo htmlspecialchars($item['cover']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                            <div class="img-overlay">
                                <i class="fas fa-search-plus fa-2x"></i>
                                <span><?php echo htmlspecialchars($item['btn_text']); ?></span>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                            <p><?php echo htmlspecialchars($item['desc']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
