<?php /* Smarty version Smarty-3.0.6, created on 2011-03-16 14:35:51
         compiled from "style/links_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:16374d80a0975c1b70-74957047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd356bec92b2bed9f039911574417a1cf623ef345' => 
    array (
      0 => 'style/links_add.htm',
      1 => 1300275342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16374d80a0975c1b70-74957047',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
<div class="title">إضافة رابط</div>
<div class="content">

<form name="form1" action="?show=links&amp;action=start_add_link" method="post">
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td class="td_right">عنوان الرابط</td><td><input type="text" name="title" /></td></tr>
<tr><td class="td_right">الترتيب</td><td><input type="text" name="secid" /></td></tr>
<tr><td class="td_right">الرابط</td><td><input type="text" name="url" dir="ltr" /></td></tr>
<tr><td class="td_right">تفعيل الرابط</td><td>
<input type="radio" name="status" value="1" checked="checked" />نعم 
<input type="radio" name="status" value="0" />لا
</td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="إضافة" /></td></tr>
</table>
</form>

</div>
</div>