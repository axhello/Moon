<?php 
error_reporting(E_ALL ^ E_NOTICE);

function themeConfig($form) {
    $socialweibo = new Typecho_Widget_Helper_Form_Element_Text('socialweibo', NULL, NULL, _t('微博链接'), _t('在这里输入微博链接,带http://'));
	$form->addInput($socialweibo);
	$socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('GitHub链接'), _t('在这里输入GitHub链接,带http://'));
	$form->addInput($socialgithub);
	$socialtwitter = new Typecho_Widget_Helper_Form_Element_Text('socialtwitter', NULL, NULL, _t('Twitter链接'), _t('在这里输入twitter链接,带http://'));
	$form->addInput($socialtwitter);
	$socialsteam = new Typecho_Widget_Helper_Form_Element_Text('socialsteam', NULL, NULL, _t('Steam链接'), _t('在这里输入Steam链接,带http://'));
	$form->addInput($socialsteam);
	$email = new Typecho_Widget_Helper_Form_Element_Text('email', NULL, NULL, _t('联系邮箱'), _t('在这里输入您的联系邮箱，不填以管理员邮箱为准'));
	$form->addInput($email);
}