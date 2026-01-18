</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="site-container">
        <div class="footer-main">
            <!-- Column 1: Brand & Description -->
            <div class="footer-column footer-brand">
                <h4 class="footer-logo"><?php bloginfo('name'); ?></h4>
                <p class="footer-description">
                    <?php esc_html_e('Tu tienda online de confianza. Ofrecemos los mejores productos con la mejor calidad y atención al cliente.', 'autocreativa'); ?>
                </p>
                <div class="footer-social">
                    <?php
                    $github = get_theme_mod('contact_github');
                    $linkedin = get_theme_mod('contact_linkedin');
                    $instagram = get_theme_mod('contact_instagram');
                    $facebook = get_theme_mod('contact_facebook');
                    ?>

                    <?php if ($instagram): ?>
                        <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener noreferrer"
                            class="social-link" aria-label="Instagram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php if ($facebook): ?>
                        <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer"
                            class="social-link" aria-label="Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php if ($linkedin): ?>
                        <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer"
                            class="social-link" aria-label="LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Column 2: Shop Links -->
            <div class="footer-column">
                <h5 class="footer-title"><?php esc_html_e('Tienda', 'autocreativa'); ?></h5>
                <ul class="footer-links">
                    <?php if (class_exists('WooCommerce')): ?>
                        <li><a
                                href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"><?php esc_html_e('Todos los productos', 'autocreativa'); ?></a>
                        </li>
                        <li><a
                                href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>?on_sale=true"><?php esc_html_e('Ofertas', 'autocreativa'); ?></a>
                        </li>
                        <li><a
                                href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>?orderby=date"><?php esc_html_e('Nuevos productos', 'autocreativa'); ?></a>
                        </li>
                        <li><a
                                href="<?php echo esc_url(get_permalink(wc_get_page_id('myaccount'))); ?>"><?php esc_html_e('Mi cuenta', 'autocreativa'); ?></a>
                        </li>
                        <li><a
                                href="<?php echo esc_url(wc_get_cart_url()); ?>"><?php esc_html_e('Carrito', 'autocreativa'); ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- Column 3: Help & Support -->
            <div class="footer-column">
                <h5 class="footer-title"><?php esc_html_e('Ayuda', 'autocreativa'); ?></h5>
                <ul class="footer-links">
                    <li><a
                            href="<?php echo esc_url(home_url('/preguntas-frecuentes/')); ?>"><?php esc_html_e('Preguntas frecuentes', 'autocreativa'); ?></a>
                    </li>
                    <li><a
                            href="<?php echo esc_url(home_url('/envios/')); ?>"><?php esc_html_e('Envíos y entregas', 'autocreativa'); ?></a>
                    </li>
                    <li><a
                            href="<?php echo esc_url(home_url('/devoluciones/')); ?>"><?php esc_html_e('Devoluciones', 'autocreativa'); ?></a>
                    </li>
                    <li><a
                            href="<?php echo esc_url(home_url('/metodos-de-pago/')); ?>"><?php esc_html_e('Métodos de pago', 'autocreativa'); ?></a>
                    </li>
                    <li><a
                            href="<?php echo esc_url(home_url('/contacto/')); ?>"><?php esc_html_e('Contacto', 'autocreativa'); ?></a>
                    </li>
                    <li class="footer-email-item">
                        <a href="mailto:contacto@autocreativa.com" class="footer-email-link">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" style="margin-right: 5px; position: relative; top: 2px;">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            contacto@autocreativa.com
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Legal -->
            <div class="footer-column">
                <h5 class="footer-title"><?php esc_html_e('Legal', 'autocreativa'); ?></h5>
                <ul class="footer-links">
                    <li><a
                            href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>"><?php esc_html_e('Términos y condiciones', 'autocreativa'); ?></a>
                    </li>
                    <li><a
                            href="<?php echo esc_url(home_url('/politica-de-privacidad/')); ?>"><?php esc_html_e('Política de privacidad', 'autocreativa'); ?></a>
                    </li>
                    <li><a
                            href="<?php echo esc_url(home_url('/politica-de-cookies/')); ?>"><?php esc_html_e('Política de cookies', 'autocreativa'); ?></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p class="copyright">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
                <?php esc_html_e('Todos los derechos reservados.', 'autocreativa'); ?>
            </p>
            <div class="footer-payment">
                <span><?php esc_html_e('Pagos seguros con:', 'autocreativa'); ?></span>
                <div class="payment-icons">
                    <svg width="40" height="24" viewBox="0 0 40 24" fill="var(--text-muted)">
                        <rect width="40" height="24" rx="4" fill="currentColor" opacity="0.2" />
                        <text x="20" y="15" font-size="8" text-anchor="middle" fill="var(--text-muted)">VISA</text>
                    </svg>
                    <svg width="40" height="24" viewBox="0 0 40 24" fill="var(--text-muted)">
                        <rect width="40" height="24" rx="4" fill="currentColor" opacity="0.2" />
                        <text x="20" y="15" font-size="8" text-anchor="middle" fill="var(--text-muted)">MC</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>