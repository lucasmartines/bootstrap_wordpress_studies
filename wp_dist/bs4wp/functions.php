<?php

//chamar a tag title
function bs4wp_title_tag(){
	add_theme_support('title-tag');

}
add_action('after_setup_theme','bs4wp_title_tag');



/*previnir erro na tag title*/

if(!function_exists('wp_render_title_tag')){
	 
	function bs4wp_render_title(){
		?>
			<title> <?php  wp_title('|',true,'right') ?> </title>
		<?php 
	}
	add_action('wp_head','bs4wp_render_title');
}

require_once get_template_directory().'/class-wp-bootstrap-navwalker.php';
/*
registrar nav menus 
*/
register_nav_menus([
	'principal' => __('Menu Principal'),
	// 'social'    => __('')
]);


/*definir as miniaturas dos posts*/
add_theme_support('post-thumbnails');
set_post_thumbnail( 1200, 720, true );

/*definir tamanho*/
add_filter('excerpt_length',function($length){
	return 50;
});
/*definir */
 //<!-- btn btn-outline-my-color-5 -->
add_filter('next_posts_link_attributes','posts_link_attributes');
add_filter('previous_posts_link_attributes','posts_link_attributes');

function posts_link_attributes(){
	return 'class="btn btn-outline-my-color-5"';
}


/* criação do sidebar*/
register_sidebar([
	'name' => 'Barra Lateral',
	'id' => 'sidebar',
	'before_widget' => '<div class="card mb-4">',/*antes de iniciar o widget crie o elemento div.card.mb-4*/
	'after_widget'  => '</div></div>',/*depois feche o .card.mb-4+.card-body*/
	'before_title'  => '<div class="card-header bg-my-color-3 text-white"><h5 class="mb-0">',/*abrir o titulo*/
	'after_title'   => '</h5></div><div class="card-body">' /*fechar o titulo e abrir o card-body*/
]);

?>