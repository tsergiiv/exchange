<?php
/*
Template Name: Country Post Template
Template Post Type: country
*/
?>

<?php get_header(); ?>

<div class="wrapper">
    <header class="header container"><a class="header-logo" href=""><img class="header-logo-img"
                                                                         src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.svg"
                                                                         alt="СoinResident Logo"></a>
        <nav class="header-nav"><a class="header-nav-link" href="">Countries</a><a class="header-nav-link" href="">Exchanges</a>
        </nav>
    </header>
    <main class="content">
        <div class="article country">
            <section class="article-head container">
                <div class="breadcrumbs"><a class="breadcrumbs-link" href="">Main Page</a><a class="breadcrumbs-link"
                                                                                             href="">Exchange
                        Reviews</a><a class="breadcrumbs-link" href="">Coinbase Review 2021 - Pros, Cons and More</a></div>
                <div class="article-head-wrap">
                    <div class="article-head-left">
                        <h1 class="section-header big"><span class="word-accent violet">Crypto exchanges<span
                                        class="word-accent-square left"></span><span
                                        class="word-accent-square right"></span></span>& Regulation in <span
                                    class="word-accent orange"><?= the_title() ?><span class="word-accent-square left"></span><span
                                        class="word-accent-square right"></span></span></h1>
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
                            <div class="article-review-text">Top exchanges in <?= the_title() ?> by CoinCub criteria</div>
                            <div class="article-review-author">
                                <div class="article-review-author-photo"><img class="article-review-author-photo-img"
                                                                              src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-author.png"
                                                                              alt="Article review author"></div>
                                <div class="article-review-author-info">
                                    <div class="article-review-author-date">May, 5, 2021</div>
                                    <div class="article-review-author-name">Daniel Olagbami</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-head-right"><img class="article-head-img"
                                                         src="<?php bloginfo('template_url'); ?>/assets/img/content/flags/flag-<?= basename(get_permalink()) ?>.png"
                                                         alt="<?= the_title() ?> head image"></div>
                </div>
            </section>
            <div class="article-block container">

                <!-- Crypto Country Rating block -->
                <?php
                    $rating =  get_field_object('country_rating');
                    $rating1 =  get_field_object('country_rating_1');
                    $rating2 =  get_field_object('country_rating_2');
                    $rating3 =  get_field_object('country_rating_3');
                    $rating4 =  get_field_object('country_rating_4');
                    $rating5 =  get_field_object('country_rating_5');
                    $rating6 =  get_field_object('country_rating_6');
                    $rating7 =  get_field_object('country_rating_7');
                    $rating8 =  get_field_object('country_rating_8');
                ?>
                <section class="article-rating">
                    <div class="article-rating-title"><?= $rating['label'] ?>: <?= $rating['value'] ?>/10</div>
                    <div class="article-rating-wrap">
                        <div class="article-rating-elem green">
                            <div class="article-rating-elem-content">
                                <div class="article-rating-point">
                                    <div class="article-rating-point-val"><?= $rating1['value'] ?>/10</div>
                                </div>
                                <div class="article-rating-name"><?= $rating1['label'] ?></div>
                                <div class="article-rating-desc"><?= the_field('why_1') ?></div>
                            </div>
                        </div>
                        <div class="article-rating-elem pink">
                            <div class="article-rating-elem-content">
                                <div class="article-rating-point">
                                    <div class="article-rating-point-val"><?= $rating2['value'] ?>/10</div>
                                </div>
                                <div class="article-rating-name"><?= $rating2['label'] ?></div>
                                <div class="article-rating-desc"><?= the_field('why_2') ?></div>
                            </div>
                        </div>
                        <div class="article-rating-elem pink">
                            <div class="article-rating-elem-content">
                                <div class="article-rating-point">
                                    <div class="article-rating-point-val"><?= $rating3['value'] ?>/10</div>
                                </div>
                                <div class="article-rating-name"><?= $rating3['label'] ?></div>
                                <div class="article-rating-desc"><?= the_field('why_3') ?></div>
                            </div>
                        </div>
                        <div class="article-rating-elem green">
                            <div class="article-rating-elem-content">
                                <div class="article-rating-point">
                                    <div class="article-rating-point-val"><?= $rating4['value'] ?>/10</div>
                                </div>
                                <div class="article-rating-name"><?= $rating4['label'] ?></div>
                                <div class="article-rating-desc"><?= the_field('why_4') ?></div>
                            </div>
                        </div>
                        <div class="article-rating-elem orange">
                            <div class="article-rating-elem-content">
                                <div class="article-rating-point">
                                    <div class="article-rating-point-val"><?= $rating5['value'] ?>/10</div>
                                </div>
                                <div class="article-rating-name"><?= $rating5['label'] ?></div>
                                <div class="article-rating-desc"><?= the_field('why_5') ?></div>
                            </div>
                        </div>
                        <div class="article-rating-elem green">
                            <div class="article-rating-elem-content">
                                <div class="article-rating-point">
                                    <div class="article-rating-point-val"><?= $rating6['value'] ?>/10</div>
                                </div>
                                <div class="article-rating-name"><?= $rating6['label'] ?></div>
                                <div class="article-rating-desc"><?= the_field('why_6') ?></div>
                            </div>
                        </div>
                        <div class="article-rating-elem orange">
                            <div class="article-rating-elem-content">
                                <div class="article-rating-point">
                                    <div class="article-rating-point-val"><?= $rating7['value'] ?>/10</div>
                                </div>
                                <div class="article-rating-name"><?= $rating7['label'] ?></div>
                                <div class="article-rating-desc"><?= the_field('why_7') ?></div>
                            </div>
                        </div>
                        <div class="article-rating-elem orange">
                            <div class="article-rating-elem-content">
                                <div class="article-rating-point">
                                    <div class="article-rating-point-val"><?= $rating8['value'] ?>/10</div>
                                </div>
                                <div class="article-rating-name"><?= $rating8['label'] ?></div>
                                <div class="article-rating-desc"><?= the_field('why_8') ?></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="article-exchange">
                    <h1 class="section-header m"><span class="word-accent violet">Exchanges available in <?= the_title() ?><span
                                    class="word-accent-square left"></span><span class="word-accent-square right"></span></span>
                    </h1>
                    <div class="table top-table">
                        <div class="table-wrap">
                            <div class="table-head">
                                <div class="table-elem">Name</div>
                                <div class="table-elem">Rating</div>
                                <div class="table-elem">Founded Date</div>
                                <div class="table-elem">Deposit Method</div>
                                <div class="table-elem">Promotion</div>
                                <div class="table-elem">CoinCub Review</div>
                            </div>
                            <div class="table-row">
                                <div class="table-elem table-name"><img class="table-name-icon"
                                                                        src="<?php bloginfo('template_url'); ?>/assets/img/content/table/coinbase-logo.svg"
                                                                        alt="Coinbase Logo"><span
                                            class="table-name-text">Coinbase</span></div>
                                <div class="table-elem table-rating"><span class="table-rating-val">5</span></div>
                                <div class="table-elem table-date"><span class="table-date-val">May 2014</span></div>
                                <div class="table-elem table-deposit"><img class="table-deposit-icon"
                                                                           src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/cards-icon.png"
                                                                           alt="Cards Icon"><img
                                            class="table-deposit-icon" src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/globe-icon.png"
                                            alt="Globe Icon"><img class="table-deposit-icon"
                                                                  src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/bank-icon.png"
                                                                  alt="Bank Icon"></div>
                                <div class="table-elem table-promotion"><span
                                            class="table-promotion-val purple">Yes</span></div>
                                <div class="table-elem table-link"><a class="table-link-btn" href="">
                                        <svg class="table-link-btn-icon">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"></use>
                                        </svg>
                                    </a></div>
                            </div>
                            <div class="table-row">
                                <div class="table-elem table-name"><img class="table-name-icon"
                                                                        src="<?php bloginfo('template_url'); ?>/assets/img/content/table/kraken-logo.svg"
                                                                        alt="Coinbase Logo"><span
                                            class="table-name-text">Kraken</span></div>
                                <div class="table-elem table-rating"><span class="table-rating-val">5</span></div>
                                <div class="table-elem table-date"><span class="table-date-val">July 2021</span></div>
                                <div class="table-elem table-deposit"><img class="table-deposit-icon"
                                                                           src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/cards-icon.png"
                                                                           alt="Cards Icon"><img
                                            class="table-deposit-icon" src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/globe-icon.png"
                                            alt="Globe Icon"><img class="table-deposit-icon"
                                                                  src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/bank-icon.png"
                                                                  alt="Bank Icon"></div>
                                <div class="table-elem table-promotion"><span
                                            class="table-promotion-val orange">No</span></div>
                                <div class="table-elem table-link"><a class="table-link-btn" href="">
                                        <svg class="table-link-btn-icon">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"></use>
                                        </svg>
                                    </a></div>
                            </div>
                            <div class="table-row">
                                <div class="table-elem table-name"><img class="table-name-icon"
                                                                        src="<?php bloginfo('template_url'); ?>/assets/img/content/table/coinbase-logo.svg"
                                                                        alt="Coinbase Logo"><span
                                            class="table-name-text">Coinbase</span></div>
                                <div class="table-elem table-rating"><span class="table-rating-val">5</span></div>
                                <div class="table-elem table-date"><span class="table-date-val">May 2014</span></div>
                                <div class="table-elem table-deposit"><img class="table-deposit-icon"
                                                                           src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/cards-icon.png"
                                                                           alt="Cards Icon"><img
                                            class="table-deposit-icon" src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/globe-icon.png"
                                            alt="Globe Icon"><img class="table-deposit-icon"
                                                                  src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/bank-icon.png"
                                                                  alt="Bank Icon"></div>
                                <div class="table-elem table-promotion"><span
                                            class="table-promotion-val purple">Yes</span></div>
                                <div class="table-elem table-link"><a class="table-link-btn" href="">
                                        <svg class="table-link-btn-icon">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"></use>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="article-wrap">
                    <div class="article-content">
                        <h1 class="section-header m"><span class="word-accent orange">Bitcoin and cryptocurrency trading <span
                                        class="word-accent-square left"></span><span
                                        class="word-accent-square right"> </span></span>in <?= the_title() ?></h1>
                        <?= the_field('trading_text') ?>

                        <!-- Country facts block -->
                        <?php
                            $fact1 =  get_field_object('fact_1');
                            $fact2 =  get_field_object('fact_2');
                            $fact3 =  get_field_object('fact_3');
                            $fact4 =  get_field_object('fact_4');
                        ?>
                        <div class="article-info orange">
                            <div class="article-info-title">Country facts</div>
                            <div class="article-info-elem">
                                <?= $fact1['label'] ?> <span class="article-info-elem-val"><?= $fact1['value'] ?></span></div>
                            <div class="article-info-elem">
                                <?= $fact2['label'] ?> <span class="article-info-elem-val"><?= $fact2['value'] ?></span></div>
                            <div class="article-info-elem">
                                <?= $fact3['label'] ?> <span class="article-info-elem-val violet"><?= $fact3['value'] ?></span></div>
                            <div class="article-info-elem">
                                <?= $fact4['label'] ?> <span class="article-info-elem-val"><?= $fact4['value'] ?></span></div>
                        </div>

                        <!-- Country facts block -->
                        <?php
                            $service1 =  get_field_object('service_1');
                            $service2 =  get_field_object('service_2');
                            $service3 =  get_field_object('service_3');
                            $service4 =  get_field_object('service_4');
                        ?>
                        <div class="article-info pink">
                            <div class="article-info-title">Services</div>
                            <?php if ($service1['value']): ?>
                            <div class="article-info-elem">
                                <?= $service1['label'] ?> <span class="article-info-elem-val"><?= $service1['value'] ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if ($service2['value']): ?>
                            <div class="article-info-elem">
                                <?= $service2['label'] ?> <span class="article-info-elem-val"><?= $service2['value'] ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if ($service3['value']): ?>
                            <div class="article-info-elem">
                                <?= $service3['label'] ?> <span class="article-info-elem-val violet"><?= $service3['value'] ?></span>
                            </div>
                            <?php endif; ?>
                            <?php if ($service4['value']): ?>
                            <div class="article-info-elem">
                                <?= $service4['label'] ?> <span class="article-info-elem-val"><?= $service4['value'] ?></span>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Law and crypto trading block -->
                        <?php
                            $law1 =  get_field_object('lax_text_1');
                            $law2 =  get_field_object('lax_text_2');
                        ?>
                        <div class="article-content-heading">Law and crypto trading in <?= the_title() ?></div>
                        <a class="article-link" href="">
                            <span class="article-link-icon">
                                <svg class="article-link-icon-content">
                                  <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"> </use>
                                </svg>
                            </span><?= $law1['label'] ?></a>
                        <?= $law1['value'] ?>
                        <?php if ($law2['value']): ?>
                        <a class="article-link" href="">
                            <span class="article-link-icon">
                                <svg class="article-link-icon-content">
                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"></use>
                                </svg>
                            </span><?= $law2['label'] ?>
                        </a>
                        <?= $law2['value'] ?>
                        <?php endif; ?>


                        <!-- Taxing cryptocurrencies block -->
                        <?php
                            $taxing1 =  get_field_object('taxing_text_1');
                            $taxing2 =  get_field_object('taxing_text_2');
                            $taxing3 =  get_field_object('taxing_text_3');
                            $taxing4 =  get_field_object('taxing_text_4');
                        ?>
                        <div class="article-content-heading">Taxing cryptocurrencies in <?= the_title() ?></div>
                        <div class="article-accordion" data-accordion="tax">
                            <div class="article-accordion-title">
                                <?= $taxing1['label'] ?><span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                <?= $taxing1['value'] ?>
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="tax">
                            <div class="article-accordion-title">
                                <?= $taxing2['label'] ?><span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                <?= $taxing2['value'] ?>
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="tax">
                            <div class="article-accordion-title">
                                <?= $taxing3['label'] ?><span class="article-accordion-title-btn"><span></span></span>
                            </div>
                            <div class="article-accordion-dropdown">
                                <?= $taxing3['value'] ?>
                            </div>
                        </div>
                        <div class="article-accordion" data-accordion="tax">
                            <div class="article-accordion-title">
                                <?= $taxing4['label'] ?><span class="article-accordion-title-btn"><span></span></span></div>
                            <div class="article-accordion-dropdown">
                                <?= $taxing4['value'] ?>
                            </div>
                        </div>

                        <!-- Crypto financial services block -->
                        <?php
                            $services1 =  get_field_object('services_text_1');
                            $services2 =  get_field_object('services_text_2');
                            $services3 =  get_field_object('services_text_3');
                        ?>
                        <div class="article-content-heading">Crypto financial services in <?= the_title() ?></div>
                        <div class="article-content-subheading"><?= $services1['label'] ?></div>
                        <?= $services1['value'] ?>
                        <div class="article-content-subheading"><?= $services2['label'] ?></div>
                        <?= $services2['value'] ?>
                        <div class="article-content-subheading"><?= $services3['label'] ?></div>
                        <?= $services3['value'] ?>

                        <!-- Using crypto block -->
                        <?php
                            $using1 =  get_field_object('using_text_1');
                            $using2 =  get_field_object('using_text_2');
                        ?>
                        <div class="article-content-heading">Using crypto in <?= the_title() ?></div>
                        <?php if ($using1['value']): ?>
                            <div class="article-step green">
                                <div class="article-step-icon"><img class="article-step-icon-content"
                                                                    src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-1.png"
                                                                    alt="Article step image 1"></div>
                                <div class="article-step-info">
                                    <div class="article-step-info-title"><?= $using1['label'] ?></div>
                                    <div class="article-step-info-text">
                                        <?= $using1['value'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($using2['value']): ?>
                            <div class="article-step orange">
                                <div class="article-step-icon"><img class="article-step-icon-content"
                                                                    src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-2.png"
                                                                    alt="Article step image 1"></div>
                                <div class="article-step-info">
                                    <div class="article-step-info-title"><?= $using2['label'] ?></div>
                                    <div class="article-step-info-text">
                                        <?= $using2['value'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Crypto regulation block -->
                        <?php
                            $regulation1 =  get_field_object('regulation_text_1');
                            $regulation2 =  get_field_object('regulation_text_2');
                        ?>
                        <div class="article-content-heading">Crypto regulation in <?= the_title() ?></div>
                        <?php if ($regulation1['value']): ?>
                            <div class="article-content-subheading"><?= $regulation1['label'] ?></div>
                            <?= $regulation1['value'] ?>
                        <?php endif; ?>
                        <?php if ($regulation1['value']): ?>
                            <div class="article-content-subheading"><?= $regulation2['label'] ?></div>
                            <?= $regulation2['value'] ?>
                        <?php endif; ?>
                        <div class="article-help"><span class="article-help-title">Helpful?</span>
                            <button class="article-help-btn violet">Yes</button>
                            <button class="article-help-btn orange">No</button>
                        </div>
                        <div class="article-tag"><a href="">#coinbase</a><a href="">#coinbase exchange </a><a href="">#what
                                is coinbase? </a><a href="">#coinbase wallet </a><a href="">#coinbase review </a></div>
                    </div>
                    <div class="article-sidebar">
                        <div class="article-sidebar-title">Table of contents</div>
                        <a class="article-sidebar-link active" href="">Law and crypto trading</a><a
                                class="article-sidebar-link" href="">Taxing cryptocurrencies </a><a
                                class="article-sidebar-link" href="">Crypto financial services</a><a
                                class="article-sidebar-link" href="">Using crypto</a><a class="article-sidebar-link"
                                                                                        href="">Crypto regulation</a><a
                                class="article-sidebar-link" href="">Sources</a>
                    </div>
                </section>
            </div>
            <section class="faq">
                <div class="faq-head">
                    <div class="section-title-simple">FAQ</div>
                    <h1 class="section-header m"><span class="word-accent violet">New to crypto? Here’s our guide!<span
                                    class="word-accent-square left"></span><span class="word-accent-square right"></span></span>
                    </h1>
                </div>
                <div class="faq-wrap"><a class="faq-elem" href="">
                        <div class="faq-elem-content"><img class="faq-elem-img"
                                                           src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1.png" alt="FAQ Image #1"><span
                                    class="faq-elem-number">01</span><span class="faq-elem-title">
                     Why Bitcoin? </span><span class="faq-elem-text">
                    It seems like the buzz around Bitcoin
                    just keeps growing. Bitcoin is a constantly
                    evolving technology with a passionate
                    community. What is it about the digital
                    asset that makes it such a controversial
                    topic and attractive investment? </span></div>
                    </a><a class="faq-elem" href="">
                        <div class="faq-elem-content"><img class="faq-elem-img"
                                                           src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2.png" alt="FAQ Image #2"><span
                                    class="faq-elem-number">02</span><span class="faq-elem-title">
                     How to Get Started with Bitcoin</span><span class="faq-elem-text">
                    It can be difficult to get past the
                    technical jargon surrounding Bitcoin in
                    order to figure out how you can buy and
                    store the digital asset. Beginners can
                    purchase BTC on many exchanges with fiat
                    currency. Once you’ve purchased crypto,
                    invest in a safe  offline storage solution. </span></div>
                    </a><a class="faq-elem" href="">
                        <div class="faq-elem-content"><img class="faq-elem-img"
                                                           src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3.png" alt="FAQ Image #3"><span
                                    class="faq-elem-number">03</span><span class="faq-elem-title">
                     Blockchains 101</span><span class="faq-elem-text">
                    Blockchains are a type of database where
                    data is stored in blocks that are chained
                    together. As new data comes in, it is
                    entered into a block, which is then chained
                    to the previous block. The Bitcoin blockchain
                    serves as a ledger that records every Bitcoin
                    transaction in history. </span></div>
                    </a><a class="faq-elem" href="">
                        <div class="faq-elem-content"><img class="faq-elem-img"
                                                           src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4.png" alt="FAQ Image #4"><span
                                    class="faq-elem-number">04</span><span class="faq-elem-title">
                     Bitcoin in the Real World</span><span class="faq-elem-text">
                    Ok - you’ve found an exchange, bought your
                    Bitcoin, and stored it safely. What’s next?
                    By now you can buy just about anything with
                    Bitcoin if you try hard enough, from Amazon
                    gift cards to an old master painting. You can
                    also convert your BTC to fiat with ATMs, an
                    exchange, and more.</span></div>
                    </a></div>
            </section>
        </div>
    </main>
    <footer class="footer">
        <section class="footer-banner">
            <div class="footer-banner-bg"></div>
            <div class="footer-banner-left">
                <div class="section-title-simple">Get a step-by-step</div>
                <h1 class="section-header m"><span class="word-accent orange">
                 Read our comprehensive guide to getting into crypto<span class="word-accent-square left"></span><span
                                class="word-accent-square right"> </span></span></h1>
                <div class="section-desc">
                    You will be emailed instructions for downloading
                    the ebook right away
                </div>
            </div>
            <div class="footer-banner-right">
                <form class="footer-banner-form" action="">
                    <div class="form-group">
                        <label class="form-title">Email</label>
                        <input class="form-input" type="email" name="bannerEmail" placeholder="Your Email"
                               value="youremail@mail.com">
                        <button class="btn footer-banner-form-btn"><span class="btn-arrow"></span><span
                                    class="btn-text">Send me E-book now </span></button>
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
                    </svg>
                </a><a class="footer-nav-social-link" href="">
                    <svg class="footer-nav-social-link-icon">
                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#facebook-icon"></use>
                    </svg>
                </a><a class="footer-nav-social-link" href="">
                    <svg class="footer-nav-social-link-icon">
                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#telegram-icon"></use>
                    </svg>
                </a><a class="footer-nav-social-link" href="">
                    <svg class="footer-nav-social-link-icon">
                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#reddit-icon"></use>
                    </svg>
                </a><a class="footer-nav-social-link" href="">
                    <svg class="footer-nav-social-link-icon">
                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#medium-icon"></use>
                    </svg>
                </a></div>
        </section>
    </footer>
</div>

<?php get_footer('other'); ?>