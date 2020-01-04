<?php


function bs4wp_theme_support(){
	//chamar a tag title
	add_theme_support('title-tag');


	// chamar a logo
	add_theme_support('custom-logo');



	/**/
	add_theme_support( 'post-formats', array(
		'aside',
		'image'
	) );

}

add_action('after_setup_theme','bs4wp_theme_support');



/*previnir erro na tag title*/

if(!function_exists('wp_render_theme_support')){
	  
	function bs4wp_render_title(){
		?>
			<title> Titulo:  <?php  wp_title('|',true,'right') ?> </title>
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

/*registrar e criar o buscador*/
register_sidebar([
	'name' => 'Busca',
	'id' => 'busca',
	'before_widget' => '<div class="blog-search">',/*antes de iniciar o widget crie o elemento div.card.mb-4*/
	'after_widget'  => '</div>',/*depois feche o .card.mb-4+.card-body*/
	'before_title'  => '<h5>',/*abrir o titulo*/
	'after_title'   => '</h5>' /*fechar o titulo e abrir o card-body*/
]);




/*incluir funcões de personalização*/
require get_template_directory() . '/inc/customize.php';


/* ativar o formulario de contato para respostas */
function theme_queue_js(){
	if( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ){
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_print_scripts','theme_queue_js');

/*personalizar os comentarios*/
function bs4wp_format_comment($comment,$args,$depth){
	
	$GLOBALS['comment'] = $comment; 
	?>
	  
	<div <?php comment_class('ml-4') ; ?> id="comment-<?php comment_ID() ?>" >
		<div class="card mb-3">
			<div class="card-body">
				<div class="comment-intro">
					<h5 class="card-title">
						<?php printf('%s',get_comment_author_link() ) ?>
					</h5>
					<h6 class="card-sub-title mb-3 text-muted">
					Comentou em <?php printf( __('%1$s') , get_comment_date('d/m/y') , get_comment_time() ) ?>
					</h6>
				</div>
				<?php comment_text() ?>
				<div class="reply">
					<?php 
					comment_reply_link( 
						array_merge( $args, array(
													'depth'     => $depth , 
												  	'max_depth' => $args['max_depth']
											) 
						) 
					);?>
				</div>
			</div>
		</div>
<?php 		
}
?>
