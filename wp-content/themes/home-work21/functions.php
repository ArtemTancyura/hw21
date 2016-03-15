<?php
function learningWordPress_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'learningWordPress_resources');

//theme sutup
function learnngWordPress_setup(){
    //Navigation Menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
    ));
    ///add feature image suport
    add_theme_support('post-thumbnails');
    add_image_size('small-thambnail', '100%','100%' , true);
    add_image_size('banner-image', 920, 210, array('left','top'));
    //add post format support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
add_action('after_setup_theme','learnngWordPress_setup' );

//
 if ( comments_open() || '0' != get_comments_number() ) :
     comments_template();
 endif;

//widgets location
function ourWidgetsInits(){
    register_sidebar( array(
        'name' => 'SIGN UP FOR NEWSLATTER',
        'id' => 'sidebar1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));
    register_sidebar( array(
        'name' => 'MOST POPULAR',
        'id' => 'sidebar2',
        'before_widget' => '<div class="most-popular-item">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="most-popular-title">',
        'after_title'   => '</h1>',
    ));
    register_sidebar( array(
        'name' => 'CATEGORIES',
        'id' => 'sidebar3',
        'before_widget' => '<div class="categories-item">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="categories-title">',
        'after_title'   => '</h1>',
    ));
    register_sidebar( array(
        'name' => 'banner',
        'id' => 'sidebar4',
        'before_widget' => '<div class="banner-item">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="banner-title">',
        'after_title'   => '</h1>',
    ));

}
add_action('widgets_init','ourWidgetsInits');

//pagination
function wp_beginner_numeric_posts_nav() {

    if( is_singular() )
          return;

    global $wp_query;

    /** Stop execution if there's only 1 page */

    if( $wp_query->max_num_pages <= 1 )

        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */

    if ( $paged >= 1 )

        $links[] = $paged;

    /** Add the pages around the current page to the array */

    if ( $paged >= 3 ) {

        $links[] = $paged - 1;

        $links[] = $paged - 2;

    }

    if ( ( $paged + 2 ) <= $max ) {

        $links[] = $paged + 2;

        $links[] = $paged + 1;

    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
   // if ( get_previous_posts_link() )
    //    printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */

    if ( ! in_array( 1, $links ) ) {

        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )

            echo '<li>…</li>';

    }

    /** Link to current page, plus 2 pages in either direction if necessary */

    sort( $links );

    foreach ( (array) $links as $link ) {

        $class = $paged == $link ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );

    }

    /** Link to last page, plus ellipses if necessary */

    if ( ! in_array( $max, $links ) ) {

        if ( ! in_array( $max - 1, $links ) )

            echo '<li>…</li>' . "\n";


     $class = $paged == $max ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );

    }
    /** Next Post Link */
    //if ( get_next_posts_link() )
   //     printf( '<li>%s</li>' . "\n", get_next_posts_link() );
   echo '</ul></div>' . "\n";

}

//social links
function hw21_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'hw21_social-links' , array(
        'title'      => __( 'Social Links', 'home-work21' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'social_links_facebook' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_facebook', array(
        'label'        => __( 'Facebook', 'home-work21' ),
        'section'    => 'hw21_social-links',
        'settings'   => 'social_links_facebook',
    ) ) );

    $wp_customize->add_setting( 'social_links_twitter' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_twitter', array(
        'label'        => __( 'Twitter', 'home-work21' ),
        'section'    => 'hw21_social-links',
        'settings'   => 'social_links_twitter',
    ) ) );

    $wp_customize->add_setting( 'social_links_instagram' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_instagram', array(
        'label'        => __( 'Instagram', 'home-work21' ),
        'section'    => 'hw21_social-links',
        'settings'   => 'social_links_instagram',
    ) ) );
}
add_action( 'customize_register', 'hw21_customize_register' );


?>