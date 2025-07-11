<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:25:21
         compiled from "style/home.htm" */ ?>
<?php /*%%SmartyHeaderCode:186644d807f623f1740-95009236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '244b46db2c843b6ec3f25b011e616996fb4841d4' => 
    array (
      0 => 'style/home.htm',
      1 => 1300266824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186644d807f623f1740-95009236',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="block">
<div class="title">التحديثات والترقيات</div>
<div class="content">
لاتوجد أي تحديثات للسكربت حالياً
</div>
</div>

<br />

<div class="block">
<div class="title">الإحصائيات</div>
<div class="content">
<table width="100%" cellpadding="0" cellspacing="0">
<tr><td width="20%">عدد أقسام المقالات</td><td>: <b><?php echo $_smarty_tpl->getVariable('acats_num')->value;?>
</b></td></tr>
<tr><td width="20%">عدد المقالات</td><td>: <b><?php echo $_smarty_tpl->getVariable('articles_num')->value;?>
</b></td></tr>
<tr><td width="20%">عدد أقسام معرض الصور</td><td>: <b><?php echo $_smarty_tpl->getVariable('gcats_num')->value;?>
</b></td></tr>
<tr><td width="20%">عدد الصور</td><td>: <b><?php echo $_smarty_tpl->getVariable('images_num')->value;?>
</b></td></tr>
<tr><td width="20%">عدد البلوكات</td><td>: <b><?php echo $_smarty_tpl->getVariable('blocks_num')->value;?>
</b></td></tr>
</table>
</div>
</div>

<br />

<div class="block">
<div class="title">ملاحظات المشرفين</div>
<div class="content" align="center">
<textarea name="notes" style="width: 450px; height: 150px;"></textarea><br />
<input type="button" value="حفظ" />
</div>
</div>