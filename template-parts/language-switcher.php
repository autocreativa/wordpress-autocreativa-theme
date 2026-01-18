<?php
/**
 * Template Part: Language Switcher
 *
 * @package Autocreativa
 * @since 1.0.0
 */

// Check for popular multilingual plugins
$polylang_active = function_exists('pll_the_languages');
$wpml_active = function_exists('icl_get_languages');
?>

<?php if ($polylang_active): ?>
    <!-- Polylang Language Switcher -->
    <div class="language-switcher polylang-switcher">
        <?php pll_the_languages(array(
            'show_flags' => 0,
            'show_names' => 1,
            'dropdown' => 0,
        )); ?>
    </div>

<?php elseif ($wpml_active): ?>
    <!-- WPML Language Switcher -->
    <div class="language-switcher wpml-switcher">
        <?php
        $languages = icl_get_languages('skip_missing=0&orderby=code');
        if (!empty($languages)):
            foreach ($languages as $lang):
                ?>
                <a href="<?php echo esc_url($lang['url']); ?>" class="lang-link <?php echo $lang['active'] ? 'active' : ''; ?>"
                    hreflang="<?php echo esc_attr($lang['language_code']); ?>">
                    <?php echo esc_html(strtoupper($lang['language_code'])); ?>
                </a>
            <?php
            endforeach;
        endif;
        ?>
    </div>

<?php else: ?>
    <!-- Manual Language Switcher (fallback) -->
    <div class="language-switcher manual-switcher">
        <?php
        $current_locale = get_locale();
        $is_spanish = strpos($current_locale, 'es') === 0;
        ?>
        <button type="button" class="btn-icon lang-toggle" id="lang-toggle"
            aria-label="<?php esc_attr_e('Change language', 'autocreativa'); ?>">
            <span class="lang-code">
                <?php echo $is_spanish ? 'ES' : 'EN'; ?>
            </span>
        </button>
    </div>
<?php endif; ?>