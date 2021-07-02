<?php get_header(); ?>

    <div class="post-wrap container">
        <section class="post-content">
            <div class="post-content-wrap">
                <h1><?= the_title() ?></h1>
                <p><?= the_field('subtitle') ?></p>

                <?php if (get_field('author_full_name')): ?>
                <div class="post-author">
                    <div class="post-author-wrap"><img class="post-content-person-img post-author-img" src="<?= the_field('author_avatar') ?>" alt="">
                        <div class="post-author-info">
                            <div class="post-content-position">Author</div>
                            <div class="post-content-name"><?= the_field('author_full_name') ?></div>
                        </div>
                    </div>
                </div>
                <?php endif ?>

                <div class="post-tag">
                    <?php
                    $tags = get_the_tags();
                    if ($tags):
                        foreach ( $tags as $tag ) {
                            ?>

                            <span class="btn-blue post-tag-link">#<?= $tag->name ?></span>

                            <?php
                        }
                    endif;
                    ?>
                </div>

                <div>
                    <?php if (get_field('type') == 'exchange'): ?>
                    <?php
                        $ratings = [];
                        $group = get_field_object('exchange_rating_group');

                        $subfields = $group['sub_fields'];
                        $values = $group['value'];
                        for ($i = 1; $i <= 6; $i++) {
                            $rating = $subfields[$i - 1] ?? null;
                            $rating['value'] = $values[$rating['name']];
                            $ratings[] = $rating;
                        }


                        $average = 0;
                        $sum = 0;
                        $count = 0;

                        foreach ($ratings as $rating) {
                            if ($rating['value']) {
                                $sum += $rating['value'];
                                $count++;
                            }
                        }
                    ?>
                    <h3>Rating <?= round($sum / $count, 0) ?> / 5</h3>
                    <?php foreach ($ratings as $rating): ?>
                        <?php if ($rating['value']): ?>
                            <p><?= $rating['label'] ?> <?= $rating['value'] ?>/5</p>
                        <?php endif ?>
                    <?php endforeach; ?>
                    <?php endif ?>
                </div>

                <?= the_content() ?>
            </div>
        </section>

        <?php
            $orig_post = $post;
            global $post;
            $tags = wp_get_post_tags(get_the_ID());
            if ($tags) {
                $tag_ids = array();
                ?>
                <section class="article-slider container"><img class="article-slider-bg-one" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-1.svg" alt=""><img class="article-slider-bg-two" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-2.svg" alt=""><img class="article-slider-bg-three" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-3.svg" alt="">
                    <div class="article-slider-head">
                        <div class="article-slider-head-wrap">
                            <div class="info-wrap-heading big">Related stories</div>
                            <div class="slider-button-wrap article-slider-btn">
                                <button class="slider-button slider-button-prev article-prev">
                                    <svg class="slider-button-icon">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-l"></use>
                                    </svg>
                                </button>
                                <button class="slider-button slider-button-next article-next">
                                    <svg class="slider-button-icon">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-r"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="article-slider-wrap">
                        <?php
                        foreach($tags as $individual_tag)
                            $tag_ids[] = $individual_tag->term_id;
                        $args = array(
                            'tag__in' => $tag_ids,
                            'post__not_in' => array(get_the_ID()),
                            'posts_per_page' => 10, // Number of related posts that will be shown.
                            'ignore_sticky_posts' => 1
                        );
                        $my_query = new wp_query( $args );
                        if( $my_query->have_posts() ) {
                            while( $my_query->have_posts() ) {
                                $my_query->the_post(); ?>

                                <div class="article-slider-elem">
                                    <article class="article-elem">
                                        <a class="article-cover" href="<?= the_permalink() ?>">
                                            <img src="<?= the_post_thumbnail() ?>" alt="Article">
                                        </a>
                                        <div class="article-info">
                                            <div class="article-tag">Article</div>
                                            <div class="article-date"><?= strtolower(get_the_date()) ?> <?= the_time() ?></div>
                                        </div>
                                        <div class="article-name"><?= the_title() ?></div>
                                        <a class="read-more article-read-more" href="<?= the_permalink() ?>">Read more</a>
                                    </article>
                                </div>

                                <?php
                            }
                        }
                        ?>
                    </div>
                </section>
                <?php
            }
            $post = $orig_post;
            wp_reset_query();
        ?>
    </div>

<?php get_footer(); ?>
