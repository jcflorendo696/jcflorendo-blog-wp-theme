<?php
/*
Template Name: Search Page
*/
?>


<?php get_header(); ?>

<?php 
    global $query_string;
    wp_parse_str( $query_string, $search_query );
    $search = new WP_Query( $search_query );
?>


<div class="container mb-3">
    <div class="row">

        <?php get_search_form(); ?>
    </div>
</div>

<?php get_footer(); ?>