<?php

namespace Elementor;

defined('ABSPATH') || exit;

class Ekit_Wb_420 extends Widget_Base {

	public function get_name() {
		return 'ekit_wb_420';
	}


	public function get_title() {
		return esc_html__( 'contactForm', 'elementskit-lite' );
	}


	public function get_categories() {
		return ['basic'];
	}


	public function get_icon() {
		return 'eicon-post-list';
	}


	protected function register_controls() {

		$this->start_controls_section(
			'content_section_420_0',
			array(
				'label' => esc_html__( 'Contacto', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'ekit_wb_420_email',
			array(
				'label' => esc_html__( 'Correo electrónico:', 'elementskit-lite' ),
				'type'  => Controls_Manager::TEXT,
				'default' =>  esc_html( 'ejemplo@ejemplo.com' ),
				'show_label' => true,
				'label_block' => false,
				'input_type' => 'text',
			)
		);

		$this->add_control(
			'ekit_wb_420_phone',
			array(
				'label' => esc_html__( 'Número telefónico:', 'elementskit-lite' ),
				'type'  => Controls_Manager::TEXT,
				'default' =>  esc_html( '8888-8888' ),
				'show_label' => true,
				'label_block' => false,
				'input_type' => 'text',
			)
		);

		$this->add_control(
			'ekit_wb_420_message',
			array(
				'label' => esc_html__( 'Mensaje:', 'elementskit-lite' ),
				'type'  => Controls_Manager::TEXTAREA,
				'default' =>  esc_html( 'Escriba aquí su mensaje...' ),
				'show_label' => true,
				'label_block' => true,
				'rows' => 5,
			)
		);

		$this->end_controls_section();

	}


	protected function render() {
	}


}
