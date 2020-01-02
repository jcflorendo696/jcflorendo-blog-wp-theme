<?php get_header(); ?>

<div class="container mb-4">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div><?php get_breadcrumb(); ?></div>
        
        <div class="card p-5">
        <h3><?php the_title(); ?></h3>
        <div class="meta-details">
            <span class='date'><?php the_date(); ?> - <?php the_time(); ?></span> | By <span><?php the_author_posts_link(); ?></span> | <span><?php the_category(); ?></span>
        </div>
        <p><?php the_content(); ?></p>

        

        <div class="clearfix">
        <div class="prev-post d-inline float-left">
            <?php previous_post_link(); ?>
        </div>
        
        
        <div class="next-post d-inline float-right">
            <?php next_post_link(); ?>
        </div>
        </div>
        </div>

    <?php endwhile; ?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>