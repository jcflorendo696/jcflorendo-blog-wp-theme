<?php get_header(); ?>

<div class="container mb-4">
    <?php get_template_part('components/breadcrumbs'); ?>
    <div class="card p-5">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="meta-details">
            <span class='date'><?php the_date(); ?> - <?php the_time(); ?></span> | By <span><?php the_author_posts_link(); ?></span> 
        </div>
        <p><?php the_content(); ?></p>




        </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>

</div>



<?php get_footer(); ?>