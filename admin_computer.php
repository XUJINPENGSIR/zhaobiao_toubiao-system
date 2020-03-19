<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
require("conn.php"); 
$result=mysql_query("select * from info_computer",$conn);
?>
<table border="1" width="800" align="center">
<tr><td>序号</td><td>公司ID</td><td>公司名称</td><td>公司CEO</td><td>公司电话</td><td>公司邮箱</td><td>删除</td>
</tr>
<?
$i=1;
while($row=mysql_fetch_assoc($result))
{
	
	?>
<tr>
<td><? echo $i++;?></td>
<td><? echo $row["computer_id"];?></td>
<td><? echo $row["computer_name"];?></td>	
<td><? echo $row["computer_ceo"];?></td>
<td><? echo $row["computer_tel"];?></td>
<td><? echo $row["computer_email"];?></td>
<td><a href="computer_shanchu.php?computer_id=<? echo $row["computer_id"]
 ?>">删除</a></td>
</tr>
	<? }

?>
</table>
</body>
</html>