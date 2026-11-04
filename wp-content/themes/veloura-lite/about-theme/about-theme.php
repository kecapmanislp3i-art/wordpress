<?php
/**
 * Nordic WP Theme Notice Handler
 */

defined( 'ABSPATH' ) || exit;

define('VELOURA_LITE_PREMIUM_DOCUMENTATION',__('https://www.nordicwptheme.com/Documentation/','veloura-lite'));
define('VELOURA_LITE_SUPPORT',__('https://wordpress.org/support/theme/veloura-lite/','veloura-lite'));
define('VELOURA_LITE_REVIEW',__('https://wordpress.org/support/theme/veloura-lite/reviews/#new-post','veloura-lite'));
define('VELOURA_LITE_BUY_NOW',__('https://www.nordicwptheme.com/product/veloura-pro/','veloura-lite'));
define('VELOURA_LITE_DOC_URL',__('https://www.nordicwptheme.com/Documentation/','veloura-lite'));
define('VELOURA_LITE_LIVE_DEMO',__('https://www.nordicwptheme.com/product/veloura-pro/','veloura-lite'));
define('VELOURA_LITE_BUNDLE',__('https://www.nordicwptheme.com/product/all-premium-wordpress-themes-for-multipurpose/','veloura-lite'));

/**
 * Admin Hook
 */
function veloura_lite_admin_menu_page() {
    $veloura_lite_theme = wp_get_theme( get_template() );

    add_theme_page(
        $veloura_lite_theme->display( 'Name' ),
        $veloura_lite_theme->display( 'Name' ),
        'manage_options',
        'veloura-lite',
        'veloura_lite_do_admin_page'
    );
}
add_action( 'admin_menu', 'veloura_lite_admin_menu_page' );

/**
 * Enqueue getting started styles and scripts
 */
function nordicwp_widgets_backend_enqueue() {
    wp_enqueue_style(
        'nordicwp-getting-started',
        get_template_directory_uri() . '/about-theme/about-theme.css'
    );

    // Enqueue your admin notice JS
    wp_enqueue_script(
        'nordicwp-admin-notice',
        get_template_directory_uri() . '/about-theme/admin-notice-script.js',
        array('jquery'), // dependencies
        '1.0',
        true
    );

    // Pass PHP data to JS
    wp_localize_script(
        'nordicwp-admin-notice',
        'veloura_lite',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('veloura_lite_nonce'),
        )
    );
}
add_action( 'admin_enqueue_scripts', 'nordicwp_widgets_backend_enqueue' );


/**
 * Class Nordicwp_Notice_Handler
 */
class Nordicwp_Notice_Handler {

    public static $nonce;

    /**
     * Empty Constructor
     */
    public function __construct() {
        // Activation notice
        add_action( 'switch_theme', array( $this, 'flush_dismiss_status' ) );
        add_action( 'admin_init', array( $this, 'getting_started_notice_dismissed' ) );
        add_action( 'admin_notices', array( $this, 'nordicwp_theme_info_welcome_admin_notice' ), 3 );
        add_action( 'wp_ajax_veloura_lite_dismissable_notice', array( $this, 'ajax_dismiss_notice' ) );
        add_action( 'wp_ajax_nordicwp_getting_started', array( $this, 'nordicwp_getting_started' ) );
    }

