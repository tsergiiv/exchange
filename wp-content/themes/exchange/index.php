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
                                        }}</span></div>
                                    <div class="form-custom-select-dd">
                                        <div class="form-custom-select-dd-wrap">
                                            <label class="form-search form-custom-select-search" for="">
                                                <input class="form-search-input" type="text"
                                                       placeholder="Search currency you need">
                                            </label>
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
                                            }}</span></div>
                                        <div class="form-custom-select-dd">
                                            <div class="form-custom-select-dd-wrap">
                                                <label class="form-search form-custom-select-search" for="">
                                                    <input class="form-search-input" type="text"
                                                           placeholder="Search currency you need">
                                                </label>
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
                                            }}</span></div>
                                        <div class="form-custom-select-dd">
                                            <div class="form-custom-select-dd-wrap">
                                                <label class="form-search form-custom-select-search" for="">
                                                    <input class="form-search-input" type="text"
                                                           placeholder="Search currency you need">
                                                </label>
                                                <span class="form-custom-select-empty">Nothing found</span>
                                                <div v-for="(coin, index) in options_destination_coins" :class="'form-custom-select-elem'+(coin.code == selected_destination_coin ? ' active' : '')">
                                                    <input class="form-custom-select-elem-radio" type="radio" name="customSelectCoin" :value="coin.code" :checked="coin.code == selected_destination_coin" data-el-chenged="selected_destination_coin"><!-- <img class="form-custom-select-elem-icon" :src="'<?php bloginfo('template_url'); ?>/assets/img/content/select/'+coin.code.toLowerCase().replace('.', '')+'-icon.svg'" :alt="coin.code"> --><span class="form-custom-select-elem-name">{{ coin.name }}</span><span class="form-custom-select-elem-short">{{ coin.code }}</span>
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
                            <div class="table-deposit"><img v-if="exchanger.creditCardFee" class="table-deposit-icon"
                                                            src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/cards-icon.png"
                                                            alt="Cards Icon"><img v-if="exchanger.wireFee"
                                                                                  class="table-deposit-icon"
                                                                                  src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/bank-icon.png"
                                                                                  alt="Bank Icon"></div>
                        </div>
                        <div class="table-elem"><span class="table-heading">Based in</span>
                            <div class="table-based"><span
                                        class="table-based-val">{{ exchanges_bassed[exchanger.coinGeckoId] }}</span></div>
                        </div>
                        <div class="table-elem table-link"><a class="table-link-btn" href="">
                                <svg class="table-link-icon">
                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#link-icon"></use>
                                </svg>
                            </a></div>
                    </div>
                </div>
            </section>
            <section class="advantages">
                <div class="advantages-bg"></div>
                <div class="advantages-content middle"><img class="advantages-bg-cat"
                                                            src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-image.png"
                                                            alt="Advantages cat">
                    <div class="advantages-block">
                        <div class="section-title m icon"><img class="section-title-icon"
                                                               src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/tips-icon.png"
                                                               alt="Testimonials Icon">Why Coincub
                        </div>
                        <div class="advantages-wrap">
                            <div class="advantages-elem green">
                                <div class="advantages-elem-content">
                                    <div class="advantages-img"><img class="advantages-img-content"
                                                                     src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-1.png"
                                                                     alt="Advantages image #1"></div>
                                    <div class="advantages-text"><span class="advantages-text-accent">Fees: </span>Avoid
                                        expensive hidden fees.
                                    </div>
                                </div>
                            </div>
                            <div class="advantages-elem orange">
                                <div class="advantages-elem-content">
                                    <div class="advantages-img"><img class="advantages-img-content"
                                                                     src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-2.png"
                                                                     alt="Advantages image #2"></div>
                                    <div class="advantages-text"><span class="advantages-text-accent">Legal: </span>Ensure
                                        all your transactions are above board
                                    </div>
                                </div>
                            </div>
                            <div class="advantages-elem purple">
                                <div class="advantages-elem-content">
                                    <div class="advantages-img"><img class="advantages-img-content"
                                                                     src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-7.png"
                                                                     alt="Advantages image #3"></div>
                                    <div class="advantages-text"><span class="advantages-text-accent">Location: </span>Find
                                        services available in your country.
                                    </div>
                                </div>
                            </div>
                            <div class="advantages-elem orange">
                                <div class="advantages-elem-content">
                                    <div class="advantages-img"><img class="advantages-img-content"
                                                                     src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-4.png"
                                                                     alt="Advantages image #4"></div>
                                    <div class="advantages-text"><span class="advantages-text-accent">Exchange: </span>Compare
                                        exchanges to find the best one for you.
                                    </div>
                                </div>
                            </div>
                            <div class="advantages-elem purple">
                                <div class="advantages-elem-content">
                                    <div class="advantages-img"><img class="advantages-img-content"
                                                                     src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-5.png"
                                                                     alt="Advantages image #5"></div>
                                    <div class="advantages-text"><span class="advantages-text-accent">Perks: </span>Find
                                        opportunities to earn rewards and bonuses.
                                    </div>
                                </div>
                            </div>
                            <div class="advantages-elem green">
                                <div class="advantages-elem-content">
                                    <div class="advantages-img"><img class="advantages-img-content"
                                                                     src="<?php bloginfo('template_url'); ?>/assets/img/content/advantages/advantages-img-6.png"
                                                                     alt="Advantages image #6"></div>
                                    <div class="advantages-text"><span class="advantages-text-accent">Security: </span>Make
                                        sure your funds are protected.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="first first-tab middle">
                <div class="first-head">
                    <div class="section-title-simple">First Time</div>
                    <h1 class="section-header m"><span class="word-accent orange">Buying Bitcoin?<span
                                    class="word-accent-square left"></span><span class="word-accent-square right"></span></span>
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
                                        <p>
                                            Research: There are a staggering number of exchanges, so it’s important
                                            to choose one that has the features you’re looking for - whether that’s
                                            a big selection of altcoins or top-notch security
                                        </p>
                                        <p>Thing to identify before you choose an exchange:</p>
                                        <ul>
                                            <li>The amount you plan to trade</li>
                                            <li>What coin you want to trade</li>
                                            <li>What perks you’re looking for (rewards program, visa card, etc)</li>
                                            <li>How focused you are on security</li>
                                            <li>What country you’re in</li>
                                        </ul>
                                        <p>
                                            Once you have a good idea of what you’re looking for, choosing an exchange
                                            will be much easier.
                                        </p>
                                    </div>
                                    <a class="btn first-btn" href=""><span class="btn-arrow"></span><span
                                                class="btn-text">Choose pair</span></a>
                                </div>
                                <div class="tab-elem first-tab-elem" data-tab-elem="2">
                                    <div class="first-text">
                                        <p>
                                            Sign up: Buying crypto is slowly but surely becoming a highly regulated
                                            process. Due to Know Your Customer (KYC) and Anti-Money Laundering (AML)
                                            legislation, it’s a safe bet to say you’ll usually need to provide proof
                                            of residence and some form of government ID. The verification process can
                                            be frustrating, but you’ll get through it eventually (keyword eventually).
                                            Verification can take anywhere from 30 minutes to 12 days, so don’t go in
                                            expecting to start trading immediately.
                                        </p>
                                    </div>
                                    <a class="btn first-btn" href=""><span class="btn-arrow"></span><span
                                                class="btn-text">Choose pair</span></a>
                                </div>
                                <div class="tab-elem first-tab-elem" data-tab-elem="3">
                                    <div class="first-text">
                                        <p>
                                            Security: Once you’re verified and fully set up, make sure your security
                                            is in order: if you don’t already have one, get a password manager. Always
                                            set up two-factor authentication and read the exchange security
                                            recommendations.
                                            The crypto ecosystem is famous for scams and hacks. No matter how safe the
                                            exchange you use is, if you’re not following best practices your hard earned
                                            money can disappear. Remember, crypto exchanges aren’t like banks, and
                                            transactions aren’t reversible; if your funds are stolen, it’s likely you
                                            won’t get them back.
                                        </p>
                                        <p>
                                            If you're very worried about this, it might be worth it to prioritize
                                            exchanges
                                            that have insurance and look into using cold wallets.
                                        </p>
                                    </div>
                                    <a class="btn first-btn" href=""><span class="btn-arrow"></span><span
                                                class="btn-text">Choose pair</span></a>
                                </div>
                                <div class="tab-elem first-tab-elem" data-tab-elem="4">
                                    <div class="first-text">
                                        <p>
                                            Funding: You made it! You’ve signed up, verified your account, locked it
                                            down
                                            and made it difficult to hack. You’re now ready to purchase crypto. Most
                                            exchanges allow you to purchase crypto via card or bank transfer, though
                                            with
                                            differing fees. Select the coins you want to purchase, and start buying.
                                        </p>
                                    </div>
                                    <a class="btn first-btn" href=""><span class="btn-arrow"></span><span
                                                class="btn-text">Choose pair</span></a>
                                </div>
                                <div class="tab-elem first-tab-elem" data-tab-elem="5">
                                    <div class="first-text">
                                        <p>
                                            What’s next: You’ve gotten an account and funded it - now you can really
                                            start trading and tending to your investments. Different exchanges offer
                                            different financial services. If you’re feeling adventurous, you can look
                                            into margin trading or futures. You can also diversify your portfolio by
                                            spreading your investment over several coins. Many exchanges offer perks
                                            and rewards programs, so now is a great time to look into those.
                                        </p>
                                        <p>Have fun, keep informed, and invest carefully.</p>
                                    </div>
                                    <a class="btn first-btn" href=""><span class="btn-arrow"></span><span
                                                class="btn-text">Choose pair</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script type="text/x-template" id="niceSelect-template">
        <select>
            <slot></slot>
        </select>
    </script>

<?php get_footer('other'); ?>