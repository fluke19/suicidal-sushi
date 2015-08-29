<?php

  /*
    Template Name: Homepage
  */

?>

<?php get_header(); ?>

<?php the_post(); ?>

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
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<!--   <header id="header" class="jumbotron text-center bg-image">
    <div class="bg-image__text height-center">
      <div class="container">
        <div class="brand-large"></div>
        <h1>Our Executive Search & Selection Prowess</h1>
        <hr class="light">
        <p class="lead">Aware of changing trends and dynamics within markets, EJF Search offers a unique quality of service dedicated to making a significant difference to clients, and offers a bespoke Executive Search and Talent attraction alternative.  Our clients and our candidates value our in-depth knowledge of the sectors in which we focus, and the high level of personal service we deliver.  We effectively source outside the normal channels when required, to tap into new, undiscovered talent, recognising the value and potential of transferable skills.</p>
        <a href="#services" class="btn btn-ghost">View more</a>
      </div>
    </div>
    <i class="fa fa-angle-down hidden-xs"></i>
  </header>

  <section id="services" class="alt-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Services</h2>
                <hr class="primary">
                <p class="title">We understand that the challenges of talent management in your business are ever evolving and so we have created a compelling mix of bespoke services to support you to reach your people goals.  We are equally adept at partnering with the board on a full executive search as we are providing research to in-house recruitment teams.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <span class="fa-stack fa-lg fa-3x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3>Executive Search</h3>
                    <hr class="secondary">
                    <p class="text-muted">We partner with our clients to identify exceptional individuals with the appropriate experience and skills and culture fit.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <span class="fa-stack fa-lg fa-3x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-question fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3>Research Support</h3>
                    <hr class="secondary">
                    <p class="text-muted">We deliver extensive and high quality bespoke research to give you a clear understanding of the market.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <span class="fa-stack fa-lg fa-3x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3>Market Insight</h3>
                    <hr class="secondary">
                    <p class="text-muted">Our in depth market knowledge and insight allow you to make informed, strategic people and commercial decisions.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <span class="fa-stack fa-lg fa-3x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3>Assessment Tools</h3>
                    <hr class="secondary">
                    <p class="text-muted">We can recommend the appropriate assessment tools for your business and manage the process on your behalf.</p>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section id="about">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 text-center">
              <h2 class="section-heading">About us</h2>
              <hr class="primary">
              <div class="title">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet ipsum quis lorem consequat, vitae pellentesque nisl auctor. Cras pulvinar sapien tellus, a consequat diam suscipit ac. Pellentesque ultrices urna tortor, a hendrerit est faucibus in.</p>
                <a href="/about.html" class="btn btn-primary" role="button">Read more</a>
              </div>
          </div>
      </div>
    </div>
    <div class="container about-box">
      <div class="row">
          <div class="col-lg-6">
            <div class="standard-image"></div>
          </div>
          <div class="col-lg-6">
            <div class="about-text-container">
              <div class="text-muted about-text">
                <p>At EJF Search we partner with leading brands to identify exceptional individuals with the appropriate experience, skill sets and culture fit for some of the most demanding roles in the fashion, luxury and lifestyle industries.  We have developed a profound knowledge of these industries and have perfected our search procedures through practical experience.</p>
                <p>EJF is led by Emma Farrant who has a classically trained background in Executive Search, with over 10 years’ experience working on high profile searches across the retail and consumer brands industry.  Emma has worked for a number of highly successful boutique firms, and in 2007 she established her own consultancy which focuses on partnering her business across the breadth of the retail industry.</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  <section id="clients" class="bg-image text-center">
    <div class="bg-image__text">
      <div class="container">
        <p class="highlight-text">At EJF we work closely with our clients to ensure we absolutely understand the culture and values of their business.
        </h3>
      </div>
    </div>
  </section>

  <section id="approach" class="alt-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Our Approach</h2>
            <hr class="primary">
            <div class="title">
                <p>We pride ourselves on delivering an exceptionally well-organised and effective search process.  We provide our clients with the appropriate tools and insight to elevate their knowledge of the candidate pool and the industry function being worked in.</p>
            </div>
        </div>
      </div>
    </div>
    <div class="container">
        <ul class="timeline">
            <li>
              <div class="timeline-badge">
                <span class="fa-stack fa-lg fa-1x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-refresh fa-stack-1x fa-inverse"></i>
                </span>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">The Process</h4>
                </div>
                <div class="timeline-body text-muted">
                  <p>Working to the agreed search strategy, we deliver extensive research across the appropriate sectors, geographies and target companies.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge">
                <span class="fa-stack fa-lg fa-1x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                </span>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Understanding our clients</h4>
                </div>
                <div class="timeline-body text-muted">
                  <p>It is vital that we understand from the outset, the vision, long-term strategies and goals, as well as the culture and dynamics of our clients’ organisations.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-badge">
                <span class="fa-stack fa-lg fa-1x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-line-chart fa-stack-1x fa-inverse"></i>
                </span>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Research</h4>
                </div>
                <div class="timeline-body text-muted">
                  <p>We provide our clients with the appropriate tools and insight to elevate their knowledge of the candidate pool and industry function which is being focused on.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge">
                <span class="fa-stack fa-lg fa-1x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                </span>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Search Methodology</h4>
                </div>
                <div class="timeline-body text-muted">
                  <p>We build trust quickly, and enable individuals to explore opportunities and have curious discussions.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-badge">
                <span class="fa-stack fa-lg fa-1x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-flag-checkered fa-stack-1x fa-inverse"></i>
                </span>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Completing the process</h4>
                </div>
                <div class="timeline-body text-muted">
                  <p>We partner with both candidates and clients at each stage, managing all aspects of remuneration and contracts and support candidates through the process to ensure a smooth transition.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge">
                <span class="fa-stack fa-lg fa-1x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-thumbs-o-up fa-stack-1x fa-inverse"></i>
                </span>
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Long Term Partnership</h4>
                </div>
                <div class="timeline-body text-muted">
                  <p>We follow with interest the long term success of our clients and the executives we work with and keep regular communication offering advice and support.</p>
                </div>
              </div>
            </li>
        </ul>
    </div>
  </section> -->

  <?php the_content();?>

  <section id="assignments">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Recent Assignments</h2>
            <hr class="primary">
            <div class="title">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet ipsum quis lorem consequat, vitae pellentesque nisl auctor. Cras pulvinar sapien tellus, a consequat diam suscipit ac. Pellentesque ultrices urna tortor, a hendrerit est faucibus in.</p>
                <a href="/assignments" class="btn btn-primary" role="button">Read more</a>
            </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner text-center" role="listbox">
          <div class="item active">
            <div class="row">

              <?php query_posts('posts_per_page=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

              <div class="col-md-4">
                <div class="thumbnail">
                  <div class="standard-image image-1" style="background-image: url('<?php echo $image[0]; ?>')"></div>
                  <div class="caption">
                     <h3 class="post-header"><?php $title = get_the_title(); echo string_limit_words($title,15); ?></h3>
                    <hr class="secondary">
                    <p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,25); ?></p>
                    <p><a href="<?php the_permalink(); ?>" class="btn btn-secondary" role="button">Read more</a></p>
                  </div>
                </div>
              </div>

              <?php endwhile; endif; wp_reset_query();?>

            </div>
          </div>
          <div class="item">
            
              <?php query_posts('posts_per_page=3&offset=3');  if (have_posts()) : while (have_posts()) : the_post();?>

              <div class="col-md-4">
                <div class="thumbnail">
                  <div class="standard-image image-1"></div>
                  <div class="caption">
                    <h3 class="post-header"><?php $title = the_title(); echo string_limit_words($title,10); ?></h3>
                    <hr class="secondary">
                    <p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,25); ?></p>
                    <p><a href="<?php the_permalink(); ?>" class="btn btn-secondary" role="button">Read more</a></p>
                  </div>
                </div>
              </div>
              <?php endwhile; endif; wp_reset_query();?>

          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

    <?php
$include = get_pages('include=44');
$content = apply_filters('the_content',$include[0]->post_content);
echo $content;
?>

<?php get_footer(); ?>
