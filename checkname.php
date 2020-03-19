<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
$a=$_GET["x"];
$b=$_GET["y"];
require('conn.php');
if($b==1)
{
	$str1="select * from user_zhaobiao where username='".$a."'";
	$result1=mysql_query($str1,$conn);
	$row1=mysql_fetch_assoc($result1);
	if($row1==true)
	{
		 $_SESSION["tip"]="用户名重复";?>
        <script language="javascript">
		location.href="regedit.php";
        </script><?
	    
	 }
	else
	{
	    	
		$_SESSION["tip"]="用户名符合要求";?>
         <script language="javascript">
		 history.go(-1);
         </script><?
	}
	
}
elseif($b==2)
{
     $str2="select * from user_toubiao where username='".$a."'";
	$result2=mysql_query($str2,$conn);
	$row2=mysql_fetch_assoc($result2);
	if($row2!=false)
	{
	    $_SESSION["tip"]="用户名重复";?>
        <script language="javascript">
		location.href="regedit.php";
        </script>
	<? }
	else
	{
	     $_SESSION["tip"]="用户名符合要求";?>
         <script language="javascript">
		 history.go(-1);
         </script><?	
	}
}
else
{
    $_SESSION["tip"]="无获取值";?>
    <script language="javascript">
		 alert("请选择单位！！！");
      location.href="regedit.php";
         </script><?	
}
 ?>
</body>
</html>