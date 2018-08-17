<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8" />
<title>学生信息管理系统</title>
</head>
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
      <td>{{$Id}}</td>
      <td>{{$Name}}</td>
      <td>{{$Age}}</td>
      <td>{{$City}}</td>
      <td>{{$Job}}</td>
      <td>{{$Gender}}</td>
    </tr>
  </table>

</div>
</body>
</html>
