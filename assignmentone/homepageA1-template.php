<?php
/* 
Template Name: HomepageA1-template(Advanced Custom Fields) 
Template Post Type: Page 
*/
get_header();
?>
<!-- adding content using advanced custom fields -->
<main>
    <section class="main">
        <div>
            <div>
                <img src="<?php the_field("main_image"); ?>" >
            </div>
            <p class="imagetext">
                <?php the_field("image_alt_name"); ?>
            </p>
            <p>
                <?php the_field("tagline"); ?>
            </p>
        </div>
    </section>
    <section class="container">
        <div class="item">
            <p>
                <?php the_field("main_text"); ?>
            </p>
        </div>
        <div class="item">
            <p>
                <?php the_field("main _text_child"); ?>
            </p>
        </div>
    </section>
    <section class="container-sub">
        <div>
            <img src="<?php the_field("subimage_one"); ?>" alt="">
        </div>
        <div>
            <img src="<?php the_field("subimage_two"); ?>" alt="">
        </div>
        <div>
            <img src="<?php the_field("subimage_three"); ?>" alt="">
        </div>

        <div>
            <p><?php the_field("subimage_one_text"); ?></p>
        </div>
        <div>
            <p><?php the_field("subimage_two_text"); ?></p>
        </div>
        <div>
            <p><?php the_field("subimage_three_text"); ?></p>
        </div>

    </section>
</main>
<?php
get_footer();
?>