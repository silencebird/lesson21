

<ol class="commentlist">
	<?php
	// Получаем комментарии поста с ID XXX из базы данных
	$comments = get_comments(array(
		'post_id' => 'get_post_ID()',

	));

	// Формируем вывод списка полученных комментариев
	wp_list_comments(array(
		'per_page' => 10, // Пагинация комментариев - по 10 на страницу
		'reverse_top_level' => false // Показываем последние комментарии в начале
	));
	?>
</ol>

<?php




///**
// * The template for displaying Comments.
// *
// * The area of the page that contains both current comments
// * and the comment form.
// *
// * @package my-simone
// */
//
///*
// * If the current post is protected by a password and
// * the visitor has not yet entered the password we will
// * return early without loading the comments.
// */
//if ( post_password_required() ) {
//	return;
//}
//?>
<!---->
<!--<div id="comments" class="comments-area">-->
<!---->
<!--	--><?php //// You can start editing here -- including this comment! ?>
<!---->
<!--	--><?php //if ( have_comments() ) : ?>
<!--		<h2 class="comments-title">-->
<!--			Comments-->
<!--		</h2>-->
<!---->
<!--		--><?php //if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
<!--		<nav id="comment-nav-above" class="comment-navigation" role="navigation">-->
<!--			<h1 class="screen-reader-text">--><?php //_e( 'Comment navigation', 'my-simone' ); ?><!--</h1>-->
<!--			<div class="nav-previous">--><?php //previous_comments_link( __( '&larr; Older Comments', 'my-simone' ) ); ?><!--</div>-->
<!--			<div class="nav-next">--><?php //next_comments_link( __( 'Newer Comments &rarr;', 'my-simone' ) ); ?><!--</div>-->
<!--		</nav><!-- #comment-nav-above -->-->
<!--		--><?php //endif; // check for comment navigation ?>
<!---->
<!--		<ol class="comment-list">-->
<!--			--><?php
//				wp_list_comments( array(
//					'style'      => 'ol',
//					'short_ping' => true,
//					'avatar_size' => 70,
//				) );
//			?>
<!--		</ol><!-- .comment-list -->-->
<!---->
<!--		--><?php //if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
<!--		<nav id="comment-nav-below" class="comment-navigation" role="navigation">-->
<!--			<h1 class="screen-reader-text">--><?php //_e( 'Comment navigation', 'my-simone' ); ?><!--</h1>-->
<!--			<div class="nav-previous">--><?php //previous_comments_link( __( '&larr; Older Comments', 'my-simone' ) ); ?><!--</div>-->
<!--			<div class="nav-next">--><?php //next_comments_link( __( 'Newer Comments &rarr;', 'my-simone' ) ); ?><!--</div>-->
<!--		</nav><!-- #comment-nav-below -->-->
<!--		--><?php //endif; // check for comment navigation ?>
<!---->
<!--	--><?php //endif; // have_comments() ?>
<!---->
<!--	--><?php
//		// If comments are closed and there are comments, let's leave a little note, shall we?
//		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
//	?>
<!--		<p class="no-comments">--><?php //_e( 'Comments are closed.', 'my-simone' ); ?><!--</p>-->
<!--	--><?php //endif; ?>
<!---->
<!--	--><?php //comment_form(); ?>
<!---->
<!--</div><!-- #comments -->-->
