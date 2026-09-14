    <!-- INTERACTIVE MATERIAL SHOWCASE TABS -->
    <section id="bahan" class="fabric-section">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-subtitle">Katalog Spesifikasi Bahan</span>
                <h2 class="section-title">Pilih Bahan Kain Terbaik</h2>
                <p class="section-desc">Klik pada tab bahan di bawah untuk melihat spesifikasi detail, karakteristik, dan indikator performa kain.</p>
            </div>

            <div class="fabric-tabs reveal">
                <?php 
                $is_first = true;
                foreach ($fabrics as $key => $fabric): 
                ?>
                    <button class="btn-tab <?php echo $is_first ? 'active' : ''; ?>" data-fabric="<?php echo $key; ?>">
                        <?php echo htmlspecialchars($fabric['name']); ?>
                    </button>
                <?php 
                    $is_first = false;
                endforeach; 
                ?>
            </div>

            <?php $default_fabric = reset($fabrics); ?>
            <div class="fabric-content-box reveal">
                <div class="fabric-info">
                    <h3 id="fabricTitle"><?php echo htmlspecialchars($default_fabric['title']); ?></h3>
                    <p id="fabricDesc"><?php echo htmlspecialchars($default_fabric['desc']); ?></p>
                    
                    <ul class="specs-list" id="fabricSpecs">
                        <?php foreach ($default_fabric['specs'] as $spec): ?>
                            <li><i class="fas fa-check-circle"></i> <?php echo htmlspecialchars($spec); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="fabric-rating-grid">
                    <div class="rating-item">
                        <label>Tingkat Kenyamanan / Adem</label>
                        <div class="progress-bar">
                            <div class="progress-fill" id="fillBreathability" style="width: <?php echo $default_fabric['breathability']; ?>%;"></div>
                        </div>
                    </div>
                    <div class="rating-item">
                        <label>Ketahanan & Keawetan Bahan</label>
                        <div class="progress-bar">
                            <div class="progress-fill" id="fillDurability" style="width: <?php echo $default_fabric['durability']; ?>%;"></div>
                        </div>
                    </div>
                    <div class="rating-item">
                        <label>Kelembutan Tekstur Fabrics</label>
                        <div class="progress-bar">
                            <div class="progress-fill" id="fillSoftness" style="width: <?php echo $default_fabric['softness']; ?>%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
