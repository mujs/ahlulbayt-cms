<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:25:21
         compiled from "style/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:1554d81dc1bf35d84-61631638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4dd0d0fa148818b998e620839dcfce33e503dc8' => 
    array (
      0 => 'style/header.htm',
      1 => 1300356098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1554d81dc1bf35d84-61631638',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
	<title>لوحة التحكم - <?php echo $_smarty_tpl->getVariable('settings')->value['title'];?>
</title>
    <link type="" rel="stylesheet" href="style/style.css" />
    <script type="text/javascript" src="../includes/ckeditor/ckeditor.js"></script>
</head>

<body>

<div id="container">
    <div id="header"></div>
    <div id="links">
        <ul>
            <li><a href="index.php">الرئيسية</a></li>
            <li><a href="?show=settings">إعدادات الموقع <?php if ($_smarty_tpl->getVariable('new_messages')->value!=0){?><em title="هناك رسائل جديدة"><?php echo $_smarty_tpl->getVariable('new_messages')->value;?>
</em><?php }?></a></li>
            <li><a href="?show=links">قائمة الموقع</a></li>
            <li><a href="?show=blocks">إدارة البلوكات</a></li>
            <li><a href="?show=pages">إدارة الصفحات</a></li>
            <li><a href="?show=articles">إدارة المقالات</a></li>
            <li><a href="?show=gallery">إدارة معرض الصور</a></li>
        </ul>
    </div>
    <div class="small_links">
        <a href="../?act=home" target="_blank">الصفحة الرئيسية للموقع</a>
        <a href="?action=logout">تسجيل الخروج</a>
    </div>