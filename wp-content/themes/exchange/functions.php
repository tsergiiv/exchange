<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_action('wp_enqueue_scripts', 'enqueue_styles');
add_action('wp_footer', 'enqueue_scripts');

function enqueue_styles()
{
    // wp_enqueue_style('style', get_stylesheet_uri(), array(), date("h:i:s"));

    wp_register_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.min.css', array(), date("h:i:s"));
    wp_enqueue_style('nice-select');

    wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.min.css', array(), date("h:i:s"));
    wp_enqueue_style('slick');

    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.min.css', array(), date("h:i:s"));
    wp_enqueue_style('style');

    wp_register_style('my', get_template_directory_uri() . '/assets/css/my.css', array(), date("h:i:s"));
    wp_enqueue_style('my');
}

function enqueue_scripts()
{
    wp_register_script('jquery', get_template_directory_uri() . '/assets/jquery-3.6.0.min.js', array(), date("h:i:s"));
    wp_enqueue_script('jquery');

    wp_register_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), date("h:i:s"));
    wp_enqueue_script('slick');

    wp_register_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), date("h:i:s"));
    wp_enqueue_script('nice-select');

    wp_register_script('jquery-actual', get_template_directory_uri() . '/assets/js/jquery.actual.min.js', array(), date("h:i:s"));
    wp_enqueue_script('jquery-actual');

    wp_register_script('lazyload', get_template_directory_uri() . '/assets/js/lazyload.min.js', array(), date("h:i:s"));
    wp_enqueue_script('lazyload');

    wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/my.js', array('jquery'), date("h:i:s"));
    wp_enqueue_script('my');

    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('main');

    wp_register_script('validation', get_template_directory_uri() . '/assets/js/validation.js');
    wp_enqueue_script('validation');

    wp_register_script('core-js', get_template_directory_uri() . '/assets/js/core.js');
    wp_enqueue_script('core-js');

    wp_localize_script('core-js', 'ajax_posts', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'noposts' => __('No older posts found', 'concuredblog'),
    ));

    wp_register_script('axios', 'https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js');
    wp_enqueue_script('axios');

    wp_register_script('vue-cookies', 'https://unpkg.com/vue-cookies@1.5.12/vue-cookies.js');
    wp_enqueue_script('vue-cookies');

    wp_register_script('vue', 'https://cdn.jsdelivr.net/npm/vue@2');
    wp_enqueue_script('vue');

    if (is_front_page()) {
        wp_register_script('main_page', get_template_directory_uri() . '/assets/vue/main_page.js');
        wp_enqueue_script('main_page');
    }

    if (is_page('top')) {
        wp_register_script('top_page', get_template_directory_uri() . '/assets/vue/top_page.js');
        wp_enqueue_script('top_page');
    }

    if (get_post_type() == 'country') {
        wp_register_script('country_page', get_template_directory_uri() . '/assets/vue/country_page.js');
        wp_enqueue_script('country_page');
    }
}

add_filter( 'script_loader_tag', 'async_filter', 10, 2 );

function async_filter( $tag, $handle ) {
    if($handle == "polyfill"){
        return str_replace( ' src', ' async src', $tag );
    }else{
        return $tag;
    }
}

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');

require get_template_directory() . '/post-types.php';

function year_shortcode()
{
    $year = date_i18n('Y');
    return $year;
}

add_shortcode('year', 'year_shortcode');

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
    $body .= '<a href="' . $file . '" download>
                <button style="background: #3498db; color: #ffffff; font-size: 20px; padding: 10px 20px 10px 20px; border-radius: 28px; border: solid #fff 0px; cursor: pointer" type="button" class="btn">Download</button>
              </a>';
    $result = wp_mail($to, $subject, $body, $headers);

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

function contact_us()
{
    $headers = array(
        'From: ' . get_field('email_from_name', 25) . ' <' . get_field('email_from_email', 25) . '>',
        'content-type: text/html',
    );

    $to = get_field('email_from_email', 25); // place wp admin email here
    $subject = 'Contact Us Form';

    $body = '<p>Name: ' . $_POST['name'] . '</p><p>Email: ' . $_POST['email'] . '</p><p>Message: ' . $_POST['message'] . '</p>';

    $result = wp_mail($to, $subject, $body, $headers);

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

add_action('wp_ajax_contact_us', 'contact_us');
add_action('wp_ajax_nopriv_contact_us', 'contact_us');

function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function more_post_ajax()
{
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
    $ppp = 9;
    $category = $_POST['category'];
    $offset = ($page - 1) * $ppp;

    header("Content-Type: text/html");

    $args = array(
        'post_type' => $category,
        'meta_key' => $category . '_rating',
        'orderby' => 'meta_value',
        'order' => 'DESC',
        'posts_per_page' => $ppp,
        'offset' => $offset,
    );

    $loop = new WP_Query($args);

    $out = '';

    if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post();
            if (get_post_type() == 'country') {
                $out .= get_template_part('blocks/country-catalog', get_post_format());;
            }

            if (get_post_type() == 'exchange') {
                $out .= get_template_part('blocks/exchange-catalog', get_post_format());;
            }

        endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

flush_rewrite_rules(false);

// Enable the option show in rest
add_filter('acf/rest_api/field_settings/show_in_rest', '__return_true');

// Enable the option edit in rest
add_filter('acf/rest_api/field_settings/edit_in_rest', '__return_true');

//function wp_coming_soon_mode() {
//    $part = get_template_part('blocks/coming-soon');
//    echo $part;
//    die();
//}
//
//if( !current_user_can('administrator') ) {
//    add_action('get_header', 'wp_coming_soon_mode');
//};

function step_shortcode($atts = array())
{

    // set up default parameters
    extract(shortcode_atts(array(
        'text' => 'test',
        'n' => '01',
    ), $atts));

    $res = '<div class="article-step">
                <div class="article-step-icon"><span class="article-step-icon-text">';
    $res .= $n;
    $res .= '</span></div>
                <div class="article-step-info">
                    <div class="article-step-info-text">';
    $res .= $text;
    $res .= '</div>
                </div>
            </div>';
    return $res;
}

add_shortcode('step', 'step_shortcode');

function get_reading_speed()
{
    return 200;
}

function exchange_post_reading()
{
    $count = preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('fees')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('interface')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('opening_account')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('payment_methods')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('supported_countries')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('supported_currencies')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('experience_text')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('news')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('customer_support')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('answer_1')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('answer_2')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('answer_3')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('answer_4')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('answer_5')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('answer_6')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('answer_7')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('compare')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('answer_1')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('security')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('services')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('tip_1')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('answer_1')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('tip_2')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('tip_3')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('tip_4')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('answer_1')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('tip_5')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('overview')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('regulation')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('answer_1')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('privacy')), ENT_QUOTES));
    return round($count / get_reading_speed()) + 1 . ' min read';
}

function country_post_reading()
{
    $count = preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('trading_text')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('lax_text_1')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('lax_text_2')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('taxing_text_1')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('taxing_text_2')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('taxing_text_3')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('taxing_text_4')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('services_text_1')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('services_text_2')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('services_text_3')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('using_text_1')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('using_text_2')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('regulation_text_1')), ENT_QUOTES));
    $count += preg_match_all("/[\w']+/", html_entity_decode(strip_tags(get_field('regulation_text_2')), ENT_QUOTES));
    return round($count / get_reading_speed()) + 1 . ' min read';
}