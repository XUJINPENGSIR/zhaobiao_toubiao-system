<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
$yaopin_name=$_POST["yaopin_name"];
$zhaobiao_total=$_POST["zhaobiao_total"];
$zhaobiao_end_date=$_POST["zhaobiao_end_date"];
$zhaobiao_baozhenjin=$_POST["zhaobiao_baozhenjin"];
$computer_id=$_SESSION["computer_id"];
require('conn.php');

  $str="insert into info_zhaobiao(yaopin_name,zhaobiao_total,zhaobiao_end_date,zhaobiao_baozhenjin,computer_id) values('".$yaopin_name."','".$zhaobiao_total."','".$zhaobiao_end_date."','".$zhaobiao_baozhenjin."','".$computer_id."')";
  mysql_query($str);

?>
  <script language="javascript">
  location.href="zhaobiao_information.php";
  </script>

</body>
</html>