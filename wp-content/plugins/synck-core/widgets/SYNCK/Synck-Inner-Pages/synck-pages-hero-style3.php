<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor synck synckpagesherostyle3 Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_synck_synckpagesherostyle3_Widget extends \Elementor\Widget_Base {

    /**
     * Get widget name.
     *
     * Retrieve oEmbed widget name.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget name.
     */
    public function get_name() {
        return 'synckpagesherostyle3';
    }

    /**
     * Get widget title.
     *
     * Retrieve oEmbed widget title.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__( 'Pages Hero style3 Section', 'synck-core' );
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the oEmbed widget belongs to.
     *
     * @since 1.0.0
     * @access public
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'synck' ];
    }

    /**
     * Register oEmbed widget controls.
     *
     * Add input fields to allow the user to customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls() {

        $this->start_controls_section(
            'section1',
            [
                'label' => esc_html__( 'Hero Section', 'synck-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->start_controls_tabs(
        'style_tabs1'
        );

        $this->start_controls_tab(
            'style_normal_tab1',
            [
               'label' => esc_html__( 'Content Section', 'synck-core' ),
            ]
        );

        $this->add_control(
            'title_heading', [
                'label'         => esc_html__( 'Title & Heading', 'synck-core' ),
                'type'          => \Elementor\Controls_Manager::WYSIWYG,
                'label_block'   => true,
            ]
        );

        $this->add_control(
            'content', [
                'label'         => esc_html__( 'Content', 'synck-core' ),
                'type'          => \Elementor\Controls_Manager::TEXTAREA,
                'label_block'   => true,
            ]
        );


        $this->end_controls_tab();

        $this->start_controls_tab(
            'style_normal_tab2',
            [
               'label' => esc_html__( 'Image Section', 'synck-core' ),
            ]
        );

        $this->add_control(
            'hero_bg_img',
            [
                'label'     => esc_html__( 'Hero Image', 'synck-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        /*-----------------------------------------Hero section Content styling------------------------------------*/

        //START

        $this->start_controls_section(
            'synckpagesherostyle3_design_option',
            [
                'label'         => esc_html__( 'Hero Section Style','synck-core' ),
                'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs(
        'style_tabs'
        );

        $this->start_controls_tab(
            'style_normal_tab',
            [
               'label' => esc_html__( 'Content', 'synck-core' ),
            ]
        );

        $this->add_control(
            'hero_content_color',
            [
                'label'         => esc_html__( 'Content Text Color', 'synck-core' ),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .blog-details-header-area .blog-details-header-content-body .section-header p'=> 'color: {{VALUE}} !important;',
                ],

            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'          => 'hero_content_typography',
                'label'         => esc_html__( 'Content Typography', 'synck-core' ),
                'selector'      => 
                    '{{WRAPPER}} .blog-details-header-area .blog-details-header-content-body .section-header p',
            ]
        );

        $this->add_responsive_control(
            'hero_content_margin',
            [
                'label'         => __( 'Content Margin', 'synck-core' ),
                'type'          => elementor\Controls_Manager::DIMENSIONS,
                'size_units'    => [ 'px', '%', 'em' ],
                'selectors'     => [
                    '{{WRAPPER}} .blog-details-header-area .blog-details-header-content-body .section-header p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'hero_content_padding',
            [
                'label'         => __( 'Content Padding', 'synck-core' ),
                'type'          => elementor\Controls_Manager::DIMENSIONS,
                'size_units'    => [ 'px', '%', 'em' ],
                'selectors'     => [
                    '{{WRAPPER}} .blog-details-header-area .blog-details-header-content-body .section-header p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //END
        $this->end_controls_tab();        

        $this->end_controls_tabs(); 

        $this->end_controls_section();

        /*-----------------------------------------section BG Content styling------------------------------------*/

        //START

        $this->start_controls_section(
            'synckpagesherobg_design_option',
            [
                'label'         => esc_html__( 'Hero Background Section Style','synck-core' ),
                'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs(
        'style_tabs_0_2'
        );

        $this->start_controls_tab(
            'style_normal_tab_04',
            [
               'label' => esc_html__( 'Background', 'synck-core' ),
            ]
        );      

        $this->add_control(
            'section_bg_color',
            [
                'label'         => esc_html__( 'Section Background Color', 'synck-core' ),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}}  .blog-details-header-area'=> 'background-color: {{VALUE}} !important;',
                ],

            ]
        );

        $this->add_control(
            'sectionbadge_bg_color',
            [
                'label'         => esc_html__( 'Badge Background Color', 'synck-core' ),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}}  .blog-details-header-area .blog-details-header-content-body .section-header .section-subtitle'=> 'background-color: {{VALUE}} !important;',
                ],

            ]
        );

        $this->end_controls_tab(); 

        $this->end_controls_tabs();

        $this->end_controls_section();
}

    /**
     * Render oEmbed widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {

        $synckpagesherostyle3_output = $this->get_settings_for_display(); ?>

<!-- Blog Breadcrumb -->
<section class="blog-details-header-area">
<div class="custom-container">
<div class="blog-details-header-content-body d-flex align-items-center">
    <div class="section-header">
        <?php echo($synckpagesherostyle3_output['title_heading']); ?>
        <p><?php echo ($synckpagesherostyle3_output['content']); ?></p>
    </div>
    <div class="img-box">
        <img src="<?php echo esc_url(wp_get_attachment_image_url( $synckpagesherostyle3_output['hero_bg_img']['id'], 'full' ));?>" alt="Blog"/>
    </div>
</div>
</div>
</section>

    <?php }
}

