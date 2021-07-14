<?php get_header(); ?>

<?php
    $args = array(
        'posts_per_page' => -1,
        'post_type'      => ['country', 'exchange'],
    );

    $posts_query = new WP_Query($args);
    $post_count = $posts_query->post_count;
?>

    <main class="content">
            <div class="blog blog-country">
                <section class="blog-head container middle">
                    <div class="blog-head-info">
                        <div class="section-title sm">Back to main page</div>
                        <h1 class="section-header big"><span class="word-accent orange">Exchange<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span> Reviews</h1>
                    </div><img class="blog-head-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/blog/blog-img.png" alt="Blog header image">
                </section>
                <section class="blog-nav middle">
                    <div class="blog-nav-link active" data-blog-nav="all">All</div>
                    <div class="blog-nav-link" data-blog-nav="exchanges">Exchanges</div>
                    <div class="blog-nav-link" data-blog-nav="financial">Financial Platforms</div>
                    <div class="blog-nav-link" data-blog-nav="countries">Countries</div>
                </section>
                <section class="blog-wrap">
                    <div class="blog-wrap-content" id="ajax-posts">
                        <?php
                            $posts = get_posts( array(
                                'post_type'   => ['country', 'exchange'],
                                'numberposts' => 9,
                                'orderby'     => 'title',
                                'order'       => 'ASC',
                            ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);

                                if (get_post_type() == 'country') {
                                    get_template_part('blocks/country-catalog');
                                }

                                if (get_post_type() == 'exchange') {
                                    get_template_part('blocks/exchange-catalog');
                                }
                            }

                            wp_reset_postdata();
                        ?>
                    </div>
                    <button class="blog-more" id="more_posts" onclick="loadClick(<?php echo $offset; ?>)">Load More</button>
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

    <script>
        let postCount = <?= $post_count ?>;
    </script>

<?php get_footer('other'); ?>