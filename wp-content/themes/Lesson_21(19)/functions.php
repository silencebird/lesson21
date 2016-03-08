<?php

add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more) {
    global $post;
    return '<div class="read-more"> <a href="'. get_permalink($post->ID) . '"> <i class="fa fa-arrow-circle-o-right "></i> Read more</a></div>';
}


function learningWordPress_resources(){


    wp_enqueue_style("main",get_template_directory_uri() . "/css/main.css");

    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );

    wp_enqueue_style("fonts",get_template_directory_uri() . "/fonts/fontstyle.css");

    wp_enqueue_script( 'lesson_21-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'lesson_21-skip-link-focus-fix', get_template_directory_uri() . '/js/jquery-2.2.0.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );}


}
add_action('wp_enqueue_scripts', 'learningWordPress_resources');

//Navigation Menus

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
    'category' => __('Category Menu'),
));


function extra_setup() {
    register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'lesson21' ));
}
add_action( 'after_setup_theme', 'extra_setup' );

function set_container_class ($args) {
    $args['container_class'] = str_replace(' ','-',$args['theme_location']).'-nav'; return $args;
}
add_filter ('wp_nav_menu_args', 'set_container_class');
//Get top ancestor
function get_top_ancestor_id(){

    global $post;

    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));

        return $ancestors[0];


    }
    return $post -> ID;
}


//does page have children?
function has_children() {
    global $post;

    $pages = get_pages('child_of='.$post->ID);
    return count($pages);
}


//theme sutup
function learnngWordPress_setup(){

    //Navigation Menus

    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
        'category' => __('Category Menu'),
    ));

    ///add feature image suport
    add_theme_support('post-thumbnails');
    add_image_size('small-thambnail', '100%','100%' , true);
    add_image_size('banner-image', 920, 210, array('left','top'));

    //Add post format support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
add_action('after_setup_theme','learnngWordPress_setup' );

function defult_thubnail(){
     echo '<img src="'.bloginfo('template_directory').'/img/defult-thubnail.png" class="defult-thubnail"/>';
}

//Add our widgets location
function ourWidgetsInits(){

    register_sidebar( array(
        'name' => 'Social-F',
        'id' => 'social-footer',
        'before_widget' => '<div class="widget-item %2$s">',
        'after_widget' => '</div>',
    ));



}
add_action('widgets_init','ourWidgetsInits');


function mytheme_comment($comment, $args, $depth){
   $GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID(); ?>">
        <div class="comment-author vcard">
            <?php echo get_avatar( $comment, $size='70', $default='<path_to_url>' ); ?>

            <cite class="fn"><?php echo get_comment_author_link() ?></cite> <span class="says">говорит:</span>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
            <em>Ваш комментарий ожидает проверки.</em>
            <br />
        <?php endif; ?>

        <div class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf( '%1$s в %2$s', get_comment_date(),  get_comment_time()) ?></a>
            <?php edit_comment_link('(Редактировать)', '  ', '') ?>
        </div>

        <?php comment_text() ?>

        <div class="reply">
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
    </div>
    <?php
    }





    add_action( 'init', 'codex_teem_init' );
    /**
    * Register a teem post type.
    *
    * @link http://codex.wordpress.org/Function_Reference/register_post_type
    */
    function codex_teem_init() {
    $labels = array(
    'name'               => _x( 'Teem', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Teem', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Teem', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Teem', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'teem', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New teem', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New teem', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit teem', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View teem', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Teem', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Teem', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Teem:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No Teem found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No Teem found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'teem' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title','subtitle', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'teem', $args );
    }

            //Page numeric
