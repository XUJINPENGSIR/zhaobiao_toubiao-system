<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
$x=$_POST["username"];
$y=$_POST["pwd"];
$danwei=$_POST["danwei"];
require('conn.php');
if($danwei==1)
{
  $str1="select * from user_zhaobiao where username='".$x."' and pwd='".$y."'";
  $result1=mysql_query($str1,$conn);
  $row1=mysql_fetch_assoc($result1);
  if($row1!==false)
  {
	  ?>
  <script language="javascript">
  alert("登入成功!");
  location.href="zhaobiao1.php";
  </script>
	  <? $_SESSION["username"]=$x;
	  $_SESSION["danwei"]=$danwei;}
  else
	  {?>
	  <script language="javascript">
	  alert("用户名或密码错误!");
	  location.href="login.html";
	  </script>
	  <? } 
  }
 elseif($danwei==2)
 {
	$str2="select * from user_toubiao where username='".$x."' and pwd='".$y."'";
  $result2=mysql_query($str2,$conn);
  $row2=mysql_fetch_assoc($result2);
  if($row2!==false)
  {
	  ?>
  <script language="javascript">
  alert("登入成功!");
  location.href="toubiao1.php";
  </script>
	  <? $_SESSION["username"]=$x;
	  $_SESSION["danwei"]=$danwei;
	  }
  else
	  {?>
	  <script language="javascript">
	  alert("用户名或密码错误!");
	  location.href="login.html";
	  </script>
	  <? }  
}

elseif($danwei==3)
{
	$str3="select * from admin where username='".$x."' and pwd='".$y."'";
  $result3=mysql_query($str3,$conn);
  $row3=mysql_fetch_assoc($result3);
  if($row3!==false)
  {
	  ?>
  <script language="javascript">
  alert("登入成功!");
  location.href="admin.php";
  </script>
	  <? $_SESSION["username"]=$x;
	  $_SESSION["danwei"]=$danwei;}
  else
	  {?>
	  <script language="javascript">
	  alert("用户名错误!");
	  location.href="login.html";
	  </script>
	  <? } 
}
else
{?>
      <script language="javascript">
	  alert("请选择单位！！!");
	  location.href="login.html";
	  </script>    <?
}
	?>

</body>
</html>