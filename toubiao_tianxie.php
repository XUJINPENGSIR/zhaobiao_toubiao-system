<? session_start(); ?>
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
<?
date_default_timezone_set('prc');//防止时区不对
$w=date("Y年m月d日 H:i:s");
$x=$_GET["zhaobiao_id"];
$y=$_SESSION["username"];
require("conn.php");
$str=mysql_query("select computer_id from user_toubiao where username='$y'",$conn);
$row=mysql_fetch_assoc($str);
$z=$row["computer_id"];
$_SESSION["computer_id"]=$z;
?>
<div id="div" style="height:70px"><h1 align="center">投标信息填写</h1></div>
<form id="form1" name="form1" method="post" action="receive4.php">
<table align="center" width="47%" height="70">
<tr height="30"><td align="right">招标ID:</td><td><input type="text" name="zhaobiao_id" required="required" value="<? echo $x ?>"/></td></tr>
<tr height="30"><td align="right">投标企业ID:</td><td><input type="text" name="computer_id" required="required" value="<? echo $z ?>"/></td></tr>
<tr height="30"><td align="right">投标日期:</td><td><input type="text" name="toubiao_date" required="required" value="<? echo $w; ?>"/></td></tr>
<tr height="30"><td align="right">投标金额:</td><td><input type="text" name="toubiao_money" required="required" /></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="提交" /><input type="reset" name="reset" value="重置" /></td></tr>
</table>
</form>

</body>
</html>