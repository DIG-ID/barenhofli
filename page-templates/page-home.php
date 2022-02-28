<?php
/**
 * Template Name: Home Page Template
 *
 * The template for displaying all content of the homepage.
 */

get_header(); ?>
<div id="primary" class="content-area">
	<?php get_template_part( 'template-parts/slider-banner' ); ?>
	<main id="main" class="site-main" role="main">
		<h1 class="screen-reader-text"><?php echo esc_html( get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ) ); ?></h1>
		<div class="container">
			<div class="row">
				<?php do_action( 'before_main_content' ); ?>
					<div class="row">
						<?php
						// Check rows exists.
						if ( have_rows( 'blocks' ) ) :

							// Loop through rows.
							while ( have_rows( 'blocks' ) ) :
								the_row();
								$block_image = get_sub_field( 'image' );
								$block_link  = get_sub_field( 'button_link' );
								?>
								<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
									<div class="main-block">
										<?php if ( $block_link ) : ?>
											<a href="<?php echo esc_url( $block_link ); ?>">
												<?php echo wp_get_attachment_image( $block_image, 'main-block-thumbnail' ); ?>
											</a>
										<?php else : ?>
											<?php echo wp_get_attachment_image( $block_image, 'main-block-thumbnail' ); ?>
										<?php endif; ?>
										<div class="main-block__content">
											<h2 class="main-block__title"><?php the_sub_field( 'title' ); ?></h2>
											<p class="main-block__text"><?php the_sub_field( 'description' ); ?></p>
											<div class="main-block__btn--wrapper">
												<?php if ( $block_link ) : ?>
													<a href="<?php echo esc_url( $block_link ); ?>" class="main-block__btn"><?php the_sub_field( 'button_title' ); ?></a>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
								<?php
							endwhile;

						else :
						// Do something...
						endif;
						?>

					</div><!-- .row -->
				<?php do_action( 'after_main_content' ); ?>
				<?php do_action( 'before_main_sidebar' ); ?>
					<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
				<?php do_action( 'after_main_sidebar' ); ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer();
