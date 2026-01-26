/**
 * Autocreativa Theme - Main JavaScript
 *
 * @package Autocreativa
 * @since 1.0.0
 */

(function () {
    'use strict';

    // ==========================================================================
    // THEME TOGGLE (Dark/Light Mode)
    // ==========================================================================

    const themeToggle = document.getElementById('theme-toggle');
    const signatureImage = document.getElementById('signature-image');

    function getThemeMode() {
        return document.body.classList.contains('light-mode') ? 'light' : 'dark';
    }

    function setThemeMode(mode) {
        if (mode === 'light') {
            document.body.classList.remove('dark-mode');
            document.body.classList.add('light-mode');
            document.documentElement.classList.add('light');
        } else {
            document.body.classList.remove('light-mode');
            document.body.classList.add('dark-mode');
            document.documentElement.classList.remove('light');
        }

        // Update signature image if exists
        if (signatureImage) {
            const src = mode === 'light'
                ? signatureImage.dataset.light
                : signatureImage.dataset.dark;
            if (src) {
                signatureImage.src = src;
            }
        }

        // Save preference
        localStorage.setItem('theme_mode', mode);

        // Also set cookie for server-side rendering
        document.cookie = `autocreativa_theme_mode=${mode};path=/;max-age=${365 * 24 * 60 * 60}`;
    }

    function toggleTheme() {
        const currentMode = getThemeMode();
        const newMode = currentMode === 'dark' ? 'light' : 'dark';
        setThemeMode(newMode);
    }

    // Initialize theme from localStorage or cookie
    function initTheme() {
        const savedMode = localStorage.getItem('theme_mode');
        if (savedMode) {
            setThemeMode(savedMode);
        }
    }

    if (themeToggle) {
        themeToggle.addEventListener('click', toggleTheme);
    }

    initTheme();

    // ==========================================================================
    // SKILLS MODAL
    // ==========================================================================

    const viewFullStackBtn = document.getElementById('view-full-stack');
    const skillsModal = document.getElementById('skills-modal');
    const closeModalBtn = document.getElementById('close-skills-modal');
    const closeModalBtn2 = document.getElementById('close-skills-modal-btn');
    const modalBackdrop = skillsModal ? skillsModal.querySelector('.modal-backdrop') : null;

    function openSkillsModal() {
        if (skillsModal) {
            skillsModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeSkillsModal() {
        if (skillsModal) {
            skillsModal.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    if (viewFullStackBtn) {
        viewFullStackBtn.addEventListener('click', openSkillsModal);
    }

    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', closeSkillsModal);
    }

    if (closeModalBtn2) {
        closeModalBtn2.addEventListener('click', closeSkillsModal);
    }

    if (modalBackdrop) {
        modalBackdrop.addEventListener('click', closeSkillsModal);
    }

    // Close modal on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && skillsModal && skillsModal.classList.contains('active')) {
            closeSkillsModal();
        }
    });

    // ==========================================================================
    // CONTACT EMAIL REVEAL & COPY
    // ==========================================================================

    const showEmailBtn = document.getElementById('show-email-btn');
    const emailDisplay = document.getElementById('email-display');
    const copyEmailBtn = document.getElementById('copy-email-btn');
    const emailText = document.getElementById('email-text');
    const copiedMessage = document.getElementById('copied-message');

    if (showEmailBtn && emailDisplay) {
        showEmailBtn.addEventListener('click', function () {
            const isVisible = emailDisplay.style.display !== 'none';
            emailDisplay.style.display = isVisible ? 'none' : 'block';
        });
    }

    if (copyEmailBtn && emailText) {
        copyEmailBtn.addEventListener('click', async function () {
            try {
                await navigator.clipboard.writeText(emailText.value);
                if (copiedMessage) {
                    copiedMessage.classList.add('visible');
                    setTimeout(function () {
                        copiedMessage.classList.remove('visible');
                    }, 2000);
                }
            } catch (err) {
                console.error('Failed to copy:', err);
            }
        });
    }

    // ==========================================================================
    // INTERSECTION OBSERVER FOR ANIMATIONS
    // ==========================================================================

    const animatedElements = document.querySelectorAll('.animate-fade-in, .animate-slide-in');

    if (animatedElements.length > 0 && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) translateX(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        animatedElements.forEach(function (el) {
            el.style.opacity = '0';
            if (el.classList.contains('animate-slide-in')) {
                el.style.transform = 'translateX(-10px)';
            } else {
                el.style.transform = 'translateY(10px)';
            }
            el.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
            observer.observe(el);
        });
    }

    // ==========================================================================
    // SKILL BARS ANIMATION
    // ==========================================================================

    const skillBars = document.querySelectorAll('.skill-bar-fill');

    if (skillBars.length > 0 && 'IntersectionObserver' in window) {
        const skillObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const width = entry.target.style.width;
                    entry.target.style.width = '0';
                    requestAnimationFrame(function () {
                        entry.target.style.width = width;
                    });
                    skillObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        skillBars.forEach(function (bar) {
            skillObserver.observe(bar);
        });
    }

    // ==========================================================================
    // SKILL RINGS ANIMATION
    // ==========================================================================

    const skillRings = document.querySelectorAll('.skill-ring-progress');

    if (skillRings.length > 0 && 'IntersectionObserver' in window) {
        const ringObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const finalOffset = entry.target.style.strokeDashoffset;
                    entry.target.style.strokeDashoffset = '175.9';
                    requestAnimationFrame(function () {
                        entry.target.style.strokeDashoffset = finalOffset;
                    });
                    ringObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        skillRings.forEach(function (ring) {
            ringObserver.observe(ring);
        });
    }

    // ==========================================================================
    // WOOCOMMERCE AJAX ADD TO CART
    // ==========================================================================

    if (typeof autocreativaData !== 'undefined') {
        document.addEventListener('click', function (e) {
            const addToCartBtn = e.target.closest('.ajax_add_to_cart');
            if (!addToCartBtn) return;

            e.preventDefault();

            const productId = addToCartBtn.dataset.product_id;
            const quantity = addToCartBtn.dataset.quantity || 1;

            addToCartBtn.classList.add('loading');

            fetch(autocreativaData.ajaxUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    action: 'autocreativa_add_to_cart',
                    nonce: autocreativaData.nonce,
                    product_id: productId,
                    quantity: quantity
                })
            })
                .then(response => response.json())
                .then(data => {
                    addToCartBtn.classList.remove('loading');

                    if (data.success) {
                        addToCartBtn.classList.add('added');

                        // Update cart count
                        const cartCount = document.querySelector('.cart-count');
                        if (cartCount) {
                            cartCount.textContent = data.data.cart_count;
                        }

                        // Show success message
                        showNotification(data.data.message, 'success');
                    } else {
                        showNotification(data.data.message, 'error');
                    }
                })
                .catch(error => {
                    addToCartBtn.classList.remove('loading');
                    console.error('Error:', error);
                });
        });
    }

    // ==========================================================================
    // NOTIFICATION HELPER
    // ==========================================================================

    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.textContent = message;
        notification.style.cssText = `
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            font-size: 0.875rem;
            font-weight: 500;
            z-index: 9999;
            animation: slideUp 0.3s ease-out;
            background: ${type === 'success' ? 'var(--lime-primary)' : type === 'error' ? '#ef4444' : 'var(--bg-card)'};
            color: ${type === 'success' || type === 'error' ? '#000' : 'var(--primary)'};
        `;

        document.body.appendChild(notification);

        setTimeout(function () {
            notification.style.animation = 'slideDown 0.3s ease-out';
            setTimeout(function () {
                notification.remove();
            }, 300);
        }, 3000);
    }

    // ==========================================================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ==========================================================================

    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // ==========================================================================
    // STOREFRONT - MINI CART TOGGLE
    // ==========================================================================

    const cartToggle = document.getElementById('cart-toggle');
    const miniCartDropdown = document.getElementById('mini-cart-dropdown');
    const miniCartClose = document.getElementById('mini-cart-close');

    function openMiniCart() {
        if (miniCartDropdown) {
            miniCartDropdown.classList.add('active');
        }
    }

    function closeMiniCart() {
        if (miniCartDropdown) {
            miniCartDropdown.classList.remove('active');
        }
    }

    if (cartToggle) {
        cartToggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (miniCartDropdown.classList.contains('active')) {
                closeMiniCart();
            } else {
                openMiniCart();
            }
        });
    }

    if (miniCartClose) {
        miniCartClose.addEventListener('click', closeMiniCart);
    }

    // Close mini cart when clicking outside
    document.addEventListener('click', function (e) {
        if (miniCartDropdown && miniCartDropdown.classList.contains('active')) {
            if (!e.target.closest('.header-cart')) {
                closeMiniCart();
            }
        }
    });

    // ==========================================================================
    // STOREFRONT - SEARCH OVERLAY
    // ==========================================================================

    const searchToggle = document.getElementById('search-toggle');
    const searchOverlay = document.getElementById('search-overlay');
    const searchClose = document.getElementById('search-close');
    const searchInput = searchOverlay ? searchOverlay.querySelector('.search-input') : null;

    function openSearch() {
        if (searchOverlay) {
            searchOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
            if (searchInput) {
                setTimeout(() => searchInput.focus(), 100);
            }
        }
    }

    function closeSearch() {
        if (searchOverlay) {
            searchOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    if (searchToggle) {
        searchToggle.addEventListener('click', openSearch);
    }

    if (searchClose) {
        searchClose.addEventListener('click', closeSearch);
    }

    // Close search on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && searchOverlay && searchOverlay.classList.contains('active')) {
            closeSearch();
        }
    });

    // ==========================================================================
    // STOREFRONT - MOBILE MENU
    // ==========================================================================

    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mainNavigation = document.querySelector('.main-navigation');

    function openMobileMenu() {
        if (mainNavigation && mobileMenuToggle) {
            mainNavigation.classList.add('mobile-open');
            mobileMenuToggle.classList.add('active');
            document.body.style.overflow = 'hidden';

            // Change icon to X
            mobileMenuToggle.innerHTML = `
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            `;
        }
    }

    function closeMobileMenu() {
        if (mainNavigation && mobileMenuToggle) {
            mainNavigation.classList.remove('mobile-open');
            mobileMenuToggle.classList.remove('active');
            document.body.style.overflow = '';

            // Change icon back to hamburger
            mobileMenuToggle.innerHTML = `
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            `;
        }
    }

    if (mobileMenuToggle && mainNavigation) {
        mobileMenuToggle.addEventListener('click', function () {
            if (mainNavigation.classList.contains('mobile-open')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });

        // Removed auto-close on link click to allow navigation through categories
        // Menu will only close when clicking the X button or outside the menu

        // Add submenu toggle functionality for mobile
        const menuItemsWithChildren = mainNavigation.querySelectorAll('.menu-item-has-children > a');
        menuItemsWithChildren.forEach(function (menuLink) {
            menuLink.addEventListener('click', function (e) {
                // Only prevent default and toggle submenu in mobile view
                if (mainNavigation.classList.contains('mobile-open')) {
                    e.preventDefault();
                    const parentLi = this.parentElement;
                    parentLi.classList.toggle('open');
                }
            });
        });
    }

    // Close mobile menu on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && mainNavigation && mainNavigation.classList.contains('mobile-open')) {
            closeMobileMenu();
        }
    });

    // ==========================================================================
    // STOREFRONT - AJAX ADD TO CART (Homepage Product Cards)
    // ==========================================================================

    document.querySelectorAll('.add-to-cart-btn').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();

            const productId = this.dataset.productId;
            if (!productId) return;

            const originalContent = this.innerHTML;
            this.innerHTML = '<svg class="spinner" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10" stroke-dasharray="31.4" stroke-dashoffset="10"></circle></svg>';
            this.disabled = true;

            if (typeof autocreativaData !== 'undefined') {
                fetch(autocreativaData.ajaxUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        action: 'autocreativa_add_to_cart',
                        nonce: autocreativaData.nonce,
                        product_id: productId,
                        quantity: 1
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        this.disabled = false;

                        if (data.success) {
                            this.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Agregado';

                            // Update cart count
                            const cartCount = document.querySelector('.cart-count');
                            if (cartCount) {
                                cartCount.textContent = data.data.cart_count;
                                cartCount.classList.add('pulse');
                                setTimeout(() => cartCount.classList.remove('pulse'), 500);
                            }

                            // Show notification
                            showNotification(data.data.message, 'success');

                            // Reset button after delay
                            setTimeout(() => {
                                this.innerHTML = originalContent;
                            }, 2000);

                            // Refresh WooCommerce cart fragments
                            if (typeof jQuery !== 'undefined' && typeof wc_cart_fragments_params !== 'undefined') {
                                jQuery(document.body).trigger('wc_fragment_refresh');
                            }
                        } else {
                            this.innerHTML = originalContent;
                            showNotification(data.data.message || 'Error al agregar', 'error');
                        }
                    })
                    .catch(error => {
                        this.disabled = false;
                        this.innerHTML = originalContent;
                        console.error('Error:', error);
                        showNotification('Error de conexión', 'error');
                    });
            }
        });
    });

    // ==========================================================================
    // STOREFRONT - NEWSLETTER FORM
    // ==========================================================================

    const newsletterForm = document.getElementById('newsletter-form');
    const newsletterMessage = document.getElementById('newsletter-message');

    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const email = this.querySelector('input[name="email"]').value;
            const submitBtn = this.querySelector('.newsletter-submit');
            const originalText = submitBtn.querySelector('.submit-text').textContent;

            submitBtn.querySelector('.submit-text').textContent = 'Enviando...';
            submitBtn.disabled = true;

            // Simulate API call (replace with actual newsletter integration)
            setTimeout(() => {
                submitBtn.querySelector('.submit-text').textContent = '¡Suscrito!';

                if (newsletterMessage) {
                    newsletterMessage.textContent = '¡Gracias por suscribirte!';
                    newsletterMessage.style.color = '#000';
                }

                this.reset();

                setTimeout(() => {
                    submitBtn.querySelector('.submit-text').textContent = originalText;
                    submitBtn.disabled = false;
                    if (newsletterMessage) {
                        newsletterMessage.textContent = '';
                    }
                }, 3000);
            }, 1000);
        });
    }

})();
// Contact Form Handler
const contactForm = document.getElementById('contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const form = this;
        const submitBtn = form.querySelector('.submit-btn'); // Corrected selector
        const submitText = form.querySelector('span'); // Assuming span inside button holds text
        const messageContainer = document.getElementById('form-message');

        // Basic validation
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        // Prepare data
        const formData = new FormData(form);
        formData.append('action', 'autocreativa_contact_form');
        formData.append('nonce', autocreativaData.nonce);

        // Loading state
        const originalText = submitText.textContent; // Store original text safely
        submitBtn.disabled = true;
        submitBtn.classList.add('loading');
        submitText.textContent = 'Enviando...';
        messageContainer.textContent = '';
        messageContainer.className = 'form-message';

        fetch(autocreativaData.ajaxUrl, {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    messageContainer.textContent = data.data.message;
                    messageContainer.classList.add('success');
                    form.reset();
                } else {
                    messageContainer.textContent = data.data.message || 'Error al enviar el mensaje.';
                    messageContainer.classList.add('error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                messageContainer.textContent = 'Ocurrió un error inesperado. Por favor, intenta nuevamente.';
                messageContainer.classList.add('error');
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.classList.remove('loading');
                submitText.textContent = originalText; // Restore original text
            });
    });
}
