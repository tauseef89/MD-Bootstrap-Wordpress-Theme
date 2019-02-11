<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to shape_comment() which is
 * located in the inc/template-tags.inc.php file.
 *
 * @package Shape
 * @since Shape 1.0
 */
?>

    <?php
    /*
     * If the current post is protected by a password and
     * the visitor has not yet entered the password we will
     * return early without loading the comments.
     */
    if ( post_password_required() )
        return;
?>

<div id="comments" class="">

    <?php // You can start editing here -- including this comment! ?>

        <?php if ( have_comments() ) : ?>


                    <div class="card card-comments mb-3 wow fadeIn">
                        <div class="card-header font-weight-bold">
                            <?php if(get_comment_pages_count() > 1) echo ' class="mb-1"';?> <?php echo (get_comments_number()) ? get_comments_number() : '';?> Comments 
                        </div>

                        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through? If so, show navigation ?>
                            <nav role="navigation" id="comment-nav-above" class="site-navigation comment-navigation text-center mb-2">

                                    <?php previous_comments_link( __( '<i class="fa fa-caret-left left" aria-hidden="true"></i> Older Comments', 'shape' ) ); ?>

                                    <?php next_comments_link( __( 'Newer Comments <i class="fa fa-caret-right right" aria-hidden="true"></i>', 'shape' ) ); ?>

                            </nav>
                            <!-- #comment-nav-before .site-navigation .comment-navigation -->
                            <?php endif; // check for comment navigation ?>
                    <div class="card-body">
                        
                            <?php
                                /* Loop through and list the comments. Tell wp_list_comments()
                                 * to use shape_comment() to format the comments.
                                 * If you want to overload this in a child theme then you can
                                 * define shape_comment() and that will be used instead.
                                 * See shape_comment() in inc/template-tags.php for more.
                                 */
                                wp_list_comments( array( 'callback' => 'shape_comment' ) );
                            ?>
                        
                    </div>
                        <!-- .commentlist -->

                    </div>

                    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through? If so, show navigation ?>
                        <nav role="navigation" id="comment-nav-below" class="site-navigation comment-navigation text-center mb-2">
                                <?php previous_comments_link( __( '<i class="fa fa-caret-left left" aria-hidden="true"></i> Older Comments', 'shape' ) ); ?>

                                <?php next_comments_link( __( 'Newer Comments <i class="fa fa-caret-right right" aria-hidden="true"></i>', 'shape' ) ); ?>
                        </nav>
                        <!-- #comment-nav-below .site-navigation .comment-navigation -->
                        <?php endif; // check for comment navigation ?>

                            <?php endif; // have_comments() ?>

                                <?php
                                    // If comments are closed and there are comments, let's leave a little note, shall we?
                                    if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
                                ?>
                                    <p class="nocomments">
                                        <?php _e( 'Comments are closed.', 'shape' ); ?>
                                    </p>
                                    <?php endif; ?>
                                        <?php 
                                        $aria_req = ( $req ? " aria-required='true'" : '' );
                                       $args = array(
                                        'fields' => apply_filters(
                                            'comment_form_default_fields', array(
                                                'author' =>'

                                                <!-- Name -->
                                                <label for="name">'. __( 'Your name' ) . ( $req ? '<span class="required">*</span>' : '' )  .' </label>
                                                <input type="text" id="author" name="author" class="form-control" value="' .
                                                    esc_attr( $commenter['comment_author'] ) . '" '. $aria_req . '>
                                                ',
                                                    
                                                'email'  => '
                                                <!-- Email -->
                                                <label for="email">'. __( 'Your email', 'domainreference' ) . ( $req ? '<span class="required">*</span>' : '' ). '</label>
                                                <input type="text" id="email" name="email" class="form-control" ' . $aria_req .' value="' . esc_attr(  $commenter['comment_author_email'] ) .
                                                    '">
                                                '
                                            )
                                        ),
                                        'comment_field' => (is_user_logged_in() ? '
                                                            <!--Third row-->
                                                            <div class="row">
                                                                <!--Image column-->
                                                                <div class="col-sm-2 col-xs-12">' .
                                                                    get_avatar( get_current_user_id(), 100 ) . 
                                                                '</div>
                                                                <!--/.Image column-->

                                                                <!--Content column-->
                                                                <div class="col-sm-10 col-12">

                                                                    <!-- Comment -->
                                                                    <div class="form-group">
                                                                        <label for="comment">Your comment</label>
                                                                        <textarea id="comment" name="comment" type="text"  class="form-control" rows="5"></textarea>
                                                                    </div>


                                                                </div>
                                                                <!--/.Content column-->

                                                            </div>
                                                            <!--/.Third row-->': ' 
                                                            <!-- Comment -->
                                                            <div class="form-group">
                                                                <label for="comment">Your comment</label>
                                                                <textarea id="comment" name="comment" type="text"  class="form-control" rows="5"></textarea>
                                                            </div>'),
                                           'comment_notes_after' => '',
                                           'comment_notes_before' => '',
                                           'logged_in_as' => '<p class="text-center">('. sprintf(
                                                            __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
                                                              admin_url( 'profile.php' ),
                                                              $user_identity,
                                                              wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                                                            ) . ')</p>  ',
                                            'title_reply' => '',
                                            'class_submit' => 'btn btn-info btn-md ',
                                            'label_submit' => 'post ' 

                                       );
                                        ?>
                                        <!--Leave a reply section-->
                                        <div class="card mb-3 wow fadeIn">
                                            <div class="card-header font-weight-bold">Leave a reply</div>
                                            <div class="card-body">

                                            <?php 
                                            comment_form($args ); ?>
                                            </div>
                                        </div>
                                        <!--/.Leave a reply section-->
</div>
<!-- #comments .comments-area -->