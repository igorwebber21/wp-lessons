<?php


// ============== загружаем скрипты и стили ============== //
function load_style_script(){
	// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	wp_enqueue_script('my_jquery', get_template_directory_uri().'/js/jquery-1.10.1.min.js');
	wp_enqueue_script('jqFancyTransitions', get_template_directory_uri().'/js/jqFancyTransitions.1.8.min.js');

	wp_enqueue_style('style', get_template_directory_uri().'/style.css');

}
// ============== загружаем скрипты и стили ============== //


// вызов функции load_style_script()
add_action('wp_enqueue_scripts', 'load_style_script');


// поддержка миниатюр в записях 
add_theme_support("post-thumbnails");

// размер миниатюры
//set_post_thumbnail_size(180, 180);


// ============== регистрируем виджет с меню ============== //
	register_sidebar(array(
        'name'          => 'Верхнее меню',
        'id'            => 'menu_header',
        'before_widget' => '',
        'after_widget'  => ''
    ));
    /*
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );*/
//}
// ============== регистрируем виджет с меню ============== //




// ============== регистрируем виджет сайдбара ============== //
register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
// ============== регистрируем виджет сайдбара ============== //    


// ============== регистрируем виджет футера ============== //
register_sidebar(array(
        'name'          => 'Footer',
        'id'            => 'footer',
        'before_widget' => '<div class="footer-info %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
// ============== регистрируем виджет футера ============== //


//  ================ берём шаблон комментариев busiprof ======================== //
if ( ! function_exists( 'busiprof_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own appointment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since appointment
 */
function busiprof_comment( $comment, $args, $depth ) {
    
    $GLOBALS['comment'] = $comment;

//get theme data
global $comment_data;

//translations
$leave_reply = $comment_data['translation_reply_to_coment'] ? $comment_data['translation_reply_to_coment'] : __('Reply','busiprof');
?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
                
                    <div class="comments">
                    <figure class="comment-author">
                        <?php echo get_avatar($comment,$size = '65'); ?>
                    </figure>
                    <div class="media-body">        
                    <!-- /comment-avatar -->
                    <div class="comment-content">
                        <h5 class="fn"><?php printf(__('%s','busiprof'), get_comment_author_link()) ?><span>|</span>
                        <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>" class="datetime"><?php echo get_comment_date(); ?></a></h5>
                    <!-- /comment-meta -->
                    <?php if ( $comment->comment_approved == '0' ) : ?>
                    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'busiprof' ); ?></em>
                    <br />
                <?php endif; ?>
                        <p>
                            <?php comment_text() ?>
                        </p><!-- /comment-text -->
                      <div class="reply">
                            <?php comment_reply_link(array_merge( $args, array('reply_text' => $leave_reply,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                      </div>
                     </div> <!-- /reply -->
                    </div><!-- /comment-content -->
                    </div>
                    <!-- /comment-details -->
        <!-- /comment -->
        
<?php
}
endif;



// =============  создаём новый тип записи - banner  ========================= //
add_action('init', 'banner_posts');
function banner_posts(){
    register_post_type('banner', array(
        'labels'             => array(
            'name'               => 'Баннеры', // Основное название типа записи
            'singular_name'      => 'Баннер', // отдельное название записи типа Book
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый баннер',
            'edit_item'          => 'Редактировать баннер',
            'new_item'           => 'Новый баннер',
            'view_item'          => 'Посмотреть баннер',
            'search_items'       => 'Найти баннер',
            'not_found'          =>  'Баннеров не найдено',
            'not_found_in_trash' => 'В корзине баннеров не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Баннеры'

          ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'thumbnail')
    ) );
}




// =============  создаём новый тип записи - slider  ========================= //
add_action('init', 'slider_posts');
function slider_posts(){
    register_post_type('slider', array(
        'labels'             => array(
            'name'               => 'Слайдеры', // Основное название типа записи
            'singular_name'      => 'Слайдер', // отдельное название записи типа Book
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый слайдер',
            'edit_item'          => 'Редактировать слайдер',
            'new_item'           => 'Новый слайдер',
            'view_item'          => 'Посмотреть слайдер',
            'search_items'       => 'Найти слайдер',
            'not_found'          => 'Слайдеров не найдено',
            'not_found_in_trash' => 'В корзине слайдеров не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Слайдеры'

          ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'thumbnail')
    ) );
}
?>