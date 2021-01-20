<?php
/* Template Name: about page */
?>

<?php
get_header();
?>

<?php
    if( have_posts() ) {
        while( have_posts() ) {
            the_post();
            
            get_template_part('template-parts/content', 'about');
        }
    }
?>

<?php
get_footer();
?>