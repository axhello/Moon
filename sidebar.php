<div class="sidebar-column">
    <div data-collapse="medium" class="w-nav navigation-bar">
        <div class="w-container">
            <a href="/" class="w-nav-brand logo-link">
                <h1 class="logo-text"><?php $this->options->title(); ?></h1>
            </a>
            <div class="w-nav-button menu-button">
                <i class="fa fa-bars" style="font-size: 17px"></i>
            </div>
        </div>
        <div class="w-nav-overlay" style="display: block">
            <nav role="navigation" class="w-nav-menu navigation-menu">
                <div class="w-hidden-medium w-hidden-small w-hidden-tiny main-subheading">
                    <?php $this->options->description() ?>
                </div>
                <div class="w-hidden-medium w-hidden-small w-hidden-tiny divider"></div>
                <a href="<?php $this->options->siteUrl(); ?>" class="w-nav-link nav-link w--current">Home</a>
                    <?php $this->widget('Widget_Contents_Page_List')->parse('<a class="w-nav-link nav-link" href="{permalink}">{title}</a>'); ?>
                <div class="divider"></div>
                <div class="social-link-group">
                    <ul class="icons">
                        <?php if ($this->options->socialtwitter): ?>
                        <li><a href="<?php $this->options->socialtwitter(); ?>" target="_blank" class="icon icon-twitter"><span class="label">Twitter</span></a></li>
                        <?php endif; ?>
                        <?php if ($this->options->socialweibo): ?>
                        <li><a href="<?php $this->options->socialweibo(); ?>" target="_blank" class="icon icon-sina-weibo"><span class="label">Weibo</span></a></li>
                        <?php endif; ?>
                        <?php if ($this->options->socialsteam): ?>
                        <li><a href="<?php $this->options->socialsteam(); ?>" target="_blank" class="icon icon-steam"><span class="label">Steam</span></a></li>
                        <?php endif; ?>
                        <?php if ($this->options->socialgithub): ?>
                        <li><a href="<?php $this->options->socialgithub(); ?>" target="_blank" class="icon icon-github"><span class="label">Github</span></a></li>
                        <?php endif; ?>
                        <?php if ($this->options->email): ?>
                        <li><a href="mailto:<?php $this->options->email(); ?>" class="icon icon-mail"><span class="label">Email</span></a></li>
                        <?php else: ?>
                        <li><a href="mailto:<?php $this->author('mail'); ?>" class="icon icon-mail"><span class="label">Email</span></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>