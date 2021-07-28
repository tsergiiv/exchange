<?php
    $posts = get_posts( array(
        'post_type' => 'faq',
    ) );

    foreach( $posts as $post ){
        setup_postdata($post);
        ?>

        <section class="faq middle">
            <div class="faq-head">
                <div class="section-title-simple">FAQ</div>
                <h1 class="section-header m"><span class="word-accent violet"><?= the_field('faq_title') ?><span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></h1>
            </div>
            <div class="faq-wrap">
                <div class="faq-elem">
                    <div class="faq-elem-content">
												<picture>
													<source type="image/webp" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1-2x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1-2x.webp 2x">
													<source type="image/png" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1-2x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1-2x.png 2x">
													<source type="image/webp" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1-1x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1-1x.webp 2x">
													<source type="image/png" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1-1x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1-1x.png 2x">
													<img class="faq-elem-img lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1-2x.webp" alt="FAQ Image #1">
												</picture>
                        <span class="faq-elem-number">01</span>
                        <span class="faq-elem-title"><?= the_field('faq_title_1') ?></span>
                        <span class="faq-elem-text"><?= the_field('faq_text_1') ?></span>
                    </div>
                </div>
                <div class="faq-elem">
                    <div class="faq-elem-content">
												<picture>
													<source type="image/webp" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2-2x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2-2x.webp 2x">
													<source type="image/png" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2-2x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2-2x.png 2x">
													<source type="image/webp" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2-1x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2-1x.webp 2x">
													<source type="image/png" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2-1x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2-1x.png 2x">
													<img class="faq-elem-img lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2-2x.webp" alt="FAQ Image #2">
												</picture>
                        <span class="faq-elem-number">02</span>
                        <span class="faq-elem-title"><?= the_field('faq_title_2') ?></span>
                        <span class="faq-elem-text"><?= the_field('faq_text_2') ?></span>
                    </div>
                </div>
                <div class="faq-elem">
                    <div class="faq-elem-content">
												<picture>
													<source type="image/webp" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3-2x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3-2x.webp 2x">
													<source type="image/png" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3-2x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3-2x.png 2x">
													<source type="image/webp" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3-1x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3-1x.webp 2x">
													<source type="image/png" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3-1x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3-1x.png 2x">
													<img class="faq-elem-img lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3-2x.webp" alt="FAQ Image #3">
												</picture>
                        <span class="faq-elem-number">03</span>
                        <span class="faq-elem-title"><?= the_field('faq_title_3') ?></span>
                        <span class="faq-elem-text"><?= the_field('faq_text_3') ?></span>
                    </div>
                </div>
                <div class="faq-elem">
                    <div class="faq-elem-content">
												<picture>
													<source type="image/webp" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4-2x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4-2x.webp 2x">
													<source type="image/png" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4-2x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4-2x.png 2x">
													<source type="image/webp" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4-1x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4-1x.webp 2x">
													<source type="image/png" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4-1x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4-1x.png 2x">
													<img class="faq-elem-img lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4-2x.webp" alt="FAQ Image #4">
												</picture>
                        <span class="faq-elem-number">04</span>
                        <span class="faq-elem-title"><?= the_field('faq_title_4') ?></span>
                        <span class="faq-elem-text"><?= the_field('faq_text_4') ?></span>
                    </div>
                </div>
            </div>
        </section>

        <?php
    }

    wp_reset_postdata();
?>