<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>/pay_list/style.css">
<link rel="stylesheet" href="<?php echo (CSS_URL); ?>/pay_list/default.css"></head>
<body>
<div id="info"></div>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>/pay_list/weebox.css">
<div class="main">
			<div class="main_title">会员列表</div>
<div class="blank5"></div>
<div class="button_row">
	<div class="main_title"> <a href="<?php echo u("Index/main");?>" class="back_list">返回首页</a></div>

</div>
<div class="blank5"></div>
<div class="blank5"></div>
<!-- Think 系统列表组件开始 -->
<table id="dataTable" class="dataTable" cellpadding="0" cellspacing="0">
	<tbody>
		<tr><td colspan="16" class="topTd">&nbsp; </td></tr>
		<tr class="row">
			<th width="100px">会员id</th>
			<th width="300px">会员昵称   </th>
			<th width="150px">最后登录时间</th>
		</tr>
		<?php if(is_array($user_list)): foreach($user_list as $key=>$user): ?><tr class="row" align="center">
				<td>&nbsp;<?php echo ($user["id"]); ?></td>
				<td>&nbsp;<?php echo ($user["name"]); ?></td>
				<td>&nbsp;<?php echo ($user["login_time"]); ?></td>
			</tr><?php endforeach; endif; ?>
	</tbody>
</table>
<!-- Think 系统列表组件结束 -->
 

<div class="blank5"></div>

</div>

</body></html>