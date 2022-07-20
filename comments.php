<?php $args = array(
    'number'  => '5',
    'post_id' => $post->ID, 
);
$comments = get_comments($args);
$commentCount = get_comments_number($post->ID);
//echo var_export($comments, true);
?>
<h4>Comments (<?php echo $commentCount; ?>)</h4>
<?php if (have_comments()) :  ?>

    <?php foreach ($comments as $comment) : ?>
        <div class="comments">

            <div class="col-md-12 mt-2">
                <h5> <?php echo $comment->comment_author; ?></h5>
                <div class="comment-content mt-4">
                    <?php echo $comment->comment_content; ?>
                </div>
                <div class="comment-reply mt-4">
                    <?php echo get_comment_reply_link([
                        'add_below'  => 'comment',
                        'respond_id' => 'respond',
                        'reply_text' => 'Reply',
                        'login_text' => __('Log in to Reply'),
                        'depth'      => 1,
                        'before'     => '<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.259652 4.93237L5.75978 0.182841C6.24122 -0.23294 7 0.104591 7 0.750466V3.25212C12.0197 3.30959 16 4.31562 16 9.07268C16 10.9927 14.7631 12.8948 13.3958 13.8893C12.9692 14.1997 12.3611 13.8102 12.5184 13.3071C13.9354 8.77547 11.8463 7.5724 7 7.50265V10.25C7 10.8969 6.24062 11.2329 5.75978 10.8176L0.259652 6.06762C-0.0863164 5.76881 -0.0867851 5.23159 0.259652 4.93237Z" fill="#050A3A"/>
                            </svg>',
                        'after'      => '',
                        'max_depth'  => 2
                    ], $comment->id, $post->ID) ?>
                </div>

            </div>
            </div>

    <?php endforeach;
endif; ?>
        <?php comment_form(
 array(
    // 'fields' => apply_filters(
    //     'comment_form_default_fields', array(
    //         'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder="Your Name (No Keywords)" name="author" type="text" value="' .
    //             esc_attr( $commenter['comment_author'] ) . '" size="30" />'.
    //             '<label for="author">' . __( 'Your Name' ) . '</label> ' .
    //             ( $req ? '<span class="required">*</span>' : '' )  .
    //             '</p>'
    //             ,
    //         'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="your-real-email@example.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    //             '" size="30" />'  .
    //             '<label for="email">' . __( 'Your Email' ) . '</label> ' .
    //             ( $req ? '<span class="required">*</span>' : '' ) 
    //              .
    //             '</p>',
    //         'url'    => '<p class="comment-form-url">' .
    //          '<input id="url" name="url" placeholder="http://your-site-name.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
    //         '<label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
    //            '</p>'
    //     )
    // ),
    "label_submit" => "Submit",
    'class_form' => "comment-form",
    'comment_field' => '<p class="comment-form-comment">' .
    '<input type="text" class="mb-4" name="full_name" placeholder="Full name">'.
        '<textarea id="comment" name="comment" placeholder="Message" cols="45" rows="8" aria-required="true"></textarea>' .
        '</p>',
    'comment_notes_after' => '',
    'title_reply' => '<h6>Leave a reply</h6>'
)); ?>

