<?php

if
( defined( 'TEMPLATEPATH' ) ) :
    require TEMPLATEPATH . '/include/functions.php' ;
elseif
( function_exists( 'get_theme_file_path' ) ) :
    require get_theme_file_path( '/include/functions.php' );
else:
    require get_template_directory() . '/include/functions.php';
endif;
