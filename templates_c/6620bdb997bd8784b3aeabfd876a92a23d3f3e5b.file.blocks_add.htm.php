<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:25:31
         compiled from "style/blocks_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:90194d81d95d31e6f6-16437986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6620bdb997bd8784b3aeabfd876a92a23d3f3e5b' => 
    array (
      0 => 'style/blocks_add.htm',
      1 => 1300355400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90194d81d95d31e6f6-16437986',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<script>
function changeType() {
    if (document.form1.type[0].checked == true) {
        document.getElementById('html_content').style.display = '';
        document.getElementById('php_file').style.display = 'none';
    } else {
        document.getElementById('html_content').style.display = 'none';
        document.getElementById('php_file').style.display = '';
    }
}
</script>

<div class="block">
<div class="title">إضافة بلوك</div>
<div class="content">

<form name="form1" action="?show=blocks&amp;action=start_add_block" method="post">
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td class="td_right">عنوان البلوك</td><td><input type="text" name="title" /></td></tr>
<tr><td class="td_right">نوع البلوك</td><td>
<input type="radio" name="type" value="0" onclick="changeType()" checked="checked" />محتوى HTML 
<input type="radio" name="type" value="1" onclick="changeType()" />ملف PHP
</td></tr>
<tr id="html_content"><td class="td_right">محتوى HTML</td><td><textarea name="html_content" class="ckeditor"></textarea></td></tr>
<tr id="php_file" style="display: none;"><td class="td_right">ملف PHP</td><td>
<select name="php_file">
<?php  $_smarty_tpl->tpl_vars['php_file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('php_files')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['php_file']->key => $_smarty_tpl->tpl_vars['php_file']->value){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['php_file']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['php_file']->value;?>
</option>
<?php }} ?>
</select>
</td></tr>
<tr><td class="td_right">تفعيل البلوك</td><td>
<input type="radio" name="status" value="1" checked="checked" />نعم 
<input type="radio" name="status" value="0" />لا
</td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="إضافة" /></td></tr>
</table>
</form>

</div>
</div>