<?php

get_header();?>
<div class="container">
    <h2 class="about-title">What We Are All About</h2>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post ">

            <p class="about-article"><?php $content = get_the_content(); echo $content; ?></p>

        </article>

    <?php endwhile;

else :
    echo '<p>No content found</p>';

endif;?>


    <h2 class="">Meet Our Teem!</h2>

    <ul class="clearfix teem-list">
<?php
$query = new WP_Query ( array(
  'post_type'=> 'teem')
);
if ( have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>

        <li class="post page teem ">

            <h3><?php the_title();?></h3>

            <!--post-thumbnails-->
            <?php if (has_post_thumbnail()){ ?>
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>">   <?php the_post_thumbnail() ?> </a>
                </div>
            <?php } else{ ?>
            <div class="post-thumbnail ">
                 <img src="<?php bloginfo('template_directory')?> /img/defult-thubnail.png" class="defult-thubnail"/>
            </div>
                <?php } ?>

            <!--post-thumbnails-->
            <p class="content-about"><?php  $content = get_the_content(); echo $content; ?></p>



        </li>

    <?php endwhile;

else :
    echo '<p>No content found</p>';

endif;?>
</ul>
</div>
<?php
get_footer();

?>