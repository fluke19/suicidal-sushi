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
	    <a class="navbar-brand" href="#"><span style="display: inline-block; vertical-align: middle;">Executive Search</span></a>
	  </div>

	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="#header">Home</a></li>
	      <li><a href="#services">Services</a></li>
	      <li><a href="#about">About</a></li>
	      <li><a href="#approach">Approach</a></li>
	      <li><a href="#assignments">Assignments</a></li>
	      <li><a href="#contact">Contact</a></li>
	    </ul>
	  </div>
	</div>
</nav>

<section class="container-more">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<?php if (have_posts()) : ?>

						<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

					<?php /* If this is a category archive */ if (is_category()) { ?>
						<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

					<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<h2>Archive for <?php the_time('F, Y'); ?></h2>

					<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						<h2>Archive for <?php the_time('Y'); ?></h2>

					<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<h2>Author Archive</h2>

					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<h2>Blog Archives</h2>
					
					<?php } ?>

					<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

					<?php while (have_posts()) : the_post(); ?>
					
						<div <?php post_class() ?>>
						
							<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

							<div class="entry">
								<?php the_content(); ?>
							</div>

						</div>

					<?php endwhile; ?>

					<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
					
				<?php else : ?>

					<h2>Nothing found</h2>

				<?php endif; ?>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>