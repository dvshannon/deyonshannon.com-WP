<?php
get_header();
?>

<?php
    if( have_posts() ) {
        while( have_posts() ) {
            the_post();
            the_content();
            get_template_part('template-parts/content', 'webform');
        }
    }
?>
test
<?php
get_footer();
?>