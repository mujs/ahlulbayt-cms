<?php /* Smarty version Smarty-3.0.6, created on 2011-06-24 18:25:07
         compiled from ".\templates\default/gallery_image.htm" */ ?>
<?php /*%%SmartyHeaderCode:284194d7a892e680905-29750195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e01942951be4fa9a05ac557beea169af3726e2a7' => 
    array (
      0 => '.\\templates\\default/gallery_image.htm',
      1 => 1299876114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284194d7a892e680905-29750195',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
$(document).ready(function() {
	$("#comment_submit").click(function() {
		$.image(
			"images.php?action=add_comment",
			$("#comment_form").serialize(),
            function(data) {
                $("#comment_form_notif").fadeOut().fadeIn().html(data);
                //$("#comment_submit").removeClass("loading");
			}
		);
	});
});
</script>
<div class="going">» <a href="?act=gallery">معرض الصور</a> » <a href="?act=gallery&show=cat&id=<?php echo $_smarty_tpl->getVariable('image')->value['cat_id'];?>
"><?php echo $_smarty_tpl->getVariable('image')->value['cat_title'];?>
</a> » <?php echo $_smarty_tpl->getVariable('image')->value['title'];?>
 <a href="javascript:window.print()"><img alt="طباعة" border="0" src="templates/default/images/print.gif" align="left" /></a></div>
<br />
<div class="info_container">
<div class="page_title" title=""><?php echo $_smarty_tpl->getVariable('image')->value['title'];?>
</div>
</div>
<br />
<table id="image_stats" width="100%" cellpadding="0" cellspacing="1">
<tr><td colspan="2"></td></tr>
<tr><td colspan="2" align="center"><?php echo $_smarty_tpl->getVariable('image')->value['description'];?>
</td></tr>
<tr><td width="30%">تاريخ الإضافة</td><td><?php echo $_smarty_tpl->getVariable('image')->value['add_date'];?>
</td></tr>
<tr><td width="30%">عدد المشاهدات</td><td><?php echo $_smarty_tpl->getVariable('image')->value['views'];?>
</td></tr>
<tr><td width="30%">عدد التعليقات</td><td><?php echo $_smarty_tpl->getVariable('image')->value['num_comments'];?>
</td></tr>
</table>
<br />
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="50%" align="right">
<?php if ($_smarty_tpl->getVariable('prev_image')->value!=''){?><a href="?act=gallery&show=image&id=<?php echo $_smarty_tpl->getVariable('prev_image')->value['id'];?>
" title="<?php echo $_smarty_tpl->getVariable('prev_image')->value['title'];?>
">&laquo; <?php echo $_smarty_tpl->getVariable('prev_image')->value['title'];?>
</a><?php }?>
</td>
<td width="50%" align="left">
<?php if ($_smarty_tpl->getVariable('next_image')->value!=''){?><a href="?act=gallery&show=image&id=<?php echo $_smarty_tpl->getVariable('next_image')->value['id'];?>
" title="<?php echo $_smarty_tpl->getVariable('next_image')->value['title'];?>
"><?php echo $_smarty_tpl->getVariable('next_image')->value['title'];?>
 &raquo;</a><?php }?>
</td>
</tr>
</table>
<br /><br />
<div id="comment">
<div class="info_container">
<div class="page_title" title="">التعليقات &laquo;<?php echo $_smarty_tpl->getVariable('image')->value['num_comments'];?>
&raquo;</div>
</div>
<form action="" method="post">
<table width="100%" cellpadding="0" cellspacing="1">
<tr><td width="30%" class="td_title">الاسم</td><td><input type="text" name="name" style="width: 300px;" /></td></tr>
<tr><td class="td_title">البريد الإلكتروني</td><td><input type="text" name="email" style="width: 300px;" /></td></tr>
<tr><td class="td_title">التعليق</td><td><textarea name="comment" style="width: 300px; height: 100px;"></textarea></td></tr>
<tr><td class="td_title">كود التحقق</td><td><input type="text" name="captcha" style="width: 300px;" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" id="comment_submit" value="إرسال" /></td></tr>
</table>
</form>
</div>