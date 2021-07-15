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
                <input type="text" name="action" value="<?= admin_url('admin-ajax.php?action=send_mail') ?>" hidden>

                <?php
            }

            wp_reset_postdata();
        ?>

        <?= do_shortcode('[email-subscribers-form id="1"]') ?>
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

        jQuery('.es_submit_button').click(function() {
            let email = jQuery('.ig_es_form_field_email').val();
            let action = jQuery('input[name="action"]').val();

            let formData = new FormData();
            formData.append('email', email);

            if (validateEmail(email)) {
                console.log(email);

                jQuery.ajax({
                    url: action,
                    type: 'POST',
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function (data) {
                        console.log(data);
                        jQuery('.es_subscription_form').submit();
                    },
                    error: function (error) {
                        console.log('error' + error);
                    },
                });
            };
        });

        function validateEmail(email) {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return re.test(email);
        }

    </script>

    <?php wp_footer(); ?>

</body>
</html>
