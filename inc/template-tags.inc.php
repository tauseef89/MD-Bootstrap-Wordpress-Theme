<?php
if ( !function_exists( 'shape_comment' ) ) :

    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     *
     * @since Shape 1.0
     */
    function shape_comment( $comment, $args, $depth ) {
        $GLOBALS[ 'comment' ] = $comment;
        switch ( $comment->comment_type ) :
            // case 'pingback' :
            case 'trackback' :
                ?>
                <div class="post pingback">
                    <p><?php _e( 'Pingback:', 'shape' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'shape' ), ' ' ); ?></p>
                </div>
                    <?php
                    break;
                default :
                    ?>
                    <?php 
                    if ( $depth > 1 ) {
                        echo '<div class="media d-block d-md-flex ml-5">';
                    }
                    ?>
                <div class="media d-block d-md-flex mt-4" <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                        <?php if($comment->user_id) { ?>
                           
                                    <?php echo get_avatar( $comment, null, $default, $alt, array( 'class' => array( 'd-flex', 'mb-3', 'mx-auto' ) ) ); ?>
                            
                        <?php } else { ?>
                            <span>
                                    <?php echo get_avatar( $comment, 100 ); ?>
                            </span>
                        <?php } ?>
                            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                <h5 class="mt-0 font-weight-bold">
                            <?php if($comment->user_id) { ?>
                                
                                <a href="<?php echo get_home_url().'/profile/?id='.$comment->user_id ?>" class="user"><?php printf( __( '%s', 'shape' ), sprintf( '<cite data-toggle="tooltip" data-placement="top" title="View profile" class="fn">%s</cite>', get_comment_author_link() ) ); ?></a>
                            <?php } else { ?>
                                <a class="user"><?php printf( __( '%s', 'shape' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?></a>
                            <?php } ?>

                                   <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args[ 'max_depth' ], 'add_below' => 'li-comment', 'reply_text' => '<i class="fa fa-reply pull-right"></i>' ) ), $comment_id ); ?>

                            </h5>
                            <h7>
                            <i class="fa fa-clock-o"></i> <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
                                <?php
                                /* translators: 1: date, 2: time */
                                printf( __( '%1$s', 'shape' ), get_comment_date(), get_comment_time() );
                                ?>
                            </time></a>                             <?php edit_comment_link( __( '(Edit)', 'shape' ), ' ' ); ?>
                            </h7>
                            <?php if ( $comment->comment_approved == '0' ) : ?>
                                <em><?php _e( 'Your comment is awaiting moderation.', 'shape' ); ?></em>
                                <br />
                            <?php endif; ?>
                            <p><?php echo get_comment_text(); ?></p>
                                <?php 
                                if($comment->comment_parent == 0){
                                    $comment_id = $comment->comment_ID;
                                }else {
                                    $comment_id = $comment->comment_parent;
                                } 
                                ?>

                </div>
                </div>

                <?php
                if ( $depth > 1 ) {
                    echo '</div>';
                }
                ?>


                <?php
                break;
        endswitch;
    }

endif; // ends check for shape_comment()
?>
