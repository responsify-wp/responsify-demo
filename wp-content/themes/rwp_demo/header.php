<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Responsify WP Demo</title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>

		<div class="container-fluid" style="max-width: 1440px;">
			<div class="row">
				<div class="col-xs-12">

					<header class="page-header">
						<h1>Responsify WP <small>Demo</small></h1>
					</header>

					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<?php
								wp_nav_menu( array( 
									'theme_location' => 'main_menu',
									'container' => false,
									'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
								) );
								?>
								<div class="navbar-right">
									<a href="https://github.com/stefanledin/responsify-wp" class="btn btn-default navbar-btn">Documentation</a>
									<a href="https://wordpress.org/plugins/responsify-wp/" class="btn btn-success navbar-btn">Download</a>
								</div>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>

					<?php if ( has_post_thumbnail() ) : ?>

						<?php
						echo Picture::create( 'style', get_post_thumbnail_id(), array(
							'selector' => '#hero'
						) );
						?>
						<header id="hero">
							<h3>Header with background</h3>
						</header>
						
					<?php endif; ?>
