<?php $this->need('header.php'); ?>

 <div class="content">
    <div class="w-container">
        <div class="post-title-section">
            <h1><?php $this->title() ?></h1>
            <div class="post-info-wrapper">
                <div class="post-info"><?php $this->date('F j, Y') ?></div>
                <div class="post-info">|</div>
                    <?php $this->tags('', true, '<a class="post-info when-link">None</a>') ?>
                </div>
            </div>
            <div class="w-richtext body-copy">
                <?php $this->content(); ?>
            </div>
            <div class="article-page">
                <ul class="post-nav clearfix">
                    <li class="previous">
                       <?php $this->thePrev('<strong>上一篇</strong>%s','<strong>上一篇</strong><a class="is-nothing">已经没有更多文章了</a>'); ?>
                    </li>
                    <li class="next">
                        <?php $this->theNext('<strong>下一篇</strong>%s','<strong>下一篇</strong><a class="is-nothing">已经没有更多文章了</a>'); ?>
                    </li>
                </ul>
            </div>
            <div id="footer" class="comment-footer">
                <?php $this->need('comments.php'); ?>
            </div>
        </div>
    </div>
<?php $this->need('footer.php'); ?>