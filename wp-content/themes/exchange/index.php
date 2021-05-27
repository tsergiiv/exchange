<?php get_header(); ?>

	<!-- CONTENT -->
	<!-- #1 Enrich, Transform, Secure & Deliver Quality Data -->

	<main class="content">
		<div class="main-page">
			<?= get_template_part('blocks/block-main-top') ?>
			<?= get_template_part('blocks/block-clients') ?>
			<section class="container video">
				<video class="video-content" width="100" poster="<?php bloginfo('template_url'); ?>/assets/img/content/video/videoprev.png" muted="muted" playsinline>
					<source src="<?php bloginfo('template_url'); ?>/assets/img/content/video/video.mp4" type="video/mp4"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/video/videoprev.png" title="Your browser does not support the &lt;video&gt; tag">
				</video>
			</section>
			<div class="dark-bg-wrap">
				<?= get_template_part('blocks/block-features') ?>
			</div>
			<?= get_template_part('blocks/block-problems') ?>
			<?= get_template_part('blocks/block-testimonials') ?>
			<?= get_template_part('blocks/block-about') ?>
			<?= get_template_part('blocks/block-awards') ?>
			<?= get_template_part('blocks/block-insights') ?>
			<?= get_template_part('blocks/block-demo') ?>
		</div>
	</main>

<?php get_footer(); ?>