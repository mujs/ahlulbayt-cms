<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:25:24
         compiled from "style/messages.htm" */ ?>
<?php /*%%SmartyHeaderCode:261084d811004101f92-11781280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6794710f973555184385c9f158934e084f0c3074' => 
    array (
      0 => 'style/messages.htm',
      1 => 1300303872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261084d811004101f92-11781280',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
<div class="title">الرسائل <em><?php echo $_smarty_tpl->getVariable('new_messages')->value;?>
</em></div>
<div class="content">

<table cellpadding="0" cellspacing="1" width="100%">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['name'] = 'tp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('messages')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td class="td_row<?php if ($_smarty_tpl->getVariable('messages')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['status']==0){?>_n<?php }?>" width="75%"><a href="?show=settings&action=read_message&id=<?php echo $_smarty_tpl->getVariable('messages')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('messages')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['name'];?>
: <?php echo $_smarty_tpl->getVariable('messages')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['subject'];?>
</a></td><td class="td_row<?php if ($_smarty_tpl->getVariable('messages')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['status']==0){?>_n<?php }?>" align="center"><a href="?show=settings&action=read_message&id=<?php echo $_smarty_tpl->getVariable('messages')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['id'];?>
">قراءة</a> - <a href="?show=settings&action=delete_message&id=<?php echo $_smarty_tpl->getVariable('messages')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['id'];?>
">حذف</a></td></tr>
<?php endfor; endif; ?>
<tr><td colspan="2" align="center"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</td></tr>
</table>
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td class="td_row" width="1px" height="8px"></td><td>&nbsp;مقروءة</td></tr>
<tr><td class="td_row_n" width="1px"></td><td>&nbsp;غير مقروءة</td></tr>
</table>

</div>
</div>