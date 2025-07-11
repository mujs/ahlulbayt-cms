<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:25:39
         compiled from "style/msg.htm" */ ?>
<?php /*%%SmartyHeaderCode:198084d7df1c9e6ded3-95705936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e3649ef46340a1c08209a44eb2efe9c19ad4501' => 
    array (
      0 => 'style/msg.htm',
      1 => 1300099526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198084d7df1c9e6ded3-95705936',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
<div class="title">رسالة</div>
<div class="content">
<?php echo $_smarty_tpl->getVariable('msg')->value;?>

<?php echo $_smarty_tpl->getVariable('meta_redirect')->value;?>

</div>
</div>