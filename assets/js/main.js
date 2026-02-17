/**
 * Rain Tunnel Wash - Main JavaScript
 *
 * @package RainTunnelWash
 */

(function() {
    'use strict';

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const toggle = document.querySelector('.mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const body = document.body;

        if (!toggle || !mobileMenu) return;

        toggle.addEventListener('click', function() {
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
            
            toggle.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.setAttribute('aria-hidden', isExpanded);
            body.classList.toggle('mobile-menu-open', !isExpanded);
            toggle.classList.toggle('is-active', !isExpanded);
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && body.classList.contains('mobile-menu-open')) {
                toggle.setAttribute('aria-expanded', 'false');
                mobileMenu.setAttribute('aria-hidden', 'true');
                body.classList.remove('mobile-menu-open');
                toggle.classList.remove('is-active');
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (body.classList.contains('mobile-menu-open') && 
                !mobileMenu.contains(e.target) && 
                !toggle.contains(e.target)) {
                toggle.setAttribute('aria-expanded', 'false');
                mobileMenu.setAttribute('aria-hidden', 'true');
                body.classList.remove('mobile-menu-open');
                toggle.classList.remove('is-active');
            }
        });
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Skip if it's just "#" or empty
                if (href === '#' || href === '') return;

                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    
                    const headerHeight = document.querySelector('.site-header')?.offsetHeight || 0;
                    const topBarHeight = document.querySelector('.top-bar')?.offsetHeight || 0;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - topBarHeight - 20;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });

                    // Update URL without jumping
                    history.pushState(null, null, href);
                }
            });
        });
    }

    /**
     * Header Scroll Effect
     */
    function initHeaderScroll() {
        const header = document.querySelector('.site-header');
        const topBar = document.querySelector('.top-bar');
        if (!header) return;

        const scrollThreshold = 50;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            // Add scrolled class when past threshold
            if (currentScroll > scrollThreshold) {
                header.classList.add('is-scrolled');
                if (topBar) topBar.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
                if (topBar) topBar.classList.remove('is-scrolled');
            }
        }, { passive: true });
    }

    /**
     * Intersection Observer for Animations
     */
    function initScrollAnimations() {
        const animatedElements = document.querySelectorAll('.animate-on-scroll');
        
        if (!animatedElements.length) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        animatedElements.forEach(el => observer.observe(el));
    }

    /**
     * FAQ Accordion
     */
    function initFaqAccordion() {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            if (!question || !answer) return;

            question.addEventListener('click', function() {
                const isOpen = item.classList.contains('is-open');

                // Close all other items (optional - remove for multi-open)
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('is-open');
                        otherItem.querySelector('.faq-answer').style.maxHeight = null;
                    }
                });

                // Toggle current item
                item.classList.toggle('is-open', !isOpen);
                
                if (!isOpen) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                } else {
                    answer.style.maxHeight = null;
                }
            });
        });
    }

    /**
     * Testimonials Slider (Simple)
     */
    function initTestimonialsSlider() {
        const slider = document.querySelector('.testimonials-slider');
        if (!slider) return;

        const slides = slider.querySelectorAll('.testimonial-slide');
        const dots = slider.querySelectorAll('.testimonials-slider__dot');
        
        let currentIndex = 0;
        const totalSlides = slides.length;

        if (totalSlides <= 1) return;

        function goToSlide(index) {
            slides[currentIndex].classList.remove('is-active');
            if (dots[currentIndex]) dots[currentIndex].classList.remove('is-active');
            
            currentIndex = index;
            
            if (currentIndex >= totalSlides) currentIndex = 0;
            if (currentIndex < 0) currentIndex = totalSlides - 1;
            
            slides[currentIndex].classList.add('is-active');
            if (dots[currentIndex]) dots[currentIndex].classList.add('is-active');
        }

        // Dot click handlers
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => goToSlide(index));
        });

        // Auto-advance every 6 seconds
        setInterval(() => goToSlide(currentIndex + 1), 6000);
    }

    /**
     * Timeline image: mobile overlay tap-to-expand (lightbox)
     */
    function initTimelineImageExpand() {
        const overlay = document.querySelector('.about-timeline__expand-overlay');
        if (!overlay) return;

        let lightbox = document.querySelector('.about-timeline-lightbox');

        function openLightbox(src) {
            if (!lightbox) {
                lightbox = document.createElement('div');
                lightbox.className = 'about-timeline-lightbox';
                lightbox.setAttribute('role', 'dialog');
                lightbox.setAttribute('aria-modal', 'true');
                lightbox.setAttribute('aria-label', 'Timeline image full size');
                lightbox.innerHTML =
                    '<div class="about-timeline-lightbox__backdrop" aria-label="Close"></div>' +
                    '<div class="about-timeline-lightbox__content">' +
                    '<img src="" alt="Timeline" class="about-timeline-lightbox__img">' +
                    '<button type="button" class="about-timeline-lightbox__close" aria-label="Close">&times;</button>' +
                    '</div>';
                document.body.appendChild(lightbox);

                const backdrop = lightbox.querySelector('.about-timeline-lightbox__backdrop');
                const closeBtn = lightbox.querySelector('.about-timeline-lightbox__close');
                const img = lightbox.querySelector('.about-timeline-lightbox__img');

                function closeLightbox() {
                    lightbox.classList.remove('is-open');
                    document.body.style.overflow = '';
                }

                backdrop.addEventListener('click', closeLightbox);
                closeBtn.addEventListener('click', closeLightbox);
                lightbox.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') closeLightbox();
                });
            }

            const img = lightbox.querySelector('.about-timeline-lightbox__img');
            if (img) img.src = src;
            lightbox.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }

        overlay.addEventListener('click', function() {
            const wrap = overlay.closest('.about-timeline__image-wrap');
            const img = wrap ? wrap.querySelector('.about-timeline__image') : null;
            const src = (img && img.src) || (img && img.getAttribute('data-timeline-expand-src')) || '';
            if (src) openLightbox(src);
        });
    }

    /**
     * Initialize all functions on DOM ready
     */
    function init() {
        initMobileMenu();
        initSmoothScroll();
        initHeaderScroll();
        initScrollAnimations();
        initFaqAccordion();
        initTestimonialsSlider();
        initTimelineImageExpand();
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
