<?php
N2Loader::import('models.Conflicts', 'smartslider');

class N2SmartsliderConflictsModel extends N2SmartsliderConflictsModelAbstract {

    public function __construct() {
        parent::__construct();

        $this->testPluginForgetAboutShortcodeButtons();
        $this->testPluginWPHideAndSecurity();
        $this->testPluginNetbaseWidgetsForSiteOrigin();
    }

    /**
     * Forget About Shortcode Buttons
     * @url https://wordpress.org/plugins/forget-about-shortcode-buttons/
     */
    private function testPluginForgetAboutShortcodeButtons() {
        if (function_exists('run_forget_about_shortcode_buttons')) {
            $this->displayConflict('Forget About Shortcode Buttons', n2_('This plugin breaks JavaScript in the admin area, deactivate it and use alternative plugin.'), 'https://wordpress.org/support/topic/fasc-breaks-js-in-several-other-plugins/');
        }
    }

    /**
     * WP Hide & Security Enhancer
     * @url https://wordpress.org/plugins/wp-hide-security-enhancer/
     */
    private function testPluginWPHideAndSecurity() {
        if (class_exists('WPH', false)) {

            if (class_exists('WPH_functions', false)) {
                $functions = new WPH_functions();
                if ($functions->is_permalink_enabled()) {
                    $new_admin_url = $functions->get_module_item_setting('admin_url', 'admin');
                    if (!empty($new_admin_url)) {
                        $this->displayConflict('WP Hide & Security Enhancer', n2_('This plugin breaks Smart Slider 3 ajax calls if custom admin url enabled.'), 'https://wordpress.org/support/topic/smart-slider-3-does-not-work-with-custom-admin-url/');

                    }
                }
            }
        }
    }

    /**
     * Netbase Widgets For SiteOrigin
     * @url https://wordpress.org/plugins/netbase-widgets-for-siteorigin/
     */
    private function testPluginNetbaseWidgetsForSiteOrigin() {
        if (class_exists('NBT_SiteOrigin_Widgets')) {
            $this->displayConflict('Netbase Widgets For SiteOrigin', n2_('This plugin adds a background image to every SVG and breaks SSL.'), 'https://wordpress.org/support/topic/plugin-messes-up-svg-and-breaks-ssl/');

        }
    }
}