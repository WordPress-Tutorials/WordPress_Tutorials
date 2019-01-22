<?php

function dmykos_custom_init() {
    $args = array(
        'public' => true,
        'label'  => 'Restricted'
    );
    register_post_type( 'restricted', $args );
}
add_action( 'init', 'dmykos_custom_init' );
