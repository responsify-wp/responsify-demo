<?php get_header(); ?>
<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">

		<?php foreach ( get_posts() as $post ) : setup_postdata( $post ); ?>
		<article class="panel panel-default">
			<div class="panel-body">
				<h2><?php the_title(); ?></h2>
				<div class="thumbnail">
					<?php
					$thumbnail = get_the_post_thumbnail();
					echo $thumbnail;
					#echo '<div class="source"><code>' . htmlentities($thumbnail) . '</code></div>';
					?>
				</div>
				<?php the_content(); ?>
			</div>
		</article>
		<?php wp_reset_postdata(); endforeach; ?>

	</div>
</div>

<?php get_footer(); ?>