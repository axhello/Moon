<?php
/**
 * 简洁大气-手机端响应式主题
 * 
 * @package Moon Theme 
 * @author Axhello
 * @version 1.0.0
 * @link http://www.ciyuanai.net
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="content">
	<?php while($this->next()): ?>
    <div class="w-dyn-list blog-list">
        <div class="w-dyn-items">
            <div class="w-dyn-item">
                <div class="post-wrapper">
                    <a href="<?php $this->permalink() ?>" class="w-inline-block blog-title-link">
                        <h1 class="blog-title"><?php $this->title() ?></h1>
                    </a>
                    <div class="post-info-wrapper">
                        <div class="post-info"><?php $this->date('F j, Y') ?></div>
                        <div class="post-info">|</div>
                        <?php $this->tags('', true, '<a class="post-info when-link">None</a>') ?>
                    </div>
                    <p><?php $this->excerpt('300', '...') ?></p>
                    <a class="w-button button-round" href="<?php $this->permalink() ?>">Continue reading →</a>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <div class="button-wrapper">
        <?php $this->pageLink('←&nbsp;Prev posts','prev') ?>
		<?php $this->pageLink('More posts&nbsp;→','next') ?>
    </div>
</div>
<?php $this->need('footer.php'); ?>