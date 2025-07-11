<?php /* Smarty version Smarty-3.0.6, created on 2011-07-18 14:12:29
         compiled from ".\templates\default/contact.htm" */ ?>
<?php /*%%SmartyHeaderCode:69944d80a773260a81-16104001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c34d5112216bca7f04380d60e71598b20f94c46' => 
    array (
      0 => '.\\templates\\default/contact.htm',
      1 => 1300277102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69944d80a773260a81-16104001',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="going">» إتصل بنا</div>
<br />
<form action="?act=contact&do=send" method="post">
<table cellpadding="0" cellspacing="2">
<tr><td class="form_label">الاسم</td><td><input class="form_input" type="text" name="name" /></td></tr>
<tr><td class="form_label">البريد الإلكتروني</td><td><input class="form_input" type="text" name="email" /></td></tr>
<tr><td class="form_label">موضوع الرسالة</td><td><input class="form_input" type="text" name="subject" /></td></tr>
<tr><td class="form_label">نص الرسالة</td><td><textarea class="form_text" name="message"></textarea></td></tr>
<tr><td class="form_label">رمز التحقق</td><td><input class="form_input" style="background: url('./includes/captcha.php') no-repeat left;" type="text" name="code" /></td></tr>
<tr><td class="form_buttons" colspan="2"><input type="submit" value="إرسال" /></td></tr>
</table>
</form>