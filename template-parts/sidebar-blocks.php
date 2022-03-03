<?php

$sidebar_blocks = get_field( 'sidebar_blocks' );

if ( $sidebar_blocks ) :
	foreach ( $sidebar_blocks as $sidebar_block ) :

		$block_title    = get_the_title( $sidebar_block->ID );
		$block_template = 'block-sidebar';

		if ( 'dark' === get_field( 'block_template', $sidebar_block->ID ) ) :
			$block_template = 'block-sidebar block-sidebar--inverted';
		endif;
		?>
		<div id="<?php echo str_replace(' ', '-', strtolower( $block_title ) ); ?>" class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 px-15">
			<div class="<?php echo $block_template; ?>">
				<?php if ( get_field( 'block_display_badge', $sidebar_block->ID ) ) : ?>
					<span class="block-sidebar__badge"><?php the_field( 'block_badge_content', $sidebar_block->ID ); ?></span>
				<?php endif; ?>
				<h3 class="block-sidebar__title"><?php echo esc_html( $block_title ); ?></h3>
				<p class="block-sidebar__text"><?php the_field( 'block_description', $sidebar_block->ID ); ?></p>
				<?php
				if ( have_rows( 'block_buttons', $sidebar_block->ID ) ) :
					while ( have_rows( 'block_buttons', $sidebar_block->ID ) ) :
						the_row();
						$block_link_in_new_window = '';
						if ( get_sub_field( 'open_in_new_window', $sidebar_block->ID ) ) :
							$block_link_in_new_window = 'target="_blank"';
						endif;
						echo '<a class="block-sidebar__btn"' . $block_link_in_new_window . ' href="' . get_sub_field( 'button_link', $sidebar_block->ID ) . '">' . get_sub_field( 'button_title', $sidebar_block->ID ) . '</a>';
					endwhile;
				endif;
				?>
			</div>
		</div>
		<?php
	endforeach;
endif;
