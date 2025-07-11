<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:25:05
         compiled from ".\templates\default/gallery_cats.htm" */ ?>
<?php /*%%SmartyHeaderCode:308154d7a89753b5684-19962188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d034d330fa3cbb1b62f71bb3ad74d4a45f5f765' => 
    array (
      0 => '.\\templates\\default/gallery_cats.htm',
      1 => 1299876210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308154d7a89753b5684-19962188',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="going">» معرض الصور</div>
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
<div class="title_art" title=""><img alt="" src="templates/default/images/title_art.gif" border="0" hspace="3" /><a href="?act=gallery&show=cat&id=<?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['id'];?>
" class="cat_link"><?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['title'];?>
</a></div>
<?php endfor; endif; ?>