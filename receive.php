<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
$username=$_POST["username"];
$pwd=$_POST["pwd"];
$danwei=$_POST["danwei"];
require('conn.php');
if($danwei==1)
{
  $str="insert into user_zhaobiao(username,pwd,danwei) values('".$username."','".$pwd."','".$danwei."')";
  mysql_query($str);
}
else
{
	$str="insert into user_toubiao(username,pwd,danwei) values('".$username."','".$pwd."','".$danwei."')";
  mysql_query($str);
	}
?>
  <script language="javascript">
  location.href="login.html";
  </script>

</body>
</html>