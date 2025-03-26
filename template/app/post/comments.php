<?php if (!empty($comments)): ?>
<?php foreach ($comments as $comment): ?>
        <div class="testimonial-items my-2">
            <div class="content">
                <h4 class="title"><?= $comment['name'] ?></h4>
                <p><?= $comment['comment'] ?></p>
            </div>
        </div>
<?php endforeach; ?>
<?php else: ?>
    <div class="testimonial-items">
        <div class="content">
            <h4 class="title">No title</h4>
            <p>No comments</p>
        </div>
    </div>
<?php endif; ?>

