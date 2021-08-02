<?php get_header(); ?>

    <main class="content">
        <div class="top-page">
            <section class="top-page-head container middle">
                <div class="section-title sm">Choose the most suitable exchange</div>
                <h1 class="section-header big"><span class="word-accent violet">Top<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span> Exchanges in <span class="word-accent orange">{{ contry_name }}<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></h1>
                <form class="top-page-form" action="">
                    <div class="form-group">
                        <label class="form-title">Currency </label>
                        <div class="form-custom-select select-currency">
                            <div class="form-custom-select-chosen"><span class="form-custom-select-chosen-name">{{ selected_currency_name }}</span>
                                <input class="form-custom-select-search" type="text" name="customSelectSearch" placeholder="Chose coin" autocomplete="off">
                            </div>
                            <div class="form-custom-select-dd">
                                <div class="form-custom-select-dd-wrap">
                                    <span class="form-custom-select-empty">Nothing found</span>
                                    <div v-for="(currency, index) in options_currencys" :class="'form-custom-select-elem'+(currency.value == selected_currency ? ' active' : '')">
                                        <input class="form-custom-select-elem-radio" type="radio" name="customSelectCurrency" :value="currency.value" :checked="currency.value == selected_currency" data-el-chenged="selected_currency"><img class="form-custom-select-elem-icon lazy" :data-src="currency.flag" :alt="currency.value"><span class="form-custom-select-elem-name">{{ currency.name }}</span><span class="form-custom-select-elem-short">{{ currency.code }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-title">Amount</label>
                        <input class="form-input" type="text" name="formAmount" placeholder="Your Amount" v-model.number="amount">
                    </div>
                    <div class="form-group">
                        <label class="form-title">Target coin</label>
                        <div class="form-custom-select select-coin">
                            <div class="form-custom-select-chosen"><span class="form-custom-select-chosen-name">{{ selected_destination_coin }}</span>
                                <input class="form-custom-select-search" type="text" name="customSelectSearch" placeholder="Chose coin" autocomplete="off">
                            </div>
                            <div class="form-custom-select-dd">
                                <div class="form-custom-select-dd-wrap">
                                    <span class="form-custom-select-empty">Nothing found</span>
                                    <div v-for="(coin, index) in options_destination_coins" :class="'form-custom-select-elem'+(coin.code == selected_destination_coin ? ' active' : '')">
                                        <input class="form-custom-select-elem-radio" type="radio" name="customSelectCoin" :value="coin.code" :checked="coin.code == selected_destination_coin" data-el-chenged="selected_destination_coin"><img class="form-custom-select-elem-icon lazy" :data-src="'<?php bloginfo('template_url'); ?>/assets/img/content/select/'+coin.code.toLowerCase().replace('.', '')+'-icon.svg'" :alt="coin.code"><span class="form-custom-select-elem-name">{{ coin.name }}</span><span class="form-custom-select-elem-short">{{ coin.code }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-title">Deposit method</label>
                        <niceselect  class="form-select" :options="deposit_methods" v-model="selected_deposit_method">
                            <option v-for="(d_method, index) in deposit_methods" :value="d_method.value">
                                {{ d_method.name }}
                            </option>
                        </niceselect>
                    </div>
                    <div v-if="top_page_msg" class="top-page-msg">We’re sorry, but none of our exchanges support <span class="top-page-msg-currency">USD</span>. <br>May we suggest checking results in <span class="top-page-msg-alternate-currency">EUR</span>?</div>
                </form>
            </section>
            <section class="table result-table middle">
                <div class="table-header">
                    <div class="table-title">Search <span class="table-title-accent">results</span></div>
                    <form class="table-form" action="">
                        <div class="table-form-group"><span class="table-form-group-title big">Has a promotion</span>
                            <label class="form-checkbox">
                                <input class="form-checkbox-input" type="checkbox" name="tablePromotion" v-model="promo_check"><span class="form-checkbox-custom"></span>
                            </label>
                        </div>
                        <div class="table-form-group">
                            <label class="table-form-group-title sm">Sort by:</label>
                            <niceselect  class="form-select" :options="sort_options" v-model="sort_by">
                              <option v-for="(sort_option, index) in sort_options" :value="sort_option.value">
                               {{ sort_option.name }}
                              </option>
                            </niceselect>
                        </div>
                    </form>
                </div>
                <div class="table-wrap">
                    <div class="table-head">
                        <div class="table-elem"> <span class="table-heading">Name</span></div>
                        <div class="table-elem"><span class="table-heading">Rating</span></div>
                        <div class="table-elem"><span class="table-heading">Coin Price (<span class="table-heading-currency">{{ selected_currency_code }}</span>)</span></div>
                        <div class="table-elem"><span class="table-heading">Fees (<span class="table-heading-currency">{{ selected_currency_code }}</span>)</span></div>
                        <div class="table-elem"><span class="table-heading">Fees(%)</span></div>
                        <div class="table-elem"><span class="table-heading">You Get</span></div>
                        <div class="table-elem"><span class="table-heading">Coincub Review</span></div>
                    </div>
                    <div class="table-row" v-for="(exchanger, index) in exchanges" v-show="(promo_check && promo[exchanger.exchange.apiId]) || !promo_check">
                        <div class="table-elem">
                            <div class="table-name"><img class="table-name-icon lazy"  :data-src="'<?php bloginfo('template_url'); ?>/assets/img/content/table/'+exchanger.exchange.name.toLowerCase().replace('.', '')+'-logo.svg'" :alt="exchanger.exchange.name + ' Logo'"><span class="table-name-text">{{ exchanger.exchange.name }}</span></div>
                            <div class="table-mob-wrap">
                                <div class="table-rating"><span class="table-rating-val">{{ exchanger.exchange.rating }}</span></div>
                                    <a class="table-link-mob" href="">Coincub Review
                                    <svg class="table-link-icon">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"></use>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="table-elem">
                            <div class="table-rating"><span class="table-rating-val">{{ exchanger.exchange.rating }}</span></div>
                        </div>
                        <div class="table-elem"><span class="table-heading">Coin Price (<span class="table-heading-currency">{{ selected_currency_code }}</span>)</span>
                            <div class="table-sum price">
                                <span class="table-sum-val">{{ exchanger.coinPrice.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") }}</span>
                            </div>
                        </div>
                        <div class="table-elem"><span class="table-heading">Fees (<span class="table-heading-currency">{{ selected_currency_code }}</span>)</span>
                            <div class="table-sum fee">
                                <span class="table-sum-val">{{ exchanger.feeAmount.toFixed(2) }}</span>
                            </div>
                        </div>
                        <div class="table-elem"><span class="table-heading">Fees(%)</span>
                            <div class="table-sum fee-percent"><span class="table-sum-val">{{ exchanger.feePercentage.toFixed(2) }}%</span></div>
                        </div>
                        <div class="table-elem"><span class="table-heading">You Get</span>
                            <div class="table-sum get"><img class="table-sum-icon lazy" :data-src="'<?php bloginfo('template_url'); ?>/assets/img/content/select/'+selected_destination_coin.toLowerCase().replace('.', '')+'-icon.svg'" :alt="selected_destination_coin"><span class="table-sum-val">{{ exchanger.exchangedAmount }}</span></div>
                        </div>
                        <div class="table-elem">
                            <div class="table-link"><a class="table-link-btn" href="">
                                    <svg class="table-link-icon">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"></use>
                                    </svg></a></div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                $posts = get_posts( array(
                    'post_type' => 'country',
                    'numberposts' => 50,
                ) );

                $country_code = $_GET['customSelectCountry'];

                if (!$country_code) {
                    return false;
                }

                $codes = [];
                foreach ($posts as $post) {
                    setup_postdata($post);
                    $code = get_field('code');

                    if (!$code) {
                        continue;
                    }

                    if ($code == $country_code):
                    ?>

                    <section class="first first-def middle">
                        <div class="first-head">
                            <div class="section-title-simple">First time</div>
                            <h1 class="section-header m"> <span class="word-accent orange">Bitcoin with Euro in {{ contry_name }}<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></h1>
                        </div>
                        <div class="first-wrap">
                            <div class="first-img">
															<picture>
																<source type="image/webp" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/first/first-img-2-2x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/first/first-img-2-2x.webp 2x">
																<source type="image/png" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/first/first-img-2-2x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/first/first-img-2-2x.png 2x">
																<source type="image/webp" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/first/first-img-2-1x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/first/first-img-2-1x.webp 2x">
																<source type="image/png" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/first/first-img-2-1x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/first/first-img-2-1x.png 2x">
																<img class="first-img-content lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/first/first-img-2-2x.webp" alt="First Time Image">
															</picture>
														</div>
                            <div class="first-info">
                                <div class="first-text">
                                    <?= the_field('intro') ?>
                                </div>
                                <a class="btn first-btn" href="<?= the_permalink() ?>">
                                    <span class="btn-arrow"></span>
                                    <span class="btn-text">Country Guide</span>
                                </a>
                            </div>
                        </div>
                    </section>

                    <?php
                        break;
                    endif;
                }

                wp_reset_postdata();
            ?>
            <section class="top-page-info container middle">
                <div class="top-page-info-head">
                    <div class="section-title-simple">5 Tips</div>
                    <h1 class="section-header m"> <span class="word-accent violet">For Investing in Crypto<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></h1>
                </div>
                <div class="top-page-info-wrap">
                    <div class="top-page-info-nav">
                        <div class="tab-nav-link top-page-info-nav-link active" data-tab-link="1"><span class="top-page-info-nav-link-number">1.</span><span class="top-page-info-nav-link-text">Security</span></div>
                        <div class="tab-nav-link top-page-info-nav-link" data-tab-link="2"><span class="top-page-info-nav-link-number">2.</span><span class="top-page-info-nav-link-text">Perks</span></div>
                        <div class="tab-nav-link top-page-info-nav-link" data-tab-link="3"><span class="top-page-info-nav-link-number">3.</span><span class="top-page-info-nav-link-text">Fees</span></div>
                        <div class="tab-nav-link top-page-info-nav-link" data-tab-link="4"><span class="top-page-info-nav-link-number">4.</span><span class="top-page-info-nav-link-text">Research</span></div>
                        <div class="tab-nav-link top-page-info-nav-link" data-tab-link="5"><span class="top-page-info-nav-link-number">5.</span><span class="top-page-info-nav-link-text">Caution</span></div>
                    </div>
                    <div class="top-page-info-content tab-content">
                        <div class="tab-elem top-page-info-content-elem active" data-tab-elem="1">
                            <div class="top-page-info-content-elem-card">
                                <div class="top-page-info-content-elem-text">
                                    <p>
                                        Crypto traders are frequently targets of scams and phishing attacks.
                                        Make sure you’re up to date with security best practices, like avoiding phishing
                                        emails, using a password manager, and enabling two-factor authentication.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-elem top-page-info-content-elem" data-tab-elem="2">
                            <div class="top-page-info-content-elem-card">
                                <div class="top-page-info-content-elem-text">
                                    <p>
                                        Many exchanges have built in perks and rewards programs to incentivize
                                        users. Keep this in mind when choosing an exchange; depending on what kind of
                                        investment you want to make, you can passively earn income.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-elem top-page-info-content-elem" data-tab-elem="3">
                            <div class="top-page-info-content-elem-card">
                                <div class="top-page-info-content-elem-text">
                                    <p>
                                        Keep an eye out for fees! Many crypto exchanges have several different
                                        fee schedules with complicated structures. Make sure you give them a once over
                                        to avoid nasty surprises.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-elem top-page-info-content-elem" data-tab-elem="4">
                            <div class="top-page-info-content-elem-card">
                                <div class="top-page-info-content-elem-text">
                                    <p>
                                        Always do your research before investing. Read exchange reviews,
                                        see if that exciting new coin has an actual community, and make sure you’re
                                        familiar with the crypto landscape.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-elem top-page-info-content-elem" data-tab-elem="5">
                            <div class="top-page-info-content-elem-card">
                                <div class="top-page-info-content-elem-text">
                                    <p>
                                        You would not believe the sheer volume of scams being run. If
                                        someone wants to give you free money, run in the opposite direction.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?= get_template_part('blocks/block-why-coincub') ?>
        </div>
    </main>

    <script type="text/x-template" id="niceSelect-template">
        <select>
            <slot></slot>
        </select>
    </script>

<?php get_footer('other'); ?>