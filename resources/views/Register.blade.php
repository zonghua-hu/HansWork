<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8" />
    <title>学生信息管理系统</title>
</head>
{{--<script>
    function btnRegister() {
        username.Text = "";
        pwd.Text = "";
    }
    function btnLogin() {
        document.form1.action = "";
        document.form1.submit();
    }
</script>--}}
<body>
<div style="width: 800px;height: 450px; background-color: lightblue; margin: 0 auto; ">
    <p style="font-size: 36px;font-family: 华文行楷; text-align: center;padding-top: 80px;">账号注册</p>
    <form action="RegisterSubmit" method="post" >
       <input style="width: 245px;margin-left: 280px;height: 24px;" type="text"  name = "username"value="请输入用户名"/>
        <br> <br>
       <input style="width: 245px;height: 24px; margin-left: 280px;" type="text"  name = "pwd"value="请输入密码"/>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <br> <br>
        <input style="font-size: 24px;font-family: 华文行楷;margin-left: 280px; width: 250px; height: 28px; background-color: #0099FF;border: none; "
               type="submit" name="sumbit1" value="注册">
        <br><br>
        <input style="font-size: 24px;font-family: 华文行楷; margin-left: 280px; width: 250px; height: 28px;background-color: #0099FF;border: none;"
               type="reset" name="Register" value="重置">
    </form>
</div>
</body>
</html>