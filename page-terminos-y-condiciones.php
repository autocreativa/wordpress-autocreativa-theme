<?php
/**
 * Template Name: Términos y Condiciones
 * 
 * @package Autocreativa
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main legal-page">
    <div class="site-container">
        <article class="legal-content sport-card">
            <header class="legal-header">
                <div class="legal-header-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/legal-icon.png" alt="Legal"
                        style="width: 60px; height: 60px; margin-bottom: 1rem;">
                </div>
                <h1>
                    <?php esc_html_e('Términos y Condiciones', 'autocreativa'); ?>
                </h1>
                <p class="legal-updated">
                    <?php esc_html_e('Última actualización: Enero 2026', 'autocreativa'); ?>
                </p>
            </header>

            <div class="legal-body">
                <section>
                    <h2>1. Aceptación de los Términos</h2>
                    <p>Al acceder y utilizar este sitio web operado por
                        <?php bloginfo('name'); ?>, usted acepta estar sujeto a estos Términos y Condiciones de Uso. Si
                        no está de acuerdo con alguna parte de estos términos, no debe utilizar nuestro sitio web.
                    </p>
                </section>

                <section>
                    <h2>2. Productos Digitales</h2>
                    <p>Todos los productos ofrecidos en este sitio son de naturaleza digital. Una vez completada la
                        compra, recibirá acceso inmediato al producto adquirido a través del correo electrónico
                        proporcionado durante el proceso de compra.</p>
                    <p><strong>Características de los productos digitales:</strong></p>
                    <ul>
                        <li>Entrega instantánea vía correo electrónico</li>
                        <li>No requieren envío físico</li>
                        <li>Acceso permanente según lo especificado en la descripción del producto</li>
                        <li>Licencia de uso personal o comercial según se indique</li>
                    </ul>
                </section>

                <section>
                    <h2>3. Proceso de Compra y Pago</h2>
                    <p>Los pagos se procesan de forma segura a través de Transbank, plataforma de pagos certificada en
                        Chile. Aceptamos las siguientes formas de pago:</p>
                    <ul>
                        <li>Tarjetas de crédito y débito</li>
                        <li>Transferencia bancaria</li>
                        <li>Otros métodos disponibles a través de Transbank</li>
                    </ul>
                    <p>Todos los precios están expresados en pesos chilenos (CLP) e incluyen IVA cuando corresponda.</p>
                </section>

                <section>
                    <h2>4. Política de Devoluciones y Reembolsos</h2>
                    <p>Debido a la naturaleza digital de nuestros productos, las devoluciones están sujetas a las
                        siguientes condiciones:</p>
                    <ul>
                        <li><strong>Productos defectuosos:</strong> Si el producto digital presenta fallas técnicas o no
                            funciona según lo descrito, tiene derecho a solicitar un reembolso completo dentro de los 7
                            días posteriores a la compra.</li>
                        <li><strong>Producto no recibido:</strong> Si no recibe el acceso al producto dentro de las 24
                            horas posteriores a la compra, contáctenos inmediatamente.</li>
                        <li><strong>Cambio de opinión:</strong> No se aceptan devoluciones por cambio de opinión una vez
                            que el producto ha sido descargado o se ha proporcionado acceso al mismo.</li>
                    </ul>
                    <p>Para solicitar un reembolso, debe contactarnos a través de <a
                            href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a> con su número de orden
                        y una descripción detallada del problema.</p>
                </section>

                <section>
                    <h2>5. Licencia y Derechos de Uso</h2>
                    <p>Al adquirir un producto digital, se le otorga una licencia limitada, no exclusiva e
                        intransferible para usar el producto de acuerdo con los términos especificados en la descripción
                        del producto.</p>
                    <p><strong>Está prohibido:</strong></p>
                    <ul>
                        <li>Revender, redistribuir o compartir el producto con terceros</li>
                        <li>Realizar ingeniería inversa o descompilar el producto</li>
                        <li>Reclamar autoría del producto</li>
                        <li>Utilizar el producto para fines ilegales o no autorizados</li>
                    </ul>
                </section>

                <section>
                    <h2>6. Propiedad Intelectual</h2>
                    <p>Todo el contenido de este sitio web, incluyendo pero no limitado a textos, gráficos, logos,
                        imágenes, código fuente y productos digitales, es propiedad de
                        <?php bloginfo('name'); ?> o de sus proveedores de contenido y está protegido por las leyes de
                        propiedad intelectual de Chile y tratados internacionales.
                    </p>
                </section>

                <section>
                    <h2>7. Limitación de Responsabilidad</h2>
                    <p>
                        <?php bloginfo('name'); ?> no será responsable por:
                    </p>
                    <ul>
                        <li>Daños indirectos, incidentales o consecuentes derivados del uso de nuestros productos</li>
                        <li>Pérdida de datos o beneficios relacionados con el uso de los productos</li>
                        <li>Interrupciones del servicio por mantenimiento o causas fuera de nuestro control</li>
                    </ul>
                    <p>Nuestra responsabilidad máxima se limitará al monto pagado por el producto en cuestión.</p>
                </section>

                <section>
                    <h2>8. Modificaciones de los Términos</h2>
                    <p>Nos reservamos el derecho de modificar estos términos en cualquier momento. Los cambios entrarán
                        en vigor inmediatamente después de su publicación en el sitio web. Es su responsabilidad revisar
                        periódicamente estos términos.</p>
                </section>

                <section>
                    <h2>9. Ley Aplicable y Jurisdicción</h2>
                    <p>Estos términos se rigen por las leyes de la República de Chile. Cualquier disputa relacionada con
                        estos términos estará sujeta a la jurisdicción exclusiva de los tribunales de Chile.</p>
                </section>

                <section>
                    <h2>10. Contacto</h2>
                    <p>Para cualquier consulta relacionada con estos Términos y Condiciones, puede contactarnos:</p>
                    <ul>
                        <li><strong>Email:</strong> <a
                                href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a></li>
                        <li><strong>Sitio web:</strong>
                            <?php echo esc_url(home_url('/')); ?>
                        </li>
                    </ul>
                </section>
            </div>
        </article>
    </div>
</main>

<style>
    .legal-page {
        padding: 4rem 0;
    }

    .legal-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 3rem;
    }

    .legal-header {
        border-bottom: 2px solid var(--border-color);
        padding-bottom: 2rem;
        margin-bottom: 3rem;
    }

    .legal-header h1 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
        color: var(--primary);
    }

    .legal-updated {
        color: var(--text-muted);
        font-size: 0.875rem;
    }

    .legal-body section {
        margin-bottom: 2.5rem;
    }

    .legal-body h2 {
        font-size: 1.5rem;
        color: var(--primary);
        margin-bottom: 1rem;
        margin-top: 2rem;
    }

    .legal-body p {
        line-height: 1.8;
        margin-bottom: 1rem;
        color: var(--text-secondary);
    }

    .legal-body ul {
        margin-left: 2rem;
        margin-bottom: 1rem;
    }

    .legal-body li {
        line-height: 1.8;
        margin-bottom: 0.5rem;
        color: var(--text-secondary);
    }

    .legal-body a {
        color: var(--lime-primary);
        text-decoration: underline;
    }

    .legal-body a:hover {
        color: var(--lime-hover);
    }

    @media (max-width: 768px) {
        .legal-content {
            padding: 2rem 1.5rem;
        }

        .legal-header h1 {
            font-size: 2rem;
        }

        .legal-body h2 {
            font-size: 1.25rem;
        }
    }
</style>

<?php
get_footer();
