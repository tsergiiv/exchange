<?php
    $posts = get_posts( array(
        'post_type' => 'why_coincub',
    ) );

    foreach( $posts as $post ){
        setup_postdata($post);
        ?>

        <section class="advantages">
            <div class="advantages-bg"></div>
            <div class="advantages-content middle">
								<noscript class="loading-lazy">
									<picture>
										<source type="image/webp" media="(min-width: 552px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-image-2x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-image-2x.webp 2x">
										<source type="image/png" media="(min-width: 552px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-image-2x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-image-2x.png 2x">
										<source type="image/webp" media="(min-width: 0px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-image-1x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-image-1x.webp 2x">
										<source type="image/png" media="(min-width: 0px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-image-1x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-image-1x.png 2x">
										<img class="advantages-bg-cat" src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-image-2x.webp" loading="lazy" alt="Advantages cat">
									</picture>
								</noscript>
                <div class="advantages-block">
                    <div class="section-title m icon">
                        <img class="section-title-icon" src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/tips-icon.png" alt="Testimonials Icon">
                        <?= the_field('title') ?>
                    </div>
                    <div class="advantages-wrap">
                        <div class="advantages-elem green">
                            <div class="advantages-elem-content">
                                <div class="advantages-img">
                                    <img class="advantages-img-content" src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-1.png" alt="Advantages image #1">
                                </div>
                                <div class="advantages-text"><span class="advantages-text-accent">
                                    <?= the_field('title_1') ?>: </span><?= the_field('text_1') ?>
                                </div>
                            </div>
                        </div>
                        <div class="advantages-elem orange">
                            <div class="advantages-elem-content">
                                <div class="advantages-img"><img class="advantages-img-content"
                                                                 src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-2.png"
                                                                 alt="Advantages image #2"></div>
                                <div class="advantages-text"><span class="advantages-text-accent">
                                    <?= the_field('title_2') ?>: </span><?= the_field('text_2') ?>
                                </div>
                            </div>
                        </div>
                        <div class="advantages-elem purple">
                            <div class="advantages-elem-content">
                                <div class="advantages-img"><img class="advantages-img-content"
                                                                 src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-7.png"
                                                                 alt="Advantages image #3"></div>
                                <div class="advantages-text"><span class="advantages-text-accent">
                                    <?= the_field('title_3') ?>: </span><?= the_field('text_3') ?>
                                </div>
                            </div>
                        </div>
                        <div class="advantages-elem orange">
                            <div class="advantages-elem-content">
                                <div class="advantages-img"><img class="advantages-img-content"
                                                                 src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-4.png"
                                                                 alt="Advantages image #4"></div>
                                <div class="advantages-text"><span class="advantages-text-accent">
                                    <?= the_field('title_4') ?>: </span><?= the_field('text_4') ?>
                                </div>
                            </div>
                        </div>
                        <div class="advantages-elem purple">
                            <div class="advantages-elem-content">
                                <div class="advantages-img"><img class="advantages-img-content"
                                                                 src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-5.png"
                                                                 alt="Advantages image #5"></div>
                                <div class="advantages-text"><span class="advantages-text-accent">
                                    <?= the_field('title_5') ?>: </span><?= the_field('text_5') ?>
                                </div>
                            </div>
                        </div>
                        <div class="advantages-elem green">
                            <div class="advantages-elem-content">
                                <div class="advantages-img"><img class="advantages-img-content"
                                                                 src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-6.png"
                                                                 alt="Advantages image #6"></div>
                                <div class="advantages-text"><span class="advantages-text-accent">
                                    <?= the_field('title_6') ?>: </span><?= the_field('text_6') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
    }

    wp_reset_postdata();
?>