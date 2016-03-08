<?php


get_header(); ?>

    <div class="category">
        <div class="container clearfix">
            <nav class=" category-nav">
                <?php
                $args = array(
                    'theme_location' => 'category'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </nav>
        </div>
    </div>

<div class="container">
    <?php



    $showposts = 3; // -1 shows all posts
    $args=array(
        'category__in' => $cat,
        'showposts' => $showposts,
    );
    $my_query = new WP_Query($args);

    ?>

    <?php if( $my_query->have_posts() ) : ?>

        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php
            //necessary to show the tags
            global $wp_query;
            $wp_query->in_the_loop = true;
            ?>
            <article class="post page container">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="post-info">
                    Posted on <?php the_time('F j, Y '); ?> </a>
                </p>
                <!--post-thumbnails-->
                <?php if (has_post_thumbnail()){ ?>
                    <div class="post-thumbnail ">
                        <a href="<?php the_permalink(); ?>">   <?php the_post_thumbnail() ?> </a>
                    </div>
                <?php } ?>
                <!--post-thumbnails-->
                <?php the_excerpt(); ?>
            </article>

        <?php endwhile; ?>

    <?php else :

        echo '<p>No content found</p>';

    endif; ?>

</div>


<?php get_footer(); ?>