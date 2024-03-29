<?php

namespace DomenART\Theme\Services;

use DomenART\Theme\Service;
use DomenART\Theme\Service_Container;

class Theme implements Service
{

    /**
     * @param Service_Container $container
     */
    public function register(Service_Container $container): void
    {}

    /**
     * @param Service_Container $container
     */
    public function boot(Service_Container $container): void
    {
        $this->after_setup_theme();
    }

    /**
     * @return string
     */
    public function get_service_name(): string
    {
        return 'theme';
    }

    /**
     * After setup theme
     */
    public function after_setup_theme(): void
    {
        /**
         * Init the supports.
         */
        $this->add_theme_supports();

        /**
         * Load translations.
         */
        $this->i18n();
    }

    /**
     * Set theme supports
     */
    private function add_theme_supports(): void
    {
        \add_filter('wpcf7_load_js', '__return_false');
        \add_filter('wpcf7_load_css', '__return_false');

        // add_action('init', function (){
        //     header("Access-Control-Allow-Origin: *");
        // });

        // Add the theme support basic elements
        \add_theme_support('align-wide');
        \add_theme_support('responsive-embeds');
        \add_theme_support('editor-styles');
        \add_theme_support('wp-block-styles');
        \add_theme_support('post-thumbnails');
        \add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'script', 'style']);
        \add_post_type_support('page', 'excerpt');
    }

    /**
     * i18n
     */
    private function i18n(): void
    {
        // Load theme texdomain
        \load_theme_textdomain('framework-textdomain', \get_theme_file_path('/languages'));
    }
}
