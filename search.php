<?php get_header(); ?>

<?php global $wp_query; ?>
<?php $total_results = $wp_query->found_posts; ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2 text-center">
        <?php get_search_form(); ?>
        </div>
        
    </div>
</div>

<div class="container mb-3">
    <div class="row">
        <div class="col-12">
        <h1>About <?php echo $total_results; ?> results for <span class="font-italic"><?php echo get_search_query(); ?></span>. </h1>
        </div>
    </div>

    <div class="row">
    <div class="col-12">

        <?php get_template_part('components/the-loop'); ?>

    </div>
    </div>
</div>

<?php get_footer(); ?>