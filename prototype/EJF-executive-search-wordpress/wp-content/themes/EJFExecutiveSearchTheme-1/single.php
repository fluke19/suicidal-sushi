<?php get_header(); ?>

<nav id="navigation" class="navbar navbar-inverse navbar-fixed-top panel-affix home">
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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if (has_post_thumbnail( $post->ID )) { ?> 
  	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

	<header id="header" class="jumbotron text-center bg-image" style="background: url('<?php echo $image[0];?>') center; background-size: cover; height: 500px;">
	
<?php } else {?>
			
	<header id="header" class="jumbotron text-center bg-image standard-image image-1" style="height: 500px; background-position: center center;">

<?php } ?>

	    <div class="bg-image__text height-center">
	      <div class="container">
	        <h1 class="post-header"><?php the_title(); ?></h1>
	        <hr class="light">
	        <p>	Written by <span class="author"><?php the_author(); ?></span></p>
	      </div>
	    </div>
	</header>

<section class="container-more">
	<div class="container">

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<div style="color: black;"><?php the_time('F jS, Y') ?></div>

				<div class="entry">
					
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
					<div style="color: black"><?php the_tags( 'Tags: ', ', ', ''); ?></div>

				</div>
				
				<?php edit_post_link('Edit this entry','','.'); ?>
				
			</div>

	</div>
</section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>