<?php
/**
 * Norcal MTB 2016 Functions File
 * Created by: Carlos Perez
 * 
 */
/* MENUS */
function register_main_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_main_menu' );

?>