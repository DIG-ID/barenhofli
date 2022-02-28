<?php
/**
 * The default template for displaying single pages.
 */

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>	

		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<div class="col-12">
					<article class="block-image block-image--wide">
						<div class="block-image__content">
							<h1 class="block-image__title"><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
					</article>
				</div>
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
