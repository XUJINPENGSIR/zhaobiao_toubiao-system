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
<? $y=$_GET["zhaobiao_id"];
require('conn.php');
$str="select * from info_zhaobiao where zhaobiao_id='$y'";
$result=mysql_query($str,$conn);
$row=mysql_fetch_assoc($result);
if(isset($_POST["submit"]))
{ 
    $yaopin_name=$_POST["yaopin_name"];
    $zhaobiao_total=$_POST["zhaobiao_total"];
    $zhaobiao_end_date=$_POST["zhaobiao_end_date"];
    $zhaobiao_baozhenjin=$_POST["zhaobiao_baozhenjin"];
   
	require('conn.php');
    $st="update info_zhaobiao set yaopin_name='$yaopin_name',zhaobiao_total='$zhaobiao_total',zhaobiao_end_date='$zhaobiao_end_date',zhaobiao_baozhenjin='$zhaobiao_baozhenjin' where zhaobiao_id='$y'";
    mysql_query($st);
	?>
    <script>
location.href="zhaobiao_information.php";
</script>
	<? }
	else{
		echo"aa";}?>
    


<div id="div" style="height:70px"><h1 align="center">招标信息修改</h1></div>
<form id="form1" name="form1" method="post" action="">
<table align="center" width="47%" height="70">
<tr height="30"><td align="right">药品名称:</td><td><input type="text" name="yaopin_name" required="required" value="<? echo $row['yaopin_name'] ?>"/></td></tr>
<tr height="30"><td align="right">药品总量:</td><td><input type="text" name="zhaobiao_total" required="required" value="<? echo $row['zhaobiao_total'] ?>"/></td></tr>
<tr height="30"><td align="right">招标截止日期:</td><td><input type="date" name="zhaobiao_end_date" required="required" value="<? echo $row['zhaobiao_end_date'] ?>"/></td></tr>
<tr height="30"><td align="right">招标保证金:</td><td><input type="text" name="zhaobiao_baozhenjin" required="required" value="<? echo $row['zhaobiao_baozhenjin'] ?>"/></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="提交" /><input type="reset" name="reset" value="重置" /></td></tr>
</table>
</form>
</body>
</html>