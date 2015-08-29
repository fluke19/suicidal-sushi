<?php get_header(); ?>

<nav id="navigation" class="navbar navbar-inverse navbar-fixed-top panel-affix shrink">
	<div class="container">
	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="/"><span style="display: inline-block; vertical-align: middle;">Executive Search</span></a>
	  </div>

	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="/#header">Home</a></li>
	      <li><a href="/#services">Services</a></li>
	      <li><a href="/#about">About</a></li>
	      <li><a href="/#approach">Approach</a></li>
	      <li><a href="/#assignments">Assignments</a></li>
	      <li><a href="/#contact">Contact</a></li>
	    </ul>
	  </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<section class="container-more no-header">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
					<?php if (have_posts()) : ?>

							<?php query_posts('posts_per_page'); if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="preview">
									<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

										<h2 class="post-header">
											<?php the_title(); ?>
										</h2>

										<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

										<div class="entry">
											<?php the_excerpt(); ?>
										</div>

										<p><a href="<?php the_permalink(); ?>" class="btn btn-secondary" role="button">Read more</a></p>

									</div>
								</div>

							<?php endwhile; endif; wp_reset_query();?>

							<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

					<?php else : ?>

						<h2>No posts found.</h2>

					<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>



<?php get_footer(); ?>