        <section class="faq middle">
            <div class="faq-head">
                <div class="section-title-simple">FAQ</div>
                <h1 class="section-header m"><span class="word-accent violet">New to crypto? Here’s our guide!<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></h1>
            </div>
            <div class="faq-wrap">
                <div class="faq-elem">
                    <div class="faq-elem-content"><img class="faq-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-1.png" alt="FAQ Image #1"><span class="faq-elem-number">01</span><span class="faq-elem-title">
                         Why Bitcoin? </span><span class="faq-elem-text">
                        It seems like the buzz around Bitcoin
                        just keeps growing. Bitcoin is a constantly
                        evolving technology with a passionate
                        community. What is it about the digital
                        asset that makes it such a controversial
                        topic and attractive investment? </span></div>
                </div>
                <div class="faq-elem">
                    <div class="faq-elem-content"><img class="faq-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-2.png" alt="FAQ Image #2"><span class="faq-elem-number">02</span><span class="faq-elem-title">
                         How to Get Started with Bitcoin</span><span class="faq-elem-text">
                        It can be difficult to get past the
                        technical jargon surrounding Bitcoin in
                        order to figure out how you can buy and
                        store the digital asset. Beginners can
                        purchase BTC on many exchanges with fiat
                        currency. Once you’ve purchased crypto,
                        invest in a safe  offline storage solution. </span></div>
                </div>
                <div class="faq-elem">
                    <div class="faq-elem-content"><img class="faq-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-3.png" alt="FAQ Image #3"><span class="faq-elem-number">03</span><span class="faq-elem-title">
                         Blockchains 101</span><span class="faq-elem-text">
                        Blockchains are a type of database where
                        data is stored in blocks that are chained
                        together. As new data comes in, it is
                        entered into a block, which is then chained
                        to the previous block. The Bitcoin blockchain
                        serves as a ledger that records every Bitcoin
                        transaction in history. </span></div>
                </div>
                <div class="faq-elem">
                    <div class="faq-elem-content"><img class="faq-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/faq/faq-img-4.png" alt="FAQ Image #4"><span class="faq-elem-number">04</span><span class="faq-elem-title">
                         Bitcoin in the Real World</span><span class="faq-elem-text">
                        Ok - you’ve found an exchange, bought your
                        Bitcoin, and stored it safely. What’s next?
                        By now you can buy just about anything with
                        Bitcoin if you try hard enough, from Amazon
                        gift cards to an old master painting. You can
                        also convert your BTC to fiat with ATMs, an
                        exchange, and more.</span></div>
                </div>
            </div>
        </section>

        <?php
            $posts = get_posts( array(
                'post_type' => 'footer',
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                ?>

                <footer class="footer">
                    <section class="footer-banner middle">
                        <div class="footer-banner-bg"></div>
                        <div class="footer-banner-left">
                            <div class="section-title-simple"> <span class="orange">Free guide </span>on how to get into crypto market</div>
                            <h1 class="section-header m">
                                <span class="word-accent orange">
                                    <?= the_field('guide_title') ?>
                                    <span class="word-accent-square left"></span>
                                    <span class="word-accent-square right"></span>
                                </span>
                            </h1>
                            <div class="section-desc">
                                <?= the_field('guide_subtitle') ?>
                            </div>
                        </div>
                        <div class="footer-banner-right">
                            <?= do_shortcode('[email-subscribers-form id="1"]') ?>
                            <form class="footer-banner-form form-validate" id="book-form" novalidate>
                                <input type="text" class="form-action" name="form-action" value="e-book" hidden>
                                <input type="text" class="action" name="action" value="<?= admin_url('admin-ajax.php?action=send_mail') ?>" hidden>
                                <div class="form-group">
                                    <label class="form-title">Email</label>
                                    <input class="form-input" id="book-email" type="email" name="bannerEmail" placeholder="youremail@mail.com" required>
                                    <span class="form-error-msg">Please type correct email</span>
                                </div>
                                <button class="btn form-btn footer-banner-form-btn">
                                    <span class="btn-arrow"></span>
                                    <span class="btn-text"><?= the_field('guide_button_text') ?></span>
                                </button>
                            </form>
                        </div>
                    </section>
                    <section class="footer-note">
                        This is not financial advice. Coincub is an independent publisher
                        and comparison service. Its articles, interactive tools and other
                        content are provided to you for free, as self-help tools and for
                        informational purposes only. This space changes rapidly and evolving,
                        so please make sure to do your own research. Although we do our best
                        to provide you the best information, we cannot guarantee the accuracy
                        or applicability of any information on this site or in regard to your
                        individual circumstances.
                    </section>
                    <section class="footer-nav container">
                        <div class="footer-nav-content">
                            <div class="footer-nav-copyright"><?= the_field('copyright') ?></div>
                            <div class="footer-nav-wrap">
                                <div class="footer-nav-link modal-o-btn" data-modal-btn="modal-terms">Terms & Conditions</div>
                                <div class="footer-nav-link modal-o-btn" data-modal-btn="modal-contact">Contact Us</div>
                                <div class="footer-nav-link modal-o-btn" data-modal-btn="modal-review">Methodology</div>
                            </div>
                            <div class="footer-nav-social">
                                <?php if (get_field('instagram')): ?>
                                    <a class="footer-nav-social-link" target="_blank" href="<?= the_field('instagram') ?>">
                                        <svg class="footer-nav-social-link-icon">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#inst-icon"></use>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_field('twitter')): ?>
                                    <a class="footer-nav-social-link" target="_blank" href="<?= the_field('twitter') ?>">
                                        <svg class="footer-nav-social-link-icon">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#twitter-icon"></use>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_field('facebook')): ?>
                                    <a class="footer-nav-social-link" target="_blank" href="<?= the_field('facebook') ?>">
                                        <svg class="footer-nav-social-link-icon">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#facebook-icon"></use>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_field('telegram')): ?>
                                    <a class="footer-nav-social-link" target="_blank" href="<?= the_field('telegram') ?>">
                                        <svg class="footer-nav-social-link-icon">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#telegram-icon"></use>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_field('reddit')): ?>
                                    <a class="footer-nav-social-link" target="_blank" href="<?= the_field('reddit') ?>">
                                        <svg class="footer-nav-social-link-icon">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#reddit-icon"></use>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_field('medium')): ?>
                                    <a class="footer-nav-social-link" target="_blank" href="<?= the_field('medium') ?>">
                                        <svg class="footer-nav-social-link-icon">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#medium-icon"></use>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
                </footer>

                <?php
            }

            wp_reset_postdata();
        ?>
    </div>

    <div class="modal modal-terms" data-modal="modal-terms">
        <div class="modal-wrap">
            <div class="modal-bg"></div>
            <div class="modal-body">
                <div class="modal-close"><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/close-modal-icon.svg" alt=""></div>
                <div class="modal-content-wrap">
                    <div class="modal-info"><img class="modal-info-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/modal/modal-terms-bg.png" alt="">
                        <div class="modal-info-content">
                            <h1 class="modal-heading">Terms and Conditions</h1>
                            <div class="modal-subheading">Disclaimers and Limitation of Liability</div>
                            <p>
                                The content on the service is strictly for informational
                                purposes. Nothing on or in the service shall constitute
                                or be construed as an offering of any currency or any
                                financial instrument or as investment advice or investment
                                recommendations (such as recommendations as to whether to
                                purchase a currency or instrument) by Coincub or a recommendation
                                as to an investment strategy by Coincub. Content on this service
                                should not be considered as information sufficient upon
                                which to base an investment strategy. No content on the
                                service is tailored to the specific needs of any individual,
                                tity or group of individuals. Coincub expresses no opinion as
                                to the future or expected value of any currency, security or
                                other interest. Coincub does not explicitly or implicitly
                                recommend or suggest any investment strategy of any kind.
                                Content on the service may not be used as a basis for any
                                financial decision
                            </p>
                            <p>
                                The content provided on the service is submitted to Coincub
                                by unrelated third-party providers. Coincub does not review
                                all content for accuracy, does not review content for
                                completeness or reliability, and does not warrant or guarantee
                                the accuracy, completeness, reliability or any other aspect
                                of any content.
                            </p>
                            <p>
                                The content provided on the service is submitted to Coincub
                                by unrelated third-party providers. Coincub does not review
                                all content for accuracy, does not review content for
                                completeness or reliability, and does not warrant or guarantee
                                the accuracy, completeness, reliability or any other aspect
                                of any content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-review" data-modal="modal-review">
        <div class="modal-wrap">
            <div class="modal-bg"></div>
            <div class="modal-body">
                <div class="modal-close"><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/close-modal-icon.svg" alt=""></div>
                <div class="modal-content-wrap">
                    <div class="modal-info"><img class="modal-info-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/modal/modal-review-bg.png" alt="">
                        <div class="modal-info-content">
                            <div class="modal-subheading">Coincub - Exchange Reviews</div>
                            <p>
                                Coincub takes reviews seriously. Finding the right exchange is
                                important and we want to make sure you have all the tools and
                                information you need to make the best decision for your needs.
                            </p>
                            <p>
                                Coincub reviews are based on user testing and extensive background
                                research. During the review process we cover end-user feedback
                                and expert opinions to establish the real reputation and nature
                                of any exchange.
                            </p>
                            <p>
                                Information is regularly fact-checked and we consult with crypto
                                security specialists to make sure the exchanges we recommend are
                                in your best interests.
                            </p>
                            <p>
                                There is no single best exchange but our Coincub reviews can
                                help users find the exchange that suits their individual needs
                                and situation.
                            </p>
                            <div class="modal-subheading">Coincub - Country Reviews</div>
                            <p>
                                The Country Crypto Rating is unique to Coincub and, as ever, we
                                take our ratings and reviews very seriously indeed.
                            </p>
                            <p>
                                In any country we cover, our team of editors and researchers
                                assess the general culture towards crypto currencies and how widely
                                they are used and traded. This includes collating the views and
                                attitudes of government, financial sectors and other relevant bodies
                                in that country.
                            </p>
                            <p>
                                Within our rating we include prevailing and upcoming legislation
                                and regulation along with tax implications allowances or schemes.
                                We also include the ease of exchanging crypto and how prevalent
                                the outlets are for buying goods or exchanging crypto currency.
                            </p>
                            <p>
                                Investing is always subject to laws and regulations. Our reviews
                                seek to provide impartial analysis of a country’s general level
                                of acceptance and disposition towards the cryptoeconomy and the
                                advantages and disadvantages of buying or selling crypto assets
                                within it.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-contact" data-modal="modal-contact">
        <div class="modal-wrap">
            <div class="modal-bg"></div>
            <div class="modal-body">
                <div class="modal-close"><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icon/close-modal-icon-black.svg" alt=""></div><img class="modal-contact-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/modal/modal-contact-bg.png" alt="">
                <div class="modal-contact-wrap">
                    <div class="modal-contact-info">
                        <h1 class="modal-heading">Contact Us</h1>
                        <div class="modal-desc">Please fill out the quick form and we will be in touch</div>
                        <form class="form modal-form form-validate" novalidate>
                            <input type="text" class="form-action" name="form-action" value="contact-us" hidden>
                            <input type="text" name="action" class="action" value="<?= admin_url('admin-ajax.php?action=contact_us') ?>" hidden>
                            <div class="form-wrap">
                                <div class="form-group">
                                    <label class="form-title">Name</label>
                                    <input class="form-input" type="text" name="contactName" id="contact-name" placeholder="Your name" required>
                                    <span class="form-error-msg">Please type your name</span>
                                </div>
                                <div class="form-group">
                                    <label class="form-title">Email</label>
                                    <input class="form-input" type="email" name="contactEmail" id="contact-email" placeholder="Your email" required>
                                    <span class="form-error-msg">Please type correct email</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-textarea" name="contactMessage" id="contact-message" placeholder="Your question" required></textarea>
                                <span class="form-error-msg">Please type your question</span>
                            </div>
                            <button class="btn form-btn">
                                <span class="btn-arrow"></span>
                                <span class="btn-text">Send your question</span>
                            </button>
                        </form>
                        <div class="modal-contact-delimer">or </div>
                        <div class="modal-subheading">Connect with us:</div>
                        <div class="modal-desc">For any questions email us at <a class="modal-link" href="mailto:contact@coincub.com">contact@coincub.com</a></div>
                        <div class="modal-social">
                            <div class="modal-social-title">Follow us on</div>
                            <div class="modal-social-wrap">
                                <?php
                                    $posts = get_posts( array(
                                        'post_type' => 'footer',
                                    ) );

                                    foreach( $posts as $post ){
                                        setup_postdata($post);
                                        ?>

                                        <a class="modal-social-link" href="<?= the_field('instagram') ?>">
                                            <svg class="modal-social-link-icon">
                                                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#inst-icon"></use>
                                            </svg>
                                        </a>
                                        <a class="modal-social-link" href="<?= the_field('twitter') ?>">
                                            <svg class="modal-social-link-icon">
                                                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#twitter-icon"></use>
                                            </svg>
                                        </a>
                                        <a class="modal-social-link" href="<?= the_field('facebook') ?>">
                                            <svg class="modal-social-link-icon">
                                                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#facebook-icon"></use>
                                            </svg>
                                        </a>
                                        <a class="modal-social-link" href="<?= the_field('telegram') ?>">
                                            <svg class="modal-social-link-icon">
                                                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#telegram-icon"></use>
                                            </svg>
                                        </a>
                                        <a class="modal-social-link" href="<?= the_field('reddit') ?>">
                                            <svg class="modal-social-link-icon">
                                                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#reddit-icon"></use>
                                            </svg>
                                        </a>
                                        <a class="modal-social-link" href="<?= the_field('medium') ?>">
                                            <svg class="modal-social-link-icon">
                                                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#medium-icon"></use>
                                            </svg>
                                        </a>

                                        <?php
                                    }

                                    wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-contact-img-box"></div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let templateUrl = '<?= get_bloginfo("template_url"); ?>';
        // console.log(templateUrl);

        let url = '<?= get_bloginfo("url"); ?>';
        // console.log(url);

        jQuery(document).ready(function($) {
            $('a').each(function () {
                let link = '/' + window.location.host + '/';
                var a = new RegExp('/' + window.location.host + '/');
                if (!a.test(this.href)) {
                    $(this).click(function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        window.open(this.href, '_blank');
                    });
                }
            });
        });
    </script>

    <?php wp_footer(); ?>

</body>
</html>