<?php
/**
 * Internationalization helpers
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get portfolio text strings
 * These are the default English/Spanish strings from the React i18n.js
 */
function autocreativa_get_strings()
{
    $locale = get_locale();
    $is_spanish = strpos($locale, 'es') === 0;

    $strings = array(
        // Navigation
        'nav_projects' => $is_spanish ? 'Proyectos' : 'Projects',
        'nav_about' => $is_spanish ? 'Sobre Mí' : 'About Me',
        'nav_skills' => $is_spanish ? 'Habilidades' : 'Skills',
        'nav_experience' => $is_spanish ? 'Experiencia' : 'Experience',
        'nav_contact' => $is_spanish ? 'Contacto' : 'Contact',

        // Hero
        'hero_welcome' => $is_spanish ? 'Bienvenido' : 'Welcome back',
        'hero_role' => $is_spanish ? 'Ingeniero en informática' : 'Software Engineer',

        // Projects
        'projects_title' => $is_spanish ? 'Proyectos Destacados' : 'Featured Work',
        'projects_subtitle' => $is_spanish ? 'Últimos desarrollos y módulos' : 'Latest deployments & modules',
        'projects_view_all' => $is_spanish ? 'Ver todos' : 'See all',

        // About
        'about_title' => $is_spanish ? 'Sobre Mí' : 'About Me',
        'about_desc' => $is_spanish
            ? 'Desarrollador full‑stack con más de 5 años de experiencia en el diseño, desarrollo e implementación de servicios RESTful y aplicaciones web escalables para los sectores financiero, minorista y de comercio electrónico.'
            : 'Full-stack developer with over 5 years of experience in designing, developing, and implementing RESTful services and scalable web applications for the financial, retail, and e-commerce sectors.',

        // Skills
        'skills_title' => $is_spanish ? 'Habilidades Técnicas' : 'Technical Skills',
        'skills_top_languages' => $is_spanish ? 'Lenguajes principales' : 'Top Languages',
        'skills_view_full_stack' => $is_spanish ? 'Ver stack completo' : 'View Full Stack',
        'skills_close' => $is_spanish ? 'Cerrar' : 'Close',

        // Soft Skills
        'soft_skills_title' => $is_spanish ? 'Habilidades Blandas' : 'Soft Skills',
        'soft_skill_1' => $is_spanish ? 'Compromiso, proactividad y lógica analítica' : 'Commitment, proactivity and analytical logic',
        'soft_skill_2' => $is_spanish ? 'Adaptabilidad y adquisición de nuevos hábitos' : 'Adaptability and acquisition of new habits',
        'soft_skill_3' => $is_spanish ? 'Conocimientos actualizados sobre nuevas tecnologías' : 'Updated knowledge about new technologies',

        // Certifications
        'certifications_title' => $is_spanish ? 'Capacitaciones Online' : 'Online Certifications',

        // Experience
        'experience_title' => $is_spanish ? 'Experiencia laboral' : 'Work Experience',
        'experience_download_cv' => $is_spanish ? 'Descargar CV' : 'Download CV',

        // Education
        'education_title' => $is_spanish ? 'Educación' : 'Education',
        'education_graduated' => $is_spanish ? 'Titulado' : 'Graduated',

        // Contact
        'contact_title' => $is_spanish ? '¿Listo para trabajar?' : 'Ready to work?',
        'contact_subtitle' => $is_spanish ? 'Construyamos algo increíble juntos.' : "Let's build something amazing together.",
        'contact_cta' => $is_spanish ? 'Contáctame' : 'Contact Me',
        'contact_copied' => $is_spanish ? '¡Copiado!' : 'Copied!',

        // Map Card
        'map_title' => $is_spanish ? '¡Vamos a programar juntos!' : "Let's code together!",
        'map_description' => $is_spanish
            ? 'Soy un apasionado programador full-stack. Si quieres charlar sobre código, tomar un café virtual o explorar ideas con vibe coding, ¡estoy aquí!'
            : "I'm a passionate full-stack programmer. If you want to chat about code, grab a virtual coffee, or explore ideas with vibe coding, I'm here!",

        // WooCommerce
        'shop_title' => $is_spanish ? 'Tienda' : 'Shop',
        'add_to_cart' => $is_spanish ? 'Añadir al carrito' : 'Add to Cart',
        'view_cart' => $is_spanish ? 'Ver carrito' : 'View Cart',
        'checkout' => $is_spanish ? 'Finalizar compra' : 'Checkout',
        'continue_shopping' => $is_spanish ? 'Seguir comprando' : 'Continue Shopping',
    );

    return apply_filters('autocreativa_strings', $strings);
}

/**
 * Get a single string
 */
function autocreativa_string($key, $default = '')
{
    $strings = autocreativa_get_strings();
    return isset($strings[$key]) ? $strings[$key] : $default;
}

/**
 * Echo a translated string
 */
function autocreativa_e($key, $default = '')
{
    echo esc_html(autocreativa_string($key, $default));
}

/**
 * Get experience data
 */
