<?php get_header(); ?>
<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">

		<article class="well" style="margin-top: 50px;">
			<?php the_post(); ?>
			<?php the_content(); ?>
		</article>

		<article id="page-weight" class="well">

			<a name="page-weight"></a><h3>Page weight</h3>
			<table class="table">
				<thead>
					<tr>
						<th>Window width</th>
						<th>Page weight</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>320 px</td>
						<td>~139 kb</td>
					</tr>
					<tr>
						<td>568 px</td>
						<td>~178 kb</td>
					</tr>
					<tr>
						<td>1024 px</td>
						<td>~476 kb</td>
					</tr>
				</tbody>
			</table>
			<p><small>According to Google Chrome Developer tools.</small></p>
		</article>

		<article id="loading-times" class="well">
			<a name="page-weight"></a><h3>Loading times, 3G connection (750 kbps)</h3>
			<table class="table">
				<thead>
					<tr>
						<th>Window width</th>
						<th>Load time w/ RWP</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>320 px</td>
						<td>~2.06 s</td>
					</tr>
					<tr>
						<td>568 px</td>
						<td>~2.52 s</td>
					</tr>
					<tr>
						<td>1024 px</td>
						<td>~5.71 s</td>
					</tr>
				</tbody>
			</table>
			<p><small>Based on simulation in Google Chrome Developer tools.</small></p>
		</article>

	</div>
</div>

<?php get_footer(); ?>