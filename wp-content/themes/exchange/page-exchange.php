<?php get_header(); ?>

    <main class="content">
        <div class="blog blog-default">
            <section class="blog-head container">
                <div class="blog-head-info">
                    <div class="section-title sm">Back to main page</div>
                    <h1 class="section-header big"><span class="word-accent orange">Exchange<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span> Reviews</h1>
                </div><img class="blog-head-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/blog/blog-img.png" alt="Blog header image">
            </section>
            <section class="blog-nav">
                <div class="blog-nav-link">All </div>
                <div class="blog-nav-link">Exchanges</div>
                <div class="blog-nav-link active">Financial Platforms</div>
            </section>
            <section class="blog-wrap">
                <div class="blog-wrap-content" id="ajax-posts">
                    <?php
                        $posts = get_posts( array(
                            'post_type'   => 'exchange',
                            'numberposts' => 9,
                            'meta_key'	  => 'exchange_rating',
                            'orderby'     => 'meta_value',
                            'order'       => 'DESC',
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);

                            get_template_part('blocks/exchange-catalog');
                        }

                        wp_reset_postdata();
                    ?>
                </div>
                <button class="blog-more" id="more_posts" onclick="loadClick(<?php echo $offset; ?>)">Load More</button>
            </section>
        </div>
    </main>

<?php get_footer('other'); ?>