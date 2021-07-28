<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package inspirfy
 */

get_header();
?>

    <main class="content">
        <div class="not-found-info container middle">
            <div class="not-found-info-wrap">
                <div class="section-title sm">oh sorry</div>
                <h1 class="section-header"><span class="word-accent orange">404<span class="word-accent-square left"></span><span class="word-accent-square right"></span></span></h1>
                <div class="not-found-info-desc">Page not found</div><a class="btn not-found-btn" href="<?= home_url() ?>"><span class="btn-arrow"></span><span class="btn-text">Go home</span></a>
            </div>
						<picture>
							<source type="image/webp" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/error/error-page-img-2x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/error/error-page-img-2x.webp 2x">
							<source type="image/png" media="(min-width: 552px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/error/error-page-img-2x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/error/error-page-img-2x.png 2x">
							<source type="image/webp" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/error/error-page-img-1x.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/content/error/error-page-img-1x.webp 2x">
							<source type="image/png" media="(min-width: 0px)" data-srcset="<?php bloginfo('template_url'); ?>/assets/img/content/error/error-page-img-1x.png 1x, <?php bloginfo('template_url'); ?>/assets/img/content/error/error-page-img-1x.png 2x">
							<img class="not-found-img lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/error/error-page-img-2x.webp" alt="Not found panda">
						</picture>
        </div>
    </main>

<?php
get_footer('404');
