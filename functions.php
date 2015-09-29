<?php

//------------------------//
//  START GENESIS ENGINE  //
//------------------------//
include_once( get_template_directory() . '/lib/init.php' );



//-----------------------//
//  EXTRA GENESIS STUFF  //
//-----------------------//

// HTML5 Markup Structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

// Viewport Meta Tag
add_theme_support( 'genesis-responsive-viewport' );



//----------------------//
//  JORDANPAK INCLUDES  //
//----------------------//

// CHILD THEME STUFF
define( 'CHILD_THEME_NAME', 'RenaRomano' );
define( 'CHILD_THEME_URL', 'http://RenaRomano.com/' );
define( 'CHILD_THEME_VERSION', '2.0.0' );