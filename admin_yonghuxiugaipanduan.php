<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
require('conn.php');
$computer_id=$_GET["computer_id"];
    $computer_name=$_POST["computer_name"];
    $computer_email=$_POST["computer_email"];
    $computer_ceo=$_POST["computer_ceo"];
    $computer_tel=$_POST["computer_tel"];
 
    $st="update info_computer set computer_name='$computer_name',computer_email='$computer_email',computer_ceo='$computer_ceo',computer_tel='$computer_tel' where computer_id='$computer_id'";
    mysql_query($st) or die("执行失败");
	echo "<script>alert('修改成功');location.href='admin_computer';</script>";
?>
</body>
</html>