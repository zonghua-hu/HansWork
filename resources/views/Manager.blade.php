<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8" />
    <title>学生信息管理系统</title>
</head>
<script language="javascript">
function info()
{
window.location.href = "info";
}
function Insertstudent()
{
    window.location.href = "Insertstudent";
}
function Alterinfo()
{
    window.location.href = "Alterinfo";
}


</script>
<body>
<div style="width: 800px;height: 450px; background-color: paleturquoise; margin: 0 auto; ">
    <p style="font-size: 36px;font-family: 华文行楷; text-align: center;padding-top: 100px;line-height: 80px;">学生信息管理系统</p>
    <ul >
        <a style="font-size: 28px;font-family: 华文行楷; text-align: center; margin-left: 100px;"href="javascript:info();">查看学生信息</a>
        &nbsp;&nbsp;&nbsp;
        <a style="font-size: 28px;font-family: 华文行楷; text-align: center;" href="javascript:Insertstudent();">插入学生信息</a>
        &nbsp;&nbsp;&nbsp;
        <a  style="font-size: 28px;font-family: 华文行楷; text-align: center;"href="javascript:Alterinfo();">修改学生信息</a>
    </ul>
</div>
</body>
</html>
