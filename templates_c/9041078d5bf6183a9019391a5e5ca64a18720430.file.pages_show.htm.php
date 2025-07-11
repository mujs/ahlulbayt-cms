<?php /* Smarty version Smarty-3.0.6, created on 2011-03-17 13:56:43
         compiled from "style/pages_show.htm" */ ?>
<?php /*%%SmartyHeaderCode:183004d81e8eaf26ce1-74875064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9041078d5bf6183a9019391a5e5ca64a18720430' => 
    array (
      0 => 'style/pages_show.htm',
      1 => 1300359319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183004d81e8eaf26ce1-74875064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
<div class="title">تحرير / حذف الصفحات</div>
<div class="content">

<table cellpadding="0" cellspacing="1" width="100%">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['name'] = 'tp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('pages')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td class="td_row" width="75%"><a href="../?act=pages&id=<?php echo $_smarty_tpl->getVariable('pages')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['id'];?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('pages')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['title'];?>
</a></td><td class="td_row" align="center"><a href="?show=pages&action=edit_page&id=<?php echo $_smarty_tpl->getVariable('pages')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['id'];?>
">تحرير</a> - <a href="?show=pages&action=delete_page&id=<?php echo $_smarty_tpl->getVariable('pages')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['id'];?>
">حذف</a></td></tr>
<?php endfor; endif; ?>
<tr><td colspan="2" align="center"><?php echo $_smarty_tpl->getVariable('spages')->value;?>
</td></tr>
</table>

</div>
</div>