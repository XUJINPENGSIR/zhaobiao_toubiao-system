<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
html,body {
    background: linear-gradient(to left bottom,rgb(102,204,255),rgb(255,255,255));//渐变色
    width: 100%;
    height: 100%;
}

	input {
    background-color:#eee;
    outline:none; /*不出现蓝色边框*/
    border-radius: 20px;
    border: 1px solid #3FF;
    transition: 300ms;
    font-size: 14px;
}

#div h1 {
	font-family: 华文行楷;
	font-size:40px;
	color:#F6F;
}
</style>
</head>

<body>
<div id="div" style="height:70px"><h1 align="center">药品在线招投标系统</h1></div>
<form id="form1" name="form1" method="post" action="receive.php">
<table align="center" width="47%" height="70">
<div><h3 align="center">用户注册</h3></div>
<tr height="30"><td width="39%" align="right">单位:</td><td width="37%"><input type="radio" name="danwei" value="1" />招标单位<input type="radio" name="danwei" value="2" />投标单位</td></tr>
<tr height="30"><td align="right">用户名:</td><td><input type="text" name="username" required="required" onblur="b();"/></td><td><div><? echo $_SESSION["tip"]; ?></div></td></tr>
<tr height="30"><td align="right">密码:</td><td><input type="password" name="pwd" required="required" /></td></tr>
<tr height="30"><td align="right">确认密码:</td><td><input type="password" name="repwd" required="required" onblur="a();"/></td></tr>
<tr><td></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="提交" /><input type="reset" name="reset" value="重置" /></td></tr>

</table>
</form>
<script language="javascript">
function a()
{
	if(form1.pwd.value!=form1.repwd.value)
	{
		alert("两次密码输入不同!");
		form1.pwd.value="";
		form1.repwd.value="";
		form1.pwd.focus();
	}
	
}
function b()
	{
		var str1=form1.username.value;
		var str2=null;
        var obj=document.getElementsByName("danwei");
        for(var i=0;i<obj.length;i++) { 
                if(obj[i].checked) {
                    str2=obj[i].value;                 }
            }
		location.href="checkname.php?x="+str1+"&y="+str2;	
	}
</script>

</body>
</html>