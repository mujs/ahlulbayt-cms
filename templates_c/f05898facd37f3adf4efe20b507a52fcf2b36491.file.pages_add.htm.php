<?php /* Smarty version Smarty-3.0.6, created on 2011-07-18 14:40:20
         compiled from "style/pages_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:282094d81e7bb782890-05039720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f05898facd37f3adf4efe20b507a52fcf2b36491' => 
    array (
      0 => 'style/pages_add.htm',
      1 => 1300359092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282094d81e7bb782890-05039720',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
<div class="title">إضافة صفحة</div>
<div class="content">

<form name="form1" action="?show=pages&amp;action=start_add_page" method="post">
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td class="td_right">عنوان الصفحة</td><td><input type="text" name="title" /></td></tr>
<tr><td class="td_right">المحتوى</td><td><textarea name="content" class="ckeditor"></textarea></td></tr>
<tr><td class="td_right">تفعيل الصفحة</td><td>
<input type="radio" name="status" value="1" checked="checked" />نعم 
<input type="radio" name="status" value="0" />لا
</td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="إضافة" /></td></tr>
</table>
</form>

</div>
</div>