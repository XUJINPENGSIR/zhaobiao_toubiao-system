<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
require('conn.php'); 
$toubiao_id=$_GET['toubiao_id'];
$sql="delete from info_toubiao where toubiao_id=$toubiao_id";
if(mysql_query($sql)&& mysql_affected_rows()==1)
echo "<script>location.href='admin_toubiaochaxun.php'</script>";
else
echo "<script>location.href='admin_toubiaochaxun.php'</script>";
?>
</body>
</html>