
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
$computer_id=$_POST["computer_id"];
$zhaobiao_id=$_POST["zhaobiao_id"];
$toubiao_date=$_POST["toubiao_date"];
$toubiao_money=$_POST["toubiao_money"];

require('conn.php');
  $str="insert into info_toubiao(computer_id,zhaobiao_id,toubiao_date,toubiao_money) values('".$computer_id."','".$zhaobiao_id."','".$toubiao_date."','".$toubiao_money."')";
  mysql_query($str);

?>
  <script language="javascript">
  location.href="toubiao_information.php";
  </script>

</body>
</html>