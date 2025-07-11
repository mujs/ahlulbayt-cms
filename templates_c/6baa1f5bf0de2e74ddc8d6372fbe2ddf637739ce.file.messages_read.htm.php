<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:25:26
         compiled from "style/messages_read.htm" */ ?>
<?php /*%%SmartyHeaderCode:219744d80db642f5fa2-84198417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6baa1f5bf0de2e74ddc8d6372fbe2ddf637739ce' => 
    array (
      0 => 'style/messages_read.htm',
      1 => 1300290400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219744d80db642f5fa2-84198417',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
<div class="title">قراءة الرسالة</div>
<div class="content">

<table cellpadding="0" cellspacing="1" width="100%">
<tr><td class="td_right">المرسل</td><td><input type="text" value="<?php echo $_smarty_tpl->getVariable('message')->value['name'];?>
" readonly="readonly" /></td></tr>
<tr><td class="td_right">البريد الإلكتروني</td><td><input type="text" value="<?php echo $_smarty_tpl->getVariable('message')->value['email'];?>
" readonly="readonly" /></td></tr>
<tr><td class="td_right">تاريخ الإرسال</td><td><input type="text" value="<?php echo $_smarty_tpl->getVariable('message')->value['send_date'];?>
" readonly="readonly" /></td></tr>
<tr><td class="td_right">موضوع الرسالة</td><td><input type="text" value="<?php echo $_smarty_tpl->getVariable('message')->value['subject'];?>
" readonly="readonly" /></td></tr>
<tr><td class="td_right">نص الرسالة</td><td><textarea readonly="readonly"><?php echo $_smarty_tpl->getVariable('message')->value['message'];?>
</textarea><td></tr>
</table>

</div>
</div>