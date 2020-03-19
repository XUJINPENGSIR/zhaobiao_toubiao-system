<? session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/daohangtiao.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<style type="text/css">
#div2_2{
	position:relative;
	float: left;
	width:70%;
	height:400px;
	}
#div1{
	background-color:#666;
	height:100%;
	}
#div2_1{
	position:relative;
	}
#div1{
	position:relative;
	top:50px;
	margin-left:auto;
	margin-right:auto;
	width:80%;
	z-index:-1;
	}
.t1{
	font-size:24px;
	color:#F00;
	text-align:right;
		}
.t2{
	}
.t3{
	font-size:30px;
	color:#0F0;
	text-align:left;}
</style>
<body>
<? 
		require('conn.php');
		$username=$_SESSION["username"];
        $str="select computer_id from user_zhaobiao where username='".$username."'";
    $result=mysql_query($str,$conn);
	$row=mysql_fetch_assoc($result);
	
	$_SESSION["computer_id"]=$row['computer_id'];
	$x=$_SESSION["computer_id"];
	
	$str2=mysql_query("select * from info_computer where computer_id='$x'");
	$row2=mysql_fetch_assoc($str2);
	$y=$row2["computer_name"];

?>
<div id="div1_1">
<table width="100%" height="100%">
<tr><td width="91%" height="100%">
<li style="font-size:30px; color:#F00; text-align: center; ">管理员界面</li></td>

<td width="5%"><li style="float:left"><a href="admin.php">首页</a></li></td>

<td width="4%"><li style="float:right" ><a href="login.html">注销</a></li></td>
</tr>
</table>     
</div>

<div id="div1">      
<div id="div2_1"  style="width:30%; height:820px; float:left;">
<div  id="div3_1" style="height:100px;">
<table height="100px"; width="100%" border="0">
              
<tr>
<td width="30%"  height="100px" id="tx" ><img src="images/3.jpg"  width="100%" height="100%" /></td>
                        
<td width="70%" id="yhm"> 
当前用户：<? echo $_SESSION["username"] ?><br />
当前身份： <?  echo "管理员" ?><br />
        
</td>
</tr>
</table>
</div>
            
<div id="div3_2" style="height:700px; margin-top:20px;">
<table height="180px";width="280px">

<tr height="30px">
<td width="99" height="30px"><a href="admin_zhaobiaochaxun.php" target="myiframe">招标查询</a></td></tr>
                    
<tr height="30px">
<td width="99" height="30px"><a href="admin_toubiaochaxun.php" target="myiframe">投标查询</a></td></tr>
                    
<tr height="30px">
<td width="99" height="30px"><a href="admin_yonghuxiugai.php" target="myiframe">用户信息修改</a></td></tr>

<tr height="30px">
<td width="99" height="30px"><a href="admin_computer.php" target="myiframe">公司信息</a></td></tr>
</table>
            </div>
        </div>
        
        <div id="div2_2" >
        <iframe name="myiframe" style="height:100%; width:100%; border:0px; background-color:#FFF;">
        </iframe>
        
        </div>   
 </div>  
</body>
</html>

