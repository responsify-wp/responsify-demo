<?php get_header(); ?>
<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">

		<?php if ( have_posts() ) : the_post(); ?>
		<article id="description" class="well">
			<?php the_content(); ?>
		</article>
		<?php endif; ?>

		<?php foreach ( get_posts() as $post ) : setup_postdata( $post ); ?>
		<article class="panel panel-default">
			<div class="panel-body">
				<h2><?php the_title(); ?></h2>
				<div class="thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php the_content(); ?>
			</div>
		</article>
		<?php wp_reset_postdata(); endforeach; ?>

		<article id="page-weight" class="well">
			<a name="page-weight"></a><h3>Page weight</h3>
			<table class="table">
				<thead>
					<tr>
						<th>Window width</th>
						<th>Page weight w/ RWP</th>
						<th>Page weight w/o RWP</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>320 px</td>
						<td class="success">~307 kb</td>
						<td class="danger">~2.7 mb</td>
					</tr>
					<tr>
						<td>568 px</td>
						<td class="success">~460 kb</td>
						<td class="danger">~2.7 mb</td>
					</tr>
					<tr>
						<td>667 px</td>
						<td class="success">~622 kb</td>
						<td class="danger">~2.7 mb</td>
					</tr>
					<tr>
						<td>1024 px</td>
						<td class="success">~1.5 mb</td>
						<td class="danger">~2.7 mb</td>
					</tr>
				</tbody>
			</table>
			<p><small>According to Google Chrome Developer tools.</small></p>
		</article>

		<article id="loading-times" class="well">

			<a name="loading-times"></a><h3>Loading times, 3G connection (750 kbps)</h3>

			<table class="table">
				<thead>
					<tr>
						<th>Window width</th>
						<th>Load time w/ RWP</th>
						<th>Load time w/o RWP</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>320 px</td>
						<td class="success">~3.83 s</td>
						<td class="danger">~30.51 s</td>
					</tr>
					<tr>
						<td>568 px</td>
						<td class="success">~5.40 s</td>
						<td class="danger">~30.51 s</td>
					</tr>
					<tr>
						<td>667 px</td>
						<td class="success">~7.17 s</td>
						<td class="danger">~30.51 s</td>
					</tr>
					<tr>
						<td>1024 px</td>
						<td class="success">~16.86 s</td>
						<td class="danger">~30.51 s</td>
					</tr>
				</tbody>
			</table>
			<p><small>Based on simulation in Google Chrome Developer tools.</small></p>
		</article>

	</div>
</div>

<?php get_footer(); ?>