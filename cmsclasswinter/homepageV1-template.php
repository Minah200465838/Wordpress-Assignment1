<?php
/* 
Template Name: Homepage Version One(no plugin) 
Template Post Type: Page 
*/
get_header();
?>
<!-- now we add our content -->
<!-- If we are just using the default content editor then we only need to create a loop to display the pages content. -->
<main class="homepage-v1">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
    else:
        echo "<p>Sorry, no posts are found.</p>";
    endif;
    ?>
</main>
<?php
get_footer();
?>