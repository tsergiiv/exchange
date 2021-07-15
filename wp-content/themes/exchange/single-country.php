<?php
/*
Template Name: Country Post Template
Template Post Type: country
*/
?>

<?php get_header(); ?>

    <main class="content">
        <div class="article country middle">
            <section class="article-head container">
                <div class="breadcrumbs">
                    <a class="breadcrumbs-link" href="<?= home_url() ?>">Main Page</a>
                    <a class="breadcrumbs-link" href="<?= home_url() ?>/country">Country Reviews</a>
                    <a class="breadcrumbs-link" href="">Crypto exchanges & Regulation in <?= the_title() ?></a>
                </div>
                <div class="article-head-wrap">
                    <div class="article-head-left">
                        <h1 class="section-header big"><span class="word-accent violet">Crypto exchanges<span
                                        class="word-accent-square left"></span><span
                                        class="word-accent-square right"></span></span>& Regulation in <span
                                    class="word-accent orange"><?= the_title() ?><span class="word-accent-square left"></span><span
                                        class="word-accent-square right"></span></span></h1>
                        <div class="section-desc">
                            Many or all of the products featured here
                            are from our partners who compensate us.
                            This may influence the products we write about,
                            however, this does not influence our evaluations.
                            Our opinions are our own. Here is a list of our partners
                            and here's how we make money.
                        </div>
                        <div class="article-review">
                            <div class="article-review-date">01.05.2021 - <?= country_post_reading() ?></div>
                            <div class="article-review-text">Top exchanges in <?= the_title() ?> by CoinCub criteria</div>
                            <div class="article-review-author">
                                <div class="article-review-author-photo"><img class="article-review-author-photo-img"
                                                                              src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-author.png"
                                                                              alt="Article review author"></div>
                                <div class="article-review-author-info">
                                    <div class="article-review-author-date"><?= the_field('publish_date') ?></div>
                                    <div class="article-review-author-name"><?= the_field('author') ?></div>
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
                ?>
                <section class="article-rating" data-max="10">
                    <div class="article-rating-title"><?= $rating['label'] ?>: <?= $rating['value'] ?>/10</div>
                    <div class="article-rating-wrap">
                        <?php
                            for ($i = 1; $i <= 8; $i++):
                                $rating = get_field_object('country_rating_' . $i);
                        ?>
                            <div class="article-rating-elem">
                                <div class="article-rating-elem-content">
                                    <div class="article-rating-point">
                                        <div class="article-rating-point-num">
                                            <span class="article-rating-point-val"><?= $rating['value'] ?></span>/10
                                        </div>
                                    </div>
                                    <div class="article-rating-name"><?= $rating['label'] ?></div>
                                    <div class="article-rating-desc"><?= the_field('why_' . $i) ?></div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </section>
                <div id="CountryPage">
                    <exchanges_country country="<?= $customSelectCountry ?>"></exchanges_country>
                </div>
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
                        <div class="article-content-heading" id="law">Law and crypto trading in <?= the_title() ?></div>
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
                        ?>
                        <div class="article-content-heading" id="tax">Taxing cryptocurrencies in <?= the_title() ?></div>

												<div class=".article-accordion-wrap">
													<?php
															for ($i = 1; $i <= 4; $i++):
																	$taxing = get_field_object('taxing_text_' . $i);
													?>
															<div class="article-accordion <?= $i == 1 ? 'active' : '' ?>">
																	<div class="article-accordion-title">
																			<?= $taxing['label'] ?>
																			<span class="article-accordion-title-btn">
																					<span></span>
																			</span>
																	</div>
																	<div class="article-accordion-dropdown">
																			<?= $taxing['value'] ?>
																	</div>
															</div>
													<?php endfor; ?>
												</div>

                        <!-- Crypto financial services block -->
                        <?php
                            $services1 =  get_field_object('services_text_1');
                            $services2 =  get_field_object('services_text_2');
                            $services3 =  get_field_object('services_text_3');
                        ?>
                        <div class="article-content-heading" id="services">Crypto financial services in <?= the_title() ?></div>
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
                        <div class="article-content-heading" id="use">Using crypto in <?= the_title() ?></div>
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
                        <div class="article-content-heading" id="regulation">Crypto regulation in <?= the_title() ?></div>
                        <?php if ($regulation1['value']): ?>
                            <div class="article-content-subheading"><?= $regulation1['label'] ?></div>
                            <?= $regulation1['value'] ?>
                        <?php endif; ?>
                        <?php if ($regulation1['value']): ?>
                            <div class="article-content-subheading" id="sources"><?= $regulation2['label'] ?></div>
                            <?= $regulation2['value'] ?>
                        <?php endif; ?>
                        <div class="article-help"><span class="article-help-title">Helpful?</span>
                            <button class="article-help-btn violet">Yes</button>
                            <button class="article-help-btn orange">No</button>
                        </div>
                        <div class="article-tag">
                            <a href="">#crypto</a>
                            <a href="">#exchanges</a>
                            <a href="">#regulation</a>
                            <a href="">#<?= the_title() ?></a>
                            <a href="">#coinbase exchange </a>
                            <a href="">#what is coinbase? </a>
                            <a href="">#coinbase wallet </a>
                            <a href="">#coinbase review </a>
                        </div>
                    </div>
                    <div class="article-sidebar">
                        <div class="article-sidebar-title">Table of contents</div>
                        <a class="article-sidebar-link active" href="#law">Law and crypto trading</a>
                        <a class="article-sidebar-link" href="#tax">Taxing cryptocurrencies</a>
                        <a class="article-sidebar-link" href="#services">Crypto financial services</a>
                        <a class="article-sidebar-link" href="#use">Using crypto</a>
                        <a class="article-sidebar-link" href="#regulation">Crypto regulation</a>
                        <a class="article-sidebar-link" href="#sources">Sources</a>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <script type="text/x-template" id="country-table">
        <section class="article-exchange">
                    <h1 class="section-header m"><span class="word-accent violet">Exchanges available in {{ countrys[country] }}<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></h1>
                    <div class="table top-table">
                        <div class="table-wrap">
                            <div class="table-head">
                                <div class="table-elem"><span class="table-heading">Name</span></div>
                                <div class="table-elem"><span class="table-heading">Rating</span></div>
                                <div class="table-elem"><span class="table-heading">Founded Date</span></div>
                                <div class="table-elem"><span class="table-heading">Deposit Method</span></div>
                                <div class="table-elem"><span class="table-heading">Promotion </span></div>
                                <div class="table-elem"><span class="table-heading">Coincub Review</span></div>
                            </div>
                            <div class="table-row" v-for="(exchanger, index) in display_exchanges">
                                <div class="table-elem">
                                    <div class="table-name"><img class="table-name-icon" :src="'<?php bloginfo('template_url'); ?>/assets/img/content/table/'+exchanger.name.toLowerCase().replace('.', '')+'-logo.svg'" :alt="exchanger.name + ' Logo'"><span class="table-name-text">{{ exchanger.name }}</span></div><a class="table-link-mob" href="">Coincub Review
                                        <svg class="table-link-icon">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"></use>
                                        </svg></a>
                                </div>
                                <div class="table-elem"><span class="table-heading">Rating</span>
                                    <div class="table-rating"><span class="table-rating-val">{{ exchanger.rating }}</span></div>
                                </div>
                                <div class="table-elem"><span class="table-heading">Founded Date</span>
                                    <div class="table-date"><span class="table-date-val">{{ exchanger.founded }}</span></div>
                                </div>
                                <div class="table-elem"><span class="table-heading">Deposit Method</span>
                                    <div class="table-deposit"><img v-if="exchanger.creditCardFee" class="table-deposit-icon" src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/cards-icon.png" alt="Cards Icon"><img v-if="exchanger.wireFee" class="table-deposit-icon" src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/bank-icon.png" alt="Bank Icon"></div>
                                </div>
                                <div class="table-elem"><span class="table-heading">Promotion </span>
                                    <div class="table-promotion"><span class="table-promotion-val purple" v-if="promo[exchanger.coinGeckoId]">Yes</span><span class="table-promotion-val orange" v-if="!promo[exchanger.coinGeckoId]">No</span></div>
                                </div>
                                <div class="table-elem table-link"><a class="table-link-btn" href="">
                                        <svg class="table-link-icon">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"></use>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                </section>
    </script>

<?php get_footer('other'); ?>