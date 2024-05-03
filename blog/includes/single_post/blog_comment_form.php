<?php
if ( isset( $_POST['comment_form_submit'] ) ) {
    $obj2->store_comment( $_POST );
}
?>
<div class="col-lg-12">
    <div class="sidebar-item submit-comment">
        <div class="sidebar-heading">
            <h2>Your comment</h2>
        </div>
        <div class="content">
            <form id="comment" action="" method="post">
                <div class="row">

                    <input name="post_id" type="hidden" id="post_id"
                        value="<?php echo $single_post_display_data['post_id']; ?>">

                    <div class="col-md-6 col-sm-12">
                        <fieldset>
                            <input name="comment_name" type="text" id="comment_name" placeholder="YOUR NAME" required=""
                                style="text-transform:none">
                        </fieldset>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <fieldset>
                            <input name="comment_email" type="email" id="comment_email" placeholder="YOUR EMAIL"
                                required="" style="text-transform:none">
                        </fieldset>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <fieldset>
                            <input name="comment_subject" type="text" id="comment_subject" placeholder="SUBJECT"
                                style="text-transform:none">
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <textarea name="comment_message" rows="6" id="comment_message"
                                placeholder="Write your comment here..." required=""
                                style="text-transform:none"></textarea>
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset>
                            <button type="submit" name="comment_form_submit" id="comment_form_submit"
                                class="main-btn">Submit</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>