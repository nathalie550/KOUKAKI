<section id="#story" class="story reveal-2">
    <h2 class="section-title slideIn"><span>L'histoire</span></h2>
    <article id="" class="story__article">
        <p><?php echo get_theme_mod('story'); ?></p>
    </article>
    <?php
    $args = array(
        'post_type' => 'characters',
        'posts_per_page' => -1,
        'meta_key'  => '_main_char_field',
        'orderby'   => 'meta_value_num',

    );
    $characters_query = new WP_Query($args);
    ?>