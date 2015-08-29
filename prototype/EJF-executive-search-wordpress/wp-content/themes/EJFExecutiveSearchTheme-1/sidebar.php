<aside class="col-md-4 sidebar">

    <div>
        <h5>Tags</h5>

        <ul class="tags list-unstyled clearfix">
            <?php query_posts('posts_per_page=5'); if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <li>
                <?php the_tags('', ', '); ?>
            </li>
            
            <?php endwhile; endif; wp_reset_query();?>
        </ul>
    </div>

    <div>
	   <?php get_search_form(); ?>
    </div>

    <div class="recent-posts">
        <h5>Recent posts</h5>

        <ul>        
            <?php query_posts('posts_per_page=5'); if (have_posts()) : while (have_posts()) : the_post(); ?>

                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            
            <?php endwhile; endif; wp_reset_query();?>
        </ul>

    </div>


</aside>