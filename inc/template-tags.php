<?php

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
if ( ! function_exists( 'edin_paging_nav' ) ) : 
function edin_posted_on() { 
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>'; 
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) { 
                $time_string .= '<time class="updated" datetime="%3$s">%4$s</time>'; 
        } 
 
        $time_string = sprintf( $time_string, 
                esc_attr( get_the_date( 'c' ) ), 
                esc_html( get_the_date() ), 
                esc_attr( get_the_modified_date( 'c' ) ), 
                esc_html( get_the_modified_date() ) 
        ); 
 
        $posted_on = sprintf( 
                _x( 'Posted on %s', 'post date', 'edin' ), 
                '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>' 
        ); 
 
        echo '<span class="posted-on">' . $posted_on; 
 
} 
endif;

function edin_post_noLinkThumbnail() {
    if ( post_password_required() || is_attachment() || ! has_post_thumbnail() || has_post_format() ) {
        return;
    }
?>

    <div class="post-thumbnail">
        <?php
            if ( is_page_template( 'page-templates/front-page.php' ) || is_page_template( 'page-templates/grid-page.php' ) ) {
                $ratio = get_theme_mod( 'edin_thumbnail_style' );
                switch ( $ratio ) {
                    case 'square':
                        the_post_thumbnail( 'edin-thumbnail-square' );
                        break;
                    default :
                        the_post_thumbnail( 'edin-thumbnail-landscape' );
                }
            } else {
                the_post_thumbnail( 'edin-featured-image' );
            }
        ?>
    </div>

<?php
}
?>
