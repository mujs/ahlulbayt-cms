<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:24:54
         compiled from ".\templates\default/main.htm" */ ?>
<?php /*%%SmartyHeaderCode:31914d83176113b766-24983088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cd9ccbdfec764ede7773485a6965f1d2dabf5d7' => 
    array (
      0 => '.\\templates\\default/main.htm',
      1 => 1300436810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31914d83176113b766-24983088',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="last_art"><?php echo $_smarty_tpl->getVariable('settings')->value['message'];?>
</div>
<br />
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
<div class="cat">
<div class="categorytitle">
<a href="?act=articles&show=cat&id=<?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['id'];?>
" class="cat_link"><?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['title'];?>
</a>
</div>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['name'] = 'tpl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['articles']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tpl']['total']);
?>
<div class="row_container">
<div class="title_art" title=""><img alt="" src="templates/default/images/title_art.gif" border="0" hspace="3" /><a href="?act=articles&show=article&id=<?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['articles'][$_smarty_tpl->getVariable('smarty')->value['section']['tpl']['index']]['id'];?>
" class="cat_link"><?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['articles'][$_smarty_tpl->getVariable('smarty')->value['section']['tpl']['index']]['title'];?>
</a></div>
<div class="small_info">تاريخ الإضافة: - | عدد القراءات: <?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['articles'][$_smarty_tpl->getVariable('smarty')->value['section']['tpl']['index']]['views'];?>
 | عدد التعليقات: 0</div>
</div>
<?php endfor; endif; ?>
<div align="left"><a href='?act=articles&show=cat&id=<?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['id'];?>
'><img src="templates/<?php echo $_smarty_tpl->getVariable('style')->value;?>
/images/more.gif" alt="إقرأ البقية" title="إقرأ البقية" border="0" /></a></div>
<?php endfor; endif; ?>
</div>
</div>
</div>