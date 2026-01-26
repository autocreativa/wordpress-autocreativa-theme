<?php
/**
 * Template Name: Política de Privacidad
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
                    <?php esc_html_e('Política de Privacidad', 'autocreativa'); ?>
                </h1>
                <p class="legal-updated">
                    <?php esc_html_e('Última actualización: Enero 2026', 'autocreativa'); ?>
                </p>
            </header>

            <div class="legal-body">
                <section>
                    <h2>1. Introducción</h2>
                    <p>
                        <?php bloginfo('name'); ?> se compromete a proteger su privacidad. Esta Política de Privacidad
                        explica cómo recopilamos, usamos, divulgamos y protegemos su información personal de acuerdo con
                        la Ley N° 19.628 sobre Protección de la Vida Privada de Chile.
                    </p>
                </section>

                <section>
                    <h2>2. Información que Recopilamos</h2>
                    <p>Recopilamos la siguiente información cuando utiliza nuestro sitio web:</p>

                    <h3>2.1 Información proporcionada directamente</h3>
                    <ul>
                        <li><strong>Datos de cuenta:</strong> Nombre, dirección de correo electrónico, contraseña</li>
                        <li><strong>Información de facturación:</strong> Nombre completo, RUT, dirección, información de
                            pago</li>
                        <li><strong>Comunicaciones:</strong> Contenido de mensajes que nos envía a través de formularios
                            de contacto</li>
                    </ul>

                    <h3>2.2 Información recopilada automáticamente</h3>
                    <ul>
                        <li><strong>Datos de navegación:</strong> Dirección IP, tipo de navegador, páginas visitadas,
                            tiempo de permanencia</li>
                        <li><strong>Cookies y tecnologías similares:</strong> Ver nuestra Política de Cookies para más
                            detalles</li>
                        <li><strong>Información del dispositivo:</strong> Tipo de dispositivo, sistema operativo,
                            identificadores únicos</li>
                    </ul>
                </section>

                <section>
                    <h2>3. Cómo Utilizamos su Información</h2>
                    <p>Utilizamos la información recopilada para los siguientes propósitos:</p>
                    <ul>
                        <li><strong>Procesamiento de pedidos:</strong> Para procesar y entregar los productos digitales
                            que adquiere</li>
                        <li><strong>Gestión de cuenta:</strong> Para crear y administrar su cuenta de usuario</li>
                        <li><strong>Comunicaciones:</strong> Para enviarle confirmaciones de pedido, actualizaciones de
                            productos y responder a sus consultas</li>
                        <li><strong>Mejora del servicio:</strong> Para analizar el uso del sitio y mejorar nuestros
                            productos y servicios</li>
                        <li><strong>Marketing:</strong> Para enviarle información sobre nuevos productos y ofertas (solo
                            con su consentimiento)</li>
                        <li><strong>Cumplimiento legal:</strong> Para cumplir con obligaciones legales y regulatorias
                        </li>
                        <li><strong>Seguridad:</strong> Para detectar, prevenir y abordar fraudes y problemas de
                            seguridad</li>
                    </ul>
                </section>

                <section>
                    <h2>4. Base Legal para el Procesamiento</h2>
                    <p>Procesamos su información personal bajo las siguientes bases legales:</p>
                    <ul>
                        <li><strong>Ejecución de contrato:</strong> Para cumplir con nuestras obligaciones contractuales
                            con usted</li>
                        <li><strong>Consentimiento:</strong> Cuando nos ha dado su consentimiento explícito</li>
                        <li><strong>Interés legítimo:</strong> Para mejorar nuestros servicios y proteger nuestro
                            negocio</li>
                        <li><strong>Obligación legal:</strong> Para cumplir con requisitos legales y regulatorios</li>
                    </ul>
                </section>

                <section>
                    <h2>5. Compartir Información con Terceros</h2>
                    <p>Podemos compartir su información con terceros en las siguientes circunstancias:</p>
                    <ul>
                        <li><strong>Proveedores de servicios:</strong> Empresas que nos ayudan a operar nuestro negocio
                            (procesamiento de pagos, hosting, análisis)</li>
                        <li><strong>Procesadores de pago:</strong> Transbank y otros procesadores de pago para completar
                            transacciones</li>
                        <li><strong>Cumplimiento legal:</strong> Cuando sea requerido por ley o para proteger nuestros
                            derechos legales</li>
                        <li><strong>Transferencia de negocio:</strong> En caso de fusión, adquisición o venta de activos
                        </li>
                    </ul>
                    <p><strong>No vendemos ni alquilamos su información personal a terceros.</strong></p>
                </section>

                <section>
                    <h2>6. Seguridad de los Datos</h2>
                    <p>Implementamos medidas de seguridad técnicas y organizativas para proteger su información
                        personal:</p>
                    <ul>
                        <li>Cifrado SSL/TLS para todas las transmisiones de datos</li>
                        <li>Almacenamiento seguro de contraseñas mediante hash</li>
                        <li>Acceso restringido a información personal solo para personal autorizado</li>
                        <li>Monitoreo regular de seguridad y auditorías</li>
                        <li>Protección contra accesos no autorizados, alteración o destrucción de datos</li>
                    </ul>
                </section>

                <section>
                    <h2>7. Sus Derechos</h2>
                    <p>De acuerdo con la Ley N° 19.628, usted tiene los siguientes derechos:</p>
                    <ul>
                        <li><strong>Derecho de acceso:</strong> Solicitar una copia de la información personal que
                            tenemos sobre usted</li>
                        <li><strong>Derecho de rectificación:</strong> Solicitar la corrección de información inexacta o
                            incompleta</li>
                        <li><strong>Derecho de cancelación:</strong> Solicitar la eliminación de su información personal
                        </li>
                        <li><strong>Derecho de oposición:</strong> Oponerse al procesamiento de su información para
                            ciertos fines</li>
                        <li><strong>Derecho a retirar consentimiento:</strong> Retirar su consentimiento en cualquier
                            momento</li>
                    </ul>
                    <p>Para ejercer estos derechos, contáctenos en <a
                            href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a></p>
                </section>

                <section>
                    <h2>8. Retención de Datos</h2>
                    <p>Conservamos su información personal durante el tiempo necesario para:</p>
                    <ul>
                        <li>Cumplir con los fines para los que fue recopilada</li>
                        <li>Cumplir con obligaciones legales, contables y fiscales</li>
                        <li>Resolver disputas y hacer cumplir nuestros acuerdos</li>
                    </ul>
                    <p>Los datos de transacciones se conservan durante al menos 6 años según lo requiere la legislación
                        tributaria chilena.</p>
                </section>

                <section>
                    <h2>9. Transferencias Internacionales</h2>
                    <p>Algunos de nuestros proveedores de servicios pueden estar ubicados fuera de Chile. En estos
                        casos, nos aseguramos de que existan garantías adecuadas para proteger su información personal
                        de acuerdo con los estándares chilenos.</p>
                </section>

                <section>
                    <h2>10. Menores de Edad</h2>
                    <p>Nuestros servicios no están dirigidos a menores de 18 años. No recopilamos intencionalmente
                        información personal de menores. Si descubrimos que hemos recopilado información de un menor, la
                        eliminaremos de inmediato.</p>
                </section>

                <section>
                    <h2>11. Cambios a esta Política</h2>
                    <p>Podemos actualizar esta Política de Privacidad periódicamente. Le notificaremos sobre cambios
                        significativos publicando la nueva política en nuestro sitio web y actualizando la fecha de
                        "última actualización".</p>
                </section>

                <section>
                    <h2>12. Contacto</h2>
                    <p>Para cualquier consulta sobre esta Política de Privacidad o para ejercer sus derechos,
                        contáctenos:</p>
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
