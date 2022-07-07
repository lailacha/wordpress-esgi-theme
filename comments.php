<?php $args = array(
    'number'  => '5',
    'post_id' => $post->ID, // use post_id, not post_ID
);
$comments = get_comments($args);
//echo var_export($comments, true);
?>
<?php if (have_comments()) :  ?>

    <?php foreach ($comments as $comment) : ?>
        <div class="comments">

            <div class="col-md-12 mt-2">
                <h3> <?php echo $comment->comment_author; ?></h3>
                <div class="comment-content mt-4">
                    <?php echo $comment->comment_content; ?>
                </div>
                <div class="comment-reply mt-4">
                    <?php echo get_comment_reply_link([
                        'add_below'  => 'comment',
                        'respond_id' => 'respond',
                        'reply_text' => __('Reply'),
                        'login_text' => __('Log in to Reply'),
                        'depth'      => 1,
                        'before'     => '',
                        'after'      => '',
                        'max_depth'  => 2
                    ], $comment->id, $post->ID) ?>
                </div>

            </div>
            </div>

    <?php endforeach;
endif; ?>
        <?php comment_form(); ?>

        //echo $comment->comment_author . '<br />' . $comment->comment_content;