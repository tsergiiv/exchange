    <section>
        <?php
            $posts = get_posts( array(
                'post_type' => 'titles',
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                ?>

                <h5><?= the_field('faq_label') ?></h5>
                <h1><?= the_field('faq_title') ?></h1>

                <?php
            }

            wp_reset_postdata();
        ?>
    </section>

    <section>
        <?php
            $posts = get_posts( array(
                'post_type' => 'faq',
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                ?>

                <h5><?= the_field('title') ?></h5>
                <p><?= the_field('text') ?></p>

                <?php
            }

            wp_reset_postdata();
        ?>
    </section>

    <section>
        <?php
            $posts = get_posts( array(
                'post_type' => 'footer',
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                ?>

                <h5><?= the_field('guide_title') ?></h5>
                <p><?= the_field('guide_subtitle') ?></p>
                <input type="email" id="book_email" placeholder="type your email here">
                <input type="button" id="book_btn" value="<?= the_field('guide_button_text') ?>">
                <?php
            }

            wp_reset_postdata();
        ?>
    </section>

    <footer>
        <?php
            $posts = get_posts( array(
                'post_type' => 'footer',
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                ?>

                <p><?= the_field('copyright') ?></p>

                <?php
            }

            wp_reset_postdata();
        ?>

        <?php
            $menuParameters = [
                'theme_location'  => '',
                'menu'            => 'socials-menu',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => false,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '%3$s',
                'depth'           => 0,
                'walker'          => '',
                'link_class'      => 'menu-link',
            ];

            echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
        ?>
    </footer>

	<script type="text/javascript">
        let templateUrl = '<?= get_bloginfo("template_url"); ?>';
        // console.log(templateUrl);

        let url = '<?= get_bloginfo("url"); ?>';
        // console.log(url);

        jQuery('#book_btn').click(function() {
            let email = jQuery('#book_email').val();
            if *validateEmail(email));
        });

        function validateEmail(email) {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return re.test(email);
        }
    </script>

    <?php wp_footer(); ?>

</body>
</html>
