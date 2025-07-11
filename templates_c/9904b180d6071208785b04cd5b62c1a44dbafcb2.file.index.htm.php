<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:25:21
         compiled from "style/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:206984d80a054c66a29-12059667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9904b180d6071208785b04cd5b62c1a44dbafcb2' => 
    array (
      0 => 'style/index.htm',
      1 => 1300275280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206984d80a054c66a29-12059667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.htm", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div id="parent"><div id="page">
    <?php if ($_smarty_tpl->getVariable('show_menu')->value==true){?>
    <div id="menus">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cp_links')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value){
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['title']->key;
?>
            <li><a href="?show=<?php echo $_smarty_tpl->getVariable('mlink')->value;?>
&amp;action=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
            <?php }} ?>
        </ul>
        <br />
    </div>
    <?php }?>
    <div id="<?php if ($_smarty_tpl->getVariable('show_menu')->value==true){?>content<?php }else{ ?>content2<?php }?>">
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tmp_page')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    </div>
</div></div>
<?php $_template = new Smarty_Internal_Template("footer.htm", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>