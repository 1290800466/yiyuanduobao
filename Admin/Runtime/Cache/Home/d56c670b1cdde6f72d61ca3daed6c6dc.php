<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Insert title here</title>
	<link href="<?php echo (CSS_URL); ?>/admin_goods/css/calendar.css" rel="stylesheet">
			
	<link href="<?php echo (CSS_URL); ?>/admin_goods/css/default.css" rel="stylesheet">
	<link href="<?php echo (CSS_URL); ?>/admin_goods/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo (CSS_URL); ?>/editor/editor/themes/default/default.css" />
	<script charset="utf-8" src="<?php echo (CSS_URL); ?>/editor/editor/kindeditor-min.js"></script>
	<script charset="utf-8" src="<?php echo (CSS_URL); ?>/editor/editor/lang/zh_CN.js"></script>
	<script src="<?php echo (CSS_URL); ?>/editor/editor/kindeditor.js"></script>
</head>
<body>
<div class="main">
<div class="main_title">幸运号输入&nbsp&nbsp<a href="<?php echo u("Index/main");?>" class="back_list" >返回首页</a></div>
<div class="blank5"></div>
<form name="edit" action="<?php echo u('Goods/lucky_insert',array('id' => $goods_info['id']));?>" method="post" enctype="multipart/form-data">
<table class="form conf_tab" cellpadding=0 cellspacing=0 >
	<tr>
		<td colspan=2 class="topTd"></td>
	</tr>
	<tr>
		<td class="item_title">本期幸运号:</td>
		<td class="item_input">
		<input type="text" class="textbox" name="lucky_number" style="width:300px;" /> <span class='tip_span'>n位数字</span></td>
	</tr>
</table>

<div class="blank5"></div>
	<table class="form" cellpadding=0 cellspacing=0>
		<tr>
			<td colspan=2 class="topTd"></td>
		</tr>
		<tr>
			<td class="item_title"></td>
			<td class="item_input">
			<input type="submit" class="button" value="添加" />
			<input type="reset" class="button" value="重置" />
			</td>
		</tr>
		<tr>
			<td colspan=2 class="bottomTd"></td>
		</tr>
	</table> 		 
</form>
</div>
</body>
</html>