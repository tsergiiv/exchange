<?php
    /*
    Template Name: Country Single Post Template
    Template Post Type: post
    */
?>

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
                    for ($i = 1; $i <= 6; $i++) {
                        $rating = get_field_object('exchange_rating_' . $i) ?? null;
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
                    <h3>Rating <?= round($sum / $count, 1) ?> / 5</h3>
                    <?php foreach ($ratings as $rating): ?>
                        <?php if ($rating['value']): ?>
                            <p><?= $rating['label'] ?> <?= $rating['value'] ?>/5</p>
                        <?php endif ?>
                    <?php endforeach; ?>
                <?php endif ?>

                <?php if (get_field('type') == 'country'): ?>
                    <?php
                        $ratings = [];
                        for ($i = 1; $i <= 8; $i++) {
                            $rating = get_field_object('country_rating_' . $i) ?? null;
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

                    <?php
                        $posts = get_posts( array(
                            'post_type' => 'titles',
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>

                            <h3><?= the_field('country_rating_title') ?></h3>

                            <?php
                        }

                        wp_reset_postdata();
                    ?>

                    <h3><?= round($sum / $count, 1) ?> / 10</h3>

                    <?php
                        $n = 1;
                        foreach ($ratings as $rating):
                    ?>
                        <?php if ($rating['value']): ?>
                            <p><?= $rating['label'] ?> <?= $rating['value'] ?>/10 - <?= get_field('country_rating_table_why_' . $n++, 41) ?></p>
                        <?php endif ?>
                    <?php endforeach; ?>
                <?php endif ?>
            </div>

            <?= the_content() ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
