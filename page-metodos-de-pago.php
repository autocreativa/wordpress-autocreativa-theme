<?php
/**
 * Template Name: Métodos de Pago
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment-icon.png"
                        alt="Métodos de Pago" style="width: 60px; height: 60px; margin-bottom: 1rem;">
                </div>
                <h1>
                    <?php esc_html_e('Métodos de Pago', 'autocreativa'); ?>
                </h1>
                <p class="legal-updated">
                    <?php esc_html_e('Información sobre opciones de pago y seguridad', 'autocreativa'); ?>
                </p>
            </header>

            <div class="legal-body">
                <section>
                    <h2>Pagos Seguros con Transbank</h2>
                    <p>En
                        <?php bloginfo('name'); ?> procesamos todos los pagos a través de <strong>Transbank</strong>, la
                        plataforma de pagos más confiable y segura de Chile. Esto garantiza que tu información
                        financiera esté protegida con los más altos estándares de seguridad.
                    </p>
                </section>

                <section>
                    <h2>Métodos de Pago Disponibles</h2>
                    <p>A través de Transbank, aceptamos las siguientes formas de pago:</p>

                    <h3>1. Tarjetas de Crédito</h3>
                    <p>Aceptamos las principales tarjetas de crédito:</p>
                    <ul>
                        <li><strong>Visa</strong> - Nacional e Internacional</li>
                        <li><strong>Mastercard</strong> - Nacional e Internacional</li>
                        <li><strong>American Express</strong> - Nacional e Internacional</li>
                        <li><strong>Diners Club</strong> - Nacional e Internacional</li>
                    </ul>
                    <p><strong>Características:</strong></p>
                    <ul>
                        <li>Pago inmediato</li>
                        <li>Opción de cuotas (según tu banco)</li>
                        <li>Confirmación instantánea</li>
                        <li>Acceso inmediato al producto</li>
                    </ul>

                    <h3>2. Tarjetas de Débito</h3>
                    <p>Aceptamos tarjetas de débito de todos los bancos en Chile:</p>
                    <ul>
                        <li>Redcompra</li>
                        <li>Visa Débito</li>
                        <li>Mastercard Débito</li>
                    </ul>
                    <p><strong>Características:</strong></p>
                    <ul>
                        <li>Pago directo desde tu cuenta corriente o vista</li>
                        <li>Confirmación inmediata</li>
                        <li>Sin intereses</li>
                        <li>Acceso inmediato al producto</li>
                    </ul>

                    <h3>3. Transferencia Bancaria</h3>
                    <p>También puedes pagar mediante transferencia bancaria electrónica:</p>
                    <ul>
                        <li>Disponible para todos los bancos en Chile</li>
                        <li>Procesamiento a través de Transbank</li>
                        <li>Confirmación en tiempo real</li>
                    </ul>
                    <p><strong>Características:</strong></p>
                    <ul>
                        <li>Pago directo desde tu cuenta bancaria</li>
                        <li>Sin necesidad de tarjeta</li>
                        <li>Confirmación rápida (generalmente instantánea)</li>
                        <li>Límites según tu banco</li>
                    </ul>
                </section>

                <section>
                    <h2>Seguridad en los Pagos</h2>

                    <h3>Certificación y Encriptación</h3>
                    <p>Tu seguridad es nuestra prioridad. Todos los pagos están protegidos por:</p>
                    <ul>
                        <li><strong>Certificado SSL/TLS:</strong> Toda la información se transmite encriptada</li>
                        <li><strong>PCI DSS Compliance:</strong> Cumplimos con los estándares internacionales de
                            seguridad</li>
                        <li><strong>3D Secure:</strong> Verificación adicional para tarjetas compatibles</li>
                        <li><strong>Tokenización:</strong> No almacenamos datos de tarjetas en nuestros servidores</li>
                    </ul>

                    <h3>Protección de Datos</h3>
                    <p>Garantizamos que:</p>
                    <ul>
                        <li>Nunca almacenamos números de tarjeta completos</li>
                        <li>Los datos de pago se procesan directamente en Transbank</li>
                        <li>Tu información financiera nunca pasa por nuestros servidores</li>
                        <li>Cumplimos con todas las normativas chilenas de protección de datos</li>
                    </ul>

                    <h3>Verificaciones de Seguridad</h3>
                    <p>Para tu protección, implementamos:</p>
                    <ul>
                        <li>Verificación de dirección (AVS) cuando está disponible</li>
                        <li>Código de seguridad CVV/CVC obligatorio</li>
                        <li>Detección de fraude automatizada</li>
                        <li>Monitoreo de transacciones sospechosas</li>
                    </ul>
                </section>

                <section>
                    <h2>Proceso de Pago Paso a Paso</h2>

                    <h3>1. Selecciona tus Productos</h3>
                    <ul>
                        <li>Navega por nuestro catálogo</li>
                        <li>Agrega productos al carrito</li>
                        <li>Revisa tu selección</li>
                    </ul>

                    <h3>2. Procede al Checkout</h3>
                    <ul>
                        <li>Haz clic en "Finalizar Compra"</li>
                        <li>Ingresa o confirma tu información de contacto</li>
                        <li>Revisa el resumen de tu pedido</li>
                    </ul>

                    <h3>3. Selecciona Método de Pago</h3>
                    <ul>
                        <li>Elige entre tarjeta de crédito, débito o transferencia</li>
                        <li>Serás redirigido a la plataforma segura de Transbank</li>
                    </ul>

                    <h3>4. Completa el Pago en Transbank</h3>
                    <ul>
                        <li>Ingresa los datos de tu tarjeta o banco</li>
                        <li>Completa la verificación de seguridad si es requerida</li>
                        <li>Confirma el pago</li>
                    </ul>

                    <h3>5. Confirmación y Entrega</h3>
                    <ul>
                        <li>Recibirás confirmación inmediata en pantalla</li>
                        <li>Te enviaremos un email con el comprobante</li>
                        <li>Recibirás otro email con el enlace de descarga</li>
                        <li>Podrás acceder al producto desde tu cuenta</li>
                    </ul>
                </section>

                <section>
                    <h2>Moneda y Precios</h2>

                    <h3>Moneda</h3>
                    <p>Todos nuestros precios están expresados en <strong>Pesos Chilenos (CLP)</strong>.</p>

                    <h3>IVA Incluido</h3>
                    <p>Los precios mostrados <strong>incluyen IVA</strong> (19%) cuando corresponde según la legislación
                        chilena.</p>

                    <h3>Conversión de Moneda</h3>
                    <p>Si pagas con tarjeta internacional:</p>
                    <ul>
                        <li>El cargo se realizará en pesos chilenos (CLP)</li>
                        <li>Tu banco realizará la conversión a tu moneda local</li>
                        <li>Pueden aplicarse comisiones de tu banco por conversión</li>
                        <li>El tipo de cambio es determinado por tu banco</li>
                    </ul>
                </section>

                <section>
                    <h2>Opciones de Cuotas</h2>

                    <h3>Pago en Cuotas</h3>
                    <p>Si pagas con tarjeta de crédito, puedes optar por pagar en cuotas:</p>
                    <ul>
                        <li>Disponibilidad según tu banco emisor</li>
                        <li>Número de cuotas disponibles varía por banco</li>
                        <li>Intereses según las condiciones de tu tarjeta</li>
                        <li>Selecciona las cuotas directamente en Transbank</li>
                    </ul>

                    <h3>Cuotas Sin Interés</h3>
                    <p>Ocasionalmente ofrecemos promociones de cuotas sin interés:</p>
                    <ul>
                        <li>Verás la promoción en la página del producto</li>
                        <li>Aplicable solo a tarjetas de crédito participantes</li>
                        <li>Sujeto a términos y condiciones específicos</li>
                    </ul>
                </section>

                <section>
                    <h2>Comprobantes y Facturación</h2>

                    <h3>Boleta Electrónica</h3>
                    <p>Por defecto, emitimos boleta electrónica que incluye:</p>
                    <ul>
                        <li>Detalle de productos adquiridos</li>
                        <li>Monto total pagado (IVA incluido)</li>
                        <li>Fecha y hora de la transacción</li>
                        <li>Número de orden</li>
                    </ul>
                    <p>La boleta se envía automáticamente a tu email.</p>

                    <h3>Factura Electrónica</h3>
                    <p>Si necesitas factura para tu empresa:</p>
                    <ul>
                        <li>Indica que necesitas factura durante el checkout</li>
                        <li>Proporciona RUT y razón social de tu empresa</li>
                        <li>Proporciona dirección fiscal completa</li>
                        <li>La factura se emitirá y enviará por email</li>
                    </ul>

                    <h3>Solicitar Factura Posterior</h3>
                    <p>Si olvidaste solicitar factura durante la compra:</p>
                    <ul>
                        <li>Contáctanos en las primeras 48 horas</li>
                        <li>Proporciona tu número de orden</li>
                        <li>Envía los datos de facturación</li>
                        <li>Emitiremos la factura retroactivamente</li>
                    </ul>
                </section>

                <section>
                    <h2>Problemas con el Pago</h2>

                    <h3>Pago Rechazado</h3>
                    <p>Si tu pago es rechazado, las causas más comunes son:</p>
                    <ul>
                        <li><strong>Fondos insuficientes:</strong> Verifica el saldo de tu cuenta/tarjeta</li>
                        <li><strong>Límite de compra:</strong> Verifica los límites diarios de tu tarjeta</li>
                        <li><strong>Datos incorrectos:</strong> Revisa que ingresaste correctamente los datos</li>
                        <li><strong>Tarjeta vencida:</strong> Verifica la fecha de vencimiento</li>
                        <li><strong>Restricción del banco:</strong> Contacta a tu banco para autorizar la compra</li>
                    </ul>

                    <h3>¿Qué Hacer?</h3>
                    <ol>
                        <li>Verifica el motivo del rechazo en el mensaje de error</li>
                        <li>Corrige el problema (fondos, datos, etc.)</li>
                        <li>Intenta nuevamente</li>
                        <li>Si persiste, prueba con otro método de pago</li>
                        <li>Contacta a tu banco si es necesario</li>
                    </ol>

                    <h3>Doble Cargo</h3>
                    <p>Si ves dos cargos por la misma compra:</p>
                    <ul>
                        <li>Uno puede ser una autorización temporal (se reversa automáticamente)</li>
                        <li>Espera 24-48 horas para que se aclare</li>
                        <li>Si persiste, contáctanos con los detalles</li>
                    </ul>

                    <h3>Pago Procesado pero Sin Producto</h3>
                    <p>Si tu pago fue exitoso pero no recibiste el producto:</p>
                    <ol>
                        <li>Revisa tu carpeta de spam</li>
                        <li>Verifica tu cuenta en la sección "Descargas"</li>
                        <li>Espera 30 minutos (a veces hay demoras)</li>
                        <li>Contáctanos con tu número de orden</li>
                    </ol>
                </section>

                <section>
                    <h2>Reembolsos y Devoluciones</h2>
                    <p>Si solicitas un reembolso aprobado:</p>
                    <ul>
                        <li>El dinero regresa al mismo método de pago usado</li>
                        <li>Tiempo de procesamiento: 5-7 días hábiles</li>
                        <li>Tiempo de reflejo en tu cuenta: 3-10 días adicionales (según tu banco)</li>
                    </ul>
                    <p>Para más información, consulta nuestra <a
                            href="<?php echo esc_url(home_url('/devoluciones/')); ?>">Política de Devoluciones</a>.</p>
                </section>

                <section>
                    <h2>Preguntas Frecuentes</h2>

                    <h3>¿Es seguro pagar en su sitio?</h3>
                    <p>Absolutamente. Usamos Transbank, la plataforma más segura de Chile, con encriptación SSL y
                        cumplimiento PCI DSS. Nunca almacenamos datos de tarjetas.</p>

                    <h3>¿Puedo pagar desde el extranjero?</h3>
                    <p>Sí, aceptamos tarjetas internacionales. El cargo se realizará en pesos chilenos y tu banco hará
                        la conversión.</p>

                    <h3>¿Cobran comisión por el pago?</h3>
                    <p>No cobramos comisiones adicionales. El precio que ves es el precio final. Tu banco puede cobrar
                        comisiones por conversión de moneda o transacciones internacionales.</p>

                    <h3>¿Puedo cambiar el método de pago después de comprar?</h3>
                    <p>No es posible cambiar el método de pago una vez completada la transacción. Si necesitas factura
                        con otros datos, contáctanos.</p>

                    <h3>¿Guardan mi información de pago?</h3>
                    <p>No. Por seguridad, no almacenamos ninguna información de tarjetas. Deberás ingresar tus datos en
                        cada compra.</p>

                    <h3>¿Ofrecen pago contra entrega?</h3>
                    <p>No. Al ser productos digitales con entrega instantánea, solo aceptamos pago anticipado a través
                        de Transbank.</p>

                    <h3>¿Puedo pagar con PayPal, Mercado Pago u otros?</h3>
                    <p>Actualmente solo procesamos pagos a través de Transbank. Estamos evaluando agregar más métodos en
                        el futuro.</p>
                </section>

                <section>
                    <h2>Soporte</h2>
                    <p>Si tienes problemas con tu pago o preguntas sobre métodos de pago:</p>
                    <ul>
                        <li><strong>Email:</strong> <a
                                href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a></li>
                        <li><strong>Asunto:</strong> "Problema con Pago" o "Consulta sobre Métodos de Pago"</li>
                        <li><strong>Incluye:</strong> Número de orden (si aplica), método de pago usado, descripción del
                            problema</li>
                        <li><strong>Tiempo de respuesta:</strong> 24-48 horas hábiles</li>
                    </ul>
                </section>

                <section>
                    <h2>Más Información</h2>
                    <p>Para más detalles sobre nuestros servicios:</p>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/preguntas-frecuentes/')); ?>">Preguntas
                                Frecuentes</a></li>
                        <li><a href="<?php echo esc_url(home_url('/devoluciones/')); ?>">Política de Devoluciones</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y
                                Condiciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/envios/')); ?>">Envíos y Entregas</a></li>
                    </ul>
                </section>
            </div>
        </article>
    </div>
</main>

<?php
get_footer();
