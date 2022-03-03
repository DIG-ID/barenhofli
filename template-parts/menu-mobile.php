<div id="opener__menu" class="closed">
	<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'container_class' => 'navbar-collapse',
			'container_id'    => 'navbar-mobile',
			'menu_class'      => 'navbar-nav ml-auto',
			'fallback_cb'     => '',
			'menu_id'         => 'main-menu',
			'depth'           => 2,
			'walker'          => '',
		)
	);
	?>
	<?php if ( is_active_sidebar( 'lang-switcher-mobile' ) ) : ?>
		<div id="lang-switcher" class="lang-switcher-mobile">
			<?php dynamic_sidebar( 'lang-switcher-mobile' ); ?>
		</div>
	<?php endif; ?>
	<div class="menu__container--mobile">
		<div class="row">
			<div class="col-6 col-sm-6 col-md-6 col-lg-6 button__tel--wrapper">
				<a href="tel:0041313299595" class="main-block__btn button__menumob"><?php esc_html_e( 'Telephone', 'barenhofli' ); ?></a>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-6 button__email--wrapper">
				<a href="mailto:info@kreuzbern.ch" class="main-block__btn button__menumob"><?php esc_html_e( 'Send E-mail', 'barenhofli' ); ?></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 button__booking--wrapper">
				<a href="https://foratable.com/reserve/restaurant/b3baad689ed07019b5f32363a339e2ca#/table" target="_blank" class="main-block__btn main-block__btn--dark button__menumob"><?php esc_html_e( 'RESERVE A TABLE', 'barenhofli' ); ?></a>
			</div>
		</div>
	</div>
</div>
