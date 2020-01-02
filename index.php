<?php get_header(); ?>
    

    <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>

        <div class="posts card mb-4">
            <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
            <small><?php the_date(); ?></small>
            <small>By <?php the_author_posts_link(); ?></small>
            <small><?php the_time(); ?></small>
            <p><?php the_excerpt(); ?></p>
            
            <?php if( !is_page() ) :?>
                <p><?php the_shortlink('Read More >'); ?></p>
            <?php endif; ?>
        </div>

        <?php endwhile; endif; ?>

    </div>




<?php get_footer(); ?>