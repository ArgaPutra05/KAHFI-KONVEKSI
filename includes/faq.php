    <!-- FAQ SECTION -->
    <section id="faq" class="faq-section">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-subtitle">Pertanyaan Umum</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-desc">Jawaban singkat untuk pertanyaan yang paling sering ditanyakan oleh calon pemesan.</p>
            </div>

            <div class="faq-container reveal">
                <?php foreach ($faqs as $faq): ?>
                    <div class="faq-item <?php echo $faq['active'] ? 'active' : ''; ?>">
                        <div class="faq-question">
                            <span><?php echo htmlspecialchars($faq['question']); ?></span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer" style="<?php echo $faq['active'] ? 'display: block;' : ''; ?>">
                            <?php echo $faq['answer']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
