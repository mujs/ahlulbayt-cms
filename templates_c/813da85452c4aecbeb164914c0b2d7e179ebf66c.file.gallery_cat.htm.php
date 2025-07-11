<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:25:06
         compiled from ".\templates\default/gallery_cat.htm" */ ?>
<?php /*%%SmartyHeaderCode:88524d7a891eb4ea66-95732520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '813da85452c4aecbeb164914c0b2d7e179ebf66c' => 
    array (
      0 => '.\\templates\\default/gallery_cat.htm',
      1 => 1299876122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88524d7a891eb4ea66-95732520',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="going">» <a href="?act=gallery">معرض الصور</a> » <?php echo $_smarty_tpl->getVariable('cat')->value['title'];?>
</div>
<br />
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['name'] = 'tp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tp']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('images')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="thumb_container">
<div class="title_art" title=""><img alt="" src="templates/default/images/title_art.gif" border="0" hspace="3" /><a href="?act=gallery&show=image&id=<?php echo $_smarty_tpl->getVariable('images')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['id'];?>
" class="cat_link"><?php echo $_smarty_tpl->getVariable('images')->value[$_smarty_tpl->getVariable('smarty')->value['section']['tp']['index']]['title'];?>
</a></div>
</div>
<?php endfor; endif; ?>