<?php
/*
This is a "The Loop" template. It lists all posts showing the following:
 - Title
 - Date and Time
 - Author
 - Categories
 - with margin-bottom spacings
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




<div class="card p-5 mb-4">
    <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="meta-details">
        <span class='date'><?php the_date(); ?> - <?php the_time(); ?></span> | By <span><?php the_author_posts_link(); ?></span> | <span><?php the_category(); ?></span>
    </div>
    <p><?php the_excerpt(); ?></p>

    <p><?php the_shortlink('Read More >'); ?></p>
</div>

<?php endwhile; ?>
<?php endif; ?>