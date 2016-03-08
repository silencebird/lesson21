<?php

get_header();

if (have_posts()):
    ?>
<!--    <h2>--><?php
//
//        if (is_category()){
//            single_cat_title();
//        } elseif ( is_tag()) {
//            single_tag_title();
//        }elseif (is_author()){
//           the_post();s
//            echo 'Author Archive: ' .get_the_author();
//            rewind_posts();
//        }elseif (is_day()){
//            echo 'Daily Archive: '. get_the_date();
//        }elseif (is_month()){
//            echo 'Monthly Archive: '. get_the_date('F Y');
//        }elseif (is_year()){
//            echo 'Yearly Archive: '. get_the_date('Y');
//        }else{
//            echo 'Archives:';
//        }
//
//    ?><!--</h2>-->
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
    <?php  while (have_posts()): the_post(); ?>

        <article class="post container <?php if (has_post_thumbnail()){?> has-thumbnail<?php }?>  ">


            <div class="aline">
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
                <?php the_excerpt();?>
            </div>
        </article>
    <?php endwhile;
else:
    echo '<p>No content found</p>';
endif;

get_footer();
?>


