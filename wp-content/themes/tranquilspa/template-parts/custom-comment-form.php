<?php
    $args = array(
        'title_reply'   => '<div class="py-3">Reply or Comment</div>',
        'comment_field' => '
                <div class="form-group">
                    <label for="comment">Comment *</label>
                    <textarea rows="3" class="form-control" id="comment" name="comment"></textarea>
                </div>
            ',
        'submit_button' => '
                <button class="btn btn-primary" type="submit">Submit</button>
            ',
        'fields'        => apply_filters('comment_form_default_fields', array(
            'author' => '
                    <div class="form-group">
                        <label for="author">Your Name *</label>
                        <input type="text" class="form-control" id="author" name="author" />
                    </div>
                ',
            'email' => '
                    <div class="form-group">
                        <label for="email">Your Email *</label>
                        <input type="email" class="form-control" id="email" name="email" />
                    </div>
                '
        ))
    );

    comment_form($args);
?>
