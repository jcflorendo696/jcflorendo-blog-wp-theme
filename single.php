<?php get_header(); ?>


<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <?php get_template_part('components/breadcrumbs'); ?>
        </div>
    
    </div>
    <div class="row">
        <div class="col-9">
            <?php get_template_part('components/the-loop'); ?>
        </div>
        
        <!-- Sidebar -->
        <div class="col-3">
            <div class="card mb-4">
            <?php get_sidebar('primary'); ?>
            </div>
            <div class="card mb-4">
            <?php get_sidebar('secondary'); ?>
            </div>
        </div>
    </div>
    
</div>



<?php get_footer(); ?>