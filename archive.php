<?php $this->need('header.php'); ?>

<?php if ($this->have()): ?>
	<div class="content">
        <div class="w-container">
            <h1 class="section-header"><?php $this->archiveTitle(array(
              'category'  =>  _t('分类 %s 下的文章'),
              'search'    =>  _t('包含关键字 %s 的文章'),
              'tag'       =>  _t('标签 %s 下的文章'),
              'author'    =>  _t('%s 发布的文章')
          ), '', ''); ?></h1>
            <?php while($this->next()): ?>
            <div class="w-dyn-list">
                <div class="w-dyn-items">
                    <div class="w-dyn-item">
                        <div class="post-wrapper">
                            <div>
                                <a class="w-inline-block blog-title-link" href="<?php $this->permalink() ?>">
                                    <h1 class="blog-title"><?php $this->title() ?></h1>
                                </a>
                                <div class="post-info-wrapper">
                                    <div class="post-info"><?php $this->date('F d, Y') ?></div>
                                    <div class="post-info">|</div>
                                    <?php $this->tags('', true, '<a class="post-info when-link">None</a>') ?>
                                </div>
                                <p class="post-summary"><?php $this->excerpt('300', '...') ?></p>
                                <a class="w-button button-round" href="<?php $this->permalink() ?>">Continue reading →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        	<div class="button-wrapper">
        		<?php $this->pageNav('&laquo; Prev', 'Next &raquo;'); ?>
        	</div>
        </div>
    </div>
<?php else: ?>
    <div class="content">
        <div class="w-container">
        	<h1 class="section-header">404-Not Found</h1>
        	<div class="w-dyn-list">
		        <div class="w-dyn-items">
		            <div class="w-dyn-item">
		                <div class="post-wrapper">
		                    <?php _e('没有找到你要的内容'); ?>
		                </div>
		            </div>
		        </div>
		    </div>
       	</div>
    </div>
<?php endif; ?>
<?php $this->need('footer.php'); ?>
