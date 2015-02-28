<?php
function enqueue_scripts_and_styles () {
	$themeDir = get_template_directory_uri();
	$assetsDir = $themeDir . '/assets';
	$assetsPath = get_stylesheet_directory() . '/assets';
	
	// wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css', null, null );
	if ( strpos($_SERVER['SERVER_NAME'], 'responsify-demo.dev') ) {
		if ( !empty($_GET['production']) ) {
			wp_enqueue_style( 'stylesheet', $assetsDir.'/css/styles.min.css', null, filemtime($assetsPath.'/css/styles.min.css'), null );
		} else {
			wp_enqueue_style( 'lazyloadxt', $assetsDir.'/css/jquery.lazyloadxt.fadein.min.css', null, null );
			wp_enqueue_style( 'stylesheet', $assetsDir.'/css/style.css', null, filemtime($assetsPath.'/css/style.css'), null );
		}
	} else {
		wp_enqueue_style( 'stylesheet', $assetsDir.'/css/styles.min.css', null, filemtime($assetsPath.'/css/styles.min.css'), null );
	}
	
	
	// wp_enqueue_scripts($handle, $src, $deps, $ver, $in_footer);
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-latest.min.js', null, null, true );
	if ( strpos($_SERVER['SERVER_NAME'], 'responsify-demo.dev') ) {
		if ( !empty($_GET['production']) ) {
			wp_enqueue_script( 'scripts', $assetsDir.'/js/scripts.min.js', array( 'jquery' ), filemtime($assetsPath.'/js/scripts.min.js'), true);
		} else {
			wp_enqueue_script( 'lazyloadxt', $assetsDir.'/js/jquery.lazyloadxt.min.js', array( 'jquery' ), null, true);
			wp_enqueue_script( 'lazyloadxt-srcset', $assetsDir.'/js/jquery.lazyloadxt.srcset.min.js', array( 'jquery' ), null, true);
			wp_enqueue_script( 'app', $assetsDir.'/js/app.js', array( 'jquery', 'lazyloadxt' ), null, true);
		}
	} else {
		wp_enqueue_script( 'scripts', $assetsDir.'/js/scripts.min.js', array( 'jquery' ), filemtime($assetsPath.'/js/scripts.min.js'), true);
	}
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );