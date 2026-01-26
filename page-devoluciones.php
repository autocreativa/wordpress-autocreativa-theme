<?php
/**
 * Template Name: Devoluciones
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/returns-icon.png"
                        alt="Devoluciones" style="width: 60px; height: 60px; margin-bottom: 1rem;">
                </div>
                <h1>
                    <?php esc_html_e('Política de Devoluciones y Reembolsos', 'autocreativa'); ?>
                </h1>
                <p class="legal-updated">
                    <?php esc_html_e('Información sobre devoluciones para productos digitales', 'autocreativa'); ?>
                </p>
            </header>

            <div class="legal-body">
                <section>
                    <h2>Nuestra Política de Devoluciones</h2>
                    <p>En
                        <?php bloginfo('name'); ?> nos esforzamos por ofrecer productos digitales de la más alta
                        calidad. Entendemos que la naturaleza digital de nuestros productos requiere una política de
                        devoluciones específica y justa tanto para nuestros clientes como para nuestro negocio.
                    </p>
                </section>

                <section>
                    <h2>Productos Digitales - Consideraciones Especiales</h2>
                    <p>Debido a que nuestros productos son digitales y se entregan instantáneamente:</p>
                    <ul>
                        <li>Una vez descargado o accedido, el producto no puede ser "devuelto" en el sentido tradicional
                        </li>
                        <li>No podemos verificar si el producto ha sido copiado o utilizado</li>
                        <li>La descarga implica que has recibido el producto completo</li>
                    </ul>
                    <p>Por estas razones, nuestra política de devoluciones se enfoca en garantizar que recibas
                        exactamente lo que compraste y que funcione según lo prometido.</p>
                </section>

                <section>
                    <h2>Casos en los que Aceptamos Devoluciones</h2>

                    <h3>1. Producto Defectuoso o No Funcional</h3>
                    <p><strong>Plazo:</strong> 7 días desde la compra</p>
                    <p><strong>Condiciones:</strong></p>
                    <ul>
                        <li>El archivo está corrupto o no se puede descargar</li>
                        <li>El producto no funciona según lo descrito</li>
                        <li>Faltan archivos o componentes esenciales</li>
                        <li>El producto contiene errores graves que impiden su uso</li>
                    </ul>
                    <p><strong>Proceso:</strong></p>
                    <ol>
                        <li>Contáctanos describiendo el problema específico</li>
                        <li>Proporciona capturas de pantalla o evidencia del error</li>
                        <li>Intentaremos resolver el problema primero</li>
                        <li>Si no se puede resolver, procesaremos el reembolso completo</li>
                    </ol>

                    <h3>2. Producto No Recibido</h3>
                    <p><strong>Plazo:</strong> 24 horas desde la compra</p>
                    <p><strong>Condiciones:</strong></p>
                    <ul>
                        <li>No recibiste el email con el enlace de descarga</li>
                        <li>El enlace de descarga no funciona</li>
                        <li>No puedes acceder al producto desde tu cuenta</li>
                    </ul>
                    <p><strong>Proceso:</strong></p>
                    <ol>
                        <li>Verifica tu carpeta de spam primero</li>
                        <li>Revisa tu cuenta en la sección "Descargas"</li>
                        <li>Contáctanos con tu número de orden</li>
                        <li>Te enviaremos un nuevo enlace o procesaremos el reembolso</li>
                    </ol>

                    <h3>3. Compra Duplicada Accidental</h3>
                    <p><strong>Plazo:</strong> 48 horas desde la compra</p>
                    <p><strong>Condiciones:</strong></p>
                    <ul>
                        <li>Compraste el mismo producto dos veces por error</li>
                        <li>Error en el procesamiento del pago que generó cargos duplicados</li>
                    </ul>
                    <p><strong>Proceso:</strong></p>
                    <ol>
                        <li>Contáctanos inmediatamente</li>
                        <li>Proporciona ambos números de orden</li>
                        <li>Reembolsaremos la compra duplicada</li>
                    </ol>

                    <h3>4. Descripción Engañosa del Producto</h3>
                    <p><strong>Plazo:</strong> 7 días desde la compra</p>
                    <p><strong>Condiciones:</strong></p>
                    <ul>
                        <li>El producto es significativamente diferente a lo descrito</li>
                        <li>Faltan características importantes mencionadas en la descripción</li>
                        <li>El producto no es compatible con lo especificado</li>
                    </ul>
                    <p><strong>Proceso:</strong></p>
                    <ol>
                        <li>Contáctanos con detalles específicos de la discrepancia</li>
                        <li>Proporciona evidencia (capturas de pantalla, comparaciones)</li>
                        <li>Evaluaremos el caso</li>
                        <li>Ofreceremos solución o reembolso según corresponda</li>
                    </ol>
                </section>

                <section>
                    <h2>Casos en los que NO Aceptamos Devoluciones</h2>

                    <h3>1. Cambio de Opinión</h3>
                    <p>No se aceptan devoluciones si:</p>
                    <ul>
                        <li>Ya descargaste el producto</li>
                        <li>Simplemente cambiaste de opinión después de ver el contenido</li>
                        <li>Decidiste que no necesitas el producto</li>
                        <li>Encontraste una alternativa más económica</li>
                    </ul>
                    <p><strong>Recomendación:</strong> Revisa cuidadosamente la descripción, previsualizaciones y demos
                        antes de comprar.</p>

                    <h3>2. Incompatibilidad No Especificada</h3>
                    <p>No se aceptan devoluciones si:</p>
                    <ul>
                        <li>No verificaste los requisitos técnicos antes de comprar</li>
                        <li>El producto no es compatible con tu software (cuando esto estaba claramente especificado)
                        </li>
                        <li>No tienes las habilidades necesarias para usar el producto</li>
                    </ul>

                    <h3>3. Uso Indebido</h3>
                    <p>No se aceptan devoluciones si:</p>
                    <ul>
                        <li>Modificaste el producto y ahora no funciona</li>
                        <li>Usaste el producto en un proyecto y luego solicitas devolución</li>
                        <li>Compartiste o distribuiste el producto violando los términos de licencia</li>
                    </ul>

                    <h3>4. Fuera del Plazo</h3>
                    <p>Las solicitudes de reembolso deben hacerse dentro de los plazos especificados para cada caso.
                        Solicitudes fuera de plazo serán evaluadas caso por caso.</p>
                </section>

                <section>
                    <h2>Cómo Solicitar un Reembolso</h2>

                    <h3>Paso 1: Reúne la Información</h3>
                    <p>Antes de contactarnos, ten a mano:</p>
                    <ul>
                        <li>Número de orden (lo encuentras en el email de confirmación)</li>
                        <li>Email usado en la compra</li>
                        <li>Descripción detallada del problema</li>
                        <li>Capturas de pantalla o evidencia del problema</li>
                        <li>Fecha de compra</li>
                    </ul>

                    <h3>Paso 2: Contacta Soporte</h3>
                    <p>Envía un email a <a href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a> con:
                    </p>
                    <ul>
                        <li><strong>Asunto:</strong> "Solicitud de Reembolso - Orden #[tu número de orden]"</li>
                        <li><strong>Contenido:</strong> Toda la información del Paso 1</li>
                        <li><strong>Evidencia:</strong> Adjunta capturas de pantalla si aplica</li>
                    </ul>

                    <h3>Paso 3: Evaluación</h3>
                    <p>Nuestro equipo evaluará tu solicitud en un plazo de 24-48 horas hábiles. Podríamos:</p>
                    <ul>
                        <li>Solicitar información adicional</li>
                        <li>Ofrecer una solución alternativa (nuevo enlace, archivo corregido, etc.)</li>
                        <li>Aprobar el reembolso</li>
                        <li>Explicar por qué no procede el reembolso</li>
                    </ul>

                    <h3>Paso 4: Procesamiento del Reembolso</h3>
                    <p>Si tu solicitud es aprobada:</p>
                    <ul>
                        <li>Recibirás un email de confirmación</li>
                        <li>El reembolso se procesará en 5-7 días hábiles</li>
                        <li>El dinero regresará al mismo método de pago usado en la compra</li>
                        <li>Dependiendo de tu banco, puede tomar 3-10 días adicionales en reflejarse</li>
                    </ul>
                </section>

                <section>
                    <h2>Alternativas al Reembolso</h2>
                    <p>Antes de procesar un reembolso, siempre intentaremos resolver tu problema. Podemos ofrecer:</p>

                    <h3>1. Soporte Técnico</h3>
                    <ul>
                        <li>Ayuda para descargar o instalar el producto</li>
                        <li>Resolución de problemas técnicos</li>
                        <li>Guía de uso básico</li>
                    </ul>

                    <h3>2. Reemplazo del Producto</h3>
                    <ul>
                        <li>Nuevo enlace de descarga</li>
                        <li>Versión corregida del archivo</li>
                        <li>Archivos faltantes</li>
                    </ul>

                    <h3>3. Crédito en la Tienda</h3>
                    <ul>
                        <li>En algunos casos, podemos ofrecer crédito para usar en futuros productos</li>
                        <li>El crédito puede ser por el valor total o parcial según el caso</li>
                        <li>Válido por 6 meses</li>
                    </ul>

                    <h3>4. Producto Alternativo</h3>
                    <ul>
                        <li>Si el producto no cumple tus expectativas, podemos sugerir alternativas</li>
                        <li>Posibilidad de cambio por otro producto de valor similar</li>
                    </ul>
                </section>

                <section>
                    <h2>Reembolsos Parciales</h2>
                    <p>En casos específicos, podemos ofrecer reembolsos parciales:</p>
                    <ul>
                        <li>Producto con defectos menores que no impiden su uso</li>
                        <li>Falta de componentes no esenciales</li>
                        <li>Problemas resueltos después de un tiempo considerable</li>
                    </ul>
                    <p>El porcentaje del reembolso parcial se determinará según la gravedad del problema.</p>
                </section>

                <section>
                    <h2>Garantía de Satisfacción</h2>
                    <p>Aunque no podemos ofrecer devoluciones por cambio de opinión en productos digitales, nos
                        comprometemos a:</p>
                    <ul>
                        <li><strong>Descripciones precisas:</strong> Toda la información del producto es exacta y
                            completa</li>
                        <li><strong>Previsualizaciones:</strong> Ofrecemos demos y previsualizaciones cuando es posible
                        </li>
                        <li><strong>Soporte de calidad:</strong> Ayudamos a resolver cualquier problema técnico</li>
                        <li><strong>Actualizaciones gratuitas:</strong> Mejoras y correcciones sin costo adicional</li>
                        <li><strong>Comunicación clara:</strong> Respondemos todas las consultas en 24-48 horas</li>
                    </ul>
                </section>

                <section>
                    <h2>Prevención de Fraude</h2>
                    <p>Para proteger tanto a nuestros clientes como a nuestro negocio:</p>
                    <ul>
                        <li>Monitoreamos patrones de compra y devolución sospechosos</li>
                        <li>Nos reservamos el derecho de rechazar solicitudes fraudulentas</li>
                        <li>Podemos suspender cuentas con actividad sospechosa</li>
                        <li>Cooperamos con autoridades en casos de fraude comprobado</li>
                    </ul>
                </section>

                <section>
                    <h2>Preguntas Frecuentes</h2>

                    <h3>¿Cuánto tarda en procesarse un reembolso?</h3>
                    <p>Una vez aprobado, el reembolso se procesa en 5-7 días hábiles. El tiempo que tarda en reflejarse
                        en tu cuenta depende de tu banco (generalmente 3-10 días adicionales).</p>

                    <h3>¿Puedo solicitar reembolso si ya usé el producto?</h3>
                    <p>Solo si el producto tiene defectos graves o no funciona según lo descrito. El uso del producto no
                        invalida automáticamente el derecho a reembolso si hay problemas legítimos.</p>

                    <h3>¿Qué pasa con mi licencia después del reembolso?</h3>
                    <p>Una vez procesado el reembolso, tu licencia de uso queda revocada. Debes eliminar todos los
                        archivos descargados y cesar cualquier uso del producto.</p>

                    <h3>¿Puedo solicitar reembolso parcial?</h3>
                    <p>En algunos casos sí. Contáctanos explicando tu situación y evaluaremos si un reembolso parcial es
                        apropiado.</p>

                    <h3>¿Qué pasa si mi solicitud es rechazada?</h3>
                    <p>Te explicaremos claramente las razones del rechazo. Si no estás de acuerdo, puedes apelar
                        proporcionando información adicional.</p>
                </section>

                <section>
                    <h2>Contacto</h2>
                    <p>Para cualquier consulta sobre devoluciones y reembolsos:</p>
                    <ul>
                        <li><strong>Email:</strong> <a
                                href="mailto:contacto@autocreativa.com">contacto@autocreativa.com</a></li>
                        <li><strong>Asunto:</strong> "Consulta sobre Devoluciones" o "Solicitud de Reembolso"</li>
                        <li><strong>Tiempo de respuesta:</strong> 24-48 horas hábiles</li>
                    </ul>
                </section>

                <section>
                    <h2>Más Información</h2>
                    <p>Para más detalles sobre nuestras políticas, visita:</p>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos y
                                Condiciones</a></li>
                        <li><a href="<?php echo esc_url(home_url('/preguntas-frecuentes/')); ?>">Preguntas
                                Frecuentes</a></li>
                        <li><a href="<?php echo esc_url(home_url('/envios/')); ?>">Envíos y Entregas</a></li>
                    </ul>
                </section>
            </div>
        </article>
    </div>
</main>

<?php
get_footer();
