<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:25:45
         compiled from "style/articles_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:261774d831c013d4648-02606223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e96f0880ce7118704de8d56549ea7f1bfb0ccc2' => 
    array (
      0 => 'style/articles_add.htm',
      1 => 1300438014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261774d831c013d4648-02606223',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
<div class="title">إضافة مقال</div>
<div class="content">

<form name="form1" action="?show=pages&amp;action=start_add_page" method="post">
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td class="td_right">عنوان المقال</td><td><input type="text" name="title" /></td></tr>
<tr><td class="td_right">قسم المقال</td><td>
<select name="cat_id">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['name'] = 'tp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('cats')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['total']);
?>
<option value="<?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['title'];?>
</option>
<?php endfor; endif; ?>
</select>
</td></tr>
<tr><td class="td_right">المقال</td><td><textarea name="article" class="ckeditor"></textarea></td></tr>
<tr><td class="td_right">تاريخ الإضافة</td><td><input type="text" name="add_date" value="<?php echo $_smarty_tpl->getVariable('add_date')->value;?>
" /></td></tr>
<tr><td class="td_right">المصدر</td><td><input type="text" name="source" /></td></tr>
<tr><td class="td_right">تفعيل المقال</td><td>
<input type="radio" name="status" value="1" checked="checked" />نعم 
<input type="radio" name="status" value="0" />لا
</td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="إضافة" /></td></tr>
</table>
</form>

</div>
</div>