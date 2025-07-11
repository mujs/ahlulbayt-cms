<?php /* Smarty version Smarty-3.0.6, created on 2011-03-16 11:21:28
         compiled from "style/settings_general.htm" */ ?>
<?php /*%%SmartyHeaderCode:49934d807308bae5b4-72465302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3406c9df88222e777d00c800aa18599735a80588' => 
    array (
      0 => 'style/settings_general.htm',
      1 => 1300263516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49934d807308bae5b4-72465302',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
<div class="title">الإعدادات العامة</div>
<div class="content">

<form action="?show=settings&amp;action=general_start_edit" method="post">
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td class="td_right">اسم الموقع</td><td><input type="text" name="title" value="<?php echo $_smarty_tpl->getVariable('general')->value['title'];?>
" /></td></tr>
<tr><td class="td_right">وصف الموقع</td><td><input type="text" name="description" value="<?php echo $_smarty_tpl->getVariable('general')->value['description'];?>
" /></td></tr>
<tr><td class="td_right">بريد الموقع</td><td><input type="text" name="email" value="<?php echo $_smarty_tpl->getVariable('general')->value['email'];?>
" /></td></tr>
<tr><td class="td_right">القالب</td><td>
<select name="style">
<?php  $_smarty_tpl->tpl_vars['dir'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dirs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dir']->key => $_smarty_tpl->tpl_vars['dir']->value){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
</option>
<?php }} ?>
</select>
</td></tr>
<tr><td class="td_spacer" colspan="2"></td></tr>
<tr><td class="td_right">حقوق الموقع</td><td><input type="text" name="rights" value="<?php echo $_smarty_tpl->getVariable('general')->value['rights'];?>
" /></td></tr>
<tr><td class="td_right">رسالة الموقع</td><td><textarea name="message"><?php echo $_smarty_tpl->getVariable('general')->value['message'];?>
</textarea></td></tr>
<tr><td class="td_spacer" colspan="2"></td></tr>
<tr><td class="td_right">إغلاق الموقع</td><td>
<?php if ($_smarty_tpl->getVariable('general')->value['status']==1){?>
<input type="radio" name="status" value="1" checked="checked" />نعم 
<input type="radio" name="status" value="0" />لا
<?php }else{ ?>
<input type="radio" name="status" value="1" />نعم 
<input type="radio" name="status" value="0" checked="checked" />لا
<?php }?>
</td></tr>
<tr><td class="td_right">رسالة الإغلاق</td><td><textarea name="close_msg"><?php echo $_smarty_tpl->getVariable('general')->value['close_msg'];?>
</textarea></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="تحرير" /></td></tr>
</table>
</form>

</div>
</div>