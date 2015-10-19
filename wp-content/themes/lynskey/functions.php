<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Custom Posts
require_once('library/custom-posts.php');

if(is_admin()){
    require_once('library/custom-fields/custom-field-settings.php');
}

/**
 * Collects our theme options
 *
 * @return array
 */
function wptuts_get_global_options(){

    $wptuts_option = array();

    $wptuts_option  = get_option('wptuts_options');

    return $wptuts_option;
}

/**
 * Call the function and collect in variable
 *
 * Should be used in template files like this:
 * <?php echo $wptuts_option['wptuts_txt_input']; ?>
 *
 * Note: Should you notice that the variable ($wptuts_option) is empty when used in certain templates such as header.php, sidebar.php and footer.php
 * you will need to call the function (copy the line below and paste it) at the top of those documents (within php tags)!
 */
$wptuts_option = wptuts_get_global_options();

?>
