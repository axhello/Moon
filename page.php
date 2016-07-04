<?php $this->need('header.php'); ?>
<div class="content">
    <div class="w-container">
        <div class="post-title-section">
            <h1><?php $this->title() ?></h1>
            <div class="post-info-wrapper">
                <div class="post-info"><?php $this->date('F d, Y') ?></div>
            </div>
        </div>
        <div class="w-richtext body-copy">
            <?php $this->content(); ?>
        </div>
        <?php $this->need('comments.php'); ?>
    </div>
</div>
<?php $this->need('footer.php'); ?>