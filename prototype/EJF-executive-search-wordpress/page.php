<?php get_header(); ?>

<?php the_post(); ?>

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

<?php the_content();?>

<?php get_footer(); ?>