    /**
     * Display an admin notice linking to the about page
     */
    public function nordicwp_theme_info_welcome_admin_notice() {
        $current_screen = get_current_screen();
        $veloura_lite_theme = wp_get_theme();

        if ( is_admin() && ! get_user_meta( get_current_user_id(), 'gs_notice_dismissed' ) && $current_screen->base !== 'appearance_page_veloura-lite' ) {
            echo '<div class="updated notice notice-success is-dismissible notice-get-started-class admin-notice" data-notice="getting_started_notice">';
            echo '<div class="admin-notice-content">';
            echo '<p><strong>' . sprintf( esc_html__( 'Welcome! Thank you for choosing %1$s.', 'veloura-lite' ), esc_html( $veloura_lite_theme->get( 'Name' ) ) ) . '</strong></p>';
            echo '<p class="plugin-notice">' . esc_html__( 'Thank you for choosing Veloura Lite. Use the Get Started guide to build your boutique, update the demo content, and personalize the design.', 'veloura-lite' ) . '</p>';
            echo '<div class="nordicwp-buttons">';
            echo '<p><a href="' . esc_url( admin_url( 'themes.php?page=veloura-lite' ) ) . '" class="nordicwp-install-plugins button button-primary">' . sprintf( esc_html__( 'Get started with %s', 'veloura-lite' ), esc_html( $veloura_lite_theme->get( 'Name' ) ) ) . '</a></p>';
            echo '<p><a href="' . esc_url( VELOURA_LITE_BUY_NOW ) . '" class="button button-secondary" target="_blank">' . esc_html__( 'GO FOR PREMIUM', 'veloura-lite' ) . '</a></p>';
            echo '<p><a href="' . esc_url( VELOURA_LITE_BUNDLE ) . '" class="button button-bundle" target="_blank">' . esc_html__( 'GET BUNDLE', 'veloura-lite' ) . '</a></p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="admin-notice-image">';
            echo '<img class="notice_img" width="100%" src="' . esc_url( get_template_directory_uri() . '/assets/images/notice.png' ) . '">';
            echo '</div>';
            echo '<a href="#" class="getting-started-notice-dismiss">Dismiss</a>';
            echo '</div>';
        }
    }

    public function getting_started_notice_dismissed() {
        if ( isset( $_GET['gs-notice-dismissed'] ) ) {
            add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
        }
    }

    public function flush_dismiss_status() {
        delete_user_meta( get_current_user_id(), 'gs_notice_dismissed' );
    }

    public function ajax_dismiss_notice() {
        if ( isset( $_POST['type'] ) && $_POST['type'] === 'getting_started_notice' ) {
            add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
        }
        wp_die();
    }

}

