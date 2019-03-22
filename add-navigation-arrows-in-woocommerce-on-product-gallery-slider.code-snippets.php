<?php

/**
 * Add Navigation Arrows in WooCommerce on Product Gallery Slider
 */
add_filter('woocommerce_single_product_carousel_options', 'wc_update_woo_flexslider_options');
function wc_update_woo_flexslider_options($options) {
      // show arrows
      $options['directionNav'] = true;
      $options['animation'] = "slide";

      // infinite loop
      $options['animationLoop'] = true;

      // autoplay (work with only slideshow too)
      $options['slideshow'] = true;
      //$options['autoplay'] = true;

      // control by text (boolean) or by thumbnails
      // $options['controlNav'] = true;
      //$options['controlNav'] = "thumbnails";

      // $options['mousewheel'] = true;

      return $options;
  }
