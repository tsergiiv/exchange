<div class="blog-elem blog-default" data-rating="<?= the_field('exchange_rating') ?>" data-blog-elem="<?= get_the_title() == 'Revolut' || get_the_title() == 'eToro' ? 'financial' : 'exchanges' ?>">
    <a class="blog-elem-content" href="<?= the_permalink() ?>">
        <div class="blog-elem-img">
            <img class="blog-elem-img-content" src="<?php bloginfo('template_url'); ?>/assets/img/content/exchange-logos/<?= basename(get_permalink()) ?>.png" alt="Blog content #1">
        </div>
        <div class="blog-elem-info">
            <div class="blog-elem-head">
                <div class="blog-elem-author">By <?= the_field('author') ?></div>
                <div class="blog-elem-date"><?= the_field('publish_date') ?></div>
            </div>
            <div class="blog-elem-title"><?= the_title() ?></div>
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
                    </div>
                </div>
                <div class="blog-elem-rating-val"></div>
            </div>
        </div>
    </a>
</div>