<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:24:54
         compiled from ".\templates\default/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:218304d724d8579a2a4-49717351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bd9a8915e4bacfebc1e2c8a67b9612974977a34' => 
    array (
      0 => '.\\templates\\default/index.htm',
      1 => 1299230370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218304d724d8579a2a4-49717351',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('style')->value)."/header.htm", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div id="menu">
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('style')->value)."/menus.htm", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>
<div id="content">
<div id="content2">
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('style')->value)."/".($_smarty_tpl->getVariable('tmp_page')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>
</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('style')->value)."/footer.htm", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>