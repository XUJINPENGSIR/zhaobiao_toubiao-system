<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
require("conn.php"); 
$result=mysql_query("select * from info_zhaobiao",$conn);
?>
<table border="1" width="800" align="center">
<tr><td>序号</td><td>招标ID</td><td>药品名称</td><td>投标公司</td><td>投标时间</td><td>投标金额</td><td>删除</td>
</tr>
<?
$i=1;
while($row=mysql_fetch_assoc($result))
{
	$x=$row["zhaobiao_id"];
      $str1=mysql_query("select * from info_toubiao where zhaobiao_id='$x'",$conn);
	  while($row1=mysql_fetch_assoc($str1)){
    $z=$row1["computer_id"];
	$str2=mysql_query("select * from info_computer where computer_id='$z'");
	$row2=mysql_fetch_assoc($str2);
	?>
<tr>
<td><? echo $i++;?></td>
<td><? echo $row["zhaobiao_id"];?></td>
<td><? echo $row["yaopin_name"];?></td>	
<td><? echo $row2["computer_name"];?></td>
<td><? echo $row1["toubiao_date"];?></td>
<td><? echo $row1["toubiao_money"];?></td>
<td><a href="admin_toubiaoshanchu?toubiao_id=<? echo $row1['toubiao_id'] ?> ">删除</a></td>
</tr>
	<? }
}
?>
</table>
</body>
</html>