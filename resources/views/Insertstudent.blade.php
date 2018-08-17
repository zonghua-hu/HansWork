<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8" />
    <title>学生信息管理系统</title>
</head>
<script language="JavaScript">

</script>
<body>
<div style="width: 800px;height: 450px; background-color: lightblue; margin: 0 auto; ">
    <p style="font-size: 36px;font-family: 华文行楷; text-align: center;padding-top: 90px;">学生信息管理系统</p>
    <table style="text-align: center;margin-left: auto;margin-right: auto;">
        <tr style="text-align: center; width: 130px;height: 38px;">
            <td style="width: 100px;">ID</td>
            <td style="width: 100px;">Name</td>
            <td style="width: 100px;">Age</td>
            <td style="width: 100px;">City</td>
            <td style="width: 100px;">Job</td>
            <td style="width: 100px;">Gender</td>
        </tr>
        <tr>
            <td style="height: 35px;">{{$Id}}</td>
            <td style="height: 35px;">{{$Name}}</td>
            <td style="height: 35px;">{{$Age}}</td>
            <td style="height: 35px;">{{$City}}</td>
            <td style="height: 35px;">{{$Job}}</td>
            <td style="height: 35px;">{{$Gender}}</td>
        </tr>
    </table>
<form name="form1" method="post" action="InsertStudentInfoByHand">
    <input style="width: 90px;height: 20px;margin-left: 100px;" type="text" name="textfield" id="textfield"  value="自动"/>
    <input style="width: 90px;height: 20px;margin-left: 6px;" type="text" name="Name" id="textfield" />
    <input style="width: 90px;height: 20px;margin-left: 6px;" type="text" name="Age" id="textfield" />
    <select style="width: 100px;height: 25px;margin-left:6px;" name="City" id="select">
        <option>北京</option>
        <option>上海</option>
        <option>深圳</option>
        <option>西安</option>
        <option>重庆</option>
        <option>杭州</option>
    </select>
    <select style="width: 100px;height: 25px;margin-left:6px;" name="Job" id="select">
        <option>教师</option>
        <option>律师</option>
        <option>牧师</option>
        <option>技工</option>
        <option>学生</option>
        <option>白领</option>
    </select>
    <select  style="width: 100px;height: 25px;margin-left:6px;" name="Gender" id="select" >
        <option>男</option>
        <option>女</option>
    </select>
    <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <br>
    <input style="width: 130px;margin-left: 250px;height: 30px;" type="submit" name="button" id="button" value="插入"   />&nbsp;&nbsp;
    <input style="width: 130px;height: 30px;" type="reset" name="button2" id="button" value="取消" />

</form>
</div>
</body>
</html>
