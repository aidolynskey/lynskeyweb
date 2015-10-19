<?php
// STEP 7

/**
 * Define our settings sections
 *
 * array key=$id, array value=$title in: add_settings_section( $id, $title, $callback, $page );
 * @return array
 */
function wptuts_options_page_sections() {

    $sections = array();
    $sections['header_section'] 		= __('Header Fields', 'header-domain');
    $sections['footer_section']    = __('Footer Fields', 'footer-domain');
    return $sections;
}

/**
 * Define our form fields (settings)
 *
 * @return array
 */
function wptuts_options_page_fields() {
    // Text Form Fields section
    $options[] = array(
        "section" => "header_section",
        "id"      => "header-copy",
        "title"   => __( 'Header Copy', 'wptuts_textdomain' ),
        "desc"    => __( 'Originially "Neighborhood values what you value."', 'wptuts_textdomain' ),
        "type"    => "textarea",
        "std"     => __('Neighborhood values what you value.','wptuts_textdomain')
    );

    $options[] = array(
        "section" => "header_section",
        "id"      => "hero-background",
        "title"   => __( 'Hero Background Image', 'wptuts_textdomain' ),
        "desc"    => __( 'The URL of the hero background image', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('image.png','wptuts_textdomain')
    );

    $options[] = array(
        "section" => "header_section",
        "id"      => "hero-logo",
        "title"   => __( 'Hero Logo Image', 'wptuts_textdomain' ),
        "desc"    => __( 'The URL of the hero logo image', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('image.png','wptuts_textdomain')
    );

    $options[] = array(
        "section" => "header_section",
        "id"      => "partners-img",
        "title"   => __( 'Partners Image', 'wptuts_textdomain' ),
        "desc"    => __( 'The URL of the Partners image', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('image.png','wptuts_textdomain')
    );

    $options[] = array(
        "section" => "header_section",
        "id"      => "real-stories-banner",
        "title"   => __( 'Real Stories Banner Text', 'wptuts_textdomain' ),
        "desc"    => __( 'Text for the baneer with blue background.', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('See What Customers Value Most','wptuts_textdomain')
    );

//    $options[] = array(
//        "section" => "header_section",
//        "id"      => "bios-banner",
//        "title"   => __( 'Bios Banner Text', 'wptuts_textdomain' ),
//        "desc"    => __( 'Text for the baneer with blue background.', 'wptuts_textdomain' ),
//        "type"    => "text",
//        "std"     => __('Learn More about our Customers','wptuts_textdomain')
//    );

    $options[] = array(
        "section" => "header_section",
        "id"      => "about-banner",
        "title"   => __( 'About Banner Text', 'wptuts_textdomain' ),
        "desc"    => __( 'Text for the baneer with blue background.', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('Learn More about our Customers','wptuts_textdomain')
    );

//    $options[] = array(
//        "section" => "footer_section",
//        "id"      => "white-banner-text",
//        "title"   => __( 'White Banner Text', 'wptuts_textdomain' ),
//        "desc"    => __( 'Text on the white banner', 'wptuts_textdomain' ),
//        "type"    => "text",
//        "std"     => __('nhp.org','wptuts_textdomain')
//    );
//
//    $options[] = array(
//        "section" => "footer_section",
//        "id"      => "white-banner-link",
//        "title"   => __( 'White Banner Link', 'wptuts_textdomain' ),
//        "desc"    => __( 'Link on the white banner', 'wptuts_textdomain' ),
//        "type"    => "text",
//        "std"     => __('http://www.nhp.org','wptuts_textdomain')
//    );

    $options[] = array(
        "section" => "footer_section",
        "id"      => "footer-copy",
        "title"   => __( 'Footer Copy', 'wptuts_textdomain' ),
        "desc"    => __( 'Text abouve Social Media Links.', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('Stay Connected','wptuts_textdomain')
    );

    $options[] = array(
        "section" => "footer_section",
        "id"      => "facebook-link",
        "title"   => __( 'Facebook URL', 'wptuts_textdomain' ),
        "desc"    => __( 'Enter the Companies Facebook URL.', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('Some default value','wptuts_textdomain')
    );

    $options[] = array(
        "section" => "footer_section",
        "id"      => "twitter-link",
        "title"   => __( 'Twitter URL', 'wptuts_textdomain' ),
        "desc"    => __( 'Enter the Companies Twitter URL.', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('Some default value','wptuts_textdomain')
    );

    $options[] = array(
        "section" => "footer_section",
        "id"      => "copyright-message",
        "title"   => __( 'Copyright Message', 'wptuts_textdomain' ),
        "desc"    => __( '', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('Some default value','wptuts_textdomain')
    );

    $options[] = array(
        "section" => "footer_section",
        "id"      => "copyright-link",
        "title"   => __( 'Copyright Link', 'wptuts_textdomain' ),
        "desc"    => __( '', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('http://','wptuts_textdomain')
    );

    $options[] = array(
        "section" => "footer_section",
        "id"      => "image-url",
        "title"   => __( 'Image URL', 'wptuts_textdomain' ),
        "desc"    => __( 'Upload an image through Media. Get insert the Images URL here.', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('Some default value','wptuts_textdomain')
    );

    $options[] = array(
        "section" => "footer_section",
        "id"      => "image-link",
        "title"   => __( 'Image Link', 'wptuts_textdomain' ),
        "desc"    => __( 'Upload an image through Media. Get insert the Images URL here.', 'wptuts_textdomain' ),
        "type"    => "text",
        "std"     => __('http://','wptuts_textdomain')
    );

    return $options;
}

/**
 * Contextual Help
 */
function wptuts_options_page_contextual_help() {

    $text 	= "<h3>" . __('Help','wptuts_textdomain') . "</h3>";
    $text 	.= "<p>" . __('No Help') . "</p>";

    // return text
    return $text;
} ?>