<?php get_header(); ?>

<?php
    $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'country',
    );

    $posts_query = new WP_Query($args);
    $post_count = $posts_query->post_count;
?>

    <main class="content">
        <div class="blog blog-country">
            <section class="blog-head container middle">
                <div class="blog-head-info">
                    <a href="<?= home_url() ?>">
                        <div class="section-title sm">Back to main page</div>
                    </a>
                    <h1 class="section-header big"><span class="word-accent orange">Country<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span> Reviews</h1>
                </div><img class="blog-head-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/blog/blog-img.png" alt="Blog header image">
            </section>
            <section class="blog-wrap">
                <div class="blog-wrap-content" id="ajax-posts">
                    <?php
                        $posts = get_posts( array(
                            'post_type'   => 'country',
                            'numberposts' => 9,
                            'meta_key'	  => 'country_rating',
                            'orderby'     => 'meta_value',
                            'order'       => 'DESC',
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);

                            if (get_post_type() == 'country') {
                                get_template_part('blocks/country-catalog');
                            }

                            if (get_post_type() == 'exchange') {
                                get_template_part('blocks/exchange-catalog');
                            }
                        }

                        wp_reset_postdata();
                    ?>
                </div>
                <button class="blog-more" id="more_posts" onclick="loadClick(<?php echo $offset; ?>)">Load More</button>
            </section>
        </div>
    </main>

    <script>
        let postCount = <?= $post_count ?>;
        let category = 'country';
    </script>

<?php get_footer('other'); ?>