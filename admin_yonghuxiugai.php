<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
html,body {
    background: linear-gradient(to left bottom,rgb(102,204,255),rgb(255,255,255));//渐变色
    width: 100%;
    height: 100%;
}

	input {
    background-color:#eee;
    outline:none; /*不出现蓝色边框*/
    border-radius: 20px;
    border: 1px solid #3FF;
    transition: 300ms;
    font-size: 14px;
}

#div h1 {
	font-family: 华文行楷;
	font-size:40px;
	color:#F6F;
}
</style>
</head>
<body>
<form method="post" action="admin_yonghuxiugai.php">                               
<table align="center" width="47%" height="70">
<tr height="30">
<td width="28%" align="right">输入公司ID:</td>
<td width="23%"><input type="text" name="keyword" /></td>
<td width="49%"><input type="submit" value="查询" /></td></tr>
</table>
</form>
<? $keyword=$_POST["keyword"];
require('conn.php');
$str="select * from info_computer where computer_id='$keyword'";
$result=mysql_query($str,$conn);
$row=mysql_fetch_assoc($result);
?>
<div id="div" style="height:70px"><h1 align="center">企业信息修改</h1></div>
<form id="form1" name="form1" method="post" action="admin_yonghuxiugaipanduan?computer_id=<? echo $row["computer_id"] ?>">
<table align="center" width="47%" height="70">
<tr height="30"><td align="right">公司名称:</td><td><input type="text" name="computer_name" required="required" value="<? echo $row['computer_name'] ?>"/></td></tr>
<tr height="30"><td align="right">公司CEO:</td><td><input type="text" name="computer_ceo" required="required" value="<? echo $row['computer_ceo'] ?>"/></td></tr>
<tr height="30"><td align="right">公司邮箱:</td><td><input type="email" name="computer_email" required="required" value="<? echo $row['computer_email'] ?>"/></td></tr>

<tr height="30"><td align="right">公司电话:</td><td><input type="text" name="computer_tel" required="required" value="<? echo $row['computer_tel'] ?>"/></td></tr>

<tr><td></td><td><input type="submit" name="submit" value="提交" /><input type="reset" name="reset" value="重置" /></td></tr>
</table>
</form>
</body>
</html>