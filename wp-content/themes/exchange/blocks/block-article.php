<div class="blog-article-elem">
    <article class="article-elem">
        <a class="article-cover" href="<?= the_permalink() ?>">
            <img src="<?= the_post_thumbnail() ?>" alt="Article #1">
        </a>
        <div class="article-info">
            <div class="article-tag">Article</div>
            <div class="article-date"><?= get_the_date() ?></div>
        </div>
        <div class="article-name"><?= the_title() ?></div>
    </article>
</div>