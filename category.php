<?php get_header(); ?>




<div class="container mb-3">
    <div class="row">
    <h1>Topics tagged as <?php echo single_cat_title(); ?></h1>    
    
    </div>

    <div class="row">
        <?php get_template_part('components/the-loop'); ?>
    </div>
</div>




<?php get_footer(); ?>