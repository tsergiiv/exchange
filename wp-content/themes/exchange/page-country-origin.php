<?php get_header(); ?>

<?php
    $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'post',
        'category_name'  => 'country',
    );

    $posts_query = new WP_Query($args);
    $post_count = $posts_query->post_count;
?>

    <h1>Country Page</h1>

    <section class="blog-article container">
        <div class="blog-article-wrap" id="ajax-posts">
            <?php
            $posts = get_posts( array(
                'post_type'     => 'post',
                'numberposts'   => 8,
                'category_name' => 'country',
                'orderby'       => 'date',
                'order'         => 'ASC',
            ) );

            foreach( $posts as $post ) {
                setup_postdata($post);
                get_template_part('blocks/block-article');
            }

            wp_reset_postdata();
            ?>
        </div>
        <button class="btn-s btn-blue blog-article-btn" id="more_posts" onclick="loadClick(<?php echo $offset; ?>)">Load more Posts</button>
    </section>

    <script>
        let postCount = <?= $post_count ?>;
        let category = 'country';
    </script>

<?php get_footer(); ?>