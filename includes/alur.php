    <!-- ALUR ORDER / PROCESS TIMELINE -->
    <section id="alur" class="timeline-section">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-subtitle">Prosedur Pemesanan Transparan</span>
                <h2 class="section-title"><?php echo count($timeline_steps); ?> Langkah Mudah Pesan Seragam</h2>
                <p class="section-desc">Alur pemesanan jelas dan terpercaya dari konsultasi bersama MinKaf hingga pengiriman produk ke tangan Anda.</p>
            </div>

            <div class="timeline-grid">
                <?php foreach ($timeline_steps as $step_num => $step): ?>
                    <div class="timeline-step reveal">
                        <div class="step-num"><?php echo $step_num; ?></div>
                        <?php if (!empty($step['icon'])): ?>
                            <div class="step-icon"><i class="<?php echo htmlspecialchars($step['icon']); ?>"></i></div>
                        <?php endif; ?>
                        <h3><?php echo htmlspecialchars($step['title']); ?></h3>
                        <p><?php echo htmlspecialchars($step['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
