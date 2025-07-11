<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:24:54
         compiled from ".\templates\default/menus.htm" */ ?>
<?php /*%%SmartyHeaderCode:113164d724d85f292f0-79675006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '375c8b5866f6fbcddeb0213d0e769e062772146d' => 
    array (
      0 => '.\\templates\\default/menus.htm',
      1 => 1299230374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113164d724d85f292f0-79675006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('style')->value)."/main_menu.htm", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div class="block_header_r">كلامهم نور</div>
<div class="block_content_r" align="justify">
<?php echo $_smarty_tpl->getVariable('noor')->value;?>

</div>
<div class="block_header_r">المتواجدون الآن</div>
<div class="block_content_r" align="center">
<?php echo $_smarty_tpl->getVariable('online')->value;?>

</div>