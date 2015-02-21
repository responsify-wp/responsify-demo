<?php get_header(); ?>
<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">

		<?php if ( have_posts() ) : the_post(); ?>
		<article id="description" class="well">
			<?php the_content(); ?>
		</article>
		<?php endif; ?>

		<?php
		foreach ( get_posts() as $post ) : setup_postdata( $post ); ?>
		<article class="panel panel-default">
			<div class="panel-body">
				<h2><?php the_title(); ?></h2>
				<div class="thumbnail">
					<?php
					$attribute = Picture::create( 'attributes', get_post_thumbnail_id(), array(
						'element' => 'img'
					) );
					echo '<img data-srcset="'.$attribute['srcset'].'" sizes="'.$attribute['sizes'].'">';
					?>
				</div>
			</div>
		</article>
		<?php wp_reset_postdata(); endforeach; ?>

	</div>
</div>

<?php get_footer(); ?>