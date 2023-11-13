<?php

/**
 * Disable the AI features in Jetpack
 *
 * https://github.com/Automattic/jetpack/issues/34033
 */
add_filter( 'jetpack_ai_enabled', '__return_false' );
