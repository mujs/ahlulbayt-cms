<?php /* Smarty version Smarty-3.0.6, created on 2011-03-07 20:43:21
         compiled from ".\templates\default/post.htm" */ ?>
<?php /*%%SmartyHeaderCode:184744d751938f24b09-40490394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '195c35128eae4b4ede40a37acba9eaca7fdf56b5' => 
    array (
      0 => '.\\templates\\default/post.htm',
      1 => 1299519361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184744d751938f24b09-40490394',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
$(document).ready(function() {
	$("#comment_submit").click(function() {
		$.post(
			"posts.php?action=add_comment",
			$("#comment_form").serialize(),
            function(data) {
                $("#comment_form_notif").fadeOut().fadeIn().html(data);
                //$("#comment_submit").removeClass("loading");
			}
		);
	});
});
</script>
<div class="going">» الأقسام » <a href="?act=posts&show=cat&id=<?php echo $_smarty_tpl->getVariable('post')->value['cat_id'];?>
"><?php echo $_smarty_tpl->getVariable('post')->value['cat_title'];?>
</a> » <?php echo $_smarty_tpl->getVariable('post')->value['title'];?>
 <a href="javascript:window.print()"><img alt="طباعة" border="0" src="templates/default/images/print.gif" align="left" /></a></div>
<br />
<div class="info_container">
<div class="page_title" title=""><?php echo $_smarty_tpl->getVariable('post')->value['title'];?>
</div>
<div class="small_info">تاريخ الإضافة: - | عدد القراءات: <?php echo $_smarty_tpl->getVariable('post')->value['views'];?>
 | عدد التعليقات: 0</div>
</div>
<br />
<div class="artext">
<?php echo $_smarty_tpl->getVariable('post')->value['text'];?>

</div>
<br /><br />
<a href="javascript:scroll(0,0)"><img alt="أعلى الصفحة" src="templates/default/images/top_page.gif" align="left" border="0" /></a><br />
<div style="border-top: 1px solid rgb(241, 241, 241); margin-top: 10px;">
<font color="#666666">
المصدر: <?php echo $_smarty_tpl->getVariable('post')->value['source'];?>

</font>
</div>
<br /><br />
<div id="comment">
<div class="info_container">
<div class="page_title" title="">التعليقات &laquo;<?php echo $_smarty_tpl->getVariable('post')->value['num_comments'];?>
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