    <!-- FLOATING ACTIONS -->
    <a href="<?php echo $wa_link; ?>" target="_blank" class="floating-wa" title="Konsultasi WA Fast Response">
        <i class="fab fa-whatsapp"></i>
    </a>

    <button id="backToTop" class="back-to-top" title="Kembali ke Atas">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- MODAL GALLERY LIGHTBOX -->
    <div id="galleryModal" class="modal">
        <span class="modal-close">&times;</span>
        <div class="modal-content">
            <button class="modal-prev" aria-label="Gambar Sebelumnya"><i class="fas fa-chevron-left"></i></button>
            <img id="modalImage" src="" alt="Hasil Produksi Terpilih">
            <button class="modal-next" aria-label="Gambar Selanjutnya"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div id="modalCaption"></div>
        <div id="modalCounter" class="modal-counter"></div>
    </div>

    <!-- Inject Dynamic Fabric Data from PHP to JS -->
    <script>
        window.PHP_FABRIC_DATA = <?php echo json_encode($fabrics); ?>;
    </script>

    <!-- SCRIPTS -->
    <script src="script.js?v=<?php echo filemtime(__DIR__ . '/../script.js'); ?>"></script>
</body>
</html>
