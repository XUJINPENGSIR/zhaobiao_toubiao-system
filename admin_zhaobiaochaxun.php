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
<tr><td>序号</td><td>招标ID</td><td>药品名称</td><td>总量</td><td>招标截止日期</td><td>招标保证金</td><td>招标企业ID</td>
<td>修改</td>
</tr>
<?
$i=1;
while($row=mysql_fetch_assoc($result))
{
	;
	?>
<tr>
<td><? echo $i++;?></td>
<td><? echo $row["zhaobiao_id"];?></td>
<td><? echo $row["yaopin_name"];?></td>	
<td><? echo $row["zhaobiao_total"];?></td>
<td><? echo $row["zhaobiao_end_date"];?></td>
<td><? echo $row["zhaobiao_baozhenjin"];?></td>
<td><? echo $row["computer_id"];?></td>
<td><a href="admin_zhaobiaoshanchu?zhaobiao_id=<? echo $row['zhaobiao_id'] ?> ">删除</a></td>
</tr>
	<? }
?>
</table>
</body>
</html>