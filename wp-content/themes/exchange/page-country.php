<?php get_header(); ?>

<?php
    $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'post',
        'category_name'  => 'country',
    );

    $posts_query = new WP_Query($args);
    $post_count = $posts_query->post_count;
?>

    <div class="wrapper">
        <header class="header container"><a class="header-logo" href=""><img class="header-logo-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.svg" alt="СoinResident Logo"></a>
            <nav class="header-nav"><a class="header-nav-link" href="">Countries</a><a class="header-nav-link" href="">Exchanges</a></nav>
        </header>
        <main class="content">
            <div class="blog blog-country">
                <section class="blog-head container">
                    <div class="blog-head-info">
                        <div class="section-title sm">Back to main page</div>
                        <h1 class="section-header big"><span class="word-accent orange">Exchange<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span> Reviews</h1>
                    </div><img class="blog-head-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/blog/blog-img.png" alt="Blog header image">
                </section>
                <section class="blog-nav">
                    <div class="blog-nav-link">All </div>
                    <div class="blog-nav-link">Exchanges</div>
                    <div class="blog-nav-link active">Financial Platforms</div>
                </section>
                <section class="blog-wrap">
                    <div class="blog-wrap-content">
                        <div class="blog-elem" data-rating="8.2"><a class="blog-elem-content" href="">
                                <div class="blog-elem-country"><img class="blog-elem-country-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/country/uk-flag.png" alt="United Kingdom">
                                    <div class="blog-elem-country-name">United Kingdom </div>
                                </div>
                                <div class="blog-elem-info">
                                    <div class="blog-elem-head">
                                        <div class="blog-elem-author">By Daniel Olagbami</div>
                                        <div class="blog-elem-date">May, 5, 2021</div>
                                    </div>
                                    <div class="blog-elem-title">United Kingdom Review 2021 </div>
                                    <div class="blog-elem-rating">
                                        <div class="blog-elem-rating-wrap">
                                            <div class="blog-elem-rating-list blog-elem-rating-empty">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="blog-elem-rating-list blog-elem-rating-fill">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="blog-elem-rating-val"></div>
                                    </div>
                                </div></a></div>
                        <div class="blog-elem" data-rating="7.1"><a class="blog-elem-content" href="">
                                <div class="blog-elem-country"><img class="blog-elem-country-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/country/ireland-flag.png" alt="Ireland">
                                    <div class="blog-elem-country-name">Ireland</div>
                                </div>
                                <div class="blog-elem-info">
                                    <div class="blog-elem-head">
                                        <div class="blog-elem-author">By Daniel Olagbami</div>
                                        <div class="blog-elem-date">May, 5, 2021</div>
                                    </div>
                                    <div class="blog-elem-title">Ireland Review 2021 </div>
                                    <div class="blog-elem-rating">
                                        <div class="blog-elem-rating-wrap">
                                            <div class="blog-elem-rating-list blog-elem-rating-empty">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="blog-elem-rating-list blog-elem-rating-fill">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="blog-elem-rating-val"> </div>
                                    </div>
                                </div></a></div>
                        <div class="blog-elem" data-rating="6.9"><a class="blog-elem-content" href="">
                                <div class="blog-elem-country"><img class="blog-elem-country-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/country/belgium-flag.png" alt="Belgium">
                                    <div class="blog-elem-country-name">Belgium</div>
                                </div>
                                <div class="blog-elem-info">
                                    <div class="blog-elem-head">
                                        <div class="blog-elem-author">By Daniel Olagbami</div>
                                        <div class="blog-elem-date">May, 5, 2021</div>
                                    </div>
                                    <div class="blog-elem-title">Belgium Review 2021 </div>
                                    <div class="blog-elem-rating">
                                        <div class="blog-elem-rating-wrap">
                                            <div class="blog-elem-rating-list blog-elem-rating-empty">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="blog-elem-rating-list blog-elem-rating-fill">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="blog-elem-rating-val"> </div>
                                    </div>
                                </div></a></div>
                        <div class="blog-elem" data-rating="10"><a class="blog-elem-content" href="">
                                <div class="blog-elem-country"><img class="blog-elem-country-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/country/romania-flag.png" alt="Romania">
                                    <div class="blog-elem-country-name">Romania</div>
                                </div>
                                <div class="blog-elem-info">
                                    <div class="blog-elem-head">
                                        <div class="blog-elem-author">By Daniel Olagbami</div>
                                        <div class="blog-elem-date">May, 5, 2021</div>
                                    </div>
                                    <div class="blog-elem-title">Romania Review 2021 </div>
                                    <div class="blog-elem-rating">
                                        <div class="blog-elem-rating-wrap">
                                            <div class="blog-elem-rating-list blog-elem-rating-empty">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="blog-elem-rating-list blog-elem-rating-fill">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="blog-elem-rating-val"> </div>
                                    </div>
                                </div></a></div>
                        <div class="blog-elem" data-rating="7.1"><a class="blog-elem-content" href="">
                                <div class="blog-elem-country"><img class="blog-elem-country-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/country/hongkong-flag.png" alt="Hong Kong">
                                    <div class="blog-elem-country-name">Hong Kong</div>
                                </div>
                                <div class="blog-elem-info">
                                    <div class="blog-elem-head">
                                        <div class="blog-elem-author">By Daniel Olagbami</div>
                                        <div class="blog-elem-date">May, 5, 2021</div>
                                    </div>
                                    <div class="blog-elem-title">Hong Kong Review 2021 </div>
                                    <div class="blog-elem-rating">
                                        <div class="blog-elem-rating-wrap">
                                            <div class="blog-elem-rating-list blog-elem-rating-empty">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="blog-elem-rating-list blog-elem-rating-fill">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="blog-elem-rating-val"> </div>
                                    </div>
                                </div></a></div>
                        <div class="blog-elem" data-rating="5.9"><a class="blog-elem-content" href="">
                                <div class="blog-elem-country"><img class="blog-elem-country-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/country/poland-flag.png" alt="Poland">
                                    <div class="blog-elem-country-name">Poland</div>
                                </div>
                                <div class="blog-elem-info">
                                    <div class="blog-elem-head">
                                        <div class="blog-elem-author">By Daniel Olagbami</div>
                                        <div class="blog-elem-date">May, 5, 2021</div>
                                    </div>
                                    <div class="blog-elem-title">Poland Review 2021 </div>
                                    <div class="blog-elem-rating">
                                        <div class="blog-elem-rating-wrap">
                                            <div class="blog-elem-rating-list blog-elem-rating-empty">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="blog-elem-rating-list blog-elem-rating-fill">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="blog-elem-rating-val"> </div>
                                    </div>
                                </div></a></div>
                        <div class="blog-elem" data-rating="8.2"><a class="blog-elem-content" href="">
                                <div class="blog-elem-country"><img class="blog-elem-country-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/country/japan-flag.png" alt="Japan">
                                    <div class="blog-elem-country-name">Japan</div>
                                </div>
                                <div class="blog-elem-info">
                                    <div class="blog-elem-head">
                                        <div class="blog-elem-author">By Daniel Olagbami</div>
                                        <div class="blog-elem-date">May, 5, 2021</div>
                                    </div>
                                    <div class="blog-elem-title">Japan Review 2021 </div>
                                    <div class="blog-elem-rating">
                                        <div class="blog-elem-rating-wrap">
                                            <div class="blog-elem-rating-list blog-elem-rating-empty">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="blog-elem-rating-list blog-elem-rating-fill">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="blog-elem-rating-val"> </div>
                                    </div>
                                </div></a></div>
                        <div class="blog-elem" data-rating="7.1"><a class="blog-elem-content" href="">
                                <div class="blog-elem-country"><img class="blog-elem-country-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/country/sweden-flag.png" alt="Sweden">
                                    <div class="blog-elem-country-name">Sweden</div>
                                </div>
                                <div class="blog-elem-info">
                                    <div class="blog-elem-head">
                                        <div class="blog-elem-author">By Daniel Olagbami</div>
                                        <div class="blog-elem-date">May, 5, 2021</div>
                                    </div>
                                    <div class="blog-elem-title">Sweden Review 2021 </div>
                                    <div class="blog-elem-rating">
                                        <div class="blog-elem-rating-wrap">
                                            <div class="blog-elem-rating-list blog-elem-rating-empty">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="blog-elem-rating-list blog-elem-rating-fill">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="blog-elem-rating-val"> </div>
                                    </div>
                                </div></a></div>
                        <div class="blog-elem" data-rating="6.9"><a class="blog-elem-content" href="">
                                <div class="blog-elem-country"><img class="blog-elem-country-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/country/mexico-flag.png" alt="Mexico">
                                    <div class="blog-elem-country-name">Mexico</div>
                                </div>
                                <div class="blog-elem-info">
                                    <div class="blog-elem-head">
                                        <div class="blog-elem-author">By Daniel Olagbami</div>
                                        <div class="blog-elem-date">May, 5, 2021</div>
                                    </div>
                                    <div class="blog-elem-title">Mexico Review 2021 </div>
                                    <div class="blog-elem-rating">
                                        <div class="blog-elem-rating-wrap">
                                            <div class="blog-elem-rating-list blog-elem-rating-empty">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="blog-elem-rating-list blog-elem-rating-fill">
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                                <svg class="blog-elem-rating-star">
                                                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#star-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="blog-elem-rating-val"> </div>
                                    </div>
                                </div></a></div>
                    </div>
                    <button class="blog-more">Load More</button>
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