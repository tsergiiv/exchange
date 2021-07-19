<!doctype html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coincub - Coming soon</title>
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png"">
    <?php wp_head(); ?>
</head>

<body class="soon">
    <?php
        $end_date = null;
        $posts = get_posts( array(
            'post_type' => 'coming_soon',
        ) );

        foreach( $posts as $post ) {
            setup_postdata($post);
            $end_date = get_field('end_date');
        }

        wp_reset_postdata();
    ?>


    <?php
        $posts = get_posts( array(
            'post_type' => 'coming_soon',
        ) );

        foreach( $posts as $post ) {
            setup_postdata($post);

            ?>

            <div class="wrapper">
                <div class="content"><img class="soon-bg soon-bg-1" src="<?php bloginfo('template_url'); ?>/assets/img/content/soon/soon-bg-img-5.png" alt="Coming soon bg image"><img class="soon-bg soon-bg-2" src="<?php bloginfo('template_url'); ?>/assets/img/content/soon/soon-bg-img-6.png" alt="Coming soon bg image"><img class="soon-bg soon-bg-3" src="<?php bloginfo('template_url'); ?>/assets/img/content/soon/soon-bg-img-7.png" alt="Coming soon bg image">
                    <header class="header container"><a class="header-logo" href=""><img class="header-logo-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.svg" alt="СoinResident Logo"></a></header>
                    <div class="soon-content container">
                        <div class="section-title sm"><?= the_field('label') ?></div>
                        <h1 class="section-header big">Best place for<br>your <span class="word-accent violet">acquaintance<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span> with <br><span class="word-accent orange">the world of cryptocurrency<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></h1>
                        <div class="soon-image"><img class="soon-image-content" src="<?php bloginfo('template_url'); ?>/assets/img/content/soon/soon-main-img.png" alt="Coming soon image"><img class="soon-image-bg soon-image-bg-1" src="<?php bloginfo('template_url'); ?>/assets/img/content/soon/soon-bg-img-1.png" alt="Coming soon bg image"><img class="soon-image-bg soon-image-bg-2" src="<?php bloginfo('template_url'); ?>/assets/img/content/soon/soon-bg-img-2.png" alt="Coming soon bg image"><img class="soon-image-bg soon-image-bg-3" src="<?php bloginfo('template_url'); ?>/assets/img/content/soon/soon-bg-img-3.png" alt="Coming soon bg image"><img class="soon-image-bg soon-image-bg-4" src="<?php bloginfo('template_url'); ?>/assets/img/content/soon/soon-bg-img-4.png" alt="Coming soon bg image"></div>
                        <div class="soon-timer">
                            <div class="section-title m icon"><img class="section-title-icon" src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/info-icon.png" alt="Coming Soon Info Icon">countdown</div>
                            <div class="soon-timer-wrap">
                                <div class="soon-timer-elem">
                                    <div class="soon-timer-val soon-timer-day"></div>
                                    <div class="soon-timer-text">Days</div>
                                </div>
                                <div class="soon-timer-elem">
                                    <div class="soon-timer-val soon-timer-hour"></div>
                                    <div class="soon-timer-text">Hours</div>
                                </div>
                                <div class="soon-timer-elem">
                                    <div class="soon-timer-val soon-timer-min"></div>
                                    <div class="soon-timer-text">Minutes</div>
                                </div>
                            </div>
                            <?= do_shortcode('[email-subscribers-form id="1"]') ?>
                            <form class="soon-form form-validate" novalidate>
                                <input type="text" class="form-action" name="form-action" value="e-book" hidden>
                                <input type="text" class="action" name="action" value="<?= admin_url('admin-ajax.php?action=send_mail') ?>" hidden>
                                <div class="form-group">
                                    <label class="form-title"><?= the_field('email_input_label') ?></label>
                                    <input class="form-input" id="book-email" type="email" name="formEmail" placeholder="youremail@mail.com" required>
                                    <span class="form-error-msg">Please type correct email</span>
                                </div>
                                <button class="btn form-btn" id="submit-form-btn">
                                    <span class="btn-arrow"></span>
                                    <span class="btn-text"><?= the_field('button_label') ?></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }

        wp_reset_postdata();
    ?>

    <?php wp_footer(); ?>

    <script>
        // Coming soon form validation - end
        // Coming soon timer
        let endDate = '<?= $end_date ?>';
        console.log(endDate);

        function makeTimer() {

            //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");
            var endTime = new Date(endDate);
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }

            jQuery(".soon-timer-day").html(days);
            jQuery(".soon-timer-hour").html(hours);
            jQuery(".soon-timer-min").html(minutes);
        }

        setInterval(function() { makeTimer(); }, 1000);

        // Coming soon timer - end
        // Coming soon animation

        let soonBg1 = document.querySelector('.soon-image-bg-1');
        let soonBg2 = document.querySelector('.soon-image-bg-2');
        let soonBg3 = document.querySelector('.soon-image-bg-3');
        let soonBg4 = document.querySelector('.soon-image-bg-4');
        let soonBg5 = document.querySelector('.soon-bg-1');
        let soonBg6 = document.querySelector('.soon-bg-2');
        let soonBg7 = document.querySelector('.soon-bg-3');

        window.addEventListener('mousemove', function(e) {
            let x = e.clientX / window.innerWidth;
            let y = e.clientY / window.innerHeight;
            soonBg1.style.transform = 'translate(-' + x * 20 + 'px, -' + y * 70 + 'px)';
            soonBg2.style.transform = 'translate(-' + x * 60 + 'px, -' + y * 35 + 'px)';
            soonBg3.style.transform = 'translate(-' + x * 43 + 'px, -' + y * 12 + 'px)';
            soonBg4.style.transform = 'translate(-' + x * 12 + 'px, -' + y * 63 + 'px)';
            soonBg5.style.transform = 'translate(-' + x * 80 + 'px, -' + y * 30 + 'px)';
            soonBg6.style.transform = 'translate(-' + x * 40 + 'px, -' + y * 15 + 'px)';
            soonBg7.style.transform = 'translate(-' + x * 80 + 'px, -' + y * 30 + 'px)';
        });

        // Coming soon animation - end
    </script>

</body>
</html>