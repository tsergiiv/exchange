<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<div class="helpful article-help <?php echo esc_attr( $class ); ?>">

	<?php if ( false === $hidden ) : ?>
    <div class="helpful-header">
        <span class="article-help-title"><?php echo $helpful['heading'] ?></span>
    </div><!-- .helpful-header -->
	<?php endif; ?>

	<div class="helpful-content" role="alert">
		<span><?php echo $helpful['content']; ?></span>
	</div><!-- .helpful-content -->

	<?php if ( false === $hidden ) : ?>
	<div class="helpful-controls">

        <button class="helpful-pro helpful-button article-help-btn violet" type="button" data-value="pro" data-post="<?php echo $helpful['post_id']; ?>" role="button">
            <?php echo $helpful['button_pro']; ?>
            <?php echo $helpful['counter'] ? sprintf( '<span class="helpful-counter">%s</span>', $helpful['count_pro'] ) : ''; ?>
        </button>

        <button class="helpful-contra helpful-button article-help-btn orange" type="button" data-value="contra" data-post="<?php echo $helpful['post_id']; ?>" role="button">
            <?php echo $helpful['button_contra']; ?>
            <?php echo $helpful['counter'] ? sprintf( '<span class="helpful-counter">%s</span>', $helpful['count_contra'] ) : ''; ?>
        </button>

	</div><!-- .helpful-controls -->
	<?php endif; ?>

	<?php if ( 'on' === $helpful['credits'] && false === $hidden ) : ?>
	<div class="helpful-footer">
		<?php
		/* translators: %s = credits link */
		printf( _x( 'Powered by %s', 'credits', 'helpful' ), $helpful['credits_html'] );
		?>
	</div><!-- .helpful-footer -->
	<?php endif; ?>

</div><!-- .helpful -->
