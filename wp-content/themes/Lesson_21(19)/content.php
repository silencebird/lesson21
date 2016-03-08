
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