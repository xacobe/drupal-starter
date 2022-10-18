<?php

namespace Drupal\tiny_slider;

/**
 * Global TinySlider carousel class.
 */
class TinySliderGlobal {

  /**
   * Default settings for TinySlider.
   */
  public static function defaultSettings($key = NULL) {
    $settings = [
      'image_style' => '',
      'image_link' => '',
      'items' => 1,
      'margin' => '0',
      'nav' => TRUE,
      'autoplay' => FALSE,
      'autoplayHoverPause' => FALSE,
      'controls' => TRUE,
      'loop' => TRUE,
      'dimensionMobile' => '0',
      'itemsMobile' => NULL,
      'dimensionDesktop' => '0',
      'itemsDesktop' => NULL,
    ];

    return isset($settings[$key]) ? $settings[$key] : $settings;
  }

  /**
   * Return formatted js array of settings.
   */
  public static function formatSettings($settings) {
    $settings['items'] = (int) $settings['items'];

    $settings['margin'] = (int) $settings['margin'];
    $settings['nav'] = (bool) $settings['nav'];
    $settings['autoplay'] = (bool) $settings['autoplay'];
    $settings['autoplayHoverPause'] = (bool) $settings['autoplayHoverPause'];
    $settings['controls'] = (bool) $settings['controls'];
    $settings['loop'] = (bool) $settings['loop'];

    if ($settings['itemsMobile']) {
      $dimensionMobile = (int) $settings['dimensionMobile'];
      $itemsMobile['items'] = (int) $settings['itemsMobile'];
      $settings['responsive'][$dimensionMobile] = $itemsMobile;
    }

    if ($settings['itemsDesktop']) {
      $dimensionDesktop = (int) $settings['dimensionDesktop'];
      $itemsDesktop['items'] = (int) $settings['itemsDesktop'];
      $settings['responsive'][$dimensionDesktop] = $itemsDesktop;
    }

    if (isset($settings['image_style'])) {
      unset($settings['image_style']);
    }
    if (isset($settings['image_link'])) {
      unset($settings['image_link']);
    }

    return $settings;
  }

}
