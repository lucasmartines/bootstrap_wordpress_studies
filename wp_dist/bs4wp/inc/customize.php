<?php

function bs4wp_customize_register($wp_customize){

	/*Rodapé*/
	$wp_customize->add_section('footer',[
		'title' => __('Rodapé','Bs 4 + WP'),
		'description' => sprintf(__('Opções para o rodapé','Bs 4 + WP')),
		'priority' => 20
	]);

	$wp_customize->add_setting('footer_title',[
		'default' => _x('Meu Primeiro Tema de Wordpress','Bs 4 + WP'),
		'type_mod'=>'theme_mod'
	]);
	//register_

	$wp_customize->add_setting('footer_text',[
		'default' => _x('Feito por mim com muita dedicação e esforço','Bs 4 + WP'),
		'type' => 'theme_mod'
	]);
	$wp_customize->add_control('footer_text',[	
		'label' => __('Titulo do Rodapé'),
		'section' => 'footer',
		'priority' => 2
	]);

}

add_action('customize_register','bs4wp_customize_register');