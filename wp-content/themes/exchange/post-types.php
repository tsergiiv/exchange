<?php

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'home', [
		'label'  => null,
		'labels' => [
			'name'               => 'Home', // основное название для типа записи
			'singular_name'      => 'Home', // название для одной записи этого типа
			'add_new'            => 'Add content', // для добавления новой записи
			'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit content', // для редактирования типа записи
			'new_item'           => 'New content', // текст новой записи
			'view_item'          => 'View content', // для просмотра записи этого типа.
			'search_items'       => 'Search content', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Home Blocks', // название меню
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
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
		'hierarchical'        => false,
		'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

    register_post_type( 'footer', [
        'label'  => null,
        'labels' => [
            'name'               => 'Footer', // основное название для типа записи
            'singular_name'      => 'Footer', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Footer Blocks', // название меню
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
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'faq', [
        'label'  => null,
        'labels' => [
            'name'               => 'FAQ', // основное название для типа записи
            'singular_name'      => 'FAQ', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'FAQ Blocks', // название меню
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
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'step', [
        'label'  => null,
        'labels' => [
            'name'               => 'Steps', // основное название для типа записи
            'singular_name'      => 'Step', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Steps', // название меню
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
//        'capability_type' => 'post',
//        'capabilities' => [
//            'create_posts' => false,
//            'delete_posts' => false,
//            'delete_published_posts' => false,
//            'delete_private_posts' => false,
//        ],
//        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'why_coincub', [
        'label'  => null,
        'labels' => [
            'name'               => 'Why Coincub', // основное название для типа записи
            'singular_name'      => 'Why Coincub', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Why Coincub', // название меню
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
        'capability_type' => 'post',
        'capabilities' => [
            'create_posts' => false,
            'delete_posts' => false,
            'delete_published_posts' => false,
            'delete_private_posts' => false,
        ],
        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'country', [
        'label'  => null,
        'labels' => [
            'name'               => 'Countries', // основное название для типа записи
            'singular_name'      => 'Country', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Countries', // название меню
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
        'supports'            => ['title', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

    register_post_type( 'exchange', [
        'label'  => null,
        'labels' => [
            'name'               => 'Exchanges', // основное название для типа записи
            'singular_name'      => 'Exchange', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Exchanges', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'exclude_from_search' => true, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => 'exchanges', // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => ['title', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ] );

    register_post_type( 'coming_soon', [
        'label'  => null,
        'labels' => [
            'name'               => 'Coming Soon', // основное название для типа записи
            'singular_name'      => 'Coming Soon', // название для одной записи этого типа
            'add_new'            => 'Add content', // для добавления новой записи
            'add_new_item'       => 'Add content', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit content', // для редактирования типа записи
            'new_item'           => 'New content', // текст новой записи
            'view_item'          => 'View content', // для просмотра записи этого типа.
            'search_items'       => 'Search content', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Coming Soon', // название меню
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
//        'capability_type' => 'post',
//        'capabilities' => [
//            'create_posts' => false,
//            'delete_posts' => false,
//            'delete_published_posts' => false,
//            'delete_private_posts' => false,
//        ],
//        'map_meta_cap' => true,
        'hierarchical'        => false,
        'supports'            => ['custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}

add_action( 'init', 'create_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies()
{
    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name' => _x( 'Tags', 'taxonomy general name' ),
        'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Tags' ),
        'popular_items' => __( 'Popular Tags' ),
        'all_items' => __( 'All Tags' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Tag' ),
        'update_item' => __( 'Update Tag' ),
        'add_new_item' => __( 'Add New Tag' ),
        'new_item_name' => __( 'New Tag Name' ),
        'separate_items_with_commas' => __( 'Separate tags with commas' ),
        'add_or_remove_items' => __( 'Add or remove tags' ),
        'choose_from_most_used' => __( 'Choose from the most used tags' ),
        'menu_name' => __( 'Tags' ),
    );

    register_taxonomy('tag','country',array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'tag' ),
    ));
}
?>