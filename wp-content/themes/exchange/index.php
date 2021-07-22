<?php get_header(); ?>

    <main class="content">
        <div class="main">
            <section class="main-head container middle">
                <div class="main-head-wrap">
                    <div class="main-head-left">
                        <div class="section-title sm">Choose the most suitable exchange</div>
                        <h1 class="section-header big">Pick the<span class="word-accent violet">best exchange<span
                                        class="word-accent-square left"></span><span
                                        class="word-accent-square right"></span></span><span
                                    class="word-accent orange">for you<span class="word-accent-square left"></span><span
                                        class="word-accent-square right"></span></span></h1>
                        <div class="section-desc">
                            We bring you the top crypto exchanges in your
                            country by CoinCub parameters. Take a look at
                            the one that suits your needs.
                        </div>
                    </div>
                    <div class="main-head-right">
                        <form class="form" action="/top">
                            <div class="form-group">
                                <label class="form-title">Country</label>
                                <div class="form-custom-select select-country">
                                    <div class="form-custom-select-chosen"><span class="form-custom-select-chosen-name">{{ selected_country_name
                                        }}</span>
                                        <input class="form-custom-select-search" type="text" name="customSelectSearch" placeholder="Chose country" autocomplete="off">
                                    </div>
                                    <div class="form-custom-select-dd">
                                        <div class="form-custom-select-dd-wrap">
                                            <span class="form-custom-select-empty">Nothing found</span>
                                            <div v-for="(country, index) in countrys" :class="'form-custom-select-elem'+(country.value == selected_country ? ' active' : '')">
                                                <input class="form-custom-select-elem-radio" type="radio" name="customSelectCountry" :value="country.value" :checked="country.value == selected_country" data-el-chenged="selected_country"><span class="form-custom-select-elem-name">{{ country.name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-wrap">
                                <div class="form-group">
                                    <label class="form-title">Amount</label>
                                    <input class="form-input" type="text" name="formAmount" placeholder="Your Amount"
                                           v-model.number="amount">
                                </div>
                                <div class="form-group">
                                    <label class="form-title">Currency </label>
                                    <div class="form-custom-select select-currency">
                                        <div class="form-custom-select-chosen"><span
                                                    class="form-custom-select-chosen-name">{{ selected_currency_name
                                            }}</span>
                                            <input class="form-custom-select-search" type="text" name="customSelectSearch" placeholder="Chose currency" autocomplete="off">
                                        </div>
                                        <div class="form-custom-select-dd">
                                            <div class="form-custom-select-dd-wrap">
                                                <span class="form-custom-select-empty">Nothing found</span>
                                                <div v-for="(currency, index) in options_currencys" :class="'form-custom-select-elem'+(currency.value == selected_currency ? ' active' : '')">
                                                    <input class="form-custom-select-elem-radio" type="radio" name="customSelectCurrency" :value="currency.value" :checked="currency.value == selected_currency" data-el-chenged="selected_currency"><img class="form-custom-select-elem-icon" :src="currency.flag" :alt="currency.value"><span class="form-custom-select-elem-name">{{ currency.name }}</span><span class="form-custom-select-elem-short">{{ currency.code }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-wrap">
                                <div class="form-group">
                                    <label class="form-title">Deposit method</label>
                                    <niceselect class="form-select" :options="deposit_methods"
                                                v-model="selected_deposit_method">
                                        <option v-for="(d_method, index) in deposit_methods" :value="d_method.value">
                                            {{ d_method.name }}
                                        </option>
                                    </niceselect>
                                </div>
                                <div class="form-group">
                                    <label class="form-title">Target coin</label>
                                    <div class="form-custom-select select-coin">
                                        <div class="form-custom-select-chosen"><span
                                                    class="form-custom-select-chosen-name">{{ selected_destination_coin
                                            }}</span>
                                            <input class="form-custom-select-search" type="text" name="customSelectSearch" placeholder="Chose coin" autocomplete="off">
                                        </div>
                                        <div class="form-custom-select-dd">
                                            <div class="form-custom-select-dd-wrap">
                                                <span class="form-custom-select-empty">Nothing found</span>
                                                <div v-for="(coin, index) in options_destination_coins" :class="'form-custom-select-elem'+(coin.code == selected_destination_coin ? ' active' : '')">
                                                    <input class="form-custom-select-elem-radio" type="radio" name="customSelectCoin" :value="coin.code" :checked="coin.code == selected_destination_coin" data-el-chenged="selected_destination_coin"><img class="form-custom-select-elem-icon" :src="'<?php bloginfo('template_url'); ?>/assets/img/content/select/'+coin.code.toLowerCase().replace('.', '')+'-icon.svg'" :alt="coin.code"><span class="form-custom-select-elem-name">{{ coin.name }}</span><span class="form-custom-select-elem-short">{{ coin.code }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn form-btn"><span class="btn-arrow"></span><span class="btn-text">Find the best exchange offer</span>
                            </button>
                        </form>
                    </div>
                </div>
            </section>
            <section class="table top-table middle">
                <div class="table-title"><span class="table-title-accent">TOP 10 </span>Exhanges</div>
                <div class="table-wrap">
                    <div class="table-head">
                        <div class="table-elem"><span class="table-heading">Name</span></div>
                        <div class="table-elem"><span class="table-heading">Rating</span></div>
                        <div class="table-elem"><span class="table-heading">Founded Date</span></div>
                        <div class="table-elem"><span class="table-heading">Deposit Method</span></div>
                        <div class="table-elem"><span class="table-heading">Based in </span></div>
                        <div class="table-elem"><span class="table-heading">Coincub Review</span></div>
                    </div>
                    <div class="table-row" v-for="(exchanger, index) in all_exchanges">
                        <div class="table-elem">
                            <div class="table-name"><img class="table-name-icon"
                                                         :src="'<?php bloginfo('template_url'); ?>/assets/img/content/table/'+exchanger.name.toLowerCase().replace('.', '')+'-logo.svg'"
                                                         alt="Binance Logo"><span
                                        class="table-name-text">{{ exchanger.name }}</span></div>
                            <a class="table-link-mob" href="">Coincub Review
                                <svg class="table-link-icon">
                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="table-elem"><span class="table-heading">Rate</span>
                            <div class="table-rating"><span class="table-rating-val">{{ exchanger.rating }}</span></div>
                        </div>
                        <div class="table-elem"><span class="table-heading">Founded Date</span>
                            <div class="table-date"><span class="table-date-val">{{ exchanger.founded }}</span></div>
                        </div>
                        <div class="table-elem"><span class="table-heading">Deposit Method</span>
                            <div class="table-deposit"><div class="table-deposit-elem"><img v-if="exchanger.creditCardFee" class="table-deposit-icon"
                                                            src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/cards-icon.png"
                                                            alt="Cards Icon"></div><div class="table-deposit-elem"><img v-if="exchanger.wireFee"
                                                                                  class="table-deposit-icon"
                                                                                  src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/bank-icon.png"
                                                                                  alt="Bank Icon"></div></div>
                        </div>
                        <div class="table-elem"><span class="table-heading">Based in</span>
                            <div class="table-based"><img class="table-based-flag" :src="exchanges_bassed[exchanger.coinGeckoId].flag" :alt="exchanges_bassed[exchanger.coinGeckoId].value"><span
                                        class="table-based-val">{{ exchanges_bassed[exchanger.coinGeckoId].value }}</span></div>
                        </div>
                        <div class="table-elem table-link"><a class="table-link-btn" href="">
                                <svg class="table-link-icon">
                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"></use>
                                </svg>
                            </a></div>
                    </div>
                </div>
            </section>

            <?= get_template_part('blocks/block-why-coincub') ?>

            <?= get_template_part('blocks/block-first') ?>
        </div>
    </main>

    <script type="text/x-template" id="niceSelect-template">
        <select>
            <slot></slot>
        </select>
    </script>

<?php get_footer('other'); ?>