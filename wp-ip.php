<?php
/**
 * ---------------------------------------------------------------------------------------------
 * Plugin Name: WP IP
 * Plugin URI:  https://github.com/asmbs/wp-ip
 * Version:     1.0.0
 * Description: See the IP address of your WordPress instance, right in your admin bar (if you're an administrator).
 * Author:      The A-TEAM
 * Author URI:  https://github.com/asmbs
 * License:     MIT
 * License URI: http://opensource.org/licenses/MIT
 * ---------------------------------------------------------------------------------------------
 */

function admin_bar_ip( $wp_admin_bar )
{
  if ( !current_user_can( 'manage_options' ) )
    return;

  $wp_admin_bar->add_node( [
    'id'     => 'wp-ip',
    'title'  => sprintf( __( 'Currently located at <b>%s</b>' ), $_SERVER['REMOTE_ADDR'] ),
    'parent' => 'top-secondary'
  ] );
}

// Register the hook
add_action( 'admin_bar_menu', 'admin_bar_ip', 10 );
