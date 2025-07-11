<?php /* Smarty version Smarty-3.0.6, created on 2011-03-12 14:58:08
         compiled from "style\login.htm" */ ?>
<?php /*%%SmartyHeaderCode:114364d7b5fd033e7d7-19266758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be4e720c05d41b933fc70b86009cbca3878b6dc8' => 
    array (
      0 => 'style\\login.htm',
      1 => 1283769009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114364d7b5fd033e7d7-19266758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
	<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
 - تسجيل الدخول</title>
    <link rel="stylesheet" href="style/style.css" />
</head>

<body>

<div id="login_container">
<div id="parent_login_box"><div id="login_box">
<form action="?action=login" method="post">
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td class="td_title" colspan="2">تسجيل الدخول</td></tr>
<?php if ($_smarty_tpl->getVariable('error')->value!=''){?><tr><td class="td_title" colspan="2"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</td></tr><?php }?>
<tr><td class="td_right">اسم المستخدم</td><td><input type="text" name="username" /></td></tr>
<tr><td class="td_right">كلمة المرور</td><td><input type="password" name="password" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="دخول" /></td></tr>
</table>
</form>
</div></div>
</div>

</body>
</html>