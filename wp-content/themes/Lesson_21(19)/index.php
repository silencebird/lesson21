<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post container  <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


            <p class="post-info">
                Posted on <?php the_time('F j, Y '); ?> </a>
            </p>

            <!-- post-thumbnail -->
            <?php if (has_post_thumbnail()){ ?>
                <div class="post-thumbnail ">
                    <a href="<?php the_permalink(); ?>">   <?php the_post_thumbnail() ?> </a>
                </div>
            <?php } ?>
            <!-- /post-thumbnail -->

                <?php the_excerpt();?>

        </article>

    <?php endwhile;

else :
    echo '<p>No content found</p>';

endif;




get_footer();

?>