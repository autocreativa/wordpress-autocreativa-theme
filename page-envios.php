<?php
/**
 * Template Name: Envíos y Entregas
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shipping-icon.png" alt="Envíos"
                        style="width: 60px; height: 60px; margin-bottom: 1rem;">
                </div>
                <h1>
                    <?php esc_html_e('Envíos y Entregas', 'autocreativa'); ?>
                </h1>
                <p class="legal-updated">
                    <?php esc_html_e('Información sobre la entrega de productos digitales', 'autocreativa'); ?>
                </p>
            </header>

            <div class="legal-body">
                <section>
                    <h2>Productos Digitales - Entrega Instantánea</h2>
                    <p>En
                        <?php bloginfo('name'); ?> ofrecemos exclusivamente <strong>productos digitales</strong>, lo que
                        significa que no hay envíos físicos. Todos nuestros productos se entregan de forma
                        <strong>instantánea y electrónica</strong>.
                    </p>
                </section>

                <section>
                    <h2>¿Cómo Funciona la Entrega?</h2>

                    <h3>1. Proceso de Compra</h3>
                    <p>Una vez que completes tu compra y el pago sea confirmado, el proceso de entrega es automático e
                        inmediato:</p>
                    <ol>
                        <li>Completas el proceso de pago a través de Transbank</li>
                        <li>El sistema procesa tu pedido automáticamente</li>
                        <li>Recibes un email de confirmación con los detalles de tu compra</li>
                        <li>El email incluye el enlace de descarga de tu producto</li>
                    </ol>

                    <h3>2. Tiempo de Entrega</h3>
                    <p><strong>Entrega inmediata:</strong> Normalmente recibirás tu producto en menos de 5 minutos
                        después de completar el pago. En casos excepcionales, puede tomar hasta 30 minutos.</p>

                    <h3>3. Email de Confirmación</h3>
                    <p>El email de confirmación incluirá:</p>
                    <ul>
                        <li>Número de orden</li>
                        <li>Detalles del producto adquirido</li>
                        <li>Enlace de descarga directo</li>
                        <li>Instrucciones de instalación o uso (si aplica)</li>
                        <li>Información de licencia</li>
                    </ul>
                </section>

                <section>
                    <h2>Acceso a tus Productos</h2>

                    <h3>Descarga Inmediata</h3>
                    <p>Puedes descargar tu producto de dos formas:</p>
                    <ul>
                        <li><strong>Desde el email:</strong> Haz clic en el enlace de descarga incluido en el email de
                            confirmación</li>
                        <li><strong>Desde tu cuenta:</strong> Inicia sesión en <a
                                href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">Mi Cuenta</a> y accede
                            a la sección "Descargas"</li>
                    </ul>

                    <h3>Período de Disponibilidad</h3>
                    <p>Los enlaces de descarga permanecen activos por <strong>30 días</strong> desde la fecha de compra.
                        Durante este período puedes:</p>
                    <ul>
                        <li>Descargar el producto tantas veces como necesites</li>
                        <li>Acceder desde diferentes dispositivos</li>
                        <li>Guardar una copia de seguridad</li>
                    </ul>
                    <p><strong>Recomendación:</strong> Descarga y guarda tus archivos inmediatamente después de la
                        compra.</p>

                    <h3>Después de 30 Días</h3>
                    <p>Si necesitas acceso al producto después del período de 30 días:</p>
                    <ul>
                        <li>Contáctanos a <a href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a></li>
                        <li>Proporciona tu número de orden</li>
                        <li>Te enviaremos un nuevo enlace de descarga</li>
                    </ul>
                </section>

                <section>
                    <h2>¿No Recibiste tu Producto?</h2>

                    <h3>Pasos a Seguir</h3>
                    <p>Si no recibes el email con tu producto en los primeros 10 minutos:</p>

                    <h4>1. Revisa tu Carpeta de Spam</h4>
                    <p>A veces los emails de confirmación pueden ser filtrados como spam. Revisa:</p>
                    <ul>
                        <li>Carpeta de Spam o Correo No Deseado</li>
                        <li>Carpeta de Promociones (Gmail)</li>
                        <li>Carpeta de Actualizaciones</li>
                    </ul>

                    <h4>2. Verifica tu Dirección de Email</h4>
                    <p>Asegúrate de que proporcionaste la dirección de email correcta durante el checkout.</p>

                    <h4>3. Revisa tu Cuenta</h4>
                    <p>Si creaste una cuenta o iniciaste sesión durante la compra:</p>
                    <ul>
                        <li>Accede a <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">Mi Cuenta</a>
                        </li>
                        <li>Ve a la sección "Pedidos" o "Descargas"</li>
                        <li>Busca tu compra reciente</li>
                    </ul>

                    <h4>4. Contacta Soporte</h4>
                    <p>Si después de seguir estos pasos aún no tienes acceso a tu producto:</p>
                    <ul>
                        <li>Envía un email a <a href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a>
                        </li>
                        <li>Incluye tu número de orden (si lo tienes)</li>
                        <li>Proporciona el email usado en la compra</li>
                    </ul>
                    <p>Resolveremos tu problema en un plazo máximo de 24 horas.</p>
                </section>

                <section>
                    <h2>Requisitos Técnicos</h2>

                    <h3>Para Descargar</h3>
                    <ul>
                        <li>Conexión a internet estable</li>
                        <li>Navegador web actualizado (Chrome, Firefox, Safari, Edge)</li>
                        <li>Espacio suficiente en tu dispositivo</li>
                    </ul>

                    <h3>Tamaño de Archivos</h3>
                    <p>El tamaño de los archivos varía según el producto. Esta información se especifica en la
                        descripción de cada producto. La mayoría de nuestros productos digitales tienen un tamaño entre:
                    </p>
                    <ul>
                        <li>Plantillas y diseños: 5-50 MB</li>
                        <li>Paquetes de recursos: 50-200 MB</li>
                        <li>Cursos y contenido multimedia: 200 MB - 2 GB</li>
                    </ul>

                    <h3>Formatos de Archivo</h3>
                    <p>Los productos se entregan en formatos estándar de la industria:</p>
                    <ul>
                        <li>Archivos comprimidos: .zip, .rar</li>
                        <li>Documentos: .pdf, .docx</li>
                        <li>Imágenes: .jpg, .png, .svg, .psd, .ai</li>
                        <li>Videos: .mp4, .mov</li>
                        <li>Código: .html, .css, .js, .php</li>
                    </ul>
                </section>

                <section>
                    <h2>Problemas con la Descarga</h2>

                    <h3>Descarga Interrumpida</h3>
                    <p>Si tu descarga se interrumpe:</p>
                    <ul>
                        <li>Intenta nuevamente usando el mismo enlace</li>
                        <li>Usa un gestor de descargas (recomendado para archivos grandes)</li>
                        <li>Verifica tu conexión a internet</li>
                    </ul>

                    <h3>Archivo Corrupto</h3>
                    <p>Si el archivo descargado está corrupto o no se puede abrir:</p>
                    <ul>
                        <li>Descarga el archivo nuevamente</li>
                        <li>Verifica que tienes el software necesario para abrir el archivo</li>
                        <li>Contacta soporte si el problema persiste</li>
                    </ul>

                    <h3>Enlace Expirado</h3>
                    <p>Si tu enlace de descarga ha expirado (después de 30 días):</p>
                    <ul>
                        <li>Contáctanos a <a href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a></li>
                        <li>Proporciona tu número de orden</li>
                        <li>Te generaremos un nuevo enlace sin costo</li>
                    </ul>
                </section>

                <section>
                    <h2>Actualizaciones de Productos</h2>
                    <p>Algunos productos reciben actualizaciones periódicas con mejoras y nuevas características.</p>

                    <h3>Notificaciones</h3>
                    <p>Si tu producto es actualizado:</p>
                    <ul>
                        <li>Recibirás un email de notificación</li>
                        <li>El email incluirá un enlace para descargar la versión actualizada</li>
                        <li>Las actualizaciones son gratuitas para clientes existentes</li>
                    </ul>

                    <h3>Acceso a Actualizaciones</h3>
                    <p>También puedes verificar actualizaciones:</p>
                    <ul>
                        <li>Desde tu cuenta en la sección "Descargas"</li>
                        <li>Revisando la página del producto</li>
                    </ul>
                </section>

                <section>
                    <h2>Soporte y Ayuda</h2>
                    <p>Si tienes alguna pregunta sobre la entrega de tu producto:</p>
                    <ul>
                        <li><strong>Email:</strong> <a
                                href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a></li>
                        <li><strong>Horario de atención:</strong> Lunes a Viernes, 9:00 - 18:00 (hora de Chile)</li>
                        <li><strong>Tiempo de respuesta:</strong> Máximo 24 horas hábiles</li>
                    </ul>

                    <p>Para consultas urgentes sobre acceso a productos, incluye en tu mensaje:</p>
                    <ul>
                        <li>Número de orden</li>
                        <li>Email usado en la compra</li>
                        <li>Descripción del problema</li>
                        <li>Capturas de pantalla (si aplica)</li>
                    </ul>
                </section>

                <section>
                    <h2>Preguntas Frecuentes</h2>

                    <h3>¿Puedo compartir el enlace de descarga?</h3>
                    <p>No. Los enlaces de descarga son personales y están asociados a tu compra. Compartir enlaces viola
                        nuestros términos de servicio y puede resultar en la cancelación de tu licencia.</p>

                    <h3>¿Puedo descargar en múltiples dispositivos?</h3>
                    <p>Sí, puedes descargar el producto en todos tus dispositivos personales durante el período de
                        disponibilidad del enlace.</p>

                    <h3>¿Qué pasa si cambio de computadora?</h3>
                    <p>Puedes transferir tus productos a una nueva computadora. Solo asegúrate de guardar los archivos
                        descargados o descárgalos nuevamente si el enlace aún está activo.</p>

                    <h3>¿Ofrecen respaldo en la nube?</h3>
                    <p>Actualmente no ofrecemos almacenamiento en la nube. Recomendamos que guardes tus archivos en tu
                        propio servicio de almacenamiento en la nube (Google Drive, Dropbox, etc.).</p>
                </section>

                <section>
                    <h2>Más Información</h2>
                    <p>Para más detalles sobre nuestros productos y servicios, visita:</p>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/preguntas-frecuentes/')); ?>">Preguntas
                                Frecuentes</a></li>
                        <li><a href="<?php echo esc_url(home_url('/devoluciones/')); ?>">Política de Devoluciones</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y
                                Condiciones</a></li>
                    </ul>
                </section>
            </div>
        </article>
    </div>
</main>

<?php
get_footer();
