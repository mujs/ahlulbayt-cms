<?php /* Smarty version Smarty-3.0.6, created on 2011-03-16 14:42:01
         compiled from "style/links_edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:27964d80a20905a449-78293941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a05240e840697c111fea82ce815f46ebbbc635d' => 
    array (
      0 => 'style/links_edit.htm',
      1 => 1300275715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27964d80a20905a449-78293941',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
<div class="title">تحرير الرابط</div>
<div class="content">

<form name="form1" action="?show=links&amp;action=start_edit_link&amp;id=<?php echo $_smarty_tpl->getVariable('link')->value['id'];?>
" method="post">
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td class="td_right">عنوان الرابط</td><td><input type="text" name="title" value="<?php echo $_smarty_tpl->getVariable('link')->value['title'];?>
" /></td></tr>
<tr><td class="td_right">الترتيب</td><td><input type="text" name="secid" value="<?php echo $_smarty_tpl->getVariable('link')->value['secid'];?>
" /></td></tr>
<tr><td class="td_right">الرابط</td><td><input type="text" name="url" value="<?php echo $_smarty_tpl->getVariable('link')->value['url'];?>
" dir="ltr" /></td></tr>
<tr><td class="td_right">تفعيل الرابط</td><td>
<?php if ($_smarty_tpl->getVariable('link')->value['status']==1){?>
<input type="radio" name="status" value="1" checked="checked" />نعم 
<input type="radio" name="status" value="0" />لا
<?php }else{ ?>
<input type="radio" name="status" value="1" />نعم 
<input type="radio" name="status" value="0" checked="checked" />لا
<?php }?>
</td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="تحرير" /></td></tr>
</table>
</form>

</div>
</div>