<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>

<footer id="colophon" class="site-footer">
    <section class="fin">
        <article class="oscar">
            <img class="title-image" src="<?= get_stylesheet_directory_uri() . "/assets/images/titre_chats_errants.png" ?>">
            <img class="background-image" src="<?= get_stylesheet_directory_uri() . "/assets/images/Rectangle_23.png" ?>">
            <img class="oscar2" src="<?= get_stylesheet_directory_uri() . "/assets/images/oscars.png" ?>">

        </article>

        <ul>
            <li><a href="#">Mentions Légales</a></li>
            <li><a href="#">STUDIO KOUKAKI</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </section>

    <script type="text/javascript" src="../skrollr.min.js"></script>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>