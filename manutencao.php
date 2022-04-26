<?php
/*
Plugin Name: Pagina em Construcao
Plugin URI: http://#
Description: Coloca a pagina em modo de construcao com uma imagem da logo do tema
Version: 0.1
Author: Rafael Benetti
Author URI: http://#
Author URI: http://#
Author Email: dssweb5@gmail.com
Text Domain: pagina-em-construcao
*/

/********************************************
	Load Text Domain for Translations
*********************************************/
add_action("plugins_loaded", "wp_maintenance_mode");
function wp_maintenance_mode() {
if (!current_user_can('edit_themes') || !is_user_logged_in()) {
wp_die('<center><img src="wp-content/plugins/manu/assets/logo.png"><br /> <h1>Site em manutenção</h1><br />Manutenção programada, por favor, volte mais tarde.</center>');
}}add_action('get_header', 'wp_maintenance_mode');
?>