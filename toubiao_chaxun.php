<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
$y=$_SESSION["username"];
require("conn.php");

$z=$_SESSION["computer_id"];

$str1=mysql_query("select * from info_toubiao where computer_id='$z'",$conn);
?>

<table border="1" width="800" align="center">
<tr><td>序号</td><td>招标ID</td><td>药品名称</td><td>总量</td><td>招标截止日期</td><td>招标保证金</td><td>招标企业ID</td>
</tr>
<?
$i=1;	
while($row1=mysql_fetch_assoc($str1))
{

	$w=$row1["zhaobiao_id"];
	$str2=mysql_query("select * from 		info_zhaobiao where zhaobiao_id='$w'",$conn);
$row2=mysql_fetch_assoc($str2);
		
	?>
<tr>
<td><? echo $i++;?></td>
<td><? echo $row2["zhaobiao_id"];?></td>
<td><? echo $row2["yaopin_name"];?></td>	
<td><? echo $row2["zhaobiao_total"];?></td>
<td><? echo $row2["zhaobiao_end_date"];?></td>
<td><? echo $row2["zhaobiao_baozhenjin"];?></td>
<td><? echo $row2["computer_id"];?></td>
</tr>
	<? }
?>
</table>
</body>
</html>