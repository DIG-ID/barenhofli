<?php
/**
 * TinyMCE Custom Control
 *
 * @author Anthony Hortin <http://maddisondesigns.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 * @link https://github.com/maddisondesigns
 *
 */
if ( class_exists( 'WP_Customize_Control' ) ) {

	class Kreuz_TinyMCE_Custom_Control extends WP_Customize_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'tinymce_editor';
		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {
			wp_enqueue_script( 'kreuzbern-custom-controls-js', get_template_directory_uri() . '/inc/customizer/custom-controls/js/customizer.js', array( 'jquery' ), '1.0', true );
			wp_enqueue_style( 'kreuzbern-custom-controls-css', get_template_directory_uri() . '/inc/customizer/custom-controls/css/customizer.css', array(), '1.0', 'all' );
			wp_enqueue_editor();
		}
		/**
		 * Pass our TinyMCE toolbar string to JavaScript
		 */
		public function to_json() {
			parent::to_json();
			$this->json['skyrockettinymcetoolbar1'] = isset( $this->input_attrs['toolbar1'] ) ? esc_attr( $this->input_attrs['toolbar1'] ) : 'bold italic bullist numlist alignleft aligncenter alignright link';
			$this->json['skyrockettinymcetoolbar2'] = isset( $this->input_attrs['toolbar2'] ) ? esc_attr( $this->input_attrs['toolbar2'] ) : '';
			$this->json['skyrocketmediabuttons']    = isset( $this->input_attrs['mediaButtons'] ) && ( true === $this->input_attrs['mediaButtons'] ) ? true : false;
		}
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {
			?>
			<div class="tinymce-control">
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php if ( ! empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>
				<textarea id="<?php echo esc_attr( $this->id ); ?>" class="customize-control-tinymce-editor" <?php $this->link(); ?>><?php echo esc_html( $this->value() ); ?></textarea>
			</div>
			<?php
		}
	}
}
