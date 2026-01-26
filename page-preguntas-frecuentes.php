<?php
/**
 * Template Name: Preguntas Frecuentes
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq-icon.png" alt="FAQ"
                        style="width: 60px; height: 60px; margin-bottom: 1rem;">
                </div>
                <h1>
                    <?php esc_html_e('Preguntas Frecuentes', 'autocreativa'); ?>
                </h1>
                <p class="legal-updated">
                    <?php esc_html_e('Encuentra respuestas a las preguntas más comunes', 'autocreativa'); ?>
                </p>
            </header>

            <div class="legal-body">
                <section>
                    <h2>Sobre Nuestros Productos</h2>

                    <h3>¿Qué tipo de productos ofrecen?</h3>
                    <p>Ofrecemos exclusivamente productos digitales como plantillas, diseños, recursos gráficos, y
                        herramientas digitales para emprendedores y creativos. Todos nuestros productos son descargables
                        instantáneamente después de la compra.</p>

                    <h3>¿Los productos tienen licencia de uso comercial?</h3>
                    <p>La mayoría de nuestros productos incluyen licencia de uso comercial. Cada producto especifica
                        claramente el tipo de licencia en su descripción. Por favor, revisa los términos de licencia
                        antes de realizar tu compra.</p>

                    <h3>¿Puedo ver una demo antes de comprar?</h3>
                    <p>Sí, muchos de nuestros productos incluyen previsualizaciones o demos. Busca la sección "Vista
                        Previa" en la página del producto para explorar las características antes de comprar.</p>
                </section>

                <section>
                    <h2>Proceso de Compra</h2>

                    <h3>¿Cómo realizo una compra?</h3>
                    <p>El proceso es simple:</p>
                    <ol>
                        <li>Navega por nuestro catálogo y selecciona el producto que deseas</li>
                        <li>Haz clic en "Agregar al Carrito"</li>
                        <li>Revisa tu carrito y procede al checkout</li>
                        <li>Completa tus datos y realiza el pago</li>
                        <li>Recibirás un email con el enlace de descarga inmediatamente</li>
                    </ol>

                    <h3>¿Qué métodos de pago aceptan?</h3>
                    <p>Aceptamos pagos a través de Transbank, que incluye:</p>
                    <ul>
                        <li>Tarjetas de crédito (Visa, Mastercard, American Express)</li>
                        <li>Tarjetas de débito</li>
                        <li>Transferencia bancaria</li>
                    </ul>

                    <h3>¿Es seguro comprar en su sitio?</h3>
                    <p>Absolutamente. Utilizamos Transbank, la plataforma de pagos más segura de Chile, con cifrado
                        SSL/TLS para proteger toda tu información. Nunca almacenamos datos de tarjetas de crédito en
                        nuestros servidores.</p>

                    <h3>¿Necesito crear una cuenta para comprar?</h3>
                    <p>No es obligatorio, pero recomendamos crear una cuenta para:</p>
                    <ul>
                        <li>Acceder fácilmente a tus compras anteriores</li>
                        <li>Recibir actualizaciones de productos</li>
                        <li>Gestionar tus descargas</li>
                        <li>Proceso de checkout más rápido en futuras compras</li>
                    </ul>
                </section>

                <section>
                    <h2>Entrega y Acceso</h2>

                    <h3>¿Cuándo recibiré mi producto?</h3>
                    <p>Al tratarse de productos digitales, el acceso es <strong>instantáneo</strong>. Inmediatamente
                        después de completar tu pago, recibirás un correo electrónico con:</p>
                    <ul>
                        <li>Confirmación de compra</li>
                        <li>Enlace de descarga del producto</li>
                        <li>Instrucciones de uso (si aplica)</li>
                    </ul>

                    <h3>No recibí el email con mi producto, ¿qué hago?</h3>
                    <p>Si no recibes el email en los primeros 10 minutos:</p>
                    <ol>
                        <li>Revisa tu carpeta de spam o correo no deseado</li>
                        <li>Verifica que el email proporcionado sea correcto</li>
                        <li>Inicia sesión en tu cuenta para acceder a tus descargas</li>
                        <li>Si el problema persiste, contáctanos a <a
                                href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a></li>
                    </ol>

                    <h3>¿Por cuánto tiempo puedo descargar mi producto?</h3>
                    <p>El enlace de descarga permanece activo por <strong>30 días</strong> desde la fecha de compra. Te
                        recomendamos descargar y guardar tus archivos inmediatamente. Si necesitas acceso después de
                        este período, contáctanos.</p>

                    <h3>¿Puedo descargar el producto múltiples veces?</h3>
                    <p>Sí, puedes descargar el producto tantas veces como necesites dentro del período de 30 días. Si
                        tienes una cuenta, también puedes acceder a tus compras desde tu panel de usuario.</p>
                </section>

                <section>
                    <h2>Devoluciones y Reembolsos</h2>

                    <h3>¿Puedo solicitar un reembolso?</h3>
                    <p>Sí, ofrecemos reembolsos en las siguientes situaciones:</p>
                    <ul>
                        <li><strong>Producto defectuoso:</strong> Si el archivo está corrupto o no funciona según lo
                            descrito (7 días)</li>
                        <li><strong>Producto no recibido:</strong> Si no recibes acceso al producto dentro de 24 horas
                        </li>
                        <li><strong>Duplicado accidental:</strong> Si compraste el mismo producto dos veces</li>
                    </ul>
                    <p><strong>No se aceptan devoluciones</strong> por cambio de opinión una vez descargado el producto.
                    </p>

                    <h3>¿Cómo solicito un reembolso?</h3>
                    <p>Envía un email a <a href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a> con:
                    </p>
                    <ul>
                        <li>Número de orden</li>
                        <li>Descripción detallada del problema</li>
                        <li>Capturas de pantalla (si aplica)</li>
                    </ul>
                    <p>Procesamos los reembolsos en un plazo de 5-7 días hábiles.</p>
                </section>

                <section>
                    <h2>Soporte Técnico</h2>

                    <h3>¿Ofrecen soporte para los productos?</h3>
                    <p>Sí, ofrecemos soporte técnico básico para todos nuestros productos:</p>
                    <ul>
                        <li>Ayuda con la descarga e instalación</li>
                        <li>Resolución de problemas técnicos</li>
                        <li>Aclaraciones sobre el uso del producto</li>
                    </ul>
                    <p>El soporte NO incluye personalización o desarrollo a medida.</p>

                    <h3>¿Cómo contacto al soporte?</h3>
                    <p>Puedes contactarnos a través de:</p>
                    <ul>
                        <li><strong>Email:</strong> <a
                                href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a></li>
                        <li><strong>Formulario de contacto:</strong> <a
                                href="<?php echo esc_url(home_url('/contacto/')); ?>">Página de Contacto</a></li>
                    </ul>
                    <p>Respondemos en un plazo de 24-48 horas hábiles.</p>

                    <h3>¿Los productos reciben actualizaciones?</h3>
                    <p>Algunos productos reciben actualizaciones periódicas. Si tu producto es actualizado, recibirás un
                        email de notificación con el enlace de descarga de la nueva versión.</p>
                </section>

                <section>
                    <h2>Cuenta y Privacidad</h2>

                    <h3>¿Cómo creo una cuenta?</h3>
                    <p>Puedes crear una cuenta durante el proceso de compra o visitando la página <a
                            href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">Mi Cuenta</a>. Solo
                        necesitas un email y contraseña.</p>

                    <h3>¿Qué hacen con mi información personal?</h3>
                    <p>Protegemos tu privacidad. Solo utilizamos tu información para:</p>
                    <ul>
                        <li>Procesar tus pedidos</li>
                        <li>Enviarte los productos adquiridos</li>
                        <li>Comunicarnos contigo sobre tus compras</li>
                    </ul>
                    <p>Nunca vendemos ni compartimos tu información con terceros. Lee nuestra <a
                            href="<?php echo esc_url(home_url('/politica-de-privacidad/')); ?>">Política de
                            Privacidad</a> para más detalles.</p>

                    <h3>¿Puedo eliminar mi cuenta?</h3>
                    <p>Sí, puedes solicitar la eliminación de tu cuenta contactándonos a <a
                            href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a>. Ten en cuenta que
                        perderás acceso a tus compras anteriores.</p>
                </section>

                <section>
                    <h2>Otras Preguntas</h2>

                    <h3>¿Ofrecen descuentos o promociones?</h3>
                    <p>Sí, regularmente ofrecemos promociones especiales. Suscríbete a nuestro newsletter para recibir
                        notificaciones sobre ofertas exclusivas y nuevos productos.</p>

                    <h3>¿Puedo revender los productos que compro?</h3>
                    <p>No, los productos no pueden ser revendidos tal cual. Sin embargo, muchos incluyen licencia
                        comercial que te permite usar los productos en proyectos para clientes. Revisa los términos de
                        licencia de cada producto.</p>

                    <h3>¿Hacen productos personalizados?</h3>
                    <p>Actualmente no ofrecemos servicios de personalización. Sin embargo, si tienes un proyecto
                        específico, contáctanos a <a
                            href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a> y evaluaremos tu
                        solicitud.</p>
                </section>

                <section>
                    <h2>¿No encontraste tu respuesta?</h2>
                    <p>Si tu pregunta no está en esta lista, no dudes en contactarnos:</p>
                    <ul>
                        <li><strong>Email:</strong> <a
                                href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a></li>
                        <li><strong>Formulario:</strong> <a href="<?php echo esc_url(home_url('/contacto/')); ?>">Página
                                de Contacto</a></li>
                    </ul>
                    <p>Estamos aquí para ayudarte. Respondemos todas las consultas en un plazo de 24-48 horas hábiles.
                    </p>
                </section>
            </div>
        </article>
    </div>
</main>

<?php
get_footer();
