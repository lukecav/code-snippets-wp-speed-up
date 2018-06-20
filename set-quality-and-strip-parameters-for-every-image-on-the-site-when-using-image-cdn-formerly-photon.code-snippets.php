<?php

/**
 * Set quality and strip parameters for every image on the site when using Image CDN (formerly Photon)
 */
add_filter('jetpack_photon_pre_args', 'jetpackme_custom_photon_compression' );
function jetpackme_custom_photon_compression( $args ) {
    $args['quality'] = 90;
    $args['strip'] = 'all';
    return $args;
}
