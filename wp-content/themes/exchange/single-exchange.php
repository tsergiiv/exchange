<?php
/*
Template Name: Exchange Post Template
Template Post Type: exchange
*/
?>

<?php get_header(); ?>

    <div class="wrapper">
        <header class="header container"><a class="header-logo" href=""><img class="header-logo-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.svg" alt="СoinResident Logo"></a>
            <nav class="header-nav"><a class="header-nav-link" href="">Countries</a><a class="header-nav-link" href="">Exchanges</a></nav>
        </header>
        <main class="content">
            <div class="article">
                <section class="article-head container">
                    <div class="breadcrumbs"><a class="breadcrumbs-link" href="">Main Page</a><a class="breadcrumbs-link" href="">Exchange Reviews</a><a class="breadcrumbs-link" href=""><?=  the_title() ?> Review 2021 - Pros, Cons and More</a></div>
                    <div class="article-head-wrap">
                        <div class="article-head-left">
                            <h1 class="section-header big"><span class="word-accent violet"><?= the_title() ?> Review:<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span>What Works & <span class="word-accent orange">What Doesn’t<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></h1>
                            <div class="article-head-desc">
                                Many or all of the products featured here
                                are from our partners who compensate us.
                                This may influence the products we write about,
                                however, this does not influence our evaluations.
                                Our opinions are our own. Here is a list of our partners
                                and here's how we make money.
                            </div>
                            <div class="article-review">
                                <div class="article-review-date">01.05.2021</div>
                                <div class="article-review-text">
                                    Our review of well-known exchange <?= the_title() ?>. How good is the security,
                                    what are the fees like, and how can you get rewards?
                                </div>
                                <div class="article-review-author">
                                    <div class="article-review-author-photo"><img class="article-review-author-photo-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-author.png" alt="Article review author"></div>
                                    <div class="article-review-author-info">
                                        <div class="article-review-author-date">May, 5, 2021</div>
                                        <div class="article-review-author-name">Laurel Murphy</div>
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
                            $rating1 =  get_field_object('exchange_rating_1');
                            $rating2 =  get_field_object('exchange_rating_2');
                            $rating3 =  get_field_object('exchange_rating_3');
                            $rating4 =  get_field_object('exchange_rating_4');
                            $rating5 =  get_field_object('exchange_rating_5');
                            $rating6 =  get_field_object('exchange_rating_6');

                        ?>
                        <section class="article-rating three">
                            <div class="article-rating-title">Rating: <?= $rating['value'] ?> / 5</div>
                            <div class="article-rating-wrap">
                                <div class="article-rating-elem orange">
                                    <div class="article-rating-elem-content">
                                        <div class="article-rating-point">
                                            <div class="article-rating-point-val"><?= $rating1['value'] ?>/5</div>
                                        </div>
                                        <div class="article-rating-name"><?= $rating1['label'] ?></div>
                                        <div class="article-rating-desc"><?= the_field('why_1') ?></div>
                                    </div>
                                </div>
                                <div class="article-rating-elem pink">
                                    <div class="article-rating-elem-content">
                                        <div class="article-rating-point">
                                            <div class="article-rating-point-val"><?= $rating2['value'] ?>/5</div>
                                        </div>
                                        <div class="article-rating-name"><?= $rating2['label'] ?></div>
                                        <div class="article-rating-desc"><?= the_field('why_2') ?></div>
                                    </div>
                                </div>
                                <div class="article-rating-elem pink">
                                    <div class="article-rating-elem-content">
                                        <div class="article-rating-point">
                                            <div class="article-rating-point-val"><?= $rating3['value'] ?>/5</div>
                                        </div>
                                        <div class="article-rating-name"><?= $rating3['label'] ?></div>
                                        <div class="article-rating-desc"><?= the_field('why_3') ?></div>
                                    </div>
                                </div>
                                <div class="article-rating-elem pink">
                                    <div class="article-rating-elem-content">
                                        <div class="article-rating-point">
                                            <div class="article-rating-point-val"><?= $rating4['value'] ?>/5</div>
                                        </div>
                                        <div class="article-rating-name"><?= $rating4['label'] ?></div>
                                        <div class="article-rating-desc"><?= the_field('why_4') ?></div>
                                    </div>
                                </div>
                                <div class="article-rating-elem green">
                                    <div class="article-rating-elem-content">
                                        <div class="article-rating-point">
                                            <div class="article-rating-point-val"><?= $rating5['value'] ?>/5</div>
                                        </div>
                                        <div class="article-rating-name"><?= $rating5['label'] ?></div>
                                        <div class="article-rating-desc"><?= the_field('why_5') ?></div>
                                    </div>
                                </div>
                                <div class="article-rating-elem pink">
                                    <div class="article-rating-elem-content">
                                        <div class="article-rating-point">
                                            <div class="article-rating-point-val"><?= $rating6['value'] ?>/5</div>
                                        </div>
                                        <div class="article-rating-name"><?= $rating6['label'] ?></div>
                                        <div class="article-rating-desc"><?= the_field('why_6') ?></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="section-header m">
                            <span class="word-accent violet"><?= the_title() ?> Overview
                                <span class="word-accent-square left"></span>
                                <span class="word-accent-square right"></span>
                            </span>
                        </div>
                        <?= the_field('overview') ?>
                        <a class="btn article-btn" href=""><span class="btn-arrow"></span><span class="btn-text">Learn more</span></a>
                        <div class="article-advantages">
                            <div class="article-content-heading">Pros / Cons</div><img class="article-advantages-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/advantages-bg.png" alt="Advantages bg">
                            <div class="article-advantages-elem cons">
                                <div class="article-advantages-head">
                                    <div class="article-advantages-icon"><img class="article-advantages-icon-content" src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/thumb-down.png" alt="Cons Icon"></div>
                                    <div class="article-advantages-title">Cons</div>
                                </div>
                                <?= the_field('cons') ?>
                            </div>
                            <div class="article-advantages-elem pros">
                                <div class="article-advantages-head">
                                    <div class="article-advantages-icon"><img class="article-advantages-icon-content" src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/thumb-up.png" alt="Pros Icon"></div>
                                    <div class="article-advantages-title">Pros</div>
                                </div>
                                <?= the_field('pros') ?>
                            </div><a class="btn article-btn" href=""><span class="btn-arrow"></span><span class="btn-text">Open a <?=  the_title() ?> account </span></a>
                        </div>
                        <!-- Exchange info block -->
                        <?php
                            $info1 =  get_field_object('info_1');
                            $info2 =  get_field_object('info_2');
                            $info3 =  get_field_object('info_3');
                            $info4 =  get_field_object('info_4');
                            $info5 =  get_field_object('info_5');
                        ?>
                        <div class="article-info orange">
                            <div class="article-info-title">Exchange info</div>
                            <div class="article-info-elem">
                                <?= $info1['label'] ?>: <span class="article-info-elem-val"><?= $info1['value'] ?></span>
                            </div>
                            <div class="article-info-elem">
                                <?= $info2['label'] ?>: <span class="article-info-elem-val"><?= $info2['value'] ?></span>
                            </div>
                            <div class="article-info-elem">
                                <?= $info3['label'] ?>: <span class="article-info-elem-val"><?= $info3['value'] ?></span>
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
                            <div class="article-info-title">Fees and trading</div>
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
                        <div class="article-content-heading">Security</div>
                        <?= the_field('security') ?>
                        <div class="article-content-heading">Tips for users</div>
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
                        <div class="article-content-heading">Regulation</div>
                        <?= the_field('regulation') ?>
                        <div class="article-content-heading">Privacy</div>
                        <?= the_field('privacy') ?>
                        <div class="article-content-heading">User Experience</div>
                        <div class="article-content-subheading">Things are where you expect them?</div>
                        <p><?= the_title() ?> users can currently access the exchange via an <a class="article-link-sm violet" href="">app</a> available on Android and iOS, or the <a class="article-link-sm violet" href="">website. </a>One major feature is <?= the_title() ?>’s excellent language selection -
                            users can opt for English (US or British), Spanish, Filipino,
                            French, Italian, Portuguese, Russian, Vietnamese, Turkish,
                            Ukranian, Chinese, Japanese, and Korean.
                        </p>
                        <div class="article-content-subheading">UX & navigating </div>
                        <p>
                            The app offers frequent opportunities to provide feedback,
                            something which is reflected in the seamless UX. The <?= the_title() ?> Pro app
                            is well designed and easy to navigate, though it does go hard on the
                            corporate tech art style and bad <?= the_title() ?> puns. Blessedly, the app
                            supports Dark Mode for those of you who want to trade after hours.
                            The app also offers a stealth mode so users checking their finances
                            can be demure about exactly how much crypto they own.
                        </p>
                        <div class="article-content-subheading">Possible difficulties</div>
                        <p>
                            While it’s possible to have a relatively uncomplicated experience on
                            both the app and the site, the sheer amount of features might confuse
                            newcomers. Both the website and the app appear safe and trustworthy.
                            Users should take advantage of the two-factor authentication feature
                            to keep their accounts and funds safe.
                        </p>
                        <div class="article-content-heading">Interface</div>
                        <p>
                            The interface on the <?= the_title() ?> website and the <?= the_title() ?> Pro have extensive
                            and sophisticated features that support both beginner and experienced
                            traders. Options include a trading view where users can see new and
                            open orders, positions, and their order book.
                        </p><img class="article-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img.png" alt="Article Image">
                        <p>
                            Users can opt for a beginner, intermediate, or advanced view depending
                            on their experience level. The <?= the_title() ?> interface also makes it easier
                            to <a class="article-link-sm violet" href="">stake coins</a>, giving users the ability to participate in governance while
                            generating income.
                        </p>
                        <div class="article-content-heading">How does <?= the_title() ?> compare? </div>
                        <div class="article-content-subheading">Entry threshold</div>
                        <p>
                            <?= the_title() ?> has something to please everyone. With a customizable interface
                            and powerful trading tools, beginner and intermediate traders alike
                            can jump right in.
                        </p>
                        <div class="article-content-subheading">Аlternatives</div>
                        <p>
                            For users who are intimidated by the <?= the_title() ?> interface and find it too
                            complicated, Luno presents an excellent alternative. Those looking to
                            integrate crypto into their daily lives and get more rewards might want
                            to try Crypto.com.
                        </p>
                        <p>
                            If you want access to more coins and are willing to compromise on security,
                            KuCoin (260+ coins) or Gate.io (650+ coins) are great options.
                        </p>
                        <div class="article-content-heading">Customer Support </div>
                        <?= the_field('customer_support') ?>
                        <div class="article-content-heading">Opening an Account and Trading </div>
                        <p>Opening an account on <?= the_title() ?> is relatively straightforward. </p>
                        <div class="article-content-subheading">How To Open Account and Trade </div>
                        <div class="article-slider">
                            <div class="article-slider-wrap">
                                <div class="article-slider-elem">
                                    <div class="article-slider-elem-content">
                                        <div class="article-slider-img"><img class="article-slider-img-content" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-slider-img-1.png" alt="Slider Image #1"></div>
                                        <div class="article-slider-info">
                                            <div class="article-slider-number">01</div>
                                            <div class="article-slider-title">Create an account in <?=  the_title() ?></div>
                                            <div class="article-slider-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Cras vitae ligula sed velit ultrices ullamcorper.
                                                Integer ut lacus id purus lobortis egestas sit amet
                                                ac felis. Quisque nec ex a lacus placerat volutpat.
                                                Duis congue, magna in volutpat dictum, tortor arcu
                                                condimentum elit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-slider-elem">
                                    <div class="article-slider-elem-content">
                                        <div class="article-slider-img"><img class="article-slider-img-content" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-slider-img-2.png" alt="Slider Image #1"></div>
                                        <div class="article-slider-info">
                                            <div class="article-slider-number">02</div>
                                            <div class="article-slider-title">Create an account in <?=  the_title() ?></div>
                                            <div class="article-slider-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Cras vitae ligula sed velit ultrices ullamcorper.
                                                Integer ut lacus id purus lobortis egestas sit amet
                                                ac felis. Quisque nec ex a lacus placerat volutpat.
                                                Duis congue, magna in volutpat dictum, tortor arcu
                                                condimentum elit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-slider-elem">
                                    <div class="article-slider-elem-content">
                                        <div class="article-slider-img"><img class="article-slider-img-content" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-slider-img-1.png" alt="Slider Image #1"></div>
                                        <div class="article-slider-info">
                                            <div class="article-slider-number">01</div>
                                            <div class="article-slider-title">Create an account in <?=  the_title() ?></div>
                                            <div class="article-slider-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Cras vitae ligula sed velit ultrices ullamcorper.
                                                Integer ut lacus id purus lobortis egestas sit amet
                                                ac felis. Quisque nec ex a lacus placerat volutpat.
                                                Duis congue, magna in volutpat dictum, tortor arcu
                                                condimentum elit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-slider-elem">
                                    <div class="article-slider-elem-content">
                                        <div class="article-slider-img"><img class="article-slider-img-content" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-slider-img-1.png" alt="Slider Image #1"></div>
                                        <div class="article-slider-info">
                                            <div class="article-slider-number">01</div>
                                            <div class="article-slider-title">Create an account in <?=  the_title() ?></div>
                                            <div class="article-slider-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Cras vitae ligula sed velit ultrices ullamcorper.
                                                Integer ut lacus id purus lobortis egestas sit amet
                                                ac felis. Quisque nec ex a lacus placerat volutpat.
                                                Duis congue, magna in volutpat dictum, tortor arcu
                                                condimentum elit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-slider-elem">
                                    <div class="article-slider-elem-content">
                                        <div class="article-slider-img"><img class="article-slider-img-content" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-slider-img-1.png" alt="Slider Image #1"></div>
                                        <div class="article-slider-info">
                                            <div class="article-slider-number">01</div>
                                            <div class="article-slider-title">Create an account in <?=  the_title() ?></div>
                                            <div class="article-slider-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Cras vitae ligula sed velit ultrices ullamcorper.
                                                Integer ut lacus id purus lobortis egestas sit amet
                                                ac felis. Quisque nec ex a lacus placerat volutpat.
                                                Duis congue, magna in volutpat dictum, tortor arcu
                                                condimentum elit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-slider-elem">
                                    <div class="article-slider-elem-content">
                                        <div class="article-slider-img"><img class="article-slider-img-content" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-slider-img-1.png" alt="Slider Image #1"></div>
                                        <div class="article-slider-info">
                                            <div class="article-slider-number">01</div>
                                            <div class="article-slider-title">Create an account in <?=  the_title() ?></div>
                                            <div class="article-slider-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Cras vitae ligula sed velit ultrices ullamcorper.
                                                Integer ut lacus id purus lobortis egestas sit amet
                                                ac felis. Quisque nec ex a lacus placerat volutpat.
                                                Duis congue, magna in volutpat dictum, tortor arcu
                                                condimentum elit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-slider-elem">
                                    <div class="article-slider-elem-content">
                                        <div class="article-slider-img"><img class="article-slider-img-content" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-slider-img-1.png" alt="Slider Image #1"></div>
                                        <div class="article-slider-info">
                                            <div class="article-slider-number">01</div>
                                            <div class="article-slider-title">Create an account in <?=  the_title() ?></div>
                                            <div class="article-slider-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Cras vitae ligula sed velit ultrices ullamcorper.
                                                Integer ut lacus id purus lobortis egestas sit amet
                                                ac felis. Quisque nec ex a lacus placerat volutpat.
                                                Duis congue, magna in volutpat dictum, tortor arcu
                                                condimentum elit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-slider-elem">
                                    <div class="article-slider-elem-content">
                                        <div class="article-slider-img"><img class="article-slider-img-content" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-slider-img-1.png" alt="Slider Image #1"></div>
                                        <div class="article-slider-info">
                                            <div class="article-slider-number">01</div>
                                            <div class="article-slider-title">Create an account in <?=  the_title() ?></div>
                                            <div class="article-slider-text">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Cras vitae ligula sed velit ultrices ullamcorper.
                                                Integer ut lacus id purus lobortis egestas sit amet
                                                ac felis. Quisque nec ex a lacus placerat volutpat.
                                                Duis congue, magna in volutpat dictum, tortor arcu
                                                condimentum elit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="article-slider-footer">
                                <div class="article-slider-btn article-slider-prev">
                                    <svg class="article-slider-btn-icon">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#slider-arrow"></use>
                                    </svg>
                                </div>
                                <div class="article-slider-nav">
                                    <div class="article-slider-nav-num">1</div>
                                    <div class="article-slider-nav-dots"></div>
                                    <div class="article-slider-nav-num">8</div>
                                </div>
                                <div class="article-slider-btn article-slider-next">
                                    <svg class="article-slider-btn-icon">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#slider-arrow"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="article-content-subheading">Sign-up </div>
                        <div class="article-step">
                            <div class="article-step-icon"><span class="article-step-icon-text">01</span></div>
                            <div class="article-step-info">
                                <div class="article-step-info-text">
                                    Visit the <?= the_title() ?> site at https://www.<?= the_title() ?>.com, click the
                                    “Create Account” button in the upper right hand corner.
                                    After you’ve provided a username and password, <?= the_title() ?> will
                                    send an activation email with an activation key.
                                </div>
                            </div>
                        </div>
                        <div class="article-step">
                            <div class="article-step-icon"><span class="article-step-icon-text">02</span></div>
                            <div class="article-step-info">
                                <div class="article-step-info-text">
                                    Once you’ve entered the activation key, you have a <?= the_title() ?>
                                    account.
                                </div>
                            </div>
                        </div>
                        <div class="article-step">
                            <div class="article-step-icon"><span class="article-step-icon-text">03</span></div>
                            <div class="article-step-info">
                                <div class="article-step-info-text">
                                    While you don’t need to provide documents immediately, <?= the_title() ?>
                                    does have verification level requirements. <?= the_title() ?> has four
                                    verification levels: Starter, Express, Intermediate, and Pro,
                                    though the Express is only available to US citizens.
                                </div>
                            </div>
                        </div>
                        <div class="article-step">
                            <div class="article-step-icon"><span class="article-step-icon-text">04</span></div>
                            <div class="article-step-info">
                                <div class="article-step-info-text">
                                    In order to access higher withdrawal limits, deposit and withdraw
                                    cash, stake off-chain, trade on margin with high limits, and
                                    trade on <?= the_title() ?> futures, users will need to qualify for an
                                    Intermediate account or higher.
                                </div>
                            </div>
                        </div>
                        <div class="article-step">
                            <div class="article-step-icon"><span class="article-step-icon-text">05</span></div>
                            <div class="article-step-info">
                                <div class="article-step-info-text">
                                    To verify your account, click on your name in the upper right
                                    hand corner, and select “Get Verified”.
                                </div>
                            </div>
                        </div>
                        <div class="article-step">
                            <div class="article-step-icon"><span class="article-step-icon-text">06</span></div>
                            <div class="article-step-info">
                                <div class="article-step-info-text">
                                    Choose the account type you want to apply for and press the
                                    “Verify” button. To learn more about the verification level
                                    requirements, check out the <?= the_title() ?> verification page here.
                                </div>
                            </div>
                        </div>
                        <div class="article-content-subheading">Validation</div>
                        <p>
                            <?= the_title() ?>’s most powerful trading tools, like the dark pool, business
                            accounts, and trading via the over-the-counter desk are only available
                            to Pro accounts, who need to provide extensive documentation in
                            addition to a KYC questionnaire.
                        </p>
                        <div class="article-content-subheading">Withdrawals</div>
                        <p>
                            Once you’ve set up an account and gotten the appropriate level of
                            verification, you can jump right into trading. Deposits and
                            withdrawals can be made via SEPA, SWIFT, wire, domestic
                            transfers, and in some cases credit or debit cards. If you’re
                            in the EU and live in one of the SEPA countries, fiat deposits
                            via SEPA are free.
                        </p>
                        <div class="article-content-heading">Binance Fees and Trading costs</div>
                        <div class="article-accordion" data-accordion="fee">
                            <div class="article-accordion-title">
                                Trading Fees<span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                <p>
                                    Binance has a tiered trading fee structure based on a 30-day
                                    cumulative trading volume. Traders are categorized into VIP
                                    Levels, ranging from Level 0 to Level 9. These can range
                                    from 0.1% for maker and taker to 0.02% / 0.04%, depending
                                    upon VIP level status.
                                </p>
                                <p>
                                    For example a VIP 0 user who trades less than 50 BTC worth per
                                    month would be charged the standard 0.1% fee per trade.
                                </p>
                                <p>
                                    This means if you buy $200 worth of Ethereum (ETH), you would
                                    only pay 200 x 0.001 = $0.20.
                                </p>
                                <p>
                                    These low fees make Binance a very attractive exchange for many
                                    seasoned crypto traders, as with such high trading volume,
                                    Binance are still profitable even with low fees.
                                </p><img class="article-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-fee-img.png" alt="Article Fee Image">
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="fee">
                            <div class="article-accordion-title">
                                Margin Borrow Interest Rates<span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                If you trade cryptocurrencies professionally you’ll be
                                eligible for income tax on your profits but if you only
                                do it as a casual player you can avoid tax. However,
                                whether you are trading cryptocurrencies professionally
                                or as an amateur is something you’ll have to iron out
                                with a glass of Sake and a specialist advisor. The
                                important thing is whether your profits are derived in
                                Hong Kong (even if the exchanges are overseas), so if
                                you’re buying, selling, exchanging bitcoin for gain and
                                based in Hong Kong you’ll need to declare them. Taxation
                                issues around crypto currencies appear straightforward
                                but expert advice is advisable as everything crypto is
                                changing all the time.
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="fee">
                            <div class="article-accordion-title">
                                Withdrawal Fees<span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                If you trade cryptocurrencies professionally you’ll be
                                eligible for income tax on your profits but if you only
                                do it as a casual player you can avoid tax. However,
                                whether you are trading cryptocurrencies professionally
                                or as an amateur is something you’ll have to iron out
                                with a glass of Sake and a specialist advisor. The
                                important thing is whether your profits are derived in
                                Hong Kong (even if the exchanges are overseas), so if
                                you’re buying, selling, exchanging bitcoin for gain and
                                based in Hong Kong you’ll need to declare them. Taxation
                                issues around crypto currencies appear straightforward
                                but expert advice is advisable as everything crypto is
                                changing all the time.
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="fee">
                            <div class="article-accordion-title">
                                Deposit & Withdrawal Options<span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                If you trade cryptocurrencies professionally you’ll be
                                eligible for income tax on your profits but if you only
                                do it as a casual player you can avoid tax. However,
                                whether you are trading cryptocurrencies professionally
                                or as an amateur is something you’ll have to iron out
                                with a glass of Sake and a specialist advisor. The
                                important thing is whether your profits are derived in
                                Hong Kong (even if the exchanges are overseas), so if
                                you’re buying, selling, exchanging bitcoin for gain and
                                based in Hong Kong you’ll need to declare them. Taxation
                                issues around crypto currencies appear straightforward
                                but expert advice is advisable as everything crypto is
                                changing all the time.
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="fee">
                            <div class="article-accordion-title">
                                How do you transfer from <?=  the_title() ?> to Binance?<span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                If you trade cryptocurrencies professionally you’ll be
                                eligible for income tax on your profits but if you only
                                do it as a casual player you can avoid tax. However,
                                whether you are trading cryptocurrencies professionally
                                or as an amateur is something you’ll have to iron out
                                with a glass of Sake and a specialist advisor. The
                                important thing is whether your profits are derived in
                                Hong Kong (even if the exchanges are overseas), so if
                                you’re buying, selling, exchanging bitcoin for gain and
                                based in Hong Kong you’ll need to declare them. Taxation
                                issues around crypto currencies appear straightforward
                                but expert advice is advisable as everything crypto is
                                changing all the time.
                            </div>
                        </div>
                        <div class="article-content-heading">Fees </div>
                        <div class="article-content-subheading">What's surprising?</div>
                        <p>
                            <?= the_title() ?>’s fee schedule is easy to find and clearly stated,
                            which is a plus. Fees on <?= the_title() ?> are calculated according to
                            the volume a user trades in a 30-day rolling period and the
                            currency pair being traded. Fees are charged when an order is
                            executed, and typically range from 0% to 0.26% of the total
                            value of the order.
                        </p>
                        <div class="article-content-subheading">What are their fees in general?</div>
                        <p>
                            When purchasing stablecoins (USDT, USDC, or DAI) with USD or
                            another stablecoin things get more pricey. The fee is 0.9%,
                            while purchasing a stablecoin with another cryptocurrency
                            will result in a 1.5% fee in addition to the normal <?= the_title() ?>
                            fee. There is also a payment card processing fee of 3.75% +
                            €0.25, and an online banking processing fee of 0.5%
                        </p>
                        <p>
                            Fees are calculated according to a maker-taker model, with market
                            ‘makers’ that offer liquidity paying lower fees, and market
                            ‘takers’ getting charged.
                        </p>
                        <div class="article-content-subheading sm">Maker-taker fees on <?= the_title() ?> are as follows: </div>
                        <div class="article-table">
                            <div class="article-table-head">
                                <div class="article-table-elem">30-Day Volume (USD)</div>
                                <div class="article-table-elem">Maker Fee</div>
                                <div class="article-table-elem">Taker Fee</div>
                            </div>
                            <div class="article-table-row">
                                <div class="article-table-elem">0 - 100,000 </div>
                                <div class="article-table-elem fee">0.0200%</div>
                                <div class="article-table-elem fee">0.0500%</div>
                            </div>
                            <div class="article-table-row">
                                <div class="article-table-elem">100,001 - 1,000,000</div>
                                <div class="article-table-elem fee">0.0150%</div>
                                <div class="article-table-elem fee">0.0400%</div>
                            </div>
                            <div class="article-table-row">
                                <div class="article-table-elem">5,000,001 - 10,000,000</div>
                                <div class="article-table-elem fee">0.0100%</div>
                                <div class="article-table-elem fee">0.0250%</div>
                            </div>
                            <div class="article-table-row">
                                <div class="article-table-elem">10,000,001 - 20,000,000</div>
                                <div class="article-table-elem fee">0.0075%</div>
                                <div class="article-table-elem fee">0.0200%</div>
                            </div>
                            <div class="article-table-row">
                                <div class="article-table-elem">20,000,001 - 50,000,000</div>
                                <div class="article-table-elem fee">0.0050%</div>
                                <div class="article-table-elem fee">0.0150%</div>
                            </div>
                            <div class="article-table-row">
                                <div class="article-table-elem">50,000,001 - 100,000,000</div>
                                <div class="article-table-elem fee">0.0025%</div>
                                <div class="article-table-elem fee">0.0125%</div>
                            </div>
                            <div class="article-table-row">
                                <div class="article-table-elem">100,000,001 +</div>
                                <div class="article-table-elem fee">0.0000%</div>
                                <div class="article-table-elem fee">0.0100%</div>
                            </div>
                        </div>
                        <div class="article-content-heading">FAQs</div>
                        <div class="article-accordion" data-accordion="faq">
                            <div class="article-accordion-title">
                                Is <?=  the_title() ?> Safe?<span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                Although there is no 100% guarantee of safety when using any
                                online exchange, <?=  the_title() ?> does pride itself in its extensive
                                security profile. Skeptics will be happy to know that the
                                exchange also insures online holdings.
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="faq">
                            <div class="article-accordion-title">
                                How to withdraw money from <?=  the_title() ?>?<span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                If you trade cryptocurrencies professionally you’ll be
                                eligible for income tax on your profits but if you only
                                do it as a casual player you can avoid tax. However,
                                whether you are trading cryptocurrencies professionally
                                or as an amateur is something you’ll have to iron out
                                with a glass of Sake and a specialist advisor. The
                                important thing is whether your profits are derived in
                                Hong Kong (even if the exchanges are overseas), so if
                                you’re buying, selling, exchanging bitcoin for gain and
                                based in Hong Kong you’ll need to declare them. Taxation
                                issues around crypto currencies appear straightforward
                                but expert advice is advisable as everything crypto is
                                changing all the time.
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="faq">
                            <div class="article-accordion-title">
                                How to send/receive Bitcoin on <?=  the_title() ?>?<span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                If you trade cryptocurrencies professionally you’ll be
                                eligible for income tax on your profits but if you only
                                do it as a casual player you can avoid tax. However,
                                whether you are trading cryptocurrencies professionally
                                or as an amateur is something you’ll have to iron out
                                with a glass of Sake and a specialist advisor. The
                                important thing is whether your profits are derived in
                                Hong Kong (even if the exchanges are overseas), so if
                                you’re buying, selling, exchanging bitcoin for gain and
                                based in Hong Kong you’ll need to declare them. Taxation
                                issues around crypto currencies appear straightforward
                                but expert advice is advisable as everything crypto is
                                changing all the time.
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="faq">
                            <div class="article-accordion-title">
                                Which coin will <?=  the_title() ?> add next?<span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                If you trade cryptocurrencies professionally you’ll be
                                eligible for income tax on your profits but if you only
                                do it as a casual player you can avoid tax. However,
                                whether you are trading cryptocurrencies professionally
                                or as an amateur is something you’ll have to iron out
                                with a glass of Sake and a specialist advisor. The
                                important thing is whether your profits are derived in
                                Hong Kong (even if the exchanges are overseas), so if
                                you’re buying, selling, exchanging bitcoin for gain and
                                based in Hong Kong you’ll need to declare them. Taxation
                                issues around crypto currencies appear straightforward
                                but expert advice is advisable as everything crypto is
                                changing all the time.
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="faq">
                            <div class="article-accordion-title">
                                How do you transfer from <?=  the_title() ?> to Binance?<span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                If you trade cryptocurrencies professionally you’ll be
                                eligible for income tax on your profits but if you only
                                do it as a casual player you can avoid tax. However,
                                whether you are trading cryptocurrencies professionally
                                or as an amateur is something you’ll have to iron out
                                with a glass of Sake and a specialist advisor. The
                                important thing is whether your profits are derived in
                                Hong Kong (even if the exchanges are overseas), so if
                                you’re buying, selling, exchanging bitcoin for gain and
                                based in Hong Kong you’ll need to declare them. Taxation
                                issues around crypto currencies appear straightforward
                                but expert advice is advisable as everything crypto is
                                changing all the time.
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="faq">
                            <div class="article-accordion-title">
                                How to avoid <?=  the_title() ?> fees?<span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                If you trade cryptocurrencies professionally you’ll be
                                eligible for income tax on your profits but if you only
                                do it as a casual player you can avoid tax. However,
                                whether you are trading cryptocurrencies professionally
                                or as an amateur is something you’ll have to iron out
                                with a glass of Sake and a specialist advisor. The
                                important thing is whether your profits are derived in
                                Hong Kong (even if the exchanges are overseas), so if
                                you’re buying, selling, exchanging bitcoin for gain and
                                based in Hong Kong you’ll need to declare them. Taxation
                                issues around crypto currencies appear straightforward
                                but expert advice is advisable as everything crypto is
                                changing all the time.
                            </div>
                        </div>
                        <div class="article-content-heading"><?=  the_title() ?> Payment Methods</div>
                        <p>
                            Depending on your location, <?=  the_title() ?> allows account funding via a
                            variety of different payment methods. <?=  the_title() ?> and <?=  the_title() ?> Pro
                            currently support 3 payment methods:
                        </p>
                        <ul class="article-list">
                            <li>debit cards</li>
                            <li>wire transfers</li>
                            <li>bank transfers</li>
                        </ul>
                        <p>
                            A major downside for <?=  the_title() ?> are the high fees. Debit card purchases
                            are charged a 3.99% fee, while bank transfers are charged a 1.49% fee.
                        </p>
                        <p>
                            Be aware that credit cards are no longer accepted as a form of account
                            funding except in Australia.
                        </p>
                        <p>
                            If you want to link a payment method, follow these steps: <br>Go to Payment Methods on web or select Settings > Payment Methods on mobile</p>
                        <div class="article-step">
                            <div class="article-step-icon"><span class="article-step-icon-text">01</span></div>
                            <div class="article-step-info">
                                <div class="article-step-info-text">Select Add a payment method </div>
                            </div>
                        </div>
                        <div class="article-step">
                            <div class="article-step-icon"><span class="article-step-icon-text">02</span></div>
                            <div class="article-step-info">
                                <div class="article-step-info-text">Select the type of account you want to link</div>
                            </div>
                        </div>
                        <div class="article-step">
                            <div class="article-step-icon"><span class="article-step-icon-text">03</span></div>
                            <div class="article-step-info">
                                <div class="article-step-info-text">
                                    Follow the instructions to complete verification depending on the
                                    type of account being linked
                                </div>
                            </div>
                        </div>
                        <p>
                            For more information on how to deposit or withdraw via the various methods,
                            follow the relevant links below:
                        </p>
                        <p><a class="article-link-sm" href="">US customers</a><br><a class="article-link-sm" href="">UK customers</a><br><a class="article-link-sm" href="">European customers</a></p>
                        <div class="article-content-heading"><?=  the_title() ?> Fees and Trading costs</div>
                        <p><?=  the_title() ?> Fees and Trading costs</p>
                        <ul class="article-list">
                            <li>
                                <?=  the_title() ?> charges a spread of about 0.5% for cryptocurrency sales and
                                purchases. These rates may be higher or lower depending on market fluctuations.
                            </li>
                            <li>
                                <?=  the_title() ?> also charges a fee, the greater of either a flat fee or a variable
                                one depending on the amount purchased and the payment type.
                            </li>
                        </ul>
                        <p>
                            For example, if you purchase $100 worth of Bitcoin in the US and pay with a US
                            bank account or your USD Wallet, the flat fee would be calculated as $2.99. The
                            fee structure is similar for the rest of the world.
                        </p>
                        <p>
                            The variable percentage fee would usually be 1.49% of the total transaction
                            (or $1.49). Since the flat fee is greater than the 1.49% variable fee, the
                            fee charged would be $2.99.
                        </p>
                        <p>
                            A bitcoin purchase with a debit card would have a fee of 3.99% since the
                            variable percentage fee is higher than the flat fee.
                        </p>
                        <p><?=  the_title() ?> gives these fee guidelines for total amount of trade:</p>
                        <div class="article-content-subheading">Withdrawal fees update</div>
                        <p>
                            <?=  the_title() ?> previously paid the network fees for crypto withdrawals from <?=  the_title() ?>
                            Pro. As of September 2020 however, <?=  the_title() ?> announced that the fees would be
                            passed on to the users instead. This is mainly due to the increased costs
                            associated with high network activity. <br><?=  the_title() ?> ensures that the fees are communicated before withdrawal, so there
                            are no additional hidden fees.
                        </p>
                        <div class="article-content-subheading"><?=  the_title() ?> Pro Fees</div>
                        <p>
                            <?=  the_title() ?> Pro’s pricing model is  more straightforward, as it's based on
                            monthly trading volume and liquidity of the asset at the time of purchase.
                            If the asset is immediately available for purchase you are charged a
                            “taker” fee.
                        </p>
                        <p>
                            If the order needs to wait for a buyer you are charged a “maker” fee. On
                            <?=  the_title() ?> Pro, any deposits and withdrawals must be made through a linked
                            bank account. No card purchases are allowed. Wire transfer fees still apply.
                        </p>
                        <p>
                            <?=  the_title() ?> Pro has relatively low fees ranging from 0% to 0.50% for taker trades,
                            although the interface is not as easy to use as the standard <?=  the_title() ?>. <br>Compared to <?=  the_title() ?>’s fees which can go as high as 4%, avid crypto investors
                            may prefer <?=  the_title() ?> Pro.<br>Deposits of available cryptocurrency into your <?=  the_title() ?> Pro wallet are
                            unlimited. There is also no restriction on deposits in USD via wire transfer. <br><?=  the_title() ?> Pro offers its users a highly liquid trading platform with users
                            able to withdraw $10,000 per day from personal accounts, and $50,000 per day
                            from an institutional account. They allow higher withdrawal limits upon
                            request and approval.
                        </p>
                        <div class="section-header m"><span class="word-accent orange"><?= the_title() ?>’s Services<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></div>
                        <p><b class="orange"><?= the_title() ?> </b>offers an extensive array of features that will appeal to experienced
                            investors, including a wide array of trade options,  advanced charting,
                            API keys,  an account management service, an over-the-counter investment
                            service, and more.
                        </p>
                        <div class="article-content-subheading">Diverse trade options</div>
                        <p>
                            Investors familiar with market mechanics who want to step up their crypto
                            game will find <?= the_title() ?> already offers them the tools to maximise profits.
                            <?= the_title() ?> offers margin trading,  allowing users to use up to 5x leverage to
                            go long or short on a currency pair. Another tempting feature are the low
                            rollover fees (never more than 0.02% per four hours) and high margin limits.
                        </p>
                        <p>
                            Users can also access <?= the_title() ?>’s futures trading service. Currently, the
                            exchange offers futures contracts for Ethereum, Bitcoin, Bitcoin Cash,
                            Litecoin, and Ripple. Compared to exchanges such as Binance, however, <?= the_title() ?>’s
                            number of futures products and maximum leverage (50x) is below average.
                        </p>
                        <div class="article-content-subheading">Account management service</div>
                        <p><?= the_title() ?> offers a bespoke <a class="article-link-sm orange" href="">account management service </a>for high level traders. This includes more channels of
                            communication and a personal account manager.
                        </p>
                        <div class="article-content-subheading"><?= the_title() ?> OTC desk </div>
                        <p>
                            In addition to the account management service, <?= the_title() ?> offers high-volume
                            traders making trades in excess of $100,000 access to over-the-counter
                            (OTC) trading that takes place off the main exchange. This includes
                            market insight, 1-on-1 white glove service, full asset support, and
                            global coverage.
                        </p>
                        <div class="article-content-subheading">Customisable user interface</div>
                        <p>
                            <?= the_title() ?> offers trading interfaces for beginner, intermediate, and
                            experienced traders and a <a class="article-link-sm orange" href="">customisable platform UI. </a>While the options may be intimidating for beginners, experienced
                            traders will be able to dive right in.
                        </p>
                        <div class="article-content-subheading"><?= the_title() ?> APIs</div>
                        <p>
                            For users looking to integrate automation into their trading, <?= the_title() ?>
                            offers a fully documented <a class="article-link-sm orange" href="">REST API</a>, in addition to the <a class="article-link-sm orange" href="">Websockets API </a>and <a class="article-link-sm orange" href=""><?= the_title() ?> Futures API</a>. The <?= the_title() ?> API unfortunately does not offer a test environment,
                            but algorithmic traders can use the APIs to their advantage.
                        </p>
                        <div class="article-content-subheading">Dark Pool </div>
                        <p>
                            No, it’s not the next Marvel movie. The dark pool allows users
                            to trade off the books, so traders can anonymously place large buy
                            or sell orders without revealing their interest or causing the
                            market to move unfavorably.
                        </p>
                        <div class="article-help"><span class="article-help-title">Helpful?</span>
                            <button class="article-help-btn violet">Yes</button>
                            <button class="article-help-btn orange">No</button>
                        </div>
                        <div class="article-tag"><a href="">#<?=  the_title() ?></a><a href="">#<?=  the_title() ?> exchange </a><a href="">#what is <?=  the_title() ?>? </a><a href="">#<?=  the_title() ?> wallet </a><a href="">#<?=  the_title() ?> review </a></div>
                    </div>
                    <div class="article-sidebar">
                        <div class="article-sidebar-title">Table of contents</div><a class="article-sidebar-link active" href="">What is <?= the_title() ?>?</a><a class="article-sidebar-link" href="">Pros/Cons</a><a class="article-sidebar-link" href="">Fees and Trading</a><a class="article-sidebar-link" href="">Exchange Info</a><a class="article-sidebar-link" href="">Security</a><a class="article-sidebar-link" href="">Tips for users</a><a class="article-sidebar-link" href="">Regulation</a><a class="article-sidebar-link" href="">Privacy</a><a class="article-sidebar-link" href="">User Experience</a><a class="article-sidebar-link" href="">Interface </a><a class="article-sidebar-link" href="">How does it compare</a><a class="article-sidebar-link" href="">Customer Support</a><a class="article-sidebar-link" href="">Open Account and Trade</a><a class="article-sidebar-link" href="">Fees</a><a class="article-sidebar-link" href="">Services</a>
                    </div>
                </section>
                <section class="faq">
                    <div class="faq-head">
                        <div class="section-title-simple">FAQ</div>
                        <h1 class="section-header m"><span class="word-accent violet">New to crypto? Here’s our guide!<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></h1>
                    </div>
                    <div class="faq-wrap"><a class="faq-elem" href="">
                            <div class="faq-elem-content"><img class="faq-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1.png" alt="FAQ Image #1"><span class="faq-elem-number">01</span><span class="faq-elem-title">
                     Why Bitcoin? </span><span class="faq-elem-text">
                    It seems like the buzz around Bitcoin
                    just keeps growing. Bitcoin is a constantly
                    evolving technology with a passionate
                    community. What is it about the digital
                    asset that makes it such a controversial
                    topic and attractive investment? </span></div></a><a class="faq-elem" href="">
                            <div class="faq-elem-content"><img class="faq-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2.png" alt="FAQ Image #2"><span class="faq-elem-number">02</span><span class="faq-elem-title">
                     How to Get Started with Bitcoin</span><span class="faq-elem-text">
                    It can be difficult to get past the
                    technical jargon surrounding Bitcoin in
                    order to figure out how you can buy and
                    store the digital asset. Beginners can
                    purchase BTC on many exchanges with fiat
                    currency. Once you’ve purchased crypto,
                    invest in a safe  offline storage solution. </span></div></a><a class="faq-elem" href="">
                            <div class="faq-elem-content"><img class="faq-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3.png" alt="FAQ Image #3"><span class="faq-elem-number">03</span><span class="faq-elem-title">
                     Blockchains 101</span><span class="faq-elem-text">
                    Blockchains are a type of database where
                    data is stored in blocks that are chained
                    together. As new data comes in, it is
                    entered into a block, which is then chained
                    to the previous block. The Bitcoin blockchain
                    serves as a ledger that records every Bitcoin
                    transaction in history. </span></div></a><a class="faq-elem" href="">
                            <div class="faq-elem-content"><img class="faq-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4.png" alt="FAQ Image #4"><span class="faq-elem-number">04</span><span class="faq-elem-title">
                     Bitcoin in the Real World</span><span class="faq-elem-text">
                    Ok - you’ve found an exchange, bought your
                    Bitcoin, and stored it safely. What’s next?
                    By now you can buy just about anything with
                    Bitcoin if you try hard enough, from Amazon
                    gift cards to an old master painting. You can
                    also convert your BTC to fiat with ATMs, an
                    exchange, and more.</span></div></a></div>
                </section>
            </div>
        </main>
        <footer class="footer">
            <section class="footer-banner">
                <div class="footer-banner-bg"></div>
                <div class="footer-banner-left">
                    <div class="section-title-simple">Get a step-by-step</div>
                    <h1 class="section-header m"><span class="word-accent orange">
                 Read our comprehensive guide to getting into crypto<span class="word-accent-square left"></span><span class="word-accent-square right"> </span></span></h1>
                    <div class="section-desc">
                        You will be emailed instructions for downloading
                        the ebook right away
                    </div>
                </div>
                <div class="footer-banner-right">
                    <form class="footer-banner-form" action="">
                        <div class="form-group">
                            <label class="form-title">Email</label>
                            <input class="form-input" type="email" name="bannerEmail" placeholder="Your Email" value="youremail@mail.com">
                            <button class="btn footer-banner-form-btn"><span class="btn-arrow"></span><span class="btn-text">Send me E-book now </span></button>
                        </div>
                    </form>
                </div>
            </section>
            <section class="footer-note">
                This is not financial advice. Coincub is an independent publisher and
                comparison service. Its articles, interactive tools and other content
                are provided to you for free, as self-help tools and for informational
                purposes only. This space changes rapidly and evolving, so please make
                sure to do your own research. Although we do our best to provide you
                the best information, we cannot guarantee the accuracy or applicability
                of any information on this site or in regard to your individual circumstances.
            </section>
            <section class="footer-nav container">
                <div class="footer-nav-copyright">2021 | All Rights Reserved</div>
                <div class="footer-nav-wrap">
                    <div class="footer-nav-link modal-o-btn" data-modal-btn="modal-terms">Terms & Conditions</div>
                    <div class="footer-nav-link modal-o-btn" data-modal-btn="modal-contact">Contact Us</div>
                    <div class="footer-nav-link modal-o-btn" data-modal-btn="modal-review">Methodology</div>
                </div>
                <div class="footer-nav-social"><a class="footer-nav-social-link" href="">
                        <svg class="footer-nav-social-link-icon">
                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#twitter-icon"></use>
                        </svg></a><a class="footer-nav-social-link" href="">
                        <svg class="footer-nav-social-link-icon">
                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#facebook-icon"></use>
                        </svg></a><a class="footer-nav-social-link" href="">
                        <svg class="footer-nav-social-link-icon">
                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#telegram-icon"></use>
                        </svg></a><a class="footer-nav-social-link" href="">
                        <svg class="footer-nav-social-link-icon">
                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#reddit-icon"></use>
                        </svg></a><a class="footer-nav-social-link" href="">
                        <svg class="footer-nav-social-link-icon">
                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#medium-icon"></use>
                        </svg></a></div>
            </section>
        </footer>
    </div>

<?php get_footer('other'); ?>