<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container px-0">
			<div class="row">
				<section id="main-content" class="col-md-12 col-sm-12 col-xs-12">
					<div id="main-content__wrapper">
						<div class="not-found">
							<div class="not-found__title">
								<h1>404!<br><span>Error</span></h1>
							</div>
							<div class="not-found__content">
								<p class="not-found__subtitle"><?php esc_html_e( 'Sorry!', 'barenhofli' ); ?></p>
								<p class="not-found__description"><?php _e( 'THE PAGE YOU WERE LOOKING<br> FOR COULD NOT BE FOUND.', 'barenhofli' ); ?></p>
								<a href="<?php echo esc_url( site_url() ); ?>" class="not-found__back-to-home"><?php esc_html_e( 'Home', 'barenhofli' ); ?></a>
							</div>
						</div>
					</div><!-- #main-content__wrapper -->
				</section><!-- #main-content -->
			</div><!-- .row -->
		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
