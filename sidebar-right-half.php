<?php
/**
 * @package Responsive
 */
?>

		<div id="widgets" class="grid col-460 fit">
		<?php do_action( 'before_sidebar' ); ?>

			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				<div class="widget-wrapper">
					<div class="widget-title"><?php _e( 'In Archive', 'responsive' ); ?></div>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of sidebar-right-half ?>

		</div><!-- end of #widgets -->