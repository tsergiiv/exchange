<?php

add_action('wp_enqueue_scripts', 'enqueue_styles');
add_action('wp_footer', 'enqueue_scripts');

function enqueue_styles()
{
	wp_enqueue_style('style', get_stylesheet_uri(), array(), date("h:i:s"));

    wp_register_style('my', get_template_directory_uri() . '/assets/css/my.css', array(), date("h:i:s"));
    wp_enqueue_style('my');
}

function enqueue_scripts()
{
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), date("h:i:s"));
	wp_enqueue_script('jquery');

	wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/my.js', array('jquery'), date("h:i:s"));
	wp_enqueue_script('my');
}

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

require get_template_directory() . '/post-types.php';

function year_shortcode () {
    $year = date_i18n ('Y');
    return $year;
}
add_shortcode ('year', 'year_shortcode');

function send_mail()
{
    $headers = array(
        'From: ' . get_field('email_from_name', 25) . ' <' . get_field('email_from_email', 25) . '>',
        'content-type: text/html',
    );

    $to = $_POST['email']; // place wp admin email here
    $subject = get_field('email_subject', 25);

    $body = get_field('email_text', 25);

    $file = get_field('email_book_file', 25);
    $path = array_pop(explode('/uploads/', $file));
    $attachments = array( WP_CONTENT_DIR . '/uploads/' . $path);

    $result = wp_mail($to, $subject, $body, $headers, $attachments);

    if ($result) {
        $data = [
            'error' => 0,
            'message' => 'Email success sent!',
        ];
    } else {
        $data = [
            'error' => 1,
            'message' => 'Sorry, email not sent',
        ];
    }

    echo wp_json_encode($data);
    die;
}

add_action('wp_ajax_send_mail', 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );