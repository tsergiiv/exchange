<?php
    /*
    Template Name: Country Single Post Template Origin
    Template Post Type: post
    */
?>

<?php get_header(); ?>

<?php $country_id = get_field('country') ?>

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

            <table>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <?php $data = get_field_object('country_data_' . $i, $country_id); ?>
                    <?php if ($data['value']): ?>
                        <tr>
                            <td><?= $data['label'] ?></td>
                            <td><?= $data['value'] ?></td>
                        </tr>
                    <?php endif ?>
                <?php endfor ?>
            </table>

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
                <?php if (get_field('type') == 'country'): ?>
                    <?php
                        $ratings = [];
                        $group = get_field_object('country_rating_group');

                        $subfields = $group['sub_fields'];
                        $values = $group['value'];
                        for ($i = 1; $i <= 8; $i++) {
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

                    <h3><?= round($sum / $count, 0) ?> / 10</h3>

                    <table>
                        <thead>
                            <tr>
                                <?php
                                    $posts = get_posts( array(
                                        'post_type' => 'titles',
                                    ) );

                                    foreach( $posts as $post ){
                                        setup_postdata($post);
                                        ?>

                                        <th><?= the_field('country_rating_table_heading_1') ?></th>
                                        <th><?= the_field('country_rating_table_heading_2') ?></th>
                                        <th><?= the_field('country_rating_table_heading_3') ?></th>

                                        <?php
                                    }

                                    wp_reset_postdata();
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $n = 1;
                        foreach ($ratings as $rating):
                            ?>
                            <?php if ($rating['value']): ?>
                            <tr>
                                <td><?= $rating['label'] ?></td>
                                <td><?= $rating['value'] ?>/10</td>
                                <td><?= get_field('country_rating_table_why_' . $n++, 41) ?></td>
                            </tr>
                        <?php endif ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif ?>
            </div>

            <h2>Exchanges available in <?= get_the_title($country_id) ?></h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>Founded Date</th>
                        <th>Deposits</th>
                        <th>Min deposit</th>
                        <th>Promotion</th>
                        <th>Link to Review</th>
                    </tr>
                </thead>
                <tbody id="exchanges-table-body">

                </tbody>
            </table>

            <?= the_content() ?>
        </div>
    </section>
</div>

<script>
    let test_url = "/";
    let test_json = {
        'exchanges': [
            {
                'name': 'Coinbase',
                'rating': 5,
                'date': 'May 2014',
                'min': 15,
                'promotion': true,
                'link': 'https://www.coinbase.com/ru/'
            },
            {
                'name': 'Kraken',
                'rating': 4,
                'date': 'Jul 2011',
                'min': 50,
                'promotion': false,
                'link': 'https://www.kraken.com/'
            },
            {
                'name': 'Coinbase',
                'rating': 5,
                'date': 'May 2014',
                'min': 15,
                'promotion': true,
                'link': 'https://www.coinbase.com/ru/'
            }
        ]
    };
    let exchanges = test_json['exchanges'];
    for (let i = 0; i < exchanges.length; i++) {
        let exchange = exchanges[i];
        let result = `
            <tr>
                <td>${ exchange['name'] }</td>
                <td>${ exchange['rating'] }</td>
                <td>${ exchange['date'] }</td>
                <td></td>
                <td>$ ${ exchange['min'] }</td>
                <td>${ exchange['promotion'] ? 'Yes' : 'No' }</td>
                <td><a href="${ exchange['link'] }" target="_blank">Link</a></td>
            </tr>
        `;
        jQuery('#exchanges-table-body').append(result);
    }

    let country = '<?= get_the_title($country_id) ?>';
    // console.log(country);

    jQuery.ajax({
        url: test_url,
        dataType: 'json',
        type: 'post',
        data: {
            country: 'country',
        },
        success: function(data) {

        },
        error: function( jqXhr, textStatus, errorThrown ){
            console.log( errorThrown );
        }
    });
</script>

<?php get_footer(); ?>
