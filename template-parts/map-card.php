<?php
/**
 * Template Part: Map Card Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */
?>

<section class="map-card-section sport-card animate-fade-in stagger-5 no-print">
    <div class="map-card-content">
        <div class="map-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
            </svg>
        </div>

        <h3 class="map-card-title">
            <?php autocreativa_e('map_title'); ?>
        </h3>
        <p class="map-card-description text-muted">
            <?php autocreativa_e('map_description'); ?>
        </p>

        <div class="map-embed">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.0!2d-70.6!3d-33.4!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDI0JzAwLjAiUyA3MMKwMzYnMDAuMCJX!5e0!3m2!1sen!2scl!4v1234567890"
                width="100%" height="200" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>