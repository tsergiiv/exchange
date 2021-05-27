<?php

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'testimonial', [
		'label'  => null,
		'labels' => [
			'name'               => 'Testimonials', // основное название для типа записи
			'singular_name'      => 'Testimonial', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Testimonials Block', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}