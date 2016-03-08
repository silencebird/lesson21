<?php

get_header();
?>


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

    <div class="container"> <!--container-->
 <?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post">


            <h2><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>

            <p class="post-info">
                Posted on <?php the_time('F j, Y '); ?>
            </p>

            <?php if (has_post_thumbnail()){ ?>
                <div class="post-thumbnail ">
                    <a href="<?php the_permalink(); ?>">   <?php the_post_thumbnail() ?> </a>
                </div>
            <?php } ?>

            <p><?php $content = get_the_content(); echo $content; ?></p>


        </article>

    <?php endwhile;

else :
    echo '<p>No content found</p>';

endif;
?>
  </div>  <!--container-->


<?php
get_footer();

?>