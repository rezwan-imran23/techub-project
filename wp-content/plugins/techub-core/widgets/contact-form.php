<?php
namespace Techub_Core\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Techub_Contact_Form extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'techub-contact-form';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Techub Contact Form', 'elementor-hello-world' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-columns';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'techub-cat-widget' ];
	}


	

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'elementor-hello-world' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */

	 



	protected function register_controls() {

		$this-> register_controls_section();
		$this-> style_tab_content();

	}

	//register control section

	protected function  register_controls_section(){



		//Contact form Start

		$this->start_controls_section(
			'contact_section',
			[
				'label' => esc_html__( 'Button', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'techub_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'This is title', 'textdomain' ),
				'placeholder' => esc_html__( 'Title text here', 'textdomain' ),
			]
		);

		$this->add_control(
			'techub_shortcode',
			[
				'label' => esc_html__( 'Shortcode Here', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Please insert your shortcode', 'textdomain' ),
				'placeholder' => esc_html__( 'Shortcode here', 'textdomain' ),
			]
		);



		$this->end_controls_section();

		//Contact form Start End


	}

   //style tabs control section

	protected function  style_tab_content(){

		$this->start_controls_section(
			'techub_style_section',
			[
				'label' => esc_html__( 'Style', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .el-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		
	}

	
	

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

	
		?>


 <!-- Contact inner page area start -->
 <section class="tp-contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div id="contact-form" action="assets/mail.php" method="POST" class="tp-contact-inner-page-wrapper">
                            <div class="tp-contact-box tp-contact-inner-page-box mb-120">
                                <h3 class="tp-contact-title tp-contact-title-inner-page wow fadeInUp">Send your message</h3>
								<?php if (!empty($settings['techub_shortcode'])):?>
								<?php echo do_shortcode($settings['techub_shortcode']);?>
								<?php else: ?>
									<div class="alert alert-danger" role="alert">
											A simple danger alert—check it out!
								    </div>
								<?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact inner pagearea end -->
		
		<?php
	}
	

	
}

$widgets_manager->register( new Techub_Contact_Form() );