<?php
/**
 * Template Part: Contact Form
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="contact-form-wrapper sport-card animate-fade-in stagger-3">
    <h3 class="contact-form-title">
        <?php esc_html_e('Envíanos un mensaje', 'autocreativa'); ?>
    </h3>

    <form id="contact-form" class="net-form" novalidate>
        <?php wp_nonce_field('autocreativa_nonce', 'contact_nonce'); ?>

        <div class="form-group">
            <label for="contact-name" class="form-label">
                <?php esc_html_e('Nombre', 'autocreativa'); ?>
            </label>
            <input type="text" id="contact-name" name="name" class="form-control" required
                placeholder="<?php esc_attr_e('Tu nombre', 'autocreativa'); ?>">
        </div>

        <div class="form-group">
            <label for="contact-email" class="form-label">
                <?php esc_html_e('Correo electrónico', 'autocreativa'); ?>
            </label>
            <input type="email" id="contact-email" name="email" class="form-control" required
                placeholder="<?php esc_attr_e('tu@email.com', 'autocreativa'); ?>">
        </div>

        <div class="form-group">
            <label for="contact-subject" class="form-label">
                <?php esc_html_e('Asunto', 'autocreativa'); ?>
            </label>
            <select id="contact-subject" name="subject" class="form-control" required>
                <option value="">
                    <?php esc_html_e('Selecciona un asunto', 'autocreativa'); ?>
                </option>
                <option value="freelance">
                    <?php esc_html_e('Servicio Freelance', 'autocreativa'); ?>
                </option>
                <option value="software">
                    <?php esc_html_e('Software / Producto Digital', 'autocreativa'); ?>
                </option>
                <option value="training">
                    <?php esc_html_e('Capacitación / Mentores', 'autocreativa'); ?>
                </option>
                <option value="other">
                    <?php esc_html_e('Otro', 'autocreativa'); ?>
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="contact-message" class="form-label">
                <?php esc_html_e('Mensaje', 'autocreativa'); ?>
            </label>
            <textarea id="contact-message" name="message" class="form-control" rows="5" required
                placeholder="<?php esc_attr_e('Cuéntanos sobre tu proyecto...', 'autocreativa'); ?>"></textarea>
        </div>

        <div class="form-footer">
            <button type="submit" class="action-btn submit-btn">
                <span>
                    <?php esc_html_e('Enviar Mensaje', 'autocreativa'); ?>
                </span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
            </button>
            <div id="form-message" class="form-message"></div>
        </div>
    </form>
</div>

<style>
    .contact-form-wrapper {
        padding: 2.5rem;
        margin-top: 2rem;
        background: var(--bg-card);
        border: 1px solid var(--card-glass-border);
        border-radius: var(--radius-card);
    }

    .contact-form-title {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        color: var(--primary);
        border-bottom: 1px solid var(--border-color);
        padding-bottom: 1rem;
    }

    .net-form .form-group {
        margin-bottom: 1.5rem;
    }

    .net-form .form-label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--text-main);
        font-weight: 500;
    }

    .net-form .form-control {
        width: 100%;
        padding: 0.8rem 1rem;
        border-radius: 8px;
        background: rgba(0, 0, 0, 0.2);
        border: 1px solid var(--border-color);
        color: var(--text-main);
        font-family: inherit;
        transition: all 0.3s ease;
    }

    .net-form .form-control:focus {
        outline: none;
        border-color: var(--lime-primary);
        box-shadow: 0 0 0 2px rgba(190, 242, 100, 0.1);
    }

    .net-form .form-control::placeholder {
        color: var(--text-muted);
    }

    .form-footer {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .submit-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        min-width: 160px;
    }

    .form-message {
        font-size: 0.9rem;
        min-height: 1.5em;
        transition: all 0.3s ease;
    }

    .form-message.success {
        color: var(--lime-primary);
    }

    .form-message.error {
        color: #ef4444;
    }

    @media (max-width: 768px) {
        .contact-form-wrapper {
            padding: 1.5rem;
        }
    }
</style>