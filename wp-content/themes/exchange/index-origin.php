<?php get_header(); ?>

	<!-- CONTENT -->
	<!-- #1 Enrich, Transform, Secure & Deliver Quality Data -->
    <section>
        <?php
            $posts = get_posts( array(
                'post_type' => 'home',
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                ?>

                <h5><?= the_field('top_label') ?></h5>
                <h1><?= the_field('top_title') ?></h1>
                <p><?= the_field('top_subtitle') ?></p>

                <?php
            }

            wp_reset_postdata();
        ?>
    </section>
    <section>
        <?php
        $posts = get_posts( array(
            'post_type' => 'home',
        ) );

        foreach( $posts as $post ){
            setup_postdata($post);
            ?>

            <h5><?= the_field('find_label') ?></h5>
            <h1><?= the_field('find_title') ?></h1>
            <h3><?= the_field('find_label_1') ?></h3>
            <h3><?= the_field('find_label_2') ?></h3>
            <h3><a href="<?= get_home_url(); ?>/exchange"><?= the_field('find_title_1') ?></a></h3>
            <h3><a href="<?= get_home_url(); ?>/country"><?= the_field('find_title_2') ?></a></h3>

            <?php
        }

        wp_reset_postdata();
        ?>
    </section>

<?php get_footer(); ?>