<?php
    $posts = get_posts( array(
        'post_type' => 'step',
    ) );

    foreach( $posts as $post ){
        setup_postdata($post);
        ?>

        <section class="first first-tab middle">
            <div class="first-head">
                <div class="section-title-simple"><?= the_field('label') ?></div>
                <h1 class="section-header m">
                    <span class="word-accent orange"><?= the_field('title') ?>
                        <span class="word-accent-square left"></span>
                        <span class="word-accent-square right"></span>
                    </span>
                </h1>
            </div>
            <div class="first-wrap">
                <div class="first-img"><img class="first-img-content"
                                            src="<?php bloginfo('template_url'); ?>/assets/img/content/first/first-img-1.png"
                                            alt="First Time Image"></div>
                <div class="first-info">
                    <div class="first-tab-wrap">
                        <div class="first-tab-nav">
                            <div class="tab-nav-link first-tab-nav-link active" data-tab-link="1">
                                <div class="first-tab-nav-link-icon">
                                    <svg class="first-tab-nav-link-icon-content">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#steps-icon"></use>
                                    </svg>
                                </div>
                                <span class="first-tab-nav-link-text">Step 1 </span>
                            </div>
                            <div class="tab-nav-link first-tab-nav-link" data-tab-link="2">
                                <div class="first-tab-nav-link-icon">
                                    <svg class="first-tab-nav-link-icon-content">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#steps-icon"></use>
                                    </svg>
                                </div>
                                <span class="first-tab-nav-link-text">Step 2 </span>
                            </div>
                            <div class="tab-nav-link first-tab-nav-link" data-tab-link="3">
                                <div class="first-tab-nav-link-icon">
                                    <svg class="first-tab-nav-link-icon-content">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#steps-icon"></use>
                                    </svg>
                                </div>
                                <span class="first-tab-nav-link-text">Step 3 </span>
                            </div>
                            <div class="tab-nav-link first-tab-nav-link" data-tab-link="4">
                                <div class="first-tab-nav-link-icon">
                                    <svg class="first-tab-nav-link-icon-content">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#steps-icon"></use>
                                    </svg>
                                </div>
                                <span class="first-tab-nav-link-text">Step 4 </span>
                            </div>
                            <div class="tab-nav-link first-tab-nav-link" data-tab-link="5">
                                <div class="first-tab-nav-link-icon">
                                    <svg class="first-tab-nav-link-icon-content">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#steps-icon"></use>
                                    </svg>
                                </div>
                                <span class="first-tab-nav-link-text">Step 5</span>
                            </div>
                        </div>
                        <div class="first-tab-content tab-content">
                            <div class="tab-elem first-tab-elem active" data-tab-elem="1">
                                <div class="first-text">
                                    <?= the_field('step_1') ?>
                                </div>
                                <a class="btn first-btn" href=""><span class="btn-arrow"></span><span
                                        class="btn-text">Choose pair</span></a>
                            </div>
                            <div class="tab-elem first-tab-elem" data-tab-elem="2">
                                <div class="first-text">
                                    <?= the_field('step_2') ?>
                                </div>
                                <a class="btn first-btn" href=""><span class="btn-arrow"></span><span
                                        class="btn-text">Choose pair</span></a>
                            </div>
                            <div class="tab-elem first-tab-elem" data-tab-elem="3">
                                <div class="first-text">
                                    <?= the_field('step_3') ?>
                                </div>
                                <a class="btn first-btn" href=""><span class="btn-arrow"></span><span
                                        class="btn-text">Choose pair</span></a>
                            </div>
                            <div class="tab-elem first-tab-elem" data-tab-elem="4">
                                <div class="first-text">
                                    <?= the_field('step_4') ?>
                                </div>
                                <a class="btn first-btn" href=""><span class="btn-arrow"></span><span
                                        class="btn-text">Choose pair</span></a>
                            </div>
                            <div class="tab-elem first-tab-elem" data-tab-elem="5">
                                <div class="first-text">
                                    <?= the_field('step_5') ?>
                                </div>
                                <a class="btn first-btn" href=""><span class="btn-arrow"></span><span
                                        class="btn-text">Choose pair</span></a>
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