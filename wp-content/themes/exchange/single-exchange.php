<?php
/*
Template Name: Exchange Post Template
Template Post Type: exchange
*/
?>

<?php get_header(); ?>

    <main class="content exchange-article">
        <div class="article middle">
            <section class="article-head container">
                <div class="breadcrumbs">
                    <a class="breadcrumbs-link" href="<?= home_url() ?>">Main Page</a>
                    <a class="breadcrumbs-link" href="<?= home_url() ?>/exchange">Exchange Reviews</a>
                    <a class="breadcrumbs-link" href=""><?= the_title() ?> Review</a>
                </div>
                <div class="article-head-wrap">
                    <div class="article-head-left">
                        <h1 class="section-header big">
                            <span class="word-accent violet">
                                <?= the_field('title_1') ?>:
                                <span class="word-accent-square left"></span>
                                <span class="word-accent-square right"></span>
                            </span>
                            <?php if (get_field('title_2')): ?>
                                <?= the_field('title_2') ?>
                            <?php endif; ?>
                            <?php if (get_field('title_3')): ?>
                                <span class="word-accent orange"><?= the_field('title_3') ?>
                                    <span class="word-accent-square left"></span>
                                    <span class="word-accent-square right"></span>
                                </span>
                            <?php endif; ?>
                        </h1>
                        <div class="section-desc">
                            Many or all of the products featured here are from our partners who compensate us. This may influence the products we write about, however, this does not influence our evaluations. Our opinions are our own.
                        </div>
                        <div class="article-review">
                            <div class="article-review-date"><?= exchange_post_reading() ?></div>
                            <?php if (get_field('description')): ?>
                                <div class="article-review-text">
                                    <?= the_field('description') ?>
                                </div>
                            <?php endif; ?>
                            <div class="article-review-author">
                                <div class="article-review-author-photo"><img class="article-review-author-photo-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-author.png" alt="Article review author"></div>
                                <div class="article-review-author-info">
                                    <div class="article-review-author-date"><?= the_field('publish_date') ?></div>
                                    <div class="article-review-author-name"><?= the_field('author') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-head-right"><img class="article-head-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/exchanges/<?= basename(get_permalink()) ?>.png" alt="Article head image"></div>
                </div>
            </section>

            <section class="article-wrap container">
                <div class="article-content">
                    <!-- Rating block -->
                    <?php
                        $rating =  get_field_object('exchange_rating');
                    ?>
                    <section class="article-rating three" data-max="5">
                        <div class="article-rating-title">Rating: <?= $rating['value'] ?> / 5</div>
                        <div class="article-rating-wrap">
                        <?php
                            for ($i = 1; $i <= 6; $i++):
                                $rating = get_field_object('exchange_rating_' . $i);
                                if (!$rating['value']) {
                                    continue;
                                }
                        ?>
                            <div class="article-rating-elem">
                                <div class="article-rating-elem-content">
                                    <div class="article-rating-point">
                                        <div class="article-rating-point-num"><span
                                                    class="article-rating-point-val"><?= $rating['value'] ?></span>/5
                                        </div>
                                    </div>
                                    <div class="article-rating-name"><?= $rating['label'] ?></div>
                                    <div class="article-rating-desc">
                                        <?= the_field('why_' . $i) ?>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                        </div>
                    </section>
                    <div class="section-header m" id="whatis">
                        <span class="word-accent violet"><?= the_title() ?> Overview
                            <span class="word-accent-square left"></span>
                            <span class="word-accent-square right"></span>
                        </span>
                    </div>
                    <?= the_field('overview') ?>
                    <a class="btn article-btn" href=""><span class="btn-arrow"></span><span class="btn-text">Learn more</span></a>

                    <?php if (get_field('pros') || get_field('cons')): ?>
                        <div class="article-advantages">
                            <div class="article-content-heading" id="proscons">Pros / Cons</div><img class="article-advantages-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/advantages-bg.png" alt="Advantages bg">
                            <?php if (get_field('cons')): ?>
                                <div class="article-advantages-elem cons">
                                    <div class="article-advantages-head">
                                        <div class="article-advantages-icon"><img class="article-advantages-icon-content" src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/thumb-down.png" alt="Cons Icon"></div>
                                        <div class="article-advantages-title">Cons</div>
                                    </div>
                                    <?= the_field('cons') ?>
                                </div>
                            <?php endif; ?>

                            <?php if (get_field('pros')): ?>
                                <div class="article-advantages-elem pros">
                                    <div class="article-advantages-head">
                                        <div class="article-advantages-icon"><img class="article-advantages-icon-content" src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/thumb-up.png" alt="Pros Icon"></div>
                                        <div class="article-advantages-title">Pros</div>
                                    </div>
                                    <?= the_field('pros') ?>
                                </div>
                            <?php endif; ?>

                            <a class="btn article-btn" href=""><span class="btn-arrow"></span><span class="btn-text">Open a <?=  the_title() ?> account </span></a>
                        </div>
                    <?php endif; ?>

                    <!-- Exchange info block -->
                    <?php
                        $info1 =  get_field_object('info_1');
                        $info2 =  get_field_object('info_2');
                        $info3 =  get_field_object('info_3');
                        $info4 =  get_field_object('info_4');
                        $info5 =  get_field_object('info_5');
                    ?>
                    <div class="article-info orange">
                        <div class="article-info-title" id="exchange">Exchange info</div>
                        <div class="article-info-elem">
                            <?= $info1['label'] ?>: <span class="article-info-elem-val"><?= $info1['value'] ?></span>
                        </div>
                        <div class="article-info-elem">
                            <?= $info2['label'] ?>: <span class="article-info-elem-val"><?= $info2['value'] ?></span>
                        </div>
                        <div class="article-info-elem">
                            <?= $info3['label'] ?>: <span class="article-info-elem-val">
                                <a class="article-link-sm violet" href="<?= $info3['value'] ?>"><?= $info3['value'] ?></a>
                            </span>
                        </div>
                        <div class="article-info-elem">
                            <?= $info4['label'] ?>: <span class="article-info-elem-val green"><?= $info4['value'] ?></span>
                        </div>
                        <div class="article-info-elem">
                            <?= $info5['label'] ?>: <span class="article-info-elem-val violet"><?= $info5['value'] ?></span>
                        </div>
                    </div>

                    <!-- Fees and trading block -->
                    <?php
                        $fee1 =  get_field_object('fee_1');
                        $fee2 =  get_field_object('fee_2');
                        $fee3 =  get_field_object('fee_3');
                        $fee4 =  get_field_object('fee_4');
                        $fee5 =  get_field_object('fee_5');
                    ?>
                    <div class="article-info pink">
                        <div class="article-info-title" id="feestrading">Fees and trading</div>
                        <?php if ($fee1['value']): ?>
                            <div class="article-info-elem">
                                <?= $fee1['label'] ?>: <span class="article-info-elem-val pink"><?= $fee1['value'] ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if ($fee2['value']): ?>
                            <div class="article-info-elem">
                                <?= $fee2['label'] ?>: <span class="article-info-elem-val green"><?= $fee2['value'] ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if ($fee3['value']): ?>
                            <div class="article-info-elem">
                                <?= $fee3['label'] ?>: <span class="article-info-elem-val orange"><?= $fee3['value'] ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if ($fee4['value']): ?>
                            <div class="article-info-elem">
                                <?= $fee4['label'] ?>: <span class="article-info-elem-val orange"><?= $fee4['value'] ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if ($fee5['value']): ?>
                            <div class="article-info-elem">
                                <?= $fee5['label'] ?>: <span class="article-info-elem-val violet"><?= $fee5['value'] ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="article-content-heading" id="security">Security</div>
                    <?= the_field('security') ?>

                    <?php if (get_field('tip_1')): ?>
                        <div class="article-content-heading" id="tips">Tips for users</div>
                        <p><?= get_field('tip_text') ? get_field('tip_text') : '' ?></p>
                        <?php if (get_field('tip_1')): ?>
                            <div class="article-step">
                                <div class="article-step-icon"><span class="article-step-icon-text">01</span></div>
                                <div class="article-step-info">
                                    <div class="article-step-info-text">
                                        <?= the_field('tip_1') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('tip_2')): ?>
                            <div class="article-step">
                                <div class="article-step-icon"><span class="article-step-icon-text">02</span></div>
                                <div class="article-step-info">
                                    <div class="article-step-info-text">
                                        <?= the_field('tip_2') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('tip_3')): ?>
                            <div class="article-step">
                                <div class="article-step-icon"><span class="article-step-icon-text">03</span></div>
                                <div class="article-step-info">
                                    <div class="article-step-info-text">
                                        <?= the_field('tip_3') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('tip_4')): ?>
                            <div class="article-step">
                                <div class="article-step-icon"><span class="article-step-icon-text">04</span></div>
                                <div class="article-step-info">
                                    <div class="article-step-info-text">
                                        <?= the_field('tip_4') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('tip_5')): ?>
                            <div class="article-step">
                                <div class="article-step-icon"><span class="article-step-icon-text">05</span></div>
                                <div class="article-step-info">
                                    <div class="article-step-info-text">
                                        <?= the_field('tip_5') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if (get_field('regulation')): ?>
                        <div class="article-content-heading" id="regulation">Regulation</div>
                        <?= the_field('regulation') ?>
                    <?php endif; ?>

                    <?php if (get_field('privacy')): ?>
                        <div class="article-content-heading" id="privacy">Privacy</div>
                        <?= the_field('privacy') ?>
                    <?php endif; ?>

                    <?php if (get_field('experience_text')): ?>
                        <div class="article-content-heading" id="experience"><?= the_field('experience_title') ?></div>
                        <?= the_field('experience_text') ?>
                    <?php endif; ?>

                    <?php if (get_field('interface')): ?>
                        <div class="article-content-heading" id="interface">Interface</div>
                        <?= the_field('interface') ?>
                    <?php endif; ?>

                    <?php if (get_field('compare')): ?>
                        <div class="article-content-heading" id="compare">How does <?= the_title() ?> compare? </div>
                        <?= the_field('compare') ?>
                    <?php endif; ?>

                    <?php if (get_field('customer_support')): ?>
                        <div class="article-content-heading" id="support">Customer Support </div>
                        <?= the_field('customer_support') ?>
                    <?php endif; ?>

                    <?php if (get_field('opening_account')): ?>
                        <div class="article-content-heading" id="openacc">Opening an Account and Trading </div>
                        <?= the_field('opening_account') ?>
                    <?php endif; ?>

                    <?php if (get_field('deposits_withdrawal')): ?>
                        <div class="article-content-heading" id="dep_with">Deposits / Withdrawal </div>
                        <?= the_field('deposits_withdrawal') ?>
                    <?php endif; ?>

                    <?php if (get_field('fees')): ?>
                        <div class="article-content-heading" id="fees"><?= the_title() ?> Fees</div>
                        <?= the_field('fees') ?>
                    <?php endif; ?>

                    <?php if (get_field('trading_costs')): ?>
                        <div class="article-content-heading" id="fees"><?=  the_title() ?> Fees and Trading costs</div>
                        <?= the_field('trading_costs') ?>
                    <?php endif; ?>

                    <?php if (get_field('news')): ?>
                        <div class="article-content-heading" id="news">News</div>
                        <?= the_field('news') ?>
                    <?php endif; ?>

                    <?php if (get_field('question_1')): ?>
                        <div class="article-content-heading" id="faqs">FAQs</div>
                        <div class="article-accordion-wrap">
                            <?php
                            for ($i = 1; $i <= 7; $i++) {
                                    if (!get_field('question_' . $i)) {
                                            continue;
                                    }

                                    ?>

                                    <div class="article-accordion <?= $i == 1 ? 'active' : '' ?>">
                                            <div class="article-accordion-title">
                                                    <?= the_field('question_' . $i) ?>
                                                    <span class="article-accordion-title-btn"><span></span></span>
                                            </div>
                                            <div class="article-accordion-dropdown">
                                                    <?= the_field('answer_' . $i) ?>
                                            </div>
                                    </div>

                                    <?php
                            }
                            ?>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('supported_countries')): ?>
                        <div class="article-content-heading" id="supported_countries">Supported Countries</div>
                        <?= the_field('supported_countries') ?>
                    <?php endif; ?>

                    <?php if (get_field('supported_currencies')): ?>
                        <div class="article-content-heading" id="supported_currencies"><?= the_field('currencies_title') ?></div>
                        <?= the_field('supported_currencies') ?>
                    <?php endif; ?>

                    <?php if (get_field('payment_methods')): ?>
                        <div class="article-content-heading" id="payment_methods"><?=  the_title() ?> Payment Methods</div>
                        <?= the_field('payment_methods') ?>
                    <?php endif; ?>

                    <div class="section-header m" id="services"><span class="word-accent orange"><?= the_title() ?>’s Services<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></div>
                    <?= the_field('services') ?>

                    <?php if (get_field('socilas_text')): ?>
                        <div class="article-content-heading" id="socials">Socials</div>
                        <?= the_field('socilas_text') ?>
                    <?php endif; ?>

                    <?= do_shortcode( '[helpful]' ); ?>

                    <div class="article-tag">
                        <span>#<?=  the_title() ?></span>
                        <span>#<?=  the_title() ?> exchange </span>
                        <span>#what is <?=  the_title() ?>? </span>
                        <span>#<?=  the_title() ?> wallet </span>
                        <span>#<?=  the_title() ?> review </span>
                    </div>
                </div>
                <div class="article-sidebar">
                    <div class="article-sidebar-title">Table of contents</div>
                    <a class="article-sidebar-link" href="#whatis">What is <?= the_title() ?>?</a>

                    <?php if (get_field('pros') || get_field('cons')): ?>
                        <a class="article-sidebar-link" href="#proscons">Pros/Cons</a>
                    <?php endif; ?>

                    <a class="article-sidebar-link" href="#exchange">Exchange Info</a>
                    <a class="article-sidebar-link" href="#feestrading">Fees and Trading</a>
                    <a class="article-sidebar-link" href="#security">Security</a>
                    <?php if (get_field('tip_1')): ?>
                        <a class="article-sidebar-link" href="#tips">Tips for users</a>
                    <?php endif; ?>

                    <?php if (get_field('regulation')): ?>
                        <a class="article-sidebar-link" href="#regulation">Regulation</a>
                    <?php endif; ?>

                    <?php if (get_field('privacy')): ?>
                        <a class="article-sidebar-link" href="#privacy">Privacy</a>
                    <?php endif; ?>

                    <?php if (get_field('experience_text')): ?>
                        <a class="article-sidebar-link" href="#experience">User Experience</a>
                    <?php endif; ?>

                    <?php if (get_field('interface')): ?>
                        <a class="article-sidebar-link" href="#interface">Interface </a>
                    <?php endif; ?>

                    <?php if (get_field('compare')): ?>
                        <a class="article-sidebar-link" href="#compare">How does it compare</a>
                    <?php endif; ?>

                    <?php if (get_field('customer_support')): ?>
                        <a class="article-sidebar-link" href="#support">Customer Support</a>
                    <?php endif; ?>

                    <?php if (get_field('opening_account')): ?>
                        <a class="article-sidebar-link" href="#openacc">Open Account and Trade</a>
                    <?php endif; ?>

                    <?php if (get_field('deposits_withdrawal')): ?>
                        <a class="article-sidebar-link" href="#dep_with">Deposits / Withdrawal</a>
                    <?php endif; ?>

                    <?php if (get_field('fees') || get_field('trading_costs')): ?>
                        <a class="article-sidebar-link" href="#fees">Fees</a>
                    <?php endif; ?>

                    <?php if (get_field('news')): ?>
                        <a class="article-sidebar-link" href="#news">News</a>
                    <?php endif; ?>

                    <?php if (get_field('question_1')): ?>
                        <a class="article-sidebar-link" href="#faqs">FAQs</a>
                    <?php endif; ?>

                    <?php if (get_field('supported_countries')): ?>
                        <a class="article-sidebar-link" href="#supported_countries">Supported Countries</a>
                    <?php endif; ?>

                    <?php if (get_field('supported_currencies')): ?>
                        <a class="article-sidebar-link" href="#supported_currencies"><?= the_field('currencies_title') ?></a>
                    <?php endif; ?>

                    <?php if (get_field('payment_methods')): ?>
                        <a class="article-sidebar-link" href="#payment_methods">Payment Methods</a>
                    <?php endif; ?>

                    <a class="article-sidebar-link" href="#services">Services</a>

                    <?php if (get_field('socilas_text')): ?>
                        <a class="article-sidebar-link" href="#socials">Socials</a>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    </main>

<?php get_footer('other'); ?>