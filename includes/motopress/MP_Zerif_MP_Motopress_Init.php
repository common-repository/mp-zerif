<?php

/*
 * Add New Buttons styles Brand Button, White Button,  
 * Brand Table, Brand Accordion, Read More Post Grid 
 * Change default classes
 */

class MP_Zerif_MP_Motopress_Init {

	private $prefix;

	public function __construct( $prefix ) {
		$this->prefix = $prefix;
		add_action( 'mp_library', array( $this, 'extend_style_classes' ), 11, 1 );
	}

	/**
	 * Get prefix.
	 *
	 * @access public
	 * @return sting
	 */
	private function get_prefix() {
		return $this->prefix . '_';
	}

	function extend_style_classes( $motopressCELibrary ) {

		$color_primary = '#e96656';
		$color_second  = '#1e9e6b';

		if ( isset( $motopressCELibrary ) ) {

// button
			$buttonObj = &$motopressCELibrary->getObject( 'mp_button' );
			if ( $buttonObj ) {
				$styleClasses                                                  = &$buttonObj->getStyle( 'mp_style_classes' );
				$styleClasses['predefined']['color']['values']['theme-brand']  = array(
					'class' => 'mp-theme-button-brand',
					'label' => __( 'Theme Red', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-green']  = array(
					'class' => 'mp-theme-button-green',
					'label' => __( 'Theme Green', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-blue']   = array(
					'class' => 'mp-theme-button-blue',
					'label' => __( 'Theme Blue', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-yellow'] = array(
					'class' => 'mp-theme-button-yellow',
					'label' => __( 'Theme Yellow', 'mp-zerif' )
				);
				$styleClasses['default']                                       = array(
					'mp-theme-button-brand',
					'motopress-btn-size-middle',
					'motopress-btn-icon-indent-middle',
					'motopress-btn-rounded'
				);
			}

// accordion
			$accordionObj = &$motopressCELibrary->getObject( 'mp_accordion' );
			if ( $accordionObj ) {
				$styleClasses                                                  = &$accordionObj->getStyle( 'mp_style_classes' );
				$styleClasses['predefined']["style"]["values"]['theme-brand']  = array(
					'class' => 'mp-theme-accordion-brand',
					'label' => __( 'Theme Brand', 'mp-zerif' )
				);
				$styleClasses['predefined']['style']['values']['theme-green']  = array(
					'class' => 'mp-theme-accordion-green',
					'label' => __( 'Theme Green', 'mp-zerif' )
				);
				$styleClasses['predefined']['style']['values']['theme-blue']   = array(
					'class' => 'mp-theme-accordion-blue',
					'label' => __( 'Theme Blue', 'mp-zerif' )
				);
				$styleClasses['predefined']['style']['values']['theme-yellow'] = array(
					'class' => 'mp-theme-accordion-yellow',
					'label' => __( 'Theme Yellow', 'mp-zerif' )
				);
				$styleClasses['default']                                       = array(
					'mp-theme-accordion-brand'
				);
			}
// table
			$tableObj = &$motopressCELibrary->getObject( 'mp_table' );
			if ( $tableObj ) {
				$styleClasses = &$tableObj->getStyle( 'mp_style_classes' );
				$styleClasses['default'] = array(
					'motopress-table-first-col-left'
				);
			}
// list
			$listObj = &$motopressCELibrary->getObject( 'mp_list' );
			if ( $listObj ) {
				$listObj->parameters['icon_color']['default']            = $color_primary;
				$listObj->parameters['use_custom_icon_color']['default'] = true;
			}
// icon
			$iconObj = &$motopressCELibrary->getObject( 'mp_icon' );
			if ( $iconObj ) {
				$iconObj->parameters['icon_color']['default']                  = '';
				$iconObj->parameters['bg_shape']['default']                    = 'circle';
				$iconObj->parameters['icon_background_size']['default']        = 2;
				$iconObj->parameters['bg_color']['default']                    = '';
				$styleClasses                                                  = &$iconObj->getStyle( 'mp_style_classes' );
				$styleClasses['predefined']['color']['values']['theme-brand']  = array(
					'class' => 'mp-theme-icon-bg-brand',
					'label' => __( 'Theme Brand', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-green']  = array(
					'class' => 'mp-theme-icon-bg-green',
					'label' => __( 'Theme Green', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-blue']   = array(
					'class' => 'mp-theme-icon-bg-blue',
					'label' => __( 'Theme Blue', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-yellow'] = array(
					'class' => 'mp-theme-icon-bg-yellow',
					'label' => __( 'Theme Yellow', 'mp-zerif' )
				);
				$styleClasses['default']                                       = array(
					'mp-theme-icon-bg-brand',
				);
			}
// button inner
			$buttonGroupInnerObj = &$motopressCELibrary->getObject( 'mp_button_inner' );
			if ( $buttonGroupInnerObj ) {

				$buttonGroupInnerObj->parameters['color']['list']['mp-theme-button-brand']  = __( 'Theme Red', 'mp-zerif' );
				$buttonGroupInnerObj->parameters['color']['list']['mp-theme-button-blue']   = __( 'Theme Blue', 'mp-zerif' );
				$buttonGroupInnerObj->parameters['color']['list']['mp-theme-button-green']  = __( 'Theme Green', 'mp-zerif' );
				$buttonGroupInnerObj->parameters['color']['list']['mp-theme-button-yellow'] = __( 'Theme Yellow', 'mp-zerif' );
				$styleClasses                                                               = &$buttonGroupInnerObj->getStyle( 'mp_style_classes' );

				$styleClasses['predefined']['color']['values']['theme-brand']  = array(
					'class' => 'mp-theme-button-brand',
					'label' => __( 'Theme Red', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-blue']   = array(
					'class' => 'mp-theme-button-blue',
					'label' => __( 'Theme Blue', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-green']  = array(
					'class' => 'mp-theme-button-green',
					'label' => __( 'Theme Green', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-yellow'] = array(
					'class' => 'mp-theme-button-yellow',
					'label' => __( 'Theme Yellow', 'mp-zerif' )
				);
				$buttonGroupInnerObj->parameters['color']['default']           = 'mp-theme-button-brand';

			}

			// download button
			$downloadButtonObj = &$motopressCELibrary->getObject( 'mp_download_button' );
			if ( $downloadButtonObj ) {
				$styleClasses = &$downloadButtonObj->getStyle( 'mp_style_classes' );

				$styleClasses['predefined']['color']['values']['theme-brand']  = array(
					'class' => 'mp-theme-button-brand',
					'label' => __( 'Theme Red', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-blue']   = array(
					'class' => 'mp-theme-button-blue',
					'label' => __( 'Theme Blue', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-green']  = array(
					'class' => 'mp-theme-button-green',
					'label' => __( 'Theme Green', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-yellow'] = array(
					'class' => 'mp-theme-button-yellow',
					'label' => __( 'Theme Yellow', 'mp-zerif' )
				);
				$styleClasses['default']                                       = array(
					'mp-theme-button-brand',
					'motopress-btn-size-middle',
					'motopress-btn-icon-indent-middle',
					'motopress-btn-rounded'
				);
			}
// service box
			$serviceBoxObj = &$motopressCELibrary->getObject( 'mp_service_box' );
			if ( $serviceBoxObj ) {
				$serviceBoxObj->parameters['heading_tag']['default']                         = 'h4';
				$serviceBoxObj->parameters['icon_size']['default']                           = 'large';
				$serviceBoxObj->parameters['icon_custom_color']['default']                   = '#ffffff';
				$serviceBoxObj->parameters['icon_background_type']['default']                = 'circle';
				$serviceBoxObj->parameters['icon_background_size']['default']                = 2;
				$serviceBoxObj->parameters['icon_background_color']['default']               = '';
				$serviceBoxObj->parameters['button_custom_bg_color']['default']              = $color_primary;
				$serviceBoxObj->parameters['button_custom_text_color']['default']            = '#ffffff';
				$serviceBoxObj->parameters['icon_color']['list']['mp-theme-icon-brand']      = __( 'Theme Brand', 'mp-zerif' );
				$serviceBoxObj->parameters['icon_color']['list']['mp-theme-icon-blue']       = __( 'Theme Blue', 'mp-zerif' );
				$serviceBoxObj->parameters['icon_color']['list']['mp-theme-icon-green']      = __( 'Theme Green', 'mp-zerif' );
				$serviceBoxObj->parameters['icon_color']['list']['mp-theme-icon-yellow']     = __( 'Theme Yellow', 'mp-zerif' );
				$serviceBoxObj->parameters['icon_color']['default']                          = 'mp-theme-icon-brand';
				$serviceBoxObj->parameters['button_color']['list']['mp-theme-button-brand']  = __( 'Theme Brand', 'mp-zerif' );
				$serviceBoxObj->parameters['button_color']['list']['mp-theme-button-blue']   = __( 'Theme Blue', 'mp-zerif' );
				$serviceBoxObj->parameters['button_color']['list']['mp-theme-button-green']  = __( 'Theme Green', 'mp-zerif' );
				$serviceBoxObj->parameters['button_color']['list']['mp-theme-button-yellow'] = __( 'Theme Yellow', 'mp-zerif' );
				$serviceBoxObj->parameters['button_color']['default']                        = 'mp-theme-button-brand';
				$styleClasses                                                                = &$serviceBoxObj->getStyle( 'mp_style_classes' );
				$styleClasses['predefined']['color']['values']['theme-brand']                = array(
					'class' => 'motopress-service-box-brand',
					'label' => __( 'Theme Brand', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-blue']                 = array(
					'class' => 'motopress-service-box-blue',
					'label' => __( 'Theme Blue', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-green']                = array(
					'class' => 'motopress-service-box-green',
					'label' => __( 'Theme Green', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-yellow']               = array(
					'class' => 'motopress-service-box-yellow',
					'label' => __( 'Theme Yellow', 'mp-zerif' )
				);
				$styleClasses['default']                                                     = array(
					'motopress-service-box-brand'
				);
			}
// call
			$ctaObj = &$motopressCELibrary->getObject( 'mp_cta' );
			if ( $ctaObj ) {
				$ctaObj->parameters['style_bg_color']['default']                      = $color_primary;
				$ctaObj->parameters['icon_color']['list']['mp-theme-icon-white']      = __( 'Theme White', 'mp-zerif' );
				$ctaObj->parameters['icon_color']['list']['mp-theme-icon-red']        = __( 'Theme Brand', 'mp-zerif' );
				$ctaObj->parameters['icon_color']['list']['mp-theme-icon-blue']       = __( 'Theme Blue', 'mp-zerif' );
				$ctaObj->parameters['icon_color']['list']['mp-theme-icon-green']      = __( 'Theme Green', 'mp-zerif' );
				$ctaObj->parameters['icon_color']['list']['mp-theme-icon-yellow']     = __( 'Theme Yellow', 'mp-zerif' );
				$ctaObj->parameters['icon_color']['default']                          = 'mp-theme-icon-white';
				$ctaObj->parameters['style']['list']['brand']                         = __( 'Theme Brand', 'mp-zerif' );
				$ctaObj->parameters['style']['list']['blue']                          = __( 'Theme Blue', 'mp-zerif' );
				$ctaObj->parameters['style']['list']['green']                         = __( 'Theme Green', 'mp-zerif' );
				$ctaObj->parameters['style']['list']['yellow']                        = __( 'Theme Yellow', 'mp-zerif' );
				$ctaObj->parameters['style']['default']                               = 'brand';
				$ctaObj->parameters['shape']["default"]                               = "squere";
				$ctaObj->parameters['style_text_color']['default']                    = '#ffffff';
				$ctaObj->parameters['button_color']['list']['mp-theme-button-white']  = __( 'Theme White', 'mp-zerif' );
				$ctaObj->parameters['button_color']['list']['mp-theme-button-brand']  = __( 'Theme Brand', 'mp-zerif' );
				$ctaObj->parameters['button_color']['list']['mp-theme-button-blue']   = __( 'Theme Blue', 'mp-zerif' );
				$ctaObj->parameters['button_color']['list']['mp-theme-button-green']  = __( 'Theme Green', 'mp-zerif' );
				$ctaObj->parameters['button_color']['list']['mp-theme-button-yellow'] = __( 'Theme Yellow', 'mp-zerif' );
				$ctaObj->parameters['button_color']['default']                        = 'mp-theme-button-white';
			}
// timer
			$countdownTimerObj = &$motopressCELibrary->getObject( 'mp_countdown_timer' );
			if ( $countdownTimerObj ) {
				$countdownTimerObj->parameters['font_color']['default']        = '';
				$countdownTimerObj->parameters['block_color']['default']       = '';
				$styleClasses                                                  = &$countdownTimerObj->getStyle( 'mp_style_classes' );
				$styleClasses['predefined']['color']['values']['theme-brand']  = array(
					'class' => 'mp-theme-countdown-timer-brand',
					'label' => __( 'Theme Brand', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-blue']   = array(
					'class' => 'mp-theme-countdown-timer-blue',
					'label' => __( 'Theme Blue', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-green']  = array(
					'class' => 'mp-theme-countdown-timer-green',
					'label' => __( 'Theme Green', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-yellow'] = array(
					'class' => 'mp-theme-countdown-timer-yellow',
					'label' => __( 'Theme Yellow', 'mp-zerif' )
				);
				$styleClasses['default']                                       = array(
					'mp-theme-countdown-timer-brand',
				);
			}
// chart
			$chartObj = &$motopressCELibrary->getObject( 'mp_google_chart' );
			if ( $chartObj ) {
				$chartObj->parameters['colors']['default'] = $color_primary . ',' . $color_second;
			}
// modal
			$modalObj = &$motopressCELibrary->getObject( 'mp_modal' );
			if ( $modalObj ) {
				$styleClasses = &$modalObj->getStyle( 'mp_style_classes' );

				$styleClasses['predefined']['color']['values']['theme-brand']  = array(
					'class' => 'mp-theme-button-brand',
					'label' => __( 'Theme Brand', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-blue']   = array(
					'class' => 'mp-theme-button-blue',
					'label' => __( 'Theme Blue', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-green']  = array(
					'class' => 'mp-theme-button-green',
					'label' => __( 'Theme Green', 'mp-zerif' )
				);
				$styleClasses['predefined']['color']['values']['theme-yellow'] = array(
					'class' => 'mp-theme-button-yellow',
					'label' => __( 'Theme Yellow', 'mp-zerif' )
				);
				$styleClasses['default']                                       = array(
					'mp-theme-button-brand',
					'motopress-btn-size-middle',
					'motopress-btn-icon-indent-middle'
				);
			}

			// tab
			$tabObj = &$motopressCELibrary->getObject( 'mp_tab' );
			if ( $tabObj ) {
				$tabObj->parameters['icon_color']['list']['mp-theme-icon-brand']  = __( 'Theme Brand', 'mp-zerif' );
				$tabObj->parameters['icon_color']['list']['mp-theme-icon-blue']   = __( 'Theme Blue', 'mp-zerif' );
				$tabObj->parameters['icon_color']['list']['mp-theme-icon-green']  = __( 'Theme Green', 'mp-zerif' );
				$tabObj->parameters['icon_color']['list']['mp-theme-icon-yellow'] = __( 'Theme Yellow', 'mp-zerif' );
				$tabObj->parameters['icon_color']['default']                      = 'mp-theme-icon-brand';
			}
		}
	}

}
