<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
$computer_id=$_SESSION["computer_id"];
$computer_name=$_POST["computer_name"];
$computer_email=$_POST["computer_email"];
$computer_ceo=$_POST["computer_ceo"];
$computer_tel=$_POST["computer_tel"];

require('conn.php');
  $str="insert into info_computer(computer_id,computer_name,computer_email,computer_ceo,computer_tel) values('".$computer_id."','".$computer_name."','".$computer_email."','".$computer_ceo."','".$computer_tel."')";
  mysql_query($str);

?>
  <script language="javascript">
  location.href="zhaobiao1.php";
  </script>

</body>
</html>