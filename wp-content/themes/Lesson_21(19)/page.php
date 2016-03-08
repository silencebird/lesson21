<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page container">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <?php the_excerpt(); ?>
        </article>

    <?php endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();

?>