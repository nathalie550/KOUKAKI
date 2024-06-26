<?php

get_header();
?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/video'); ?>

    <?php get_template_part('template-parts/story');  ?>

    <?php get_template_part('template-parts/personnages');  ?>

    <?php get_template_part('template-parts/nuages');  ?>

    <?php get_template_part('template-parts/studio');  ?>

</main><!-- #main -->

<?php
get_footer();
