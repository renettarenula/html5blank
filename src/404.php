<?php get_header(); ?>

	<main role="main" aria-label="Content" class="content">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1 class="article-title"><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