new Nordicwp_Notice_Handler();

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function veloura_lite_do_admin_page() { 
    $veloura_lite_theme = wp_get_theme(); ?>
    <div class="veloura-lite-themeinfo-page--wrapper">
        <div class="free&pro">
            <div id="veloura-lite-admin-about-page-1">
                <div class="theme-detail">
                   <div class="veloura-lite-admin-card-header-1">
                    <div class="veloura-lite-header-left">
                        <h2>
                            <?php echo esc_html( $veloura_lite_theme->Name ); ?> <span><?php echo esc_html($veloura_lite_theme['Version']);?></span>
                        </h2>
                        <p>
                            <?php
                            echo wp_kses_post( apply_filters( 'nordicwp_theme_description', esc_html( $veloura_lite_theme->get( 'Description' ) ) ) );
                        ?>
                        </p>
                    </div>
                    <div class="veloura-lite-header-right">
                        <div class="veloura-lite-pro-button">
                            <a href="<?php echo esc_url( VELOURA_LITE_BUY_NOW ); ?>" class="veloura-lite-button button-primary" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'UPGRADE TO PREMIUM', 'veloura-lite' ); ?>
                            </a>
                        </div>
                    </div>
                </div>   
                </div>   
                <div class="veloura-lite-features">
                    <div class="veloura-lite-features-box">
                        <h3><?php esc_html_e( 'PREMIUM DEMONSTRATION', 'veloura-lite' ); ?></h3>
                        <p><?php esc_html_e( 'Create a refined fashion storefront with flexible layouts, curated sections, and easy visual customization—no coding required.', 'veloura-lite' ); ?></p>
                        <a href="<?php echo esc_url( VELOURA_LITE_LIVE_DEMO ); ?>" class="veloura-lite-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'DEMONSTRATION', 'veloura-lite' ); ?>
                            </a>
                    </div>
                    <div class="veloura-lite-features-box">
                        <h3><?php esc_html_e( 'REVIEWS', 'veloura-lite' ); ?></h3>
                        <p><?php esc_html_e( 'We would love to hear your thoughts and appreciate your feedback.', 'veloura-lite' ); ?></p>
                        <a href="<?php echo esc_url( VELOURA_LITE_REVIEW ); ?>" class="veloura-lite-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'REVIEWS', 'veloura-lite' ); ?>
                            </a>
                    </div>
                    <div class="veloura-lite-features-box">
                        <h3><?php esc_html_e( '24/7 SUPPORT', 'veloura-lite' ); ?></h3>
                        <p><?php esc_html_e( 'If you need assistance installing the Lite theme, please contact our support team. We’re happy to help.', 'veloura-lite' ); ?></p>
                        <a href="<?php echo esc_url( VELOURA_LITE_SUPPORT ); ?>" class="veloura-lite-button button-secondary-1" target="_blank" rel="noreferrer">
                            <?php esc_html_e( 'SUPPORT', 'veloura-lite' ); ?>
                        </a>
                    </div>
                    <div class="veloura-lite-features-box">
                        <h3><?php esc_html_e( 'THEME INSTRUCTION', 'veloura-lite' ); ?></h3>
                        <p><?php esc_html_e( 'If you need assistance setting up the theme, our tutorial provides step-by-step instructions to help you get started quickly.', 'veloura-lite' ); ?></p>
                        <a href="<?php echo esc_url( VELOURA_LITE_DOC_URL ); ?>" class="veloura-lite-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'DOCUMENTATION', 'veloura-lite' ); ?>
                            </a>
                    </div>
                </div>   
            </div>
            <div id="veloura-lite-admin-about-page-2">
                <div class="veloura-lite-pro-button bundle">
                    <div class="bundle-content">
                        <h3 class="bundle-head"><?php esc_html_e( 'Get All Themes In Single Pack', 'veloura-lite' ); ?></h3>
                        <p class="bundle-para"><?php esc_html_e( 'From customization to optimization, this bundle gives you the flexibility to create stunning websites.', 'veloura-lite' ); ?></p>
                        <a href="<?php echo esc_url( VELOURA_LITE_BUNDLE ); ?>" class="veloura-lite-button bundle" target="_blank" rel="noreferrer">
                            <?php esc_html_e( 'BUY THEME BUNDLE', 'veloura-lite' ); ?>
                        </a>
                    </div>
                    <div class="bundle-image">
                        <img class="img_bundle" width="100%" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bundle.png' ); ?>" alt="<?php esc_attr_e('logo', 'veloura-lite'); ?>">
                    </div>
                </div> 
                <div class="theme-detail">
                   <div class="veloura-lite-admin-card-header-1">
                        <div class="veloura-lite-header-left-pro"> 
                            <h2><?php esc_html_e( 'A premium version is available for users who want access to additional features and advanced customization options.', 'veloura-lite' ); ?></h2>
                        </div>
                        <div class="veloura-lite-header-right-2">
                            <div class="veloura-lite-pro-button">
                                <a href="<?php echo esc_url( VELOURA_LITE_BUY_NOW ); ?>" class="veloura-lite-button button-primary-1 buy-now" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'GO TO PREMIUM', 'veloura-lite' ); ?>
                                </a>
                            </div>
                            <div class="veloura-lite-pro-button">
                                <a href="<?php echo esc_url( VELOURA_LITE_LIVE_DEMO ); ?>" class="veloura-lite-button button-primary-1 pro-demo" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'PREMIUM DEMO', 'veloura-lite' ); ?>
                                </a>
                            </div>
                            <div class="veloura-lite-pro-button">
                                <a href="<?php echo esc_url( VELOURA_LITE_PREMIUM_DOCUMENTATION ); ?>" class="veloura-lite-button button-primary-1 buy-now" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'PRO DOCUMENTATION', 'veloura-lite' ); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="veloura-lite-admin-card-header-2">
                        <img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $veloura_lite_theme->get_screenshot() ); ?>" />
                    </div>  
                </div>    
            </div>
        </div>
    </div>
<?php } ?>
