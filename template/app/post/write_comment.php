<div class="comment-form-area">
    <div class="theme-heading-title">
        <div class="title">Leave a comment</div>
    </div>
    <?php if (!empty(flashMessage('comment_error'))): ?>
    <div class="alert alert-danger" style="direction: rtl">
       <?= flashMessage('comment_error') ?>
    </div>
    <?php  endif; ?>

    <form action="<?= url('comment/store') ?>" method="POST" class="comment-form">
        <div class="row">


            <input type="hidden" name="post" value="<?= $post['id'] ?>">
            <input type="hidden" name="user" value="<?= $post['user_id'] ?>">

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" class="form-control" aria-required="true">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group textarea">
                    <textarea name="comment" class="form-control textarea" placeholder="Comments..."></textarea>
                </div>
            </div>
          <!--  <div class="col-md-12">
                <div class="form-group custom-check">
                    <input type="checkbox" id="html">
                    <label for="html">I agree that my submitted data is being collected and stored. *</label>
                </div>
            </div>-->
        </div>
        <div class="btn-wrap">
            <button type="submit"  class="boxed-btn submit-btn">Post Comment</button>
        </div>
    </form>
</div>
