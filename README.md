# wp-paginaemconstru-o
Coloca WP em manutenção, e exibe o logo do site


// coloca página em construção geral menos para quem está logado
function wp_maintenance_mode() {
if (!current_user_can('edit_themes') || !is_user_logged_in()) {
wp_die('<center><img src="https://47news.com.br/wp-content/uploads/2021/03/np10blue-3-300x12 8.png"><br /> <h1>Site em manutenção</h1><br />Manutenção programada, por favor, volte mais tarde.</center>');
}}add_action('get_header', 'wp_maintenance_mode');