function autocreativa_get_experience()
{
    $locale = get_locale();
    $is_spanish = strpos($locale, 'es') === 0;

    return array(
        array(
            'key' => 'entelgy',
            'company' => 'Entelgy',
            'color' => 'dot-cyan',
            'role' => $is_spanish ? 'Desarrollador Full-Stack' : 'Full-Stack Developer',
            'period' => $is_spanish ? 'Nov 2025 – Dic 2025' : 'Nov 2025 – Dec 2025',
            'desc' => $is_spanish
                ? 'Migración de proyectos legacy (backend y frontend) a Spring Boot en Subtel, aplicando buenas prácticas de desarrollo establecidas por la institución.'
                : 'Migration of legacy projects (backend and frontend) to Spring Boot at Subtel, applying best development practices established by the institution.',
        ),
        array(
            'key' => 'junngla',
            'company' => 'Junngla SPA',
            'color' => 'dot-green',
            'role' => $is_spanish ? 'Desarrollador Full Stack' : 'Full Stack Developer',
            'period' => $is_spanish ? 'Junio 2023 - Julio 2025' : 'June 2023 - July 2025',
            'desc' => $is_spanish
                ? 'Integración de pasarela de pagos RedPay. Diseño y mantenimiento de API REST con NestJS. Desarrollo de módulos en Odoo 18 con Python.'
                : 'RedPay payment gateway integration. REST API design and maintenance with NestJS. Development of modules in Odoo 18 with Python.',
        ),
        array(
            'key' => 'indra',
            'company' => 'Indra',
            'color' => 'dot-blue',
            'role' => 'System Engineer',
            'period' => $is_spanish ? 'Marzo 2022 - Octubre 2022' : 'March 2022 - October 2022',
            'desc' => $is_spanish
                ? 'Creación de APIS en Backend bajo framework Java Spring Boot. Creación de interface Frontend Angular.'
                : 'Creation of Backend APIs under Java Spring Boot framework. Creation of Angular Frontend interface.',
        ),
        array(
            'key' => 'fusiona',
            'company' => 'Fusiona',
            'color' => 'dot-orange',
            'role' => $is_spanish ? 'Desarrollador de Software' : 'Software Developer',
            'period' => $is_spanish ? 'Octubre 2019 - Marzo 2020' : 'October 2019 - March 2020',
            'desc' => $is_spanish
                ? 'Creación de set de APIS en el framework Hapi para la aplicación Gasconnect.'
                : 'Creation of API set in Hapi framework for Gasconnect application.',
        ),
        array(
            'key' => 'bolsa',
            'company' => 'Bolsa de Santiago',
            'color' => 'dot-purple',
            'role' => $is_spanish ? 'Desarrollador de Software' : 'Software Developer',
            'period' => $is_spanish ? 'Abril 2019 - Octubre 2019' : 'April 2019 - October 2019',
            'desc' => $is_spanish
                ? 'Navegación automática y transformación de código html a pdf con puppeteer.'
                : 'Automatic navigation and transformation of html code to pdf with puppeteer.',
        ),
        array(
            'key' => 'escuela',
            'company' => 'Escuela Felipe Cubillos',
            'color' => 'dot-yellow',
            'role' => $is_spanish ? 'Ingeniero en Informática' : 'IT Engineer',
            'period' => $is_spanish ? 'Marzo 2016 - Abril 2019' : 'March 2016 - April 2019',
            'desc' => $is_spanish
                ? 'Taller de robótica conceptos básicos de la programación. Coordinación recursos tecnológicos.'
                : 'Robotics workshop basic programming concepts. Coordination of technological resources.',
        ),
        array(
            'key' => 'tottus',
            'company' => 'TOTTUS',
            'color' => 'dot-red',
            'role' => $is_spanish ? 'Analista de Proyectos' : 'Project Analyst',
            'period' => $is_spanish ? 'Abril 2015 - Agosto 2015' : 'April 2015 - August 2015',
            'desc' => $is_spanish
                ? 'Documentación y seguimiento de ventas no presenciales. Programación de landing page.'
                : 'Documentation and tracking of non-face-to-face sales. Landing page programming.',
        ),
    );
}

/**
 * Get education data
 */
function autocreativa_get_education()
{
    $locale = get_locale();
    $is_spanish = strpos($locale, 'es') === 0;

    return array(
        array(
            'title' => $is_spanish ? 'Ingeniero en informática' : 'Computer Engineer',
            'institution' => 'I.P Santo Tomas',
            'period' => '2012 - 2015',
        ),
        array(
            'title' => $is_spanish ? 'Técnico en plataformas Informáticas' : 'Technician in Computer Platforms',
            'institution' => 'I.P Santo Tomas',
            'period' => '2009 - 2012',
        ),
        array(
            'title' => $is_spanish ? 'Técnico en telecomunicaciones' : 'Telecommunications Technician',
            'institution' => 'Liceo Juan Piamarta',
            'period' => '2007 - 2009',
        ),
    );
}

/**
 * Get certification platforms
 */
function autocreativa_get_certifications()
{
    return array('Platzi', 'Google', 'Udemy', 'Telefónica', 'HackerRank', 'LinkedIn Learning');
}

/**
 * Get skills data
 */
function autocreativa_get_skills()
{
    return array(
        array('name' => 'JavaScript / TypeScript', 'level' => 70),
        array('name' => 'Java', 'level' => 70),
        array('name' => 'Python', 'level' => 60),
    );
}

/**
 * Get skill rings data
 */
function autocreativa_get_skill_rings()
{
    return array(
        array('label' => 'Frontend', 'percent' => 75, 'color' => '#bef264'),
        array('label' => 'Backend', 'percent' => 80, 'color' => '#a855f7'),
        array('label' => 'DevOps', 'percent' => 50, 'color' => '#3b82f6'),
    );
}
