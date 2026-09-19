document.addEventListener('DOMContentLoaded', () => {

    // === 1. STICKY HEADER & BACK TO TOP BUTTON ===
    const header = document.querySelector('header');
    const backToTopBtn = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
            backToTopBtn?.classList.add('show');
        } else {
            header.classList.remove('scrolled');
            backToTopBtn?.classList.remove('show');
        }
    });

    backToTopBtn?.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // === 2. MOBILE NAV MENU TOGGLE ===
    const mobileToggle = document.getElementById('mobileToggle');
    const navLinks = document.querySelector('.nav-links');

    if (mobileToggle && navLinks) {
        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.className = 'fas fa-times';
            } else {
                icon.className = 'fas fa-bars';
            }
        });

        // Close menu when clicking nav item
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                mobileToggle.querySelector('i').className = 'fas fa-bars';
            });
        });
    }

    // === 3. SCROLL REVEAL ANIMATIONS (RE-TRIGGER ON EVERY SCROLL) ===
    const revealElements = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            } else {
                entry.target.classList.remove('active');
            }
        });
    }, { threshold: 0.15 });

    revealElements.forEach(el => revealObserver.observe(el));

    // === 4. ANIMATED COUNTER NUMBERS ===
    const counterElements = document.querySelectorAll('.stat-counter');

    const countUp = (el) => {
        const target = +el.getAttribute('data-target');
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 1800; // 1.8 seconds
        const stepTime = 20;
        const totalSteps = duration / stepTime;
        const increment = target / totalSteps;
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                el.innerText = target.toLocaleString('id-ID') + suffix;
                clearInterval(timer);
            } else {
                el.innerText = Math.floor(current).toLocaleString('id-ID') + suffix;
            }
        }, stepTime);
    };

    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        const statsObserver = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                counterElements.forEach(el => countUp(el));
            }
        }, { threshold: 0.3 });
        statsObserver.observe(statsSection);
    }

    // === 5. MATERIAL & FABRIC SHOWCASE TABS ===
    const fabricData = window.PHP_FABRIC_DATA || {
        'combed': {
            title: 'Cotton Combed 24s / 30s Premium',
            desc: 'Bahan kaos 100% serat kapas murni. Memiliki tekstur super halus, menyerap keringat dengan sangat baik, adem, dan tidak berbulu.',
            image: 'bahan/combed.jpg',
            specs: ['100% Cotton Organic', 'Gramasi: 170-190 gsm', 'Sablon: Plastisol & DTF High-Res', 'Cocok untuk Event, Komunitas, Brand Distro'],
            breathability: 95,
            durability: 88,
            softness: 98
        },
        'drill': {
            title: 'American & Nagata Drill',
            desc: 'Kain bertulang diagonal yang kokoh, tidak gampang kusut, serta memiliki warna yang tahan lama. Pilihan nomor 1 untuk Kemeja PDH/PDL.',
            image: 'bahan/drill.jpg',
            specs: ['Campuran Cotton & Polyester High Density', 'Bordir Komputer Presisi Tinggi', 'Tahan Gesekan & Cuci Berulang', 'Cocok untuk Seragam Kantor, Kampus, & Organisasi'],
            breathability: 85,
            durability: 96,
            softness: 82
        },
        'ripstop': {
            title: 'Ripstop Outdoor Tactical',
            desc: 'Kain dengan struktur serat kotak-kotak khusus anti-sobek. Sangat kuat untuk aktivitas luar ruangan dan kondisi ekstrem.',
            image: 'bahan/ripstop.jpg',
            specs: ['Serat Sintetis Anti Tear (Tahan Sobek)', 'Fitur Air-Ventilaion System', 'Water-repellent Coating Available', 'Cocok untuk PDL Lapangan, Komunitas Outdoor'],
            breathability: 80,
            durability: 99,
            softness: 75
        },
        'taslan': {
            title: 'Taslan JN & Fleece Premium',
            desc: 'Bahan jaket berteknologi windproof & water-resistant. Dilengkapi dengan furing jaring atau hyget adem di bagian dalam.',
            image: 'bahan/taslan.jpg',
            specs: ['Waterproof & Windproof Level Medium-High', 'Inner Furing Adem / Cotton Fleece', 'Bordir / Emblem Kustom', 'Cocok untuk Jaket Bombers, Windbreaker, Coach'],
            breathability: 78,
            durability: 94,
            softness: 86
        },
        'hightwist': {
            title: 'High Twist Premium Semi-Jas',
            desc: 'Kain halus berkilau elegan, jatuhnya rapi di badan, dan memberikan kesan sangat formal & profesional untuk almamater.',
            image: 'bahan/hightwist.jpg',
            specs: ['Tampilan Glossy Rapi', 'Dilengkapi Padded Shoulder (Busa Pundak)', 'Full Furing Satin Silk Inner', 'Cocok untuk Jas Almamater Kampus & Sekolah'],
            breathability: 82,
            durability: 92,
            softness: 90
        }
    };

    const fabricTabs = document.querySelectorAll('.btn-tab');
    const fabricTitle = document.getElementById('fabricTitle');
    const fabricDesc = document.getElementById('fabricDesc');
    const fabricSpecs = document.getElementById('fabricSpecs');
    const fabricImg = document.getElementById('fabricImg');
    const fillBreathability = document.getElementById('fillBreathability');
    const fillDurability = document.getElementById('fillDurability');
    const fillSoftness = document.getElementById('fillSoftness');

    fabricTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelector('.btn-tab.active')?.classList.remove('active');
            tab.classList.add('active');

            const key = tab.getAttribute('data-fabric');
            const data = fabricData[key];
            const fabricInfo = document.querySelector('.fabric-info');
            const fabricImgCard = document.querySelector('.fabric-image-card');

            if (data && fabricTitle) {
                const imageSrc = (data && data.image) ? data.image : `bahan/${key}.jpg`;
                if (fabricImg) {
                    if (fabricImgCard) {
                        fabricImgCard.style.opacity = '0.3';
                        fabricImgCard.style.transform = 'scale(0.96)';
                    }
                    setTimeout(() => {
                        fabricImg.src = imageSrc;
                        fabricImg.alt = `Tekstur Serat Kain ${data.name || data.title}`;
                        if (fabricImgCard) {
                            fabricImgCard.style.opacity = '1';
                            fabricImgCard.style.transform = 'scale(1)';
                            fabricImgCard.style.transition = 'all 0.35s cubic-bezier(0.4, 0, 0.2, 1)';
                        }
                    }, 120);
                }

                if (fabricInfo) {
                    fabricInfo.style.opacity = '0';
                    fabricInfo.style.transform = 'translateX(-20px)';
                    setTimeout(() => {
                        fabricTitle.innerText = data.title;
                        fabricDesc.innerText = data.desc;
                        fabricSpecs.innerHTML = data.specs.map(item => `<li><i class="fas fa-check-circle"></i> ${item}</li>`).join('');
                        fabricInfo.style.opacity = '1';
                        fabricInfo.style.transform = 'translateX(0)';
                        fabricInfo.style.transition = 'all 0.35s ease';
                    }, 120);
                } else {
                    fabricTitle.innerText = data.title;
                    fabricDesc.innerText = data.desc;
                    fabricSpecs.innerHTML = data.specs.map(item => `<li><i class="fas fa-check-circle"></i> ${item}</li>`).join('');
                }

                // Update Progress Bars
                if (fillBreathability) fillBreathability.style.width = `${data.breathability}%`;
                if (fillDurability) fillDurability.style.width = `${data.durability}%`;
                if (fillSoftness) fillSoftness.style.width = `${data.softness}%`;
            }
        });
    });

    // === 6. KATEGORI FILTER PRODUK ===
    const filterButtons = document.querySelectorAll('.btn-filter');
    const productItems = document.querySelectorAll('.product-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            document.querySelector('.btn-filter.active')?.classList.remove('active');
            button.classList.add('active');

            const targetCategory = button.getAttribute('data-target');

            productItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                if (targetCategory === 'semua' || itemCategory === targetCategory) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.9)';
                    setTimeout(() => { item.style.display = 'none'; }, 300);
                }
            });
        });
    });

    // === 7. POP-UP GALERI (LIGHTBOX MODAL WITH SLIDE ANIMATION) ===
    const modal = document.getElementById('galleryModal');
    const modalImg = document.getElementById('modalImage');
    const modalCaption = document.getElementById('modalCaption');
    const modalCounter = document.getElementById('modalCounter');
    const closeBtn = document.querySelector('.modal-close');
    const prevBtn = document.querySelector('.modal-prev');
    const nextBtn = document.querySelector('.modal-next');

    let currentImages = [];
    let currentImgIndex = 0;

    const updateModalCounter = () => {
        if (modalCounter && currentImages.length > 0) {
            modalCounter.innerText = `Gambar ${currentImgIndex + 1} dari ${currentImages.length}`;
        }
    };

    productItems.forEach(item => {
        const imgArea = item.querySelector('.product-img');
        if (imgArea) {
            imgArea.addEventListener('click', () => {
                const imagesString = item.getAttribute('data-images');
                currentImages = imagesString ? (imagesString.includes('|') ? imagesString.split('|') : imagesString.split(',')) : [];
                
                const title = item.querySelector('.product-info h3')?.innerText || 'Hasil Produksi';
                if (modalCaption) modalCaption.innerText = title;

                if (currentImages.length > 0) {
                    currentImgIndex = 0;
                    if (modalImg) {
                        modalImg.src = currentImages[currentImgIndex];
                        modalImg.classList.remove('slide-next-anim', 'slide-prev-anim');
                    }
                    updateModalCounter();
                    if (modal) modal.style.display = 'flex';
                }
            });
        }
    });

    const changeImage = (direction) => {
        if (!currentImages.length || !modalImg) return;

        currentImgIndex += direction;
        if (currentImgIndex >= currentImages.length) currentImgIndex = 0;
        if (currentImgIndex < 0) currentImgIndex = currentImages.length - 1;

        // Reset animation classes
        modalImg.classList.remove('slide-next-anim', 'slide-prev-anim');
        
        // Trigger DOM reflow to restart CSS keyframe animation
        void modalImg.offsetWidth;

        // Apply slide animation based on direction
        if (direction === 1) {
            modalImg.classList.add('slide-next-anim');
        } else if (direction === -1) {
            modalImg.classList.add('slide-prev-anim');
        }

        modalImg.src = currentImages[currentImgIndex];
        updateModalCounter();
    };

    nextBtn?.addEventListener('click', () => changeImage(1));
    prevBtn?.addEventListener('click', () => changeImage(-1));

    closeBtn?.addEventListener('click', () => { if (modal) modal.style.display = 'none'; });
    modal?.addEventListener('click', (e) => {
        if (e.target === modal) modal.style.display = 'none';
    });

    // Touch Swipe Gestures Support
    let touchStartX = 0;
    let touchEndX = 0;

    modal?.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    modal?.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        const threshold = 40;
        if (touchEndX < touchStartX - threshold) {
            changeImage(1); // Swipe left -> slide next
        } else if (touchEndX > touchStartX + threshold) {
            changeImage(-1); // Swipe right -> slide prev
        }
    }, { passive: true });

    // Keyboard navigation inside modal
    document.addEventListener('keydown', (e) => {
        if (modal && modal.style.display === 'flex') {
            if (e.key === 'ArrowRight') changeImage(1);
            if (e.key === 'ArrowLeft') changeImage(-1);
            if (e.key === 'Escape') modal.style.display = 'none';
        }
    });

    // === 8. FAQ ACCORDION ===
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');

        question?.addEventListener('click', () => {
            const isOpen = item.classList.contains('active');
            
            // Close all items
            faqItems.forEach(i => {
                i.classList.remove('active');
                const a = i.querySelector('.faq-answer');
                if (a) a.style.display = 'none';
            });

            // If not open, open clicked item
            if (!isOpen && answer) {
                item.classList.add('active');
                answer.style.display = 'block';
            }
        });
    });

    // === 9. DARK / LIGHT THEME TOGGLE ===
    const themeToggleBtn = document.getElementById('themeToggle');
    const savedTheme = localStorage.getItem('kahfi_theme');

    const setTheme = (theme) => {
        if (theme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
            document.body.classList.add('dark-mode');
            if (themeToggleBtn) {
                themeToggleBtn.innerHTML = '<i class="fas fa-sun"></i>';
                themeToggleBtn.setAttribute('title', 'Switch to Light Mode');
            }
        } else {
            document.documentElement.setAttribute('data-theme', 'light');
            document.body.classList.remove('dark-mode');
            if (themeToggleBtn) {
                themeToggleBtn.innerHTML = '<i class="fas fa-moon"></i>';
                themeToggleBtn.setAttribute('title', 'Switch to Dark Mode');
            }
        }
        localStorage.setItem('kahfi_theme', theme);
    };

    // Initialize theme
    if (savedTheme) {
        setTheme(savedTheme);
    } else {
        const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        setTheme(prefersDark ? 'dark' : 'light');
    }

    themeToggleBtn?.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
        setTheme(currentTheme === 'dark' ? 'light' : 'dark');
    });

});