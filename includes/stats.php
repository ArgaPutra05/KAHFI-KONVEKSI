    <!-- STATS COUNTER -->
    <section class="stats-section">
        <div class="container stats-grid">
            <?php foreach ($stats as $stat): ?>
                <div class="stat-item reveal">
                    <h3 class="stat-counter" data-target="<?php echo $stat['target']; ?>" data-suffix="<?php echo htmlspecialchars($stat['suffix']); ?>">0</h3>
                    <p><?php echo htmlspecialchars($stat['label']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
