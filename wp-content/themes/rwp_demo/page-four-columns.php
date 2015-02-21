<?php get_header(); ?>
<div class="row">
	<div class="col-xs-12">

		<?php if ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<article id="description" class="well">
					<?php the_content(); ?>
				</article>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="row">
			<?php
			$posts = get_posts( array(
				'posts_per_page' => 4,
				'rwp_settings' => array(
					'sizes' => array( 'thumbnail', 'iphone-landscape' ),
					'attributes' => array(
						'sizes' => '(min-width: 992px) 320px, (min-width: 720px) 480px, 320px'
					)
				)
			) );
			foreach ( $posts as $post ) : setup_postdata( $post ); ?>
			<div class="col-xs-6 col-md-3">
				<div class="thumbnail">
					<?php the_post_thumbnail(); ?>
					<div class="caption">
						<h3><?php the_title(); ?></h3>
					</div>
				</div>
			</div>
			<?php wp_reset_postdata(); endforeach; ?>
			
		</div>

	</div>
</div>
<?php get_footer(); ?>