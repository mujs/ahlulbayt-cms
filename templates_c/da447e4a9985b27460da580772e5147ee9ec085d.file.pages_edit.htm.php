<?php /* Smarty version Smarty-3.0.6, created on 2011-03-19 17:28:13
         compiled from "style/pages_edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:186834d84bd7dce5cc5-11001678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da447e4a9985b27460da580772e5147ee9ec085d' => 
    array (
      0 => 'style/pages_edit.htm',
      1 => 1300438413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186834d84bd7dce5cc5-11001678',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
<div class="title">تحرير الصفحة</div>
<div class="content">

<form name="form1" action="?show=pages&amp;action=start_edit_page&amp;id=<?php echo $_smarty_tpl->getVariable('page')->value['id'];?>
" method="post">
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td class="td_right">عنوان الصفحة</td><td><input type="text" name="title" value="<?php echo $_smarty_tpl->getVariable('page')->value['title'];?>
" /></td></tr>
<tr><td class="td_right">المحتوى</td><td><textarea name="content" class="ckeditor"><?php echo $_smarty_tpl->getVariable('page')->value['content'];?>
</textarea></td></tr>
<tr><td class="td_right">تفعيل الصفحة</td><td>
<?php if ($_smarty_tpl->getVariable('page')->value['status']==1){?>
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