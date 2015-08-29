<?php

	/*
		Template Name: Assignment Homepage
	*/

?>

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
	  </div>
	</div>
</nav>

<section class="container-more no-header">
	<div class="container">
		<h1 class="text-center">Assignments</h1>
		<hr class="primary"/>
		<div class="title text-center">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultricies ac tortor id pulvinar. Duis vel felis rutrum, tincidunt neque sit amet, tempus augue. </p>
		</div>
		<div class="row">
			<div class="col-md-8">

				<?php query_posts('posts_per_page=5'); if (have_posts()) : while (have_posts()) : the_post(); ?>

				    <div class="preview">


				    	<?php if (has_post_thumbnail( $post->ID )) { ?> 

  							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				        	<div class="standard-image image-1" style="background: url('<?php echo $image[0]; ?>') center; background-size: cover; height: 400px;"></div>

				        <?php } else {?>

				        	<div class="standard-image image-1" style="height: 400px; background-position: center;"></div>

				   	 	<?php } ?>

				        <div class="text-center">
					        <h3 class="post-header"><?php the_title(); ?></h3>
					        <hr class="secondary">
					        <p><?php include (TEMPLATEPATH . '/inc/meta.php'); ?></p>
				        </div>
				        <p class="text-center"><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,50); ?></p>
				        <p class="text-center"><a href="<?php the_permalink(); ?>" class="btn btn-secondary" role="button">Read more</a></p>
				     
				    </div>

				<?php endwhile; endif; wp_reset_query();?>

			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>
</section>


<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

<?php get_footer(); ?>

