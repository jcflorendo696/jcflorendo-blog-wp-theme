<?php get_header(); ?>



<div class="container mb-4">
    <h1>Author - <?php echo get_the_author_meta('user_firstname'); ?> "<?php echo get_the_author_meta('display_name'); ?>" <?php echo get_the_author_meta('user_lastname'); ?></h1>
    <p>
        <?php echo get_the_author_meta('description'); ?>
    </p>

    <h3>Last 3 articles</h3>
    
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="card mb-4 p-5">
                <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="meta-details">
                    <span class='date'><?php the_date(); ?> - <?php the_time(); ?></span> | By <span><?php the_author_posts_link(); ?></span> 
                </div>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    
    

</div>

<?php get_footer(); ?>
