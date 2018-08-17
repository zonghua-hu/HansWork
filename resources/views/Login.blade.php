<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8" />
<title>学生信息管理系统</title>
</head>
<script language="javascript">
    function Register()
    {
        window.location.href = "Register";
    }
</script>
<body>
<div style="width: 800px;height: 450px; background-color: lightblue; margin: 0 auto; ">
  <form name="form1" method="post" action="Manager">
    <p style="font-size: 36px;font-family: 华文行楷; text-align: center;padding-top: 135px;">学生信息管理系统</p>
    <p style="font-size: 24px;font-family: 华文行楷;text-align: center;">账号<input style="width: 200px;" type="text"  name = "username" /></p>
    <p style="font-size: 24px;font-family: 华文行楷;text-align: center;">密码<input style="width: 200px;" type="password"  name = "pwd"/></p>
    {{--token验证--}}
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input style="margin-left: 323px; width: 92px; height: 28px; ;" type="submit" name="sumbit1" value="登录"  >
    <input style=" width: 92px;height: 28px;margin: 10px"type="reset" name="reset" value="取消">
  </form>
  <a href="javascript:Register();"style="font-size: 24px;font-family: 华文行楷; padding-left: 680px;">快速注册</a>
</div>
</body>
</html>
