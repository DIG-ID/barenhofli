<section class="slider-banner-wrapper">
	<div class="swiper slider-banner-container">
		<div class="swiper-wrapper">
			<?php
			if ( have_rows( 'slider' ) ) :
				while ( have_rows( 'slider' ) ) :
					the_row();
					$slider_image = get_sub_field( 'image' );
					?>
					<div class="slider-banner swiper-slide">
						<?php echo wp_get_attachment_image( $slider_image, 'full' ); ?>
						<div class="slider-banner__content">
							<div class="container">
								<div class="row justifiy-content-center">
									<div class="col-12">
										<h2 class="slider-banner__title"><?php the_sub_field( 'title' ); ?></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
		<?php
		$slider_banner_badge = get_field( 'award_badge' );
		if ( $slider_banner_badge ) :
			echo '<a class="slider-banner__badge" href="' . get_field( 'award_link' ) . '" target="_blank">' . wp_get_attachment_image( $slider_banner_badge, 'full' ) . '</a>';
		endif;
		?>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
			<a href="https://foratable.com/reserve/restaurant/b3baad689ed07019b5f32363a339e2ca#/table" target="_blank" class="button button__blue button__booking button__booking--mobile"><?php esc_html_e( 'RESERVE A TABLE', 'barenhofli' ); ?></a>
		</div>
	</div>
</div>
