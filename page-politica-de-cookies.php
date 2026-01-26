<?php
/**
 * Template Name: Política de Cookies
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
                    <?php esc_html_e('Política de Cookies', 'autocreativa'); ?>
                </h1>
                <p class="legal-updated">
                    <?php esc_html_e('Última actualización: Enero 2026', 'autocreativa'); ?>
                </p>
            </header>

            <div class="legal-body">
                <section>
                    <h2>1. ¿Qué son las Cookies?</h2>
                    <p>Las cookies son pequeños archivos de texto que se almacenan en su dispositivo (computadora,
                        tablet o móvil) cuando visita un sitio web. Las cookies permiten que el sitio web recuerde sus
                        acciones y preferencias durante un período de tiempo.</p>
                </section>

                <section>
                    <h2>2. ¿Cómo Utilizamos las Cookies?</h2>
                    <p>
                        <?php bloginfo('name'); ?> utiliza cookies para mejorar su experiencia de navegación y
                        proporcionar funcionalidades esenciales del sitio. Las cookies nos ayudan a:
                    </p>
                    <ul>
                        <li>Mantener su sesión activa mientras navega por el sitio</li>
                        <li>Recordar sus preferencias (como el tema oscuro/claro)</li>
                        <li>Mantener los productos en su carrito de compras</li>
                        <li>Analizar cómo utiliza nuestro sitio para mejorarlo</li>
                        <li>Personalizar el contenido según sus intereses</li>
                        <li>Recordar sus preferencias de idioma</li>
                    </ul>
                </section>

                <section>
                    <h2>3. Tipos de Cookies que Utilizamos</h2>

                    <h3>3.1 Cookies Estrictamente Necesarias</h3>
                    <p>Estas cookies son esenciales para el funcionamiento del sitio web y no se pueden desactivar.
                        Incluyen:</p>
                    <ul>
                        <li><strong>Cookies de sesión:</strong> Mantienen su sesión activa mientras navega</li>
                        <li><strong>Cookies de carrito:</strong> Recuerdan los productos en su carrito de compras</li>
                        <li><strong>Cookies de seguridad:</strong> Protegen contra actividades fraudulentas</li>
                    </ul>

                    <h3>3.2 Cookies de Funcionalidad</h3>
                    <p>Estas cookies permiten que el sitio recuerde sus elecciones y proporcione funciones mejoradas:
                    </p>
                    <ul>
                        <li><strong>autocreativa_theme_mode:</strong> Recuerda su preferencia de tema (oscuro/claro)
                        </li>
                        <li><strong>Cookies de idioma:</strong> Recuerdan su preferencia de idioma</li>
                        <li><strong>Cookies de cuenta:</strong> Recuerdan que ha iniciado sesión</li>
                    </ul>

                    <h3>3.3 Cookies de Rendimiento y Análisis</h3>
                    <p>Estas cookies nos ayudan a entender cómo los visitantes interactúan con nuestro sitio:</p>
                    <ul>
                        <li>Páginas más visitadas</li>
                        <li>Tiempo de permanencia en el sitio</li>
                        <li>Rutas de navegación</li>
                        <li>Errores encontrados</li>
                    </ul>
                    <p><em>Estas cookies recopilan información de forma anónima y agregada.</em></p>

                    <h3>3.4 Cookies de Marketing (Opcional)</h3>
                    <p>Con su consentimiento, podemos utilizar cookies para:</p>
                    <ul>
                        <li>Mostrar anuncios relevantes basados en sus intereses</li>
                        <li>Medir la efectividad de nuestras campañas publicitarias</li>
                        <li>Limitar el número de veces que ve un anuncio</li>
                    </ul>
                </section>

                <section>
                    <h2>4. Cookies de Terceros</h2>
                    <p>Algunos servicios de terceros que utilizamos también pueden establecer cookies:</p>

                    <h3>4.1 Procesamiento de Pagos</h3>
                    <ul>
                        <li><strong>Transbank:</strong> Para procesar pagos de forma segura</li>
                    </ul>

                    <h3>4.2 Análisis Web</h3>
                    <ul>
                        <li><strong>Google Analytics (si aplica):</strong> Para análisis de tráfico y comportamiento del
                            usuario</li>
                    </ul>

                    <h3>4.3 Redes Sociales</h3>
                    <ul>
                        <li>Cookies de redes sociales si comparte contenido en plataformas como Facebook, Instagram o
                            LinkedIn</li>
                    </ul>

                    <p><em>Estas cookies están sujetas a las políticas de privacidad de los respectivos terceros.</em>
                    </p>
                </section>

                <section>
                    <h2>5. Duración de las Cookies</h2>
                    <p>Utilizamos dos tipos de cookies según su duración:</p>

                    <h3>5.1 Cookies de Sesión</h3>
                    <p>Se eliminan automáticamente cuando cierra su navegador. Se utilizan principalmente para mantener
                        su sesión activa.</p>

                    <h3>5.2 Cookies Persistentes</h3>
                    <p>Permanecen en su dispositivo durante un período específico o hasta que las elimine manualmente.
                        Se utilizan para recordar sus preferencias entre visitas.</p>

                    <table style="width: 100%; margin: 1rem 0; border-collapse: collapse;">
                        <thead>
                            <tr style="background: var(--bg-body);">
                                <th style="padding: 0.75rem; text-align: left; border: 1px solid var(--border-color);">
                                    Cookie</th>
                                <th style="padding: 0.75rem; text-align: left; border: 1px solid var(--border-color);">
                                    Duración</th>
                                <th style="padding: 0.75rem; text-align: left; border: 1px solid var(--border-color);">
                                    Propósito</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 0.75rem; border: 1px solid var(--border-color);">
                                    autocreativa_theme_mode</td>
                                <td style="padding: 0.75rem; border: 1px solid var(--border-color);">1 año</td>
                                <td style="padding: 0.75rem; border: 1px solid var(--border-color);">Preferencia de tema
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0.75rem; border: 1px solid var(--border-color);">
                                    woocommerce_cart_hash</td>
                                <td style="padding: 0.75rem; border: 1px solid var(--border-color);">Sesión</td>
                                <td style="padding: 0.75rem; border: 1px solid var(--border-color);">Carrito de compras
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0.75rem; border: 1px solid var(--border-color);">
                                    woocommerce_items_in_cart</td>
                                <td style="padding: 0.75rem; border: 1px solid var(--border-color);">Sesión</td>
                                <td style="padding: 0.75rem; border: 1px solid var(--border-color);">Productos en
                                    carrito</td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <section>
                    <h2>6. Cómo Gestionar las Cookies</h2>
                    <p>Tiene varias opciones para gestionar las cookies:</p>

                    <h3>6.1 Configuración del Navegador</h3>
                    <p>La mayoría de los navegadores le permiten:</p>
                    <ul>
                        <li>Ver qué cookies están almacenadas y eliminarlas individualmente</li>
                        <li>Bloquear cookies de terceros</li>
                        <li>Bloquear todas las cookies</li>
                        <li>Eliminar todas las cookies al cerrar el navegador</li>
                    </ul>

                    <p><strong>Instrucciones por navegador:</strong></p>
                    <ul>
                        <li><strong>Chrome:</strong> Configuración → Privacidad y seguridad → Cookies</li>
                        <li><strong>Firefox:</strong> Opciones → Privacidad y seguridad → Cookies</li>
                        <li><strong>Safari:</strong> Preferencias → Privacidad → Cookies</li>
                        <li><strong>Edge:</strong> Configuración → Privacidad → Cookies</li>
                    </ul>

                    <h3>6.2 Consecuencias de Desactivar Cookies</h3>
                    <p>Si desactiva las cookies, algunas funciones del sitio pueden no funcionar correctamente:</p>
                    <ul>
                        <li>No podrá mantener productos en su carrito de compras</li>
                        <li>No se recordarán sus preferencias</li>
                        <li>Algunas funciones de personalización no estarán disponibles</li>
                        <li>Es posible que deba iniciar sesión cada vez que visite el sitio</li>
                    </ul>
                </section>

                <section>
                    <h2>7. Actualizaciones de esta Política</h2>
                    <p>Podemos actualizar esta Política de Cookies periódicamente para reflejar cambios en las cookies
                        que utilizamos o por razones operativas, legales o regulatorias. Revise esta página regularmente
                        para mantenerse informado.</p>
                </section>

                <section>
                    <h2>8. Más Información</h2>
                    <p>Para obtener más información sobre cómo protegemos su privacidad, consulte nuestra <a
                            href="<?php echo esc_url(home_url('/politica-de-privacidad/')); ?>">Política de
                            Privacidad</a>.</p>
                </section>

                <section>
                    <h2>9. Contacto</h2>
                    <p>Si tiene preguntas sobre nuestra Política de Cookies, contáctenos:</p>
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

<?php
get_footer();
