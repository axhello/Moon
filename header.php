<!DOCTYPE html>
<html lang="zh">
<head>
	<link rel="shortcut icon" href="/favicon.ico"/> 
	<link rel="bookmark" href="/favicon.ico"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="<?php $this->options->charset(); ?>"> 
	<title><?php $this->archiveTitle(array(
	            'category'  =>  _t('分类 %s 下的文章'),
	            'search'    =>  _t('包含关键字 %s 的文章'),
	            'tag'       =>  _t('标签 %s 下的文章'),
	            'author'    =>  _t('%s 发布的文章')
	        ), '', ' - '); ?><?php $this->options->title(); ?><?php if ($this->is('index')) : ?> - <?php $this->options->description(); ?><?php endif; ?></title>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">
	<?php $this->header(); ?>   <!-- 通过自有函数输出HTML头部信息 -->
</head>
<body>
<?php $this->need('sidebar.php'); ?